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
        
        
        
        // search by Name (Right Top Corner search)
        if($tempIncomingRequest['search']['value'] != ''){
            $temp_search = $tempIncomingRequest['search']['value'];
            $XtraSql = "name like '%".$temp_search."%'";
    
           
        }
        else{
            $XtraSql = 'id >= 0';
        }
        
        
        // search by ID
        
        if($tempIncomingRequest['columns'][0]['search']['value'] != '' ){
            $searchById = "id like '%".$tempIncomingRequest['columns'][0]['search']['value']."%'";
        }
        else{
            $searchById = 'id >= 0';
        }
    
        
        
        // search by Address
    
        if($tempIncomingRequest['columns'][2]['search']['value'] != '' ){
            $searchByAddress = "address like '%".$tempIncomingRequest['columns'][2]['search']['value']."%'";
        }
        else{
            $searchByAddress = 'id >= 0';
        }
    
        
        
        
        // search by Address
    
        if($tempIncomingRequest['columns'][3]['search']['value'] != '' ){
            $searchByphonenumber = "phonenumber like '%".$tempIncomingRequest['columns'][3]['search']['value']."%'";
        }
        else{
            $searchByphonenumber = 'id >= 0';
        }
        
        
        
        // getting the total Count
        $tempResult_Count =  User::whereRaw($XtraSql)
                                ->whereRaw($searchById)
                                ->whereRaw($searchByAddress)
                                ->whereRaw($searchByphonenumber)
                                ->get(['id'])->toArray();
        
        
        // getting the origin Data
        $tempResult =  User::skip($tempIncomingRequest['start'])->take($tempIncomingRequest['length'])
                                                                ->whereRaw($XtraSql)
                                                                ->whereRaw($searchById)
                                                                ->whereRaw($searchByAddress)
                                                                ->whereRaw($searchByphonenumber)
                                                                ->get()->toArray();
        
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
