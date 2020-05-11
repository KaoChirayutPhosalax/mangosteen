@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">




                     <center>
                      <div class="card-body">

{!! Form::open(['route' => 'addstoresenddetail', 'method' => 'post', 'files'=>true ]) !!}

@csrf
                    {{-- <form method="POST" action="{{ route('addstoresenddetail') }}"> --}}
                        <table>
                        <div class="card-header">{{ __('ตรวจสอบมังคุด') }}</div>


                        <tr>
                            <th>ลำดับ</th>
                            <th>ไซร์</th>
                            <th>จำนวน (กิโลกรัม)</th>
                        </tr>

                        @foreach ($size as $item=>$index)



                        <tr>
                        <td>{{$item+1}}</td>
                        <td>
                            <input id="send_amount" type="checkbox"
                                   class="form-control"
                                   name="mango_id[]" value="{{$index->id}}"></td>
                         <td>{{$index->mang_size}}</td>

                        <td><div class="col-md-6">
                            <input id="send_amount" type="DECIMAL(10,2)"
                                   class="form-control"
                                   name="send_amount[]">
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
