@extends('layouts.cus')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
            <h4 class="panel-heading text-center">เพิ่มรายการมังคุด</h4>
            <form style="margin: 15px" method="post" action="{{route('farmers.store')}}">
                {{ csrf_field() }}
                    <div class="form-group">
                        <div class="card shadow">
                            <div class="card-header border-0">
                                <h3 class="mb-0">ข้อมูลประเภทสินค้า (# รายการ)</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                    <tr>
                                        <th scope="col">สินค้า</th>
                                        <th scope="col" style="width: 10%"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($prodframs as $prodfram)
                                        <tr>
                                            <td>{{$prodfram->name}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection
