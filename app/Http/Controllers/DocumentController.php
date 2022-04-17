<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Document;
use App\Models\User;
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
            'author' => 'required',
            'date_document' => 'required',
            'institution' => 'required',
            'content' => 'required',
            'table_index' => 'required',
            'bibliography' => 'required'
        ]);

        $data_form_document = $request->all();
        $check_data = $this->store_database($data_form_document);
        return redirect()->route('index-document')->with('success', 'Documento creado correctamente');
    }

    public function store_database(array $data){
        return Document::create([
            'title' => $data['title'],
            'author' => $data['author'],
            'date_document' => $data['date_document'],
            'institution' => $data['institution'],
            'content' => $data['content'],
            'table_index' => $data['table_index'],
            'bibliography' => $data['bibliography'],
            'user_id' => auth()->user()->id
        ]);
    }

    public function edit($id){
        return view('modules.documents.edit')->with(['document_edit' => Document::findOrFail($id)]);
    }

    public function update(Request $request, $id){
        $document_data = Document::findOrFail($id);
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'date_document' => 'required',
            'institution' => 'required',
            'content' => 'required',
            'table_index' => 'required',
            'bibliography' => 'required',
        ]);

        $document_data->title = $request['title'];
        $document_data->author = $request['author'];
        $document_data->date_document = $request['date_document'];
        $document_data->institution = $request['institution'];
        $document_data->content = $request['content'];
        $document_data->table_index = $request['table_index'];
        $document_data->bibliography = $request['bibliography'];
        $document_data->user_id = auth()->user()->id;
        $document_data->update();

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
        $document_id_user = Document::findOrFail($id)->toArray();
        $dompdf = PDF::loadView('modules.documents.pdf', $document_id_user);
        return $dompdf->stream('example.pdf');
    }
}
