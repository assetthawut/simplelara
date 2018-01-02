<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class StudDeleteController extends Controller
{
    //
    public function index(){
    	$users = DB::select("select * from test");
    	return view("stud_delete_view",['users'=>$users]);
    }

    public function destroy($id){
    	DB::delete('delete from test where testId = ? ',[$id]);
    	echo "Record deleted successfully.<br/>";
      	echo '<a href="/delete-records">Click Here</a> to go back.';
    }
}
