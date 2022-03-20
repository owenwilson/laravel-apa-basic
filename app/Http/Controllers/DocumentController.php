<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Document;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DocumentController extends Controller
{
    public function index(){
        return view('modules.documents.index')->with([ 'documents' => Document::all()]);
    }

    public function create(){
        return view('modules.documents.create');
    }

    public function register_document(Request $request){
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'footer' => 'required'
        ]);

        $data_form_document = $request->all();
        $check_data = $this->store_database($data_form_document);
        return redirect()->intended('index-document')->with('success', 'Documento creado correctamente');
    }

    public function store_database(array $data){
        // dd(auth()->user()->id);
        return Document::create([
            'title' => $data['title'],
            'content' => $data['content'],
            'footer' => $data['footer'],
            'user_id' => auth()->user()->id
        ]);
    }
}
