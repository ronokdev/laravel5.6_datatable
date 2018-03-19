<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Excel;
class UsersController extends Controller
{
    public function index(){
        echo "index Function";
    }
    
    public function dashboard(){
        return view('dashboard.dboard');
    }
    
    public function fetchUsers(){
    
//        $tempResult =  User::limit(20)->get()->toArray();
        $tempResult='';
        return view ('user.view')->with(compact('tempResult'));
    }
    
    public function fetchUsersForServerSite(Request $request){
        $data = array();
        $tempIncomingRequest = $request->all();
//        dd($tempIncomingRequest);
        /*
         * draw = page Number
         * start = Start Index
         * length = `data per page
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
    
        
        
        
        // search by Phone Number
    
        if($tempIncomingRequest['columns'][3]['search']['value'] != '' ){
            $searchByphonenumber = "phonenumber like '%".$tempIncomingRequest['columns'][3]['search']['value']."%'";
        }
        else{
            $searchByphonenumber = 'id >= 0';
        }
    
        // search by Date
    
        if($tempIncomingRequest['columns'][4]['search']['value'] != '' ){
            $searchByDate = "created_at like '%".$tempIncomingRequest['columns'][4]['search']['value']."%'";
        }
        else{
            $searchByDate = 'id >= 0';
        }
        
        
        // search by Date Range
        if($tempIncomingRequest['date_start'] != '' ){
            $searchByDate_1 = " date(created_at) >= '".$tempIncomingRequest['date_start']."'";
        }
        else{
            $searchByDate_1 = 'id >= 0';
        }
    
        if($tempIncomingRequest['date_end'] != '' ){
            $searchByDate_2 = "date(created_at) <= '".$tempIncomingRequest['date_end']."'";
        }
        else{
            $searchByDate_2 = 'id >= 0';
        }
        
        
        
        
        
        // Order By Create Date
        if($tempIncomingRequest['order'][0]['column'] == 4 ){
            $orderByCreatedDate = "created_at ".$tempIncomingRequest['order'][0]['dir'];
        }
        else{
            $orderByCreatedDate = 'created_at DESC';
        }
        
        
        
        
        
        // getting the total Count
        $tempResult_Count =  User::whereRaw($XtraSql)
                                ->whereRaw($searchById)
                                ->whereRaw($searchByAddress)
                                ->whereRaw($searchByphonenumber)
                                ->whereRaw($searchByDate)
                                ->whereRaw($searchByDate_1)
                                ->whereRaw($searchByDate_2)
                                ->get(['id'])->toArray();
        
     
        // getting the origin Data
    
        $tempIncomingRequest['start'] = $tempIncomingRequest['start'] = '' ? 0 : $tempIncomingRequest['start'];
        $tempIncomingRequest['length'] = $tempIncomingRequest['length'] = '' ? 10 : $tempIncomingRequest['length'];
        
        $tempResult =  User::skip($tempIncomingRequest['start'])->take($tempIncomingRequest['length'])
                                                                ->whereRaw($XtraSql)
                                                                ->whereRaw($searchById)
                                                                ->whereRaw($searchByAddress)
                                                                ->whereRaw($searchByphonenumber)
                                                                ->whereRaw($searchByDate)
                                                                ->whereRaw($searchByDate_1)
                                                                ->whereRaw($searchByDate_2)
                                                                ->orderByRaw($orderByCreatedDate)
                                                                ->orderByRaw($searchByphonenumber)
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
    
    
    public function fetchUsersForServerSite_excel_download(){
        
        // Generate and return the spreadsheet
    
        $invoicesArray= 'NOting Baby';
        return $invoicesArray;
    }
}
