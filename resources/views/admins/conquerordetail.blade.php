@extends('layouts.cus')

@section('content')
<div class="container">
    <h3> ข้อมูลผู้ประมูล </h3> 
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    {!! Form::open(['route' => 'addconqueror', 'method' => 'post', 'files'=>true ]) !!}
                    @foreach ($size as $item=>$index)
                        <td>{{ $index->name }}</td> 
                    @endforeach
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col"><h5>ชื่อ</h5></th>
                            <th scope="col"><h5>นามสกุล</h5></th>
                            <th scope="col"><h5>เงิน</h5></th>
                            <th scope="col"><h5>เวลา</h5></th>
                            <th scope="col"><h5>เลือก</h5></th>
                          </tr>
                        </thead>
                        
                        @foreach ($bidders as $bidder)   
                        {{-- @if( Auth::mangosteen()->type == "farmer" ) --}}
                <tbody>
                    
                    <tr>   
                        
                        {{-- <td>{{ $bidder->id }}</td> --}}
                        {{-- <input type="text" name="name" value="">           --}}
                        
                        <td>{{ $bidder->name }}</td> 
                        <td>{{ $bidder->lastname }}</td>
                        <td>{{ $bidder->price }}</td> 
                        <td>{{ $bidder->created_at }}</td> 

                        {{-- <td><input type="text" name="name" value="{{ $bidder->name }}"></td> 
                        <td><input type="text" name="lastname" value="{{ $bidder->lastname }}"></td>
                        <td><input type="decimal" name="price" value="{{ $bidder->price }}"></td> 
                        <td><input type="text" name="created_at" value="{{ $bidder->created_at }}"></td> --}}

                        <td>
                            <div class="form-group row mb-0" >

                                <button name="users_id" value="{{ $bidder->id }}"
                                     type="submit" class="btn btn-primary" style="
                                    border-left-width: 1px;
                                    margin-left: 25px;
                                " >
                                    {{ __('ยืนยัน') }}
                                </button>
                            </div>
                        </td>
                    </tr>     
                                       
                @endforeach  
                
                </tbody>
               
                      </table>
                      {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection