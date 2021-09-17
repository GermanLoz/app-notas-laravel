<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class NotaController extends Controller
{
    public function index(){
        $notas = DB::table("frutas")
            ->orderBy('id', 'desc')
            ->get();
        return view('nota.index', [
                    'notas' => $notas,
                ]);
    }
    public function search(Request $request){
        $nombre = $request->input('nombre');
        $nota = DB::table('frutas')->where('nombre', 'LIKE', "%$nombre%")->first();
        if($nota){ 
            return view('nota.search',[
                'nota' => $nota
            ]);
         } else {
            return view('nota.search');
         }
      }
    public function detalle($id){
        $nota = DB::table('frutas')->where('id', '=', $id)->first();
        return view('nota.detalle',[
            'fruta' => $nota
        ]);
    }
    public function addFruta(){
        return view('nota.add');
    }
    public function delete($id){
        $fruta = DB::table('frutas')->where('id', '=', $id)->delete();   
        return redirect()->action('HomeController@index');
    }
    public function edit($id){
        $editar = $id;
        $nota = DB::table('frutas')->where('id', '=', $editar)->first();
        return view('nota.editar',[
            'editar' => $editar,
            'nota' => $nota
        ]);
    }
    public function editar(Request $request, $id){
        $editar = DB::table('frutas')->where('id', '=', $request->id )->update(array(
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('des'),
            'precio' => $request->input('precio'),
            'fecha' => date('y-m-d'),
        ));
        return redirect()->action('HomeController@index');
    }
    public function save(Request $request){
        $user_id = auth()->user()->id;
        $fruta = DB::table('frutas')->insert(array(
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('des'),
            'precio' => $request->input('precio'),
            'user_id' => $user_id,
            'fecha' => date('y-m-d'),
        ));
        return redirect()->action('HomeController@index');
    }
}
