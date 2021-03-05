@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group row">
                        <label for="type" class="col-md-4 col-form-label text-md-right">
                            {{ __('อาชีพ') }}
                        </label>

                        <div class="col-md-6">
                            <select  name="type">
                                <option value="farmer">เกรษตรกร</option>
                                <option value="bidder">ผู้ประมูล</option>
                            </select>
                            @if ($errors->has('type'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('type') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">
                            {{ __('ชื่อ') }}
                        </label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="lastname" class="col-md-4 col-form-label text-md-right">
                            {{ __('นามสกุล') }}
                        </label>

                        <div class="col-md-6">
                            <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror"
                            name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                            @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>



                    <div class="form-group row">
                        <label for="address" class="col-md-4 col-form-label text-md-right">
                            {{ __('ที่อยู่') }}
                        </label>

                        <div class="col-md-6">
                            <input id="address" type="text"
                                   class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}"
                                   name="address" value="{{ old('address') }}" required>

                            @if ($errors->has('address'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tel" class="col-md-4 col-form-label text-md-right">
                            {{ __('เบอร์โทร') }}
                        </label>

                        <div class="col-md-6">
                            <input id="tel" type="text"
                                   class="form-control{{ $errors->has('tel') ? ' is-invalid' : '' }}"
                                   name="tel" value="{{ old('tel') }}" required>

                            @if ($errors->has('tel'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('tel') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="account" class="col-md-4 col-form-label text-md-right">
                            {{ __('บัญชีธนาคาร') }}
                        </label>

                        <div class="col-md-6">
                            <input id="account" type="text"
                                   class="form-control{{ $errors->has('account') ? ' is-invalid' : '' }}"
                                   name="account" value="{{ old('account') }}" required>

                            @if ($errors->has('account'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('account') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="bank" class="col-md-4 col-form-label text-md-right">
                            {{ __('ธนาคาร') }}
                        </label>

                        <div class="col-md-6">
                            <input id="bank" type="text"
                                   class="form-control{{ $errors->has('bank') ? ' is-invalid' : '' }}"
                                   name="bank" value="{{ old('bank') }}" required>

                            @if ($errors->has('bank'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('bank') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="username" class="col-md-4 col-form-label text-md-right">
                            {{ __('รหัสผู้ใช้') }}
                        </label>

                        <div class="col-md-4">

                            <input id="username" type="text"
                                   class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}"
                                   name="username" value="{{ old('username') }}" required>

                            @if ($errors->has('username'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">
                            {{ __('รหัสผ่าน') }}
                        </label>

                        <div class="col-md-4">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">
                            {{ __('ยืนยันรหัสผ่าน') }}
                        </label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control"
                            name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>






                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('ยืนยัน') }}
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
