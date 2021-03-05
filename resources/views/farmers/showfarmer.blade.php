@extends('layouts.cus') 

@section('css')
@endsection
@section('content') 


    <div class="container">    
        <h3> ข้อมูลเกษตรกร </h3> 
             <div class="panel-body"> 

                <table class="table table-hover">
                <thead>
                   
                    <tr>
                        <th>ลำดับ</th>
                        <th>ไซร์</th>
                        <th>จำนวน (กิโลกรัม)</th>
                    </tr>
                </thead>
                @foreach ($date as $dates) 
                <tbody>
                    <tr>
                 
                        {{-- <th scope="row">1</th> --}}
                        <td>{{ Auth::user()->name }}</td>
           
                        <td>{{ $dates->send_mangos_detail }}</td> 
                 

                        <td>
                   
                    
                            <a href="{{ url('/farmers/edit/'.$farmer->id) }}">แก้ไข</a>
                           
                        </td>
                    </tr>@endforeach 
                    
                </tbody>
                </table>
                            
        </div>         
    </div> 




@endsection 

@section('js')
@endsection
