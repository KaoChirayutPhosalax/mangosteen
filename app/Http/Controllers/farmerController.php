<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;//นําเอาโมเดล farmer เข้ามาใช้งาน
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Send_mangos;
use App\Send_mangos_detail;
use App\round;
use App\round_send;
use App\round_send_detail;
use App\mangosteen;
use Mango;
use DB;
use LengthException;


class FarmerController extends Controller
{
  public function index() {

    if( Auth::user()->type == 'admin'){
      $farmer = User::where('type','farmer')->get();
    }
    else{
      $farmer = User::where('type','farmer')->where('id', Auth::user()->id)->get();
    }
      //   $count = User::count(); //นบัจํานวนแถวทงัหมด
        return view('farmers.index', [
          'farmers' => $farmer
          ]); // สง่ไปที views โฟลเดอร์ typebooks ไฟล์ index.blade.php
      }






        public function sendmangosteen() {

          $farmer = User::where('type','farmer')->get();
          $Round = Round::all();
          $round_send = round_send::all();
          $send_id = DB::table('round_send')->where([['send_id','LIKE',date("Ymd")."%"]])->orderByDesc("send_id")->select('round_send.send_id')->get();
          //  return $send_id;
         
          return view ('farmers.sendmangosteen' ,[
            'farmers' => $farmer,
            'Round' => $Round,
            'send_id'=> $send_id,
            'round_send' => $round_send,
            ] ) ;
           
        }

        



        public function senddetailmangosteen() {

          $farmer = User::where('type','farmer')->get();
          $size = DB::table('mangosteen')->select('mangosteen.*')->get();


          return view('farmers.senddetailmangosteen' , [
            'farmers' => $farmer,
            'size' => $size
            ]);
 
        }
        

        public function showfarmer() {

          $farmer = User::where('type','farmer')->get();


        // return 1;
        $date = DB::table('send_mangos')

             ->join('users', 'users.id', '=', 'send_mangos.users_id')

             ->join('send_mangos_detail' , 'send_mangos.id', '=', 'send_mangos_detail.send_mangos_id')

             ->join('mangosteen', 'mangosteen.mango_no', '=', 'send_mangos_detail.mang_id')

             ->select('users.name' , 'users.lastname' ,'send_mangos_detail.send_amount' ,  'mangosteen.name' )
             ->where('users.id',Auth::user()->id )
            // ->orderByDesc('works.begin_date')
            ->get();
               


          return view('farmers.showfarmer', [

            'farmers' => $farmer,
            'date' =>$date

            ]);

          }



        public function addstoresend(Request $request)
        {

          // return $request;
          $round = new round_send();
          $round->id  = $request->get('user_id');
          $round->round_id = $request->send_around;
          $round->send_date = $request->send_date;
          $round->send_time = $request->time;
          $round->total_wg = $request->weight;
          $round->send_id = $request->code;
          $round->loss_wg = 0;
          $round->send_status = "กำลังคัดแยก";
          // return $round->send_status."||". $round->loss_wg;
          $round->save();
          
          // return redirect()->route('senderdetail.index');
          return redirect()->route('senddetailmangosteen');
        }


