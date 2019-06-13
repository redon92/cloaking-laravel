<?php

namespace App\Http\Controllers;

use App\Cloaking;
use App\subscribers;
use App\Visitors;
use DateTime;
use Illuminate\Http\Request;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->isMethod('get')&& $request->input('source')) {
            include('functions/function.php');
            $referral = $request->input('source');
            $ip = getUserIP();
            $country = ip_info($ip, "Country");



            $cloak = Cloaking::find(1);
            $country1= $cloak['country'];
            $switch= $cloak['switch'];
            $tags= $cloak['tags'];
            $url= $cloak['url'];
            $tag1 = explode(',',$tags);

            foreach ($tag1 as $tag){
                if($referral==$tag && $country==$country1 && $switch==1){
                    return redirect($url);
                }
            }






            $now = new DateTime();
            $visitor = new Visitors;
            $visitor->registered_at = $now;
            $visitor->ip = $ip;
            $visitor->country = $country;
            $visitor->referral = $referral;
            $visitor->save();
//            return $country;
            return view('welcome')->with('referral',$referral);






        }





        return view('welcome');
    }

    public function insert(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'surname'=>'required',
            'email'=>'required',
            'telNo'=>'required'

        ]);

        include('functions/function.php');
        $data = $request->all();
        $ip = getUserIP();
        $country = ip_info($ip, "Address");


        $subsrcibers = new subscribers;
        $subsrcibers->name = $data['name'];
        $subsrcibers->surname = $data['surname'];
        $subsrcibers->email = $data['email'];
        $subsrcibers->phone = $data['telNo'];
        $subsrcibers->ip = $ip;
        $subsrcibers->country = $country;

        if(isset($data['referral'])){
            $subsrcibers->referral = $data['referral'];
        }else{
            $subsrcibers->referral = "other";
        }
        $subsrcibers->save();

        return redirect('/');



    }




}
