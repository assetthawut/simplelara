<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class StudUpdateController extends Controller
{
    //

    public function index(){
    	$users = DB::select("select * from test");
    	return view('stud_edit_view',['users'=>$users]);
    }
    public function show($id){
    	$users = DB::select("select * from test where testid = ?",[$id]);
    	return view('stud_update',['users'=>$users]);
    }
    public function edit(Request $request,$id){
    	$name = $request->input('stud_name');
    	DB::update("update test set testName = ? where testId = ?",[$name,$id]);
    	echo "Record updated successfully.<br/>";
      	echo '<a href = "/edit-records">Click Here</a> to go back.';
    }
}
