<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;//นําเอาโมเดล farmer เข้ามาใช้งาน
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\conqueror;
use App\dealer_table;
use App\Dealerdetail_table;
use App\mangosteen;
use Mango;
use DB;

class AdminController extends Controller
{
    public function conqueror() {

        $bidder = User::where('type','bidder')->get();

        $size = DB::table('mangosteen')->select('mangosteen.*')->get();

        // $data = DB::table('dealer_table')

        // ->join('users', 'users.id', '=', 'dealer_table.users_id')

        // ->join('dealerdetail_table', 'dealerdetail_table.dealer_table_id', '=', 'dealer_table.id')

        // ->join('mangosteen', 'mangosteen.id', '=', 'dealerdetail_table.mang_id')

        // ->select('dealer_table.*','users.*','dealerdetail_table.*','mangosteen.*')->get();
        
        // return $size;
        

        return view('admins.conqueror',[

            'bidders' => $bidder,
            // 'data' =>$data,
            'size'=>$size,


        ]);

       
          
        }

            
        public function conquerordetail(Request $request) {
            //  return $request;
            $too = $request->get('mang_id');
             // return $too;
            $bidder = User::where('type','bidder')->get();
    
            $size = DB::table('mangosteen')->select('mangosteen.*')->get();
    // return $size;
            $data9 = DB::table('dealerdetail_table')
            ->join('dealer_table', 'dealer_table.id', '=', 'dealerdetail_table.dealer_table_id')
            ->join('mangosteen', 'mangosteen.id', '=', 'dealerdetail_table.mang_id')
            ->join('users', 'users.id', '=', 'dealer_table.users_id')
            ->where('dealerdetail_table.mang_id', '=' ,$too)
            ->orderBy('dealerdetail_table.price', 'DESC')
            ->select('users.id','users.name','users.lastname','dealerdetail_table.price','dealerdetail_table.created_at','dealerdetail_table.mang_id')->get();
            
            $data8 = DB::table('dealerdetail_table')
            ->join('dealer_table', 'dealer_table.id', '=', 'dealerdetail_table.dealer_table_id')
            ->join('mangosteen', 'mangosteen.id', '=', 'dealerdetail_table.mang_id')
            ->where('dealerdetail_table.mang_id', '=' ,$too)
            ->select('mangosteen.name')->get();
            
            // $mangId = new Conqueror();
            // $mangId->mang_id  = $too;
            // $mangId->users_id = "null";
            // $mangId->price = "null";
            
            // $mangId->save();
            //  return $data8;
    
            return view('admins.conquerordetail',[
    
                'bidders' => $data9,
                //  'id' =>$bidder,
                //'data' =>$data9,
                'size'=> $data8,
    
            ]);
              
        }

        public function addconqueror(Request $request)
        {

            return $request;
            $bidder = User::where('type','bidder')->get();


            // return $bidder;
            
            $con = new Conqueror();
            $con->mang_id= $request->get('mang_id	');
            $con->users_id  = $request;
            $con->price = $request->price;
     
          
        $con->save();


            
        

           return redirect()->route('/home');
        }



}
