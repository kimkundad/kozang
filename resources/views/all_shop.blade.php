@extends('layouts.template')

@section('title')
ร้านวัสดุก่อสร้างทั้งหมด - kozang
@stop

@section('stylesheet')


@stop('stylesheet')
@section('content')



<style>
.juicer-feed h1.referral{
  display: none !important;
}
.img_container {
    min-height: 188px;
    position: relative;
    overflow: hidden;
    border: 1px solid #fff;
}
</style>

<section class="parallax-window" data-parallax="scroll" data-image-src="{{url('img/bg_kozang.jpg')}}" data-natural-width="1400" data-natural-height="370">
            <div class="parallax-content-1">
              <div class="animated fadeInDown">
                <h1>ร้านวัสดุก่อสร้างทั้งหมด - kozang</h1>

              </div>
            </div>
        </section>

        <div id="position">
            	<div class="container">
                        	<ul>
                            <li><a href="{{url('/')}}">{{ trans('message.index') }}</a></li>
                            <li><a href="#">ร้านวัสดุก่อสร้างทั้งหมด - kozang</a></li>

                            </ul>
                </div>
            </div>




            <div class="container margin_60">

              <div class="main_title">
                <h2> <span>ร้านวัสดุก่อสร้างทั้งหมด - kozang </span> </h2>


              </div>

              <style>
  .img_container > a {
	display: flex;
	justify-content: center;
	align-items: center;
}
.img_container > a > img {
	width: 100%;
	height: 100%;
	object-fit: cover;
	border-radius: 5px;
}

.img_container {
	display: grid;
	grid-gap: 10px;
	grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
	grid-auto-rows: 200px;
	grid-auto-flow: dense;
}
</style>

              <div class="row">


                @if($shop)
                  @foreach($shop as $shops)

                <div class="col-md-3 col-xs-6 wow zoomIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;  padding-right: 6px; padding-left: 6px;">

                  @if($set_point<=3)
                  <div class="ribbon_3 popular"><span>Recommend</span></div>
                  @else
                  <div class="ribbon_3"><span>Popular</span></div>
                  @endif

                  <div class="tour_container">
                    <div class="img_container">
                      <a href="{{url('shop/'.$shops->id)}}">
                        <img src="{{url('assets/image/cusimage/'.$shops->image)}}" class="img-responsive" alt="Image">
                        <div class="short_info">
                          {{$shops->name}}
                        </div>
                      </a>

                    </div>
                    <div class="wishlist">
                      <form id="cutproduct" class="typePay2 " novalidate="novalidate" action="" method="post"  role="form">

                                  <input class="user_id form hide" type="text" name="id" value="{{$shops->id}}" />
                                      <a class="tooltip_flip tooltip-effect-1" >
                                          +<span class="tooltip-content-flip">
                                          <span class="tooltip-back">Add to wishlist</span></span></a>
                      </form>


                    </div>


                  </div>
                  <!-- End box tour -->
                </div {{$set_point++}}>
                <!-- End col-md-4 -->
                  @endforeach
                @endif



                <div class="infinite-scroll">
                @if($options)
                  @foreach($options as $shops)

                <div class="col-md-3 col-xs-6 wow zoomIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;  padding-right: 6px; padding-left: 6px;">



                  <div class="tour_container">
                    <div class="img_container">
                      <a href="{{url('shop/'.$shops->id)}}">
                        <img src="{{url('assets/image/cusimage/'.$shops->image)}}" class="img-responsive" alt="Image">
                        <div class="short_info">
                          {{$shops->name}}
                        </div>
                      </a>

                    </div>
                    <div class="wishlist">
                      <form id="cutproduct" class="typePay2 " novalidate="novalidate" action="" method="post"  role="form">

                                  <input class="user_id form hide" type="text" name="id" value="{{$shops->id}}" />
                                      <a class="tooltip_flip tooltip-effect-1" >
                                          +<span class="tooltip-content-flip">
                                          <span class="tooltip-back">Add to wishlist</span></span></a>
                      </form>


                    </div>


                  </div>
                  <!-- End box tour -->
                </div >
                <!-- End col-md-4 -->
                  @endforeach
                @endif
                {{ $options->links() }}
              </div>

              </div>
              <!-- End row -->

            </div>



@endsection

@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.4.1/jquery.jscroll.min.js"></script>
<script type="text/javascript">
        $('ul.pagination').hide();
        $(function() {
            $('.infinite-scroll').jscroll({
                autoTrigger: true,
                loadingHtml: '<img class="center-block" src="{{secure_url('assets/img/loader.gif')}}" alt="Loading..." />', // MAKE SURE THAT YOU PUT THE CORRECT IMG PATH
                padding: 0,
                nextSelector: '.pagination li.active + li a',
                contentSelector: 'div.infinite-scroll',
                callback: function() {
                    $('ul.pagination').remove();
                }
            });
        });
    </script>


    <script type="text/javascript">

    $('.tooltip_flip.tooltip-effect-2').click(function(e){
          e.preventDefault();
        //  var username = $('form#cutproduct input[name=id]').val();


        var $form = $(this).closest("form#cutproduct3");
        var formData =  $form.serializeArray();
        var userId =  $form.find(".user_id").val();

          if(userId){
                $.ajax({
                  type: "POST",
                  async: true,
                  url: "{{url('del_wishlist')}}",
                  headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                  data: "id="+userId,
                  dataType: "json",
               success: function(json){
                 if(json.status == 1001) {


                   $.notify({
                    // options
                    icon: '',
                    title: "<h4>ลบรายการที่ชอบ สำเร็จ</h4> ",
                    message: "ท่านสามารถเข้า wishlist เพื่อดูรายการทั้งหมดของท่าน . "
                   },{
                    // settings
                    type: 'info',
                    delay: 5000,
                    timer: 3000,
                    z_index: 9999,
                    showProgressbar: false,
                    placement: {
                      from: "bottom",
                      align: "right"
                    },
                    animate: {
                      enter: 'animated bounceInUp',
                      exit: 'animated bounceOutDown'
                    },
                   });




                  } else {


                    $.notify({
                      // options
                      icon: '',
                      title: "<h4>เพิ่มรายการที่ชอบ ไม่สำเร็จ</h4> ",
                      message: "ท่านต้องทำการ Login เพื่อเข้าสู่ระบบก่อนเพิ่มรายการที่ชอบ . "
                    },{
                      // settings
                      type: 'danger',
                      delay: 5000,
                      timer: 3000,
                      z_index: 9999,
                      showProgressbar: false,
                      placement: {
                        from: "bottom",
                        align: "right"
                      },
                      animate: {
                        enter: 'animated bounceInUp',
                        exit: 'animated bounceOutDown'
                      },
                    });




                  }
                  },
                  failure: function(errMsg) {
                    alert(errMsg.Msg);
                  }
                });
              }else{


                $.notify({
                  // options
                  icon: '',
                  title: "<h4>เพิ่มรายการที่ชอบ ไม่สำเร็จ</h4> ",
                  message: "ท่านต้องทำการ Login เพื่อเข้าสู่ระบบก่อนเพิ่มรายการที่ชอบ . "
                },{
                  // settings
                  type: 'danger',
                  delay: 5000,
                  timer: 3000,
                  z_index: 9999,
                  showProgressbar: false,
                  placement: {
                    from: "bottom",
                    align: "right"
                  },
                  animate: {
                    enter: 'animated bounceInUp',
                    exit: 'animated bounceOutDown'
                  },
                });


              }
            });

            </script>

@stop('scripts')
