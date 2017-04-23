<?php

namespace App\Http\Controllers;

use App\Http\Requests; 
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;
use app\http\Controllers\Controllers;
use App\Note;
use App\Category;



class NotesController extends Controller
{
    
 public function index(Request $request)
     {
    	$notes= Note::paginate(5);
      	return view('notes.index', compact('notes'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        
        $opciones = Category::pluck('name','id');
        return view('notes.create', compact('opciones'));
    }

    public function store(Request $request)
    {	
       $nota = new Note;
       $nota->note=$request->note;
       $nota->category_id=$request->categoryId;
       $nota->save();
        return redirect('web/notes');
	}

	public function show($note)
    {   
       $note = Note::findOrFail($note);
        return view('notes.details',compact('note'));
    }

    public function edit($id)
    {
      $id =Note::find($id);
      $listado = Category::pluck('name','id')->toArray();
      return view('notes.edit', compact('id','listado',$id));
    }
    
    public function update(Request $request,$id)
    {
      $id =Note::find($id);
      $id->note = $request->note;
      $id->category_id=$request->categoryId;
      $id->save();
      return redirect('web/notes');
  
    }

    public function destroy($id)
    { 
      $id = Note::find($id);
      $id->delete();
      return redirect('web/notes');
    }
}  