@extends('layouts.cus')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">




                     <center>
                      <div class="card-body">

{{-- {!! Form::open(['route' => 'conquerordetail', 'method' => 'post', 'files'=>true ]) !!} --}}

            <form method="POST" action="{{ route('conquerordetail') }}">
    @csrf
                    {{-- <form method="POST" action="{{ route('addstoresenddetail') }}"> --}}
                        <table>
                        {{-- <div class="card-header">{{ __('ตรวจสอบมังคุด') }}</div> --}}


                        <tr>
                            <th>ลำดับ</th>
                            <th>ไซร์</th>
                            <th>เลือก</th>
                        </tr>

                        {{-- @foreach ($size as $item=>$index) --}}

                        
                        {{-- <tr>
                            <td>{{$item+1}}</td>
                       
                            <td>{{$index->name}}</td>

                            <td>
                                <div class="form-group row mb-0" >

                                    <button type="submit" class="btn btn-primary" style="
                                        border-left-width: 1px;
                                        margin-left: 25px;" >
                                        {{ __('ยืนยัน') }}
                                    </button>
                                </div>
                            </td>
                        </tr> --}}
                      <tr>
                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">
                                {{ __('เลือกไซร์มังคุด') }}
                            </label>

                           

                            <div class="col-md-6">
                               
                                <select  name="mang_id">
                                    @foreach ($size as $index)
                                    <option value=" {{ $index->id }}" >  {{ $index->name }} </option>
                                    @endforeach

                                    {{-- @foreach($farmers as $index)
                                    <option value="{{$farmer->id }}">{{$farmer->nome}}</option>
                                    @endforeach --}}

                                </select>
                            
                            </div> 
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary" >
                                        {{ __('ยืนยัน') }}
                                    </button>
                                </div>
                            </div>      

                           

                        </div>
                      </tr>
                      {{-- @endforeach --}}
                      
                    </table>
</form>




                    </body>


                </body>

                
                </div>
            
{{-- {!! Form::close() !!} --}}

                </div>

            </center>


            </div>
        </div>
    </div>
</div>
@endsection
