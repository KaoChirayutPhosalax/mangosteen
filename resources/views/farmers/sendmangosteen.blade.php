@extends('layouts.cus')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ __('ตรวจสอบมังคุด') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('addstoresend') }}">
                        @csrf

                        {{-- เสร็จแล้วนะ --}}
                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">
                                {{ __('รหัส') }}
                            </label>

                            <div class="col-md-6">
                                <input name="code" type="text" class="form-control" value="<?= date("Ymd") ?>{{count($round_send)}}" readonly>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-md-2 col-form-label text-md-right">
                                {{ __('วันที่') }}
                                {{count($round_send)}}
                            </label>
                            <div class="col-md-3">
                                <!-- <input id="send_date" type="date" class="form-control @error('date') is-invalid @enderror" name="send_date" value="{{ old('send_date') }}" required autocomplete="date	" autofocus> -->
                                <input name="send_date" type="text" class="form-control" value="<?= date("Y-m-d") ?>" readonly>
                                
                             
                                @error('date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <label for="time" class="col-md-2 col-form-label text-md-right">
                                {{ __('เวลา') }}
                            </label>
                            <div class="col-md-3">
                                <input name="time" type="text" class="form-control" value="<?=date("H:i:s")?>"  readonly>
                                
                                @error('date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">
                                {{ __('เลือกเกษตรกร') }}
                            </label>
                            <div class="col-md-6">

                                <select name="user_id" class="form-control">
                                    <option>กรุณาเลือกชื่อเกษตรกร</option>
                                    @foreach ( $farmers as $index )
                                    <option value=" {{ $index->id }}"> {{ $index->name }} {{ $index->lastname }} </option>
                                    @endforeach

                                    {{-- @foreach($farmers as $index)
                                    <option value="{{$farmer->id }}">{{$farmer->nome}}</option>
                                    @endforeach --}}

                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="send_around" class="col-md-4 col-form-label text-md-right">
                                {{ __('รอบเวลา') }}
                            </label>
                            <div class="col-md-6">
                                <select name="send_around" class="form-control">
                                    @foreach ( $Round as $index )
                                    <option value=" {{ $index->round_id }}"> {{ $index->round_id }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">
                                {{ __('น้ำหนักที่ส่ง') }}
                            </label>
                            <div class="col-md-6">
                                <input name="weight" type="text" class="form-control" >
                            </div>
                        </div>
                        {{-- <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                </div> --}}
                <div class="form-group row mb-0">
                    <div class="col-md-4 ">

                    </div>
                    <div class="col-md-4 ">
                        <button type="submit" class="btn btn-primary">
                            {{ __('ยืนยัน') }}
                        </button>
                    </div>
                    <div class="col-md-4 ">
                    </div>
                </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>
</div>



@endsection