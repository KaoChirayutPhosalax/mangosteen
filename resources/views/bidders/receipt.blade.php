@extends('layouts.cus')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <center><h3> การออกใบเสร็จชำระเงิน </h3> 

                {{-- <td class="heading"> ระหว่างวันที่</td> 
                
               <div  class="col-md-3"><input type="date"   /> </div>
                <td class="heading"> ถึงวันที่</td>
               
               
                <div  class="col-md-3"><input type="date"   /></div>
                --}}
                <br>
        {{-- <input name="submit" type="submit" value="ค้นหา" > --}}
            </center>

            
        <br>

          
            
            {{-- <section id="services">
                <ul class="nospace group">
                    <li class="one_quarter">
                        <article>
                        </article>
                    </li>

                    {{-- <li class="one_quarter">
                        <article>
                            <h6 class="heading"> ระหว่างวันที่</h6>
                            <footer>
                                @php
                                    $date_in = $begin_date ;
                                    $day1 = show_tdate($date_in) ;
                                @endphp
                                {{ $day1  }}
                            </footer>
                        </article>
                    </li>

                    <li class="one_quarter">
                        <article>
                            <h6 class="heading"> ถึงวันที่</h6>
                            <footer>
                                @php
                                    $date_in = $end_date ;
                                    $day2 = show_tdate($date_in) ;
                                @endphp
                                {{ $day2  }}
                            </footer>
                        </article>
                    </li> --}}

                    {{-- <li class="one_quarter">
                        <article>
                        </article>
                    </li> --}}

                {{-- </ul>
            </section>
            <br/> --}} 

            <table class="table table-striped table-bordered">
                <tr>
                    {{-- <th>ลำดับ</th> --}}
                    <th>ชื่อ</th>
                    <th>ชื่อสินค้า</th>
                    <th>ราคา</th>
                    
                 
                </tr>
                
                @foreach ($data as $index)
                
                <tr>
                   
                   
                    <td><option value=" {{ $index->id }}" >  {{ $index->name }} </option></td>
                    <td><option value=" {{ $index->mang_id }}" >{{$index->name1}} </option></td>
                    <td>{{ $index->price }}</td>
                    
                </tr>    
                

                @endforeach
                <tr>
                    <td>รวม</td>
                    <td></td>
                    <td>110</td>
                    {{-- <td >{{ $index->sum1 }}</td> --}}

                </tr>
                
                    
            </table>
            </div>
        </div>
    </div>
</div>
@endsection
