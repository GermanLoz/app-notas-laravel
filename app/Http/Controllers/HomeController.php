<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->user()->id;
        $notas = DB::table("frutas")
        ->orderBy('id', 'desc')
        ->Where('user_id','=', $id)
        ->get();
    return view('home', [
                'notas' => $notas,
            ]);
    }
    public function logout()
    {
        Auth::logout(); 
        return redirect()->route('login');
    }
}
