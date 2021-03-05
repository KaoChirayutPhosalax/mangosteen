@extends('layouts.app')

@section('content')


   
        <style>
         .uper {
              margin-top: 40px;
                }
        </style>

<center>
    <div class="card uper" style="width: 502px;">
        <div class="card-header" >
             เเก้ไขข้อมูลส่วนตัวผู้ประมูล
                </div>
            <div class="card-body">
             @if ($errors->any())
             <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ url('bidder/edit/update/'.$bidder->id) }}">
       
        @csrf

        <div class="form-group">
          <label for="name">ชื่อผู้ประมูล:</label>
          <input type="text" class="form-control" name="name" style="  width: 426px;  height: 38px; " value="{{ $bidder->name }}" />
        </div>

        <div class="form-group">
          <label for="name">นามสกุล:</label>
          <input type="text" class="form-control" name="lastname" style="  width: 426px;  height: 38px; " value="{{ $bidder->lastname }}" />
        </div>

       

        <div class="form-group">
          <label for="price">ที่อยู่ :</label>
          <input type="text" class="form-control" name="address" style="  width: 426px;  height: 38px; " value="{{ $bidder->address }}" />
        </div>
        <div class="form-group">
          <label for="quantity">เบอร์โทร:</label>
          <input type="text" class="form-control" name="tel" style="  width: 426px;  height: 38px; " value="{{ $bidder->tel }}" />
        </div>

        <div class="form-group">
          <label for="quantity">เลขบัญชี:</label>
          <input type="text" class="form-control" name="account" style="  width: 426px;  height: 38px; " value="{{ $bidder->account }}" />
        </div>

        <div class="form-group">
          <label for="quantity">ธนาคาร:</label>
          <input type="text" class="form-control" name="bank" style="  width: 426px;  height: 38px; " value="{{ $bidder->bank }}" />
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
</center>
@endsection