
@extends('layouts.cus')

@section('content')
    <div class="card-body">
      <form method="POST" action="{{ route('auction') }}">

        @csrf
    <div class="card-body">
      <div class="table-responsive">
        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="dataTable_length"><label>Show <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
          <thead>
            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ไซร์: activate to sort column descending" style="width: 71.4px;">วันที่</th>
              <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 109px;">รอบ</th>
              <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 109px;">เวลา</th>
              <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 56.2px;">สถานะ</th>
              </tr>
          </thead>
      
          <tbody>
            
       
          <tr role="row" class="odd">
         
            
             </form></td>
             
            </tr><tr role="row" class="odd">
              <td class="sorting_1">{{ date('d-m-Y') }}
                </td>
              <td>1</td>
              <script type="text/javascript" src="
              http://code.jquery.com/jquery-latest.min.js
              "></script>

              <script type="text/javascript">
                $(function(){
                 
                 
                    var nowDateTime=new Date("<?=date("m/d/Y H:i:s")?>");
                    var d=nowDateTime.getTime();
                    var mkHour,mkMinute,mkSecond;
                     setInterval(function(){
                        d=parseInt(d)+1000;
                        var nowDateTime=new Date(d);
                        mkHour=new String(nowDateTime.getHours());  
                        if(mkHour.length==1){  
                            mkHour="0"+mkHour;  
                        }
                        mkMinute=new String(nowDateTime.getMinutes());  
                        if(mkMinute.length==1){  
                            mkMinute="0"+mkMinute;  
                        }        
                        mkSecond=new String(nowDateTime.getSeconds());  
                        if(mkSecond.length==1){  
                            mkSecond="0"+mkSecond;  
                        }   
                        var runDateTime=mkHour+":"+mkMinute+":"+mkSecond;        
                        $("#css_time_run").html(runDateTime);    
                     },1000);
                 
                 
                });
            </script>
              <td id="css_time_run">

               
                <?=date("H:i:s")?>
                
              </td>
              <td>

                <div class="form-group row mb-0" >

                  <button type="submit" class="btn btn-primary" style="
                  border-left-width: 1px;
                  margin-left: 25px;
              " >
                      {{ __('เปิด') }}
                  </button>
              </div>
          </div>
                
             </td>
           
         
           </form>
              
            
           
        </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite"></div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
      </div>
    </div>

  </div>
  <!-- End of Page Wrapper -->

  @endsection


