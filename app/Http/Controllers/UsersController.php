<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index(){
        echo "index Function";
    }
    public function fetchUsers(){
    
//        $tempResult =  User::limit(20)->get()->toArray();
        $tempResult='';
        return view ('user.view')->with(compact('tempResult'));
    }
    
    public function fetchUsersForServerSite(Request $request){
        $data = array();
        $tempIncomingRequest = $request->all();
        
        /*
         * draw = page Number
         * start = Start Index
         * length = data per page
         * search['value'] = search in Top Right Corner
         * recordsTotal
         * recordsFiltered
         * */
        
//        dd($tempIncomingRequest['search']['value']);
        $tempResult_Count =  User::get(['id'])->toArray();
        
        if($tempIncomingRequest['search']['value'] != ''){
            $temp_search = $tempIncomingRequest['search']['value'];
            $XtraSql = "'name','like','%'.'".$temp_search."'.'%'";
    
            $tempResult =  User::skip($tempIncomingRequest['start'])->take($tempIncomingRequest['length'])->where('name','like','%'.$tempIncomingRequest['search']['value'].'%')->get()->toArray();
        }
        else{
            $tempResult =  User::skip($tempIncomingRequest['start'])->take($tempIncomingRequest['length'])->get()->toArray();
        }
        
        
        
        for($x=0;$x<sizeof($tempResult);$x++){
            $data[$x] = [$tempResult[$x]['id'],$tempResult[$x]['name'],$tempResult[$x]['address'],$tempResult[$x]['phonenumber'],$tempResult[$x]['created_at']];
        }
        
        $tempArray = array(
            "draw" => $tempIncomingRequest['draw'],
            "recordsTotal"=> sizeof($tempResult_Count),
            "recordsFiltered" => sizeof($tempResult_Count),
            "data" => $data
        );
        
        
        
        return $tempArray;
    }
}
