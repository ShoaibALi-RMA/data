<?php

namespace App\Http\Controllers;
use App\User;
use Symfony\Component\Console\Input;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        
        $user=User::get();
     
       return view('user.index',['data'=>$user]);
     }
     public function delete($id){
     
        User::where('id','=',$id)->delete();
        
        return redirect('user/data');
      }
      public function update($id){
          $data=User::where('id','=',$id)->first();
          return json_encode($data);
        }
        public function updated(){
            $data=Input::all();
            User::where('id', '=', $data['id_time'])->update(array(
            'first_name'=>$data['first_name_edit'],'last_name'=>$data['last_name_edit'],
            'email'=>$data['email_edit'],));
            return redirect('user/data');
           

          }
          public function create(){
            $data=Input::all();
            User::create($data);
            return redirect('user/data');
          }
}
