<?php

namespace App\Http\Controllers;

use App\Cloaking;
use App\subscribers;
use App\User;
use App\Visitors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function login(Request $request){

        if($request->isMethod('post')){

            $data = $request->input();

            if(Auth::attempt(['name'=>$data['name'],'password'=>$data['password'],'admin'=>'1'])){
//                echo "success"; die;
//                Session::put('adminSession',$data['name']);
                return redirect('/admin/dashboard');
            }else {
//                echo "failed"; die;
                return redirect('/admin')->with('flash_message_error','Invalid Username or Password');
            }
        }
        return view('admin.admin_login');
    }

    public function dashboard(){
//        if(Session::has('adminSession')){
//
//        }else{
//            return redirect('/admin')->with('flash_message_error','You must login first!');
//        }
        $visitors = Visitors::get();
        $subscribers = subscribers::get();
        $cloak = Cloaking::select('switch','country')->get();
        $visitors = json_decode(json_encode($visitors));
        $subscribers = json_decode(json_encode($subscribers));

//        return $cloak;
        return view('admin.dashboard')->with(compact(['visitors','subscribers','cloak']));
    }

    public function settings(){

        $cloak = Cloaking::get();
        $cloak = json_decode(json_encode($cloak));

        return view('admin.set')->with('cloak',$cloak);
    }


    public function chkPassword(Request $request){
        $data = $request->all();
        $current_password = $data['current_pwd'];
        $check_password =User::where(['admin'=>'1'])->first();

        if(Hash::check($current_password,$check_password->password)){
            echo "true"; die;
        }else{
            echo "false"; die;
        }
    }



    public function updatePassword(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>"; print_r($data);die;

            $check_password = User::where(['name'=>Auth::User()->name])->first();
            $current_password = $data['current_pwd'];

                if(Hash::check($current_password,$check_password->password)){
                    $password = bcrypt($data['new_pwd']);
                    User::where('id','1')->update(['password'=>$password]);
                    return redirect('/admin/settings')->with('flash_message_success','Password updated Successfully');
                }else{
                    return redirect('/admin/settings')->with('flash_message_error','Incorrect Current Password');
                }

        }
    }


    public function logout(){
        Session::flush();
        return redirect('/admin')->with('flash_message_success','Logged out Successfully');
    }


}
