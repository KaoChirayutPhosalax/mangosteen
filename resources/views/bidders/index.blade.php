@extends('layouts.cus') 

@section('css')
@endsection
@section('content') 


    <div class="container">     
        <h3> ข้อมูลผู้ประมูล  </h3> 
            <div class="panel-body"> 
 
                <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col"><h5>ชื่อ</h5></th>
                        <th scope="col"><h5>นามสกุล</h5></th>
                        <th scope="col"><h5>ที่อยู่</h5></th>
                        <th scope="col"><h5>เบอร์โทร</h5></th>
                        <th scope="col"><h5>เลขบัญชี</h5></th>
                        <th scope="col"><h5>ธนาคาร</h5></th>

                        <th scope="col"><h5>แก้ไข</h5></th>
                    </tr>
                </thead>                       
                @foreach ($bidders as $bidder)   
                <tbody>
                    <tr>                            
                        {{-- <td>{{ $bidder->id }}</td> --}}
                                                    
                        <td>{{ $bidder->name }}</td> 
                        <td>{{ $bidder->lastname }}</td>
                        <td>{{ $bidder->address }}</td> 
                        <td>{{ $bidder->tel }}</td> 
                        <td>{{ $bidder->account }}</td> 
                        <td>{{ $bidder->bank }}</td> 
                                
                        <td>
                            <a href="{{ url('/bidders/'.$bidder->id.'/edit') }}">แก้ไข</a>
                        </td>
                    </tr>                        
                @endforeach  
                </tbody>                 
                </table> 
             
        </div>         
    </div> 


@endsection 

@section('js')
@endsection
    
