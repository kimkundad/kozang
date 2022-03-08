@extends('admin.layouts.template')





@section('admin.content')






        <section role="main" class="content-body">

          <header class="page-header">
            <h2>ส่วนลดทั้งหมด ( {{ count($objs) }} )</h2>

            <div class="right-wrapper pull-right">
              <ol class="breadcrumbs">
                <li>
                  <a href="{{url('admin/dashboard')}}">
                    <i class="fa fa-home"></i>
                  </a>
                </li>

                <li><span>ส่วนลดทั้งหมด</span></li>
              </ol>

              <a class="sidebar-right-toggle" data-open="sidebar-right" ><i class="fa fa-chevron-left"></i></a>
            </div>
          </header>


          <!-- start: page -->



<div class="row">
              <div class="row">
              <div class="col-xs-12">

            <section class="panel">



              <div class="panel-body">



                <div class="col-md-12 " style="padding-left: 1px;">

                <a class="btn btn-primary " href="{{url('admin/free_shipping/create')}}" >
                      <i class="fa fa-plus"></i> เพิ่มส่วนลด</a>
            
                </div>

                <br><br>



                <table class="table table-responsive-lg table-striped table-sm mb-0" >
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>ชื่อส่วนลด</th>
                      <th>Code ส่วนลด</th>
                      <th>ราคาส่วนลด</th>
                      <th>วันที่</th>
                      <th>จำนวนที่สร้าง</th>
                      <th>สถานะ</th>
                      <th>จัดการ</th>
                    </tr>
                  </thead>
                  <tbody>
                    
             @if($objs)
                @foreach($objs as $u)

                    <tr access_id="{{$u->id}}">
                      <td><img src="{{url('assets/banner/'.$u->image)}}" alt="{{$u->name}}" style="height:32px;" class="img-circle"></td>
                      <td>{{$u->name}}</td>
                      <td>{{$u->code}}</td>
                      <td>{{$u->detail}}</td>
                      <td>{{$u->start}} - {{$u->end}}</td>
                      <td>{{$u->total}}</td>
                      <td>
                        <div class="switch switch-sm switch-success">
                          <input type="checkbox" name="switch" data-plugin-ios-switch
                          @if($u->status == 1)
                          checked="checked"
                          @endif
                          />
                        </div>
                      </td>
                      <td>

                        <div class="btn-group flex-wrap">
  							<button type="button" class="mb-1 mt-1 mr-1 btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">จัดการ <span class="caret"></span></button>
  								<div class="dropdown-menu" role="menu">
  								<a class="dropdown-item text-1" href="{{url('admin/free_shipping/'.$u->id.'/edit')}}">แก้ไข</a>
  								<a class="dropdown-item text-1 text-danger" href="{{ url('api/del_gift/'.$u->id) }}" onclick="return confirm('Are you sure?')">ลบ</a> 
  							</div>
  						</div>

                      </td>
                    </tr>
                      
                
                 @endforeach
              @endif

                  </tbody>
                </table>
                {{ $objs->links() }}
              </div>
            </section>

              </div>
            </div>
        </div>
</section>
@stop



@section('scripts')
<script src="{{asset('/assets/javascripts/tables/examples.datatables.default.js')}}"></script>

<!-- secure_url -->

<script type="text/javascript">
$(document).ready(function(){
  $("input:checkbox").change(function() {

    var user_id = $(this).closest('tr').attr('access_id');

    $.ajax({
            type:'POST',
            url:'{{url('api/post_status_gift')}}',
            headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}' },
            data: { "user_id" : user_id },
            success: function(data){
              if(data.data.success){


                var stack_topleft = {"dir1": "down", "dir2": "right", "push": "top"};
                      var notice = new PNotify({
                            title: 'ทำรายการสำเร็จ',
                            text: 'คุณเปลี่ยนการแสดงผล สำเร็จเรียบร้อยแล้วค่ะ',
                            type: 'success',
                            addclass: 'stack-topright'
                          });



              }
            }
        });
    });
});
</script>



@stop('scripts')
