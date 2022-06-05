<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Document;
use App\Models\User;
use App\Models\Bibliography;
use Illuminate\Support\Facades\Auth;
use PDF;
use Dompdf\Dompdf;
use Dompdf\Options;

class DocumentController extends Controller
{
    public function index(){
        return view('modules.documents.index')->with([ 'documents' => Auth::User()->document]);
    }

    public function create(){
        return view('modules.documents.create');
    }

    public function register_document(Request $request){
        $request->validate([
            'title' => 'required',
            'researcher' => 'required',
            'date_document' => 'required',
            'institution' => 'required',
            'content' => 'required',
            'table_index' => 'required',
            'author' => 'required|max:120',
            'title_author' => 'required|max:100',
            'year' => 'required|max:4',
            'city' => 'required',
            'editorial' => 'required'
        ]);

        $data_form_document = $request->all();
        $check_data = $this->store_database($data_form_document);
        return redirect()->route('index-document')->with('success', 'Documento creado correctamente');
    }

    public function store_database(array $data){
        Document::create([
            'title' => $data['title'],
            'researcher' => $data['researcher'],
            'date_document' => $data['date_document'],
            'institution' => $data['institution'],
            'content' => $data['content'],
            'table_index' => $data['table_index'],
            'user_id' => auth()->user()->id
        ]);
        if($data['author']){
            for($i=0;$i<count($data['author']);$i++){
            $document_id = Document::where('title', '=', $data['title'])->get()->toArray();
                Bibliography::create([
                    'author' => $data['author'][$i],
                    'title' => $data['title_author'][$i],
                    'year' => $data['year'][$i],
                    'city' => $data['city'][$i],
                    'editorial' => $data['editorial'][$i],
                    'document_id' => $document_id[0]['id']
                ]);
            }
        }
    }

    public function edit($id){
        return view('modules.documents.edit')->with(['document_edit' => Document::findOrFail($id)]);
    }

    public function update(Request $request, $id){
        $document_data = Document::findOrFail($id);
        // dd($request->all());
        // dd($document_data->bibliographies[0]['author']);
        // dd($document_id = Document::where('title', '=', $request['title'])->get()->toArray());
        $request->validate([
            'title' => 'required',
            'researcher' => 'required',
            'date_document' => 'required',
            'institution' => 'required',
            'content' => 'required',
            'table_index' => 'required',
            'author' => 'required|max:120',
            'title_author' => 'required|max:100',
            'year' => 'required|max:4',
            'city' => 'required',
            'editorial' => 'required'
        ]);

        $document_data->title = $request['title'];
        $document_data->researcher = $request['researcher'];
        $document_data->date_document = $request['date_document'];
        $document_data->institution = $request['institution'];
        $document_data->content = $request['content'];
        $document_data->table_index = $request['table_index'];
        $document_data->user_id = auth()->user()->id;
        $document_data->update();

        for($i=0;$i<count($request['author']);$i++){
            $bi = $document_data->bibliographies[$i];
            $bi->author = $request['author'][$i];
            $bi->title = $request['title_author'][$i];;
            $bi->year = $request['year'][$i];
            $bi->city = $request['city'][$i];
            $bi->editorial = $request['city'][$i];
            $bi->update();
        }

        return redirect()->route('index-document')->with('success', 'Documento actualizado correctamente');
    }

    public function destroy(Request $request, $id){
        $delete_document = Document::findOrFail($id);
        $delete_document->delete();
        return redirect()->route('index-document')->with('success', 'Documento eliminado satisfactoriamente');
    }

    public function generate_pdf($id)
    {
        header('Content-type: application/pdf');
        header('Content-Disposition: inline; filename="example.pdf"');
        header('Content-Transfer-Encoding: binary');
        $dompdf = new Dompdf();
        $dompdf->setPaper('A4', 'landscape');
        $document_data_id = Document::findOrFail($id);
        $document_bibliographies = $document_data_id->bibliographies;
        $join_document_bibliographies = array_merge($document_data_id->toArray(), $document_bibliographies->toArray());
        $dompdf = PDF::loadView('modules.documents.pdf', $join_document_bibliographies);
        return $dompdf->stream('example.pdf');
    }
}
