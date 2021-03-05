<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;//นําเอาโมเดล farmer เข้ามาใช้งาน
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Dealer_table;
use App\Dealerdetail_table;
use App\mangosteen;
use Mango;
use DB;
use LengthException;

class BidderController extends Controller
{
    public function index() {

        if( Auth::user()->type == 'admin'){

          $bidder = User::where('type','bidder')->get();

        }
        else{

          $bidder = User::where('type','bidder')->where('id', Auth::user()->id)->get();

        }

        //   $count = User::count(); //นบัจํานวนแถวทงัหมด
          return view('bidders.index', [
            'bidders' => $bidder
            ]); // สง่ไปที views โฟลเดอร์ typebooks ไฟล์ index.blade.php
        }

        public function destroy($id) {
            //bidder::find($id)->delete();
            User::destroy($id);
             return back();
            }
            public function edit($id)
                    {
                        $bidder = User::find($id);

                        return view('bidders.edit', compact('bidder'));
                    }

         public function update(Request $request, $id)
          {
                          $request->validate([
                            'name'=>'required',
                            'lastname'=>'required',
                            'address'=> 'required',
                            'tel' => 'required',
                            'account' => 'required',
                            'bank' => 'required',

                          ]);

                          User::find($id)->update($request->all());

                          return redirect('/bidders')->with('success', 'bidder has been updated');
        }

        // public function mangosteenprice() {
          
        //   $bidder = User::where('type','bidder')->get();
        //   $size = DB::table('mangosteen')->select('mangosteen.*')->get();

        //   return view('bidders.mangosteenprice', [
        //     'bidders' => $bidder,
        //     'size'=>$size
        //     ]);
            
        //   }

          public function auction() {
          
            $bidder = User::where('type','bidder')->get();
            $size = DB::table('mangosteen')->select('mangosteen.*')->get();



  
            return view('bidders.auction', [
              'bidders' => $bidder,
              'size'=>$size
              ]);
              
            }

            
        public function bill() {
          
          $bidder = User::where('type','bidder')->where('id', Auth::user()->id)->get();
          
          $data = DB::table('dealerdetail_table')
            ->join('dealer_table', 'dealer_table.id', '=', 'dealerdetail_table.dealer_table_id')
            ->join('mangosteen', 'mangosteen.id', '=', 'dealerdetail_table.mang_id')
            ->join('users', 'users.id', '=', 'dealer_table.users_id')
            
            ->select('users.id','users.name','users.lastname','dealerdetail_table.price','dealerdetail_table.created_at','dealerdetail_table.mang_id')->get();
          ;

          // return $data;


          return view('bidders.bill', [
            'bidders' => $bidder,
            'data'=>$data,
            ]);
            
          }

          public function receipt() {
          
            $bidder = User::where('type','bidder')->where('id', Auth::user()->id)->get();

            $data = DB::table('dealerdetail_table')
              ->join('dealer_table', 'dealer_table.id', '=', 'dealerdetail_table.dealer_table_id')
              ->join('mangosteen', 'mangosteen.id', '=', 'dealerdetail_table.mang_id')
              ->join('users', 'users.id', '=', 'dealer_table.users_id')
              
              ->select('mangosteen.name as name1','users.id','users.name',
              'users.lastname','dealerdetail_table.price','dealerdetail_table.created_at'
              ,'dealerdetail_table.mang_id',)->get();
             

             

              // $mang = DB::table('mangosteen')
              // ->select('mangosteen.name' )->get();
             
                      
            
  
              //  return $data;
  
  
            return view('bidders.receipt', [
              'bidders' => $bidder,
              'data'=>$data,
              
              ]);
              
            }


            public function dealer() {

              $bidder = User::where('type','bidder')->get();
    
              return view('\home' , [
                'bidder' => $bidder
                ]);
            }

            public function dealerdetail() {

              $didder = User::where('type','didder')->get();
              $size = DB::table('mangosteen')->select('mangosteen.*')->get();
    
    
              return view('\home' , [
                'didders' => $didder,
                'size' => $size
                ]);
    
            }

            // public function showbidder() {

            //   $bidder = User::where('type','bidder')->get();
    
    
            // // return 1;
            // $date = DB::table('dealer_table')
    
            //      ->join('users', 'users.id', '=', 'dealer_table.users_id')
    
            //      ->join('dealerdetail_table' , 'dealer_table.id', '=', 'dealerdetail_table.dealer_table_id')
    
            //      ->join('mangosteen', 'mangosteen.id', '=', 'dealerdetail_table.mang_id')
    
            //      ->select('users.name' , 'users.lastname' ,'dealerdetail_table.price' ,  'mangosteen.name' )
            //      ->where('users.id',Auth::user()->id )
            //     // ->orderByDesc('works.begin_date')
            //     ->get();
            //     return $date;
                   
    
    
            //   return view('\home', [
    
            //     'bidders' => $bidder,
            //     'date' =>$date
    
            //     ]);
    
            //   }

              public function addstordealer(Request $request)
              {

                // $bidder = User::select('id')-> where('id', Auth::user()->id)->get();
                //   // return $bidder;
                
                $pro = new Dealer_table();
                $pro->users_id  = Auth::user()->id;
                $pro->send_around = $request->send_around;
                // return $send;
                $pro->save();

                $data =0;

                $id = DB::table('mangosteen')->select('mangosteen.id')->get();

                $id1 = DB::table('Send_mangos')->select('Send_mangos.id')->get();

                $amount = DB::table('mangosteen')->select('mangosteen.amount')->get();

          // $id = DB::table('mangosteen')->select('mangosteen.name')->get();
      
                $bidder = Dealer_table::get();
                // return $bidder;
                foreach($bidder as $item){
                  $data = $item->id;
                }
          $i=0;
            //  return $item;
            $bidder = mangosteen::get();
            // return $farmer;
            foreach($bidder as $item )
            {
              $data1 = $item->id;
              $data2 = $item->price;
              // return $data;
                    //  return $detail;
                // $arrlength=count($request["mango_id"]);
       
                  //  return $arrlength;
                 
                  // $sum=$request["mango_id"][$i]; //return $sum;
                  // $int=numberformat($sum);
                  $num=$request["price"][$i]; //return $num;

                  if($num!="" ){

                    $sum = $data2+$num;
                    $send = new Dealerdetail_table(); //return $send;
                    
                    $send->dealer_table_id = $data; //return $send;
                    $send->mang_id = $data1; //return $send;
                    $send->price = $num; //
                    $send->type = "ไม่ได้";
                    //  return $send;
                    
                    $send->save();  

                    // $mang = Mangosteen::find($data1);
                    //   // $mang->name = $request->get('name');
                    // $mang->amount = $sum;
                      
                    // $mang->save(); 
                  }
                  
                      
                            // $mang = new Mangosteen();
                            // $mang->id  = $request->get('id');
                            // $mang->name = $request->name;
                            // $mang->amount =$count ;
                            // $mang->save();
                            

                  // $send->mang_id = $detail;
                  $i+=1;
                   
               
             
            }
            return  redirect()->route('home');
}

        

}