        public function addstoresenddetail(Request $request)
        { 
          //  return $request;
          $data =0;

          $id = DB::table('mangosteen')->select('mangosteen.mango_no')->get();

          $id1 = DB::table('Send_mangos')->select('Send_mangos.id')->get();

          $amount = DB::table('mangosteen')->select('mangosteen.amount')->get();


          // $id = DB::table('mangosteen')->select('mangosteen.name')->get();
      
          $farmer = Send_mangos::get();
          foreach($farmer as $item){
            $data = $item->id;
          }
          $i=0;
            //  return $item;
            $farmer = mangosteen::get();
            // return $farmer;
            foreach($farmer as $item ){

              // return $item;
              $data1 = $item->mango_no;
              $data2 = $item->amount;
              
                    //  return $detail;
                // $arrlength=count($request["mango_id"]);
       
                  //  return $arrlength;
                 
                  // $sum=$request["mango_id"][$i]; //return $sum;
                  // $int=numberformat($sum);
                  $num=$request["send_amount"][$i]; //return $num;

                  // return $num;

                  if($num!="" ){

                    $sum = $data2+$num;

                   
                    $send = new send_mangos_detail(); //return $send;
                    
                    $send->send_mangos_id = $data; //return $send;
                    $send->mang_id = $data1; //return $send;
                    $send->send_amount = $num; //
                    //  return $send;
                    
                    $send->save();  

                    // $mang = Mangosteen::find($data1);
                    //   // $mang->name = $request->get('name');
                      

                    //   $mang->amount = $sum;
                      
                    // $mang->save(); 
                  }
                  

                  // $send->mang_id = $detail;
                  $i+=1;
                   
               
             
        }return redirect()->route('sendmangosteen');
      }




        public function destroy($id) {
            //farmer::find($id)->delete();
            User::destroy($id);
             return back();
            }

        public function edit($id)
            {
            
              $farmer = User::find($id);
              
               return view('farmers.edit', compact('farmer'));
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

            return redirect('/farmers')->with('success', 'famer has been updated');
        }

    //     public function addstore_rit(Request $request)
    // {
    //     $workimg = new Work();
    //     $workimg->user_id = $request->user_id;
    //     $workimg->begin_date = $request->begin_date;
    //     $workimg->end_date = $request->end_date;
    //     $workimg->address_work = $request->address;
    //     $workimg->status_bill = 'ค้างชำระ';
    //     $workimg->status_work = 'รอดำเนินการ';
    //     $workimg->save();
    //     // return $workimg;

    //     // ลูบวนเก็บค่าตาราง workimg_detail
    //     foreach ($request->work as $works){
    //         $workimg2 = new WorkDetail();
    //         $workimg2->work_id = $workimg->id;
    //         $workimg2->working = $works;
    //         $workimg2->save();

    //         if ($works == 'ตัดปาล์ม'){
    //             $workimg2->kilo_palm = $request->kilo_palm;
    //             $workimg2->save();
    //         }
    //         elseif($works == 'ใส่ปุ๋ย'){
    //             $workimg2->unit_fertilizer = $request->unit_fertilizer;
    //             $workimg2->save();
    //         }
    //         else{
    //             $workimg2->farm_grass = $request->farm_grass;
    //             $workimg2->save();
    //         }
    //     }

    //     $details =  DB::table('work_details')->select('work_details.*')->where('work_id','like',$workimg->id)->get();
    //     // return $details;
    //     $sum = 0;
    //     $avg1 = 0;
    //     $avg2 = 0;
    //     $sack = 0;
    //     foreach( $details as $detail ){
    //         if( $detail->working == "ตัดหญ้า"){
    //             // return 1;
    //             $grass = $detail->farm_grass ;
    //             $sum = $grass * 500;
    //         }
    //         elseif($detail->working == "ตัดปาล์ม"){
    //             // return 2;
    //             $palm = $detail->kilo_palm ;
    //             $sum2 = $palm * 3;
    //             $avg1 = $sum2 * 0.3; //เงินที่เราได้จากการขาย 30 %
    //             $avg2 = $sum2 - $avg1 ; //เงินที่ลูกค้าได้จากการขาย และ ลบส่วนที่ต้องแบ่งให้คนจ้าง 30 %
    //         }
    //         else{
    //             // return 3;
    //             $fertilizer = $detail->unit_fertilizer ;
    //             $sum3 = $fertilizer / 50 ; // จำนวนต้น หาร กิโลต่อถุง -> หาจำนวนกระสอบ
    //             $sack = $sum3 * 600;
    //         }
    //     }

    //     return view('engage.addcreate',[ 'detail' => $details , 'price1' => $sum , 'price2' => $avg1 , 'price3' => $sack ]);
    //     // return redirect()->route('addcreate');
    // }
}



