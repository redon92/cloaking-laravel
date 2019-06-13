<?php

namespace App\Http\Controllers;

use App\Cloaking;
use Illuminate\Http\Request;

class CloakController extends Controller
{
        public function updateCloak(Request $request){

            $this->validate($request,[
                'tags'=>'required',
                'url'=>'required'
            ]);


            $data = $request->all();
            Cloaking::where('id','1')->update([
                'switch' => $data['switch'],
                'country' => $data['country'],
                'url' => $data['url'],
                'tags' => $data['tags']

            ]);

            return redirect('/admin/settings')->with('flash_message_success','Password updated Successfully');
        }



}
