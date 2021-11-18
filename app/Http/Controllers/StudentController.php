<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\Http\Requests\StudentAddRequest;

// use model
use App\Models\Students;
use App\Models\cources;

class StudentController extends Controller
{
    public function index(){

      return cources::with('students')->get()->all();

       //return $studentlist = students::with('cources')->get()->all();
          
       //echo '<pre>'; 
       //print_r($studentlist); die;

         
        $studentlist = DB::table('students')->paginate(3);

      return view('student.list',['students' =>$studentlist]);
    
    }
    public function create(){
        return view('student.add');
      
      }
      public function save(StudentAddRequest $request){
        $data = $request->all();
        $insertData = array(
          'name' => $data['name'],
          'email' => $data['email'],
          'password' => $data['password'],
          'city' => $data['city']
        );
        $result = DB::table('students')->insert($insertData);
        if($result){
          return redirect('/students');
        }
        //return view('student.list');
      
           
        
      }
      public function edit(Request $request,$id){
         $result = DB::table('students')->find($id);
          //echo  "<pre>"; 
          //print_r($result); die;
        return view('student.update',['student' => $result]);
      
      }
      public function update(Request $request){
        $data = $request->all();
        $result = DB::table('students')->find($data['id']);
        if(!$result){
          return redirect('/students');
        }

        $updateData = array(
          'name' => $data['name'],
          'email' => $data['email'],
          'password' => $data['password'],
          'city' => $data['city']
        );
        $result = DB::table('students')->where(['id' => $data['id']])->update($updateData);
        if($result){
          return redirect('/students');
        }
        
        return $data;

        //return view('student.list');
      
      }
      public function delete(Request $request){
        $data = $request->all();
        $result =DB::table('students')->find($data['id']);
        if(!$result){
          return redirect('/students');
        }
        $result =DB::table('students')->where(['id' =>$data['id']])->delete();
        if($result){
          return redirect('/students');
        }
      }
}

