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
                        <th scope="col"><h5>ชื่อ</h5></th>
                        <th scope="col"><h5>นามสกุล</h5></th>
                        <th scope="col"><h5>ที่อยู่</h5></th>
                        <th scope="col"><h5>เบอร์โทร</h5></th>
                        <th scope="col"><h5>เลขบัญชี</h5></th>
                        <th scope="col"><h5>ธนาคาร</h5></th>

                        <th scope="col"><h5>แก้ไข</h5></th>
                    </tr>
                </thead>
                @foreach ($farmers as $farmer) 
                <tbody>
                    <tr>
                    @if( $farmer->id == null || $farmer->id == '' ) 
                        {{-- <th scope="row">1</th> --}}
                        <td>{{ Auth::user()->name }}</td>
                    @else
                        <td>{{ $farmer->name }}</td> 
                        <td>{{ $farmer->lastname }}</td>
                    @endif
                        <td>{{ $farmer->address }}</td> 
                        <td>{{ $farmer->tel }}</td> 
                        <td>{{ $farmer->account }}</td> 
                        <td>{{ $farmer->bank }}</td>

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
