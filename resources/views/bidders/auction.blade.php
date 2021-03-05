@extends('layouts.cus')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">




                     <center>
                      <div class="card-body">

{!! Form::open(['route' => 'addstordealer', 'method' => 'post', 'files'=>true ]) !!}

@csrf
                    {{-- <form method="POST" action="{{ route('addstoresenddetail') }}"> --}}
                        <table>
                        <div class="card-header">{{ __('ตรวจสอบมังคุด') }}</div>
                        <div class="form-group row">
                            <label for="send_around" class="col-md-4 col-form-label text-md-right">
                                {{ __('รอบเวลา') }}
                            </label>

                            <select  name="send_around" >
                                      
                                <option value='1'>  {{ 1}}  </option>
                                <option value='2'>  {{ 2}}  </option>
                                

                                {{-- @foreach($farmers as $index)
                                <option value="{{$farmer->id }}">{{$farmer->nome}}</option>
                                @endforeach --}}

                            </select>
                        </div>
                        <tr>
                            <th>ลำดับ</th>
                            <th>ไซร์</th>
                            <th>เสนอราคา/กิโลกรัม</th>
                        </tr>

                        @foreach ($size as $item=>$index)

                        <tr>
                        <td>{{$item+1}}</td>
                        
                        <td>{{$index->name}}</td>

                        <td><div class="col-md-6">
                            <input id="price" type="DECIMAL(10,2)"
                                   class="form-control"
                                   name="price[]" >
                        </div></div></td>

                      </tr>
                      @endforeach
                    </table>

                    </body>

                </body>

                <div class="form-group row mb-0" >

                    <button type="submit" class="btn btn-primary" style="
                        border-left-width: 1px;
                        margin-left: 25px;
                    " >
                        {{ __('ยืนยัน') }}
                    </button>
                </div>
                </div>

{!! Form::close() !!}

                </div>

            </center>


            </div>
        </div>
    </div>
</div>
@endsection
