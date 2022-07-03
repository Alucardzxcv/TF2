<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
class CategoriaController extends Controller
{
    public function index(){
        $categorias = Categoria::all();
        return view('categoria.index')->with('categorias',$categorias) ;

    }
    public function create(){

        return view('categoria.create');

    }

    public function traerData()
    {
        $librosData=Categoria::All();
        return view('categoria.libro1')->with('librosData',$librosData);
    }

    public function insert(Request $request){

$categoria= new Categoria();
$categoria->libro=$request->libro;
$categoria->descripcion=$request->descripcion;
$categoria->estado=1;
$categoria->save();
return redirect('categorias');

    }
    public function edit($id){

       $categoria= Categoria::find($id);
       return view('categoria.edit')->with('categoria',$categoria);

    }

    public function update(Request  $request, $id){

        $categoria= Categoria::find($id);
        $categoria->libro = $request->libro;
        $categoria->descripcion = $request->descripcion;
        $categoria->save();

        return redirect('/categorias');
    }

    public function delete(Request  $request, $id){

        $categoria= Categoria::find($id);
        $categoria->delete();

        return redirect('/categorias');
    }

    public function libro(){
       $categoria=Categoria::all();
        return view('categoria.libro1');


    }
}
