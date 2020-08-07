<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App;


class PagesController extends Controller{
   
    public function index(){

        return view('welcome');
    }

    public function create(){
        $id = 1;
        return view('registros.show',compact('id'));
    }
    public function show_lista(){
        
    }

    public function store(Request $request){
        //
    }

    public function show($id){
        
    }

    public function edit($id = null){
        $info =null;
        return view("registros.edit",compact("info"));
    }

    public function update(Request $request, $id){
        $info = $id;
        return redirect()->back();
    }

    public function destroy($id){
        $id = 1;
        return redirect()->back();
    }
}
