@extends('layouts.template')

@section('title')
kozang - ค้นหาร้านวัสดุก่อสร้าง
@stop

@section('stylesheet')
<style>
  .tab-content {
    background-color: rgb(255 255 255 / 0%);
}
  #search_container_2 {
    position: relative;
    height: 580px;
    background: #ccc url(img/slider-bg-01.jpg) no-repeat center top;
    background-size: cover;
    color: #fff;
    width: 100%;
    display: table;
    z-index: 99;
}
.custom-search-input-2 {
    background-color: #fff0;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    border-radius: 5px;
    margin-top: 0px;
    -webkit-box-shadow: 0 0 30px 0 rgb(0 0 0 / 30%);
    -moz-box-shadow: 0 0 30px 0 rgba(0,0,0,.3);
    box-shadow: 0 0 30px 0 rgb(0 0 0 / 0%);
}
.no-gutters {
    margin-right: 0;
    margin-left: 0;
}
.custom-search-input-2 .form-group {
    margin: 0;
}
.no-gutters>.col, .no-gutters>[class*=col-] {
    padding-right: 0;
    padding-left: 0;
}
.custom-search-input-2 input[type=submit]:hover {
    background-color: #e14d67;
    color: #fff;
}
.custom-search-input-2 input[type=submit] {
    -moz-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    -webkit-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
    color: #fff;
    font-weight: 700;
    font-size: 14px;
    border: 0;
    padding: 0 25px;
    height: 50px;
    cursor: pointer;
    outline: 0;
    width: 100%;
    -webkit-border-radius: 0 3px 3px 0;
    -moz-border-radius: 0 3px 3px 0;
    -ms-border-radius: 0 3px 3px 0;
    border-radius: 0 3px 3px 0;
    background-color: #e14d67;
    margin-right: -1px;
}
.custom-search-input-2 input {
    border: 0;
    height: 50px;
    padding-left: 15px;
    border-right: 1px solid #d2d8dd;
    font-weight: 500;
}
.form-control {
    font-size: 13px;
    color: #333;
    height: 40px;
    border-radius: 3px;
}
.pac-target-input:not(:-webkit-autofill) {
    animation-name: endBrowserAutofill;
}
.custom-search-input-2 i {
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    border-radius: 3px;
    font-size: 18px;
    font-size: 18px;
    position: absolute;
    background-color: #fff;
    line-height: 50px;
    top: 1px;
    right: 1px;
    padding-right: 15px;
    display: block;
    width: 20px;
    box-sizing: content-box;
    height: 48px;
    z-index: 9;
    color: #999;
    border-right: 1px solid #d2d8dd;
}
.icon_pin_alt:before {
    content: "\e01d";
    font-style: normal;
    font-weight: 400;
    font-family: "fontello";
    font-size: 14px;
    position: absolute;
    left: 0;
    top: 0;
}
@media (max-width: 991px){
  .custom-search-input-2 i {
    padding-right: 10px;
    top: 35px;
}
}

</style>
@stop('stylesheet')
@section('content')


<section id="search_container_2" >
<div id="search">

                <div class="tab-content">
               
                <form name="search" method="GET" action="{{url('search')}}" enctype="multipart/form-data">
                        <div class="row no-gutters custom-search-input-2">
                          <div class="col-lg-12">
                            <h3 style="text-align: center; color: #ffffff; margin-top: 0px; font-size:24px;    text-shadow: 2px 2px rgb(0 0 0 / 41%);">ค้นหาร้านวัสดุก่อสร้าง</h3>
                          </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input class="form-control pac-target-input" type="text" name="term" placeholder="จังหวัด..." id="autocomplete">
                                    <i class="icon-pin-outline"></i>
                                </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group">
                                    <input class="form-control pac-target-input" type="text" name="shop_name" placeholder="ค้นหาสินค้าและบริการ..."  >
                                  
                                </div>
                            </div>
                            
                            <div class="col-lg-2">
                                <input type="submit" class="btn_search" value="ค้นหา">
                            </div>
                        </div>
                        <!-- /row -->
                    </form>


                </div>


</div>
</section>


<!-- End hero -->

<main >



<div class="container margin_60">

  <div class="main_title">
    <h2> แนะนำโดย <span> Kozang </span> </h2>
    <br>
    <p class="sub_title_main_p" >สามารถค้นหาข้อมูลร้านวัสดุก่อสร้างและบริการ ข้อมูลแผนที่ธุรกิจได้ทันที  </p>
  </div>



  <div class="row">

    @if($shop)
      @foreach($shop as $shops)

    <div class="col-md-3 col-xs-6  set_new_mar wow zoomIn" data-wow-delay="0.1s" style=" visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;  padding-right: 6px; padding-left: 6px;">

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

  </div>
  <!-- End row -->
  <br>
  <p class="text-center nopadding">
    <a href="{{url('all_shop')}}" class="btn_1 medium"> ดูร้านวัสดุก่อสร้าง ({{$shop_count}}) รายการ </a>
  </p>


  <br><hr>
  <br>
  <div class="main_title">
    <h2> <span style="font-size: 28px;"> สินค้าใหม่ <!--{{ trans('message.sub_title_home_pro') }} --></span> ไม่เหมือนใคร</h2>

    <br>
    <p style="font-size:20px;">สินค้าใหม่เปลี่ยนทุกวันจันทร์ สั่งซื้อได้ก่อนใคร สะดวกรวดเร็ว <!-- {{ trans('message.sub_title_home_2_pro') }}--></p>
  </div>
 

  <style>
  .thumbnail a>img, .thumbnail>img {
      border-radius: 5px 5px 0px 0px;
  }
  .thumbnail {
    border-radius: 5px;
    display: block;
    padding: 0px;
}
.thumbnail .caption {
    padding: 9px;
    color: #333;
}
.descript {
    /* height: 35px; */
    font-size: 15px;
    margin-left: 8px;
    margin-right: 8px;
    margin-top: 0px;
    margin-bottom: 5px;
    padding-bottom: 5px;
    line-height: 1.2em;
    /* margin-bottom: 12px !important; */
}
.descript a {
    color: #000;
    /* text-decoration: none; */
}
.descript-t {
    float: right;
    height: 40px;
}
.postMetaInline-authorLockup {
    display: table-cell;
    vertical-align: middle;
    font-size: 14px;
    line-height: 1.4;
    padding-left: 10px;
    text-rendering: auto;
}
.rating {
    margin: 1px 0 3px -3px;
    font-size: 15px;
}
.rating .voted {
    color: #F90;
}

.set_new_mar{
  padding-right: 15px;
    padding-left: 15px;
}
.feature_home2{
  padding: 25px;
  background: #fff;
  -webkit-box-shadow: 0 0 5px 0 rgb(0 0 0 / 10%);
    -moz-box-shadow: 0 0 5px 0 rgba(0,0,0,0.1);
    box-shadow: 0 0 5px 0 rgb(0 0 0 / 10%);
}
.my-p-30{
  padding:30px
}
@media screen and (max-width: 767px){
  .set_new_mar{
    padding-right: 5px;
    padding-left: 5px;
}
.my-p-30{
  padding:0px;
  margin-bottom:30px;
}
}

.c_price_pro{
  margin:8px 0px 0px 0px;
  font-size: 20px;
}
.name_pro_index{
  font-size: 16px;
}
[class^="icon-"]:before, [class*=" icon-"]:before {
    font-family: "fontello";
    font-style: normal;
    font-weight: 400;
    speak: none;
    display: inline-block;
    text-decoration: inherit;
    width: 1em;
    margin-right: 0em;
    text-align: center;
    font-variant: normal;
    text-transform: none;
    line-height: 1em;
    margin-left: 0em;
}
.rating {
  margin: 1px 0 3px -3px;
    font-size: 13px;
}
  </style>


<div class="row">


  


<!-- สคริปก่อนหน้านี้ ลบ ไปแล้ว -->

@if(isset($product))
@foreach($product as $u)
<div class="col-md-3 col-xs-6 set_new_mar">
    <div class="thumbnail a_sd_move">
          <div style=" overflow: hidden; position: relative; min-height: 153px; max-height: 173px;">
              <a href="{{url('product/'.$u->id)}}">
                  <img src="{{url('assets/image/product/'.$u->image_pro)}}">
              </a>
            </div>
            <div class="caption" style="padding: 3px;">
                        <div class="descript bold" style="border-bottom: 1px dashed #dff0d8; height: 38px;overflow: hidden; ">
                            <a href="{{url('product/'.$u->id)}}">{{$u->name_pro}}</a>
                        </div>

                        <div class="descript" style="height: 20px;">
                          <span class="f_s_title_kim" style="color: #e03753; font-weight: 600;">฿ {{number_format($u->price)}} </span>
                          <div class="descript-t">
                          <div class="postMetaInline-authorLockup">
                         

                            <div class="rating">

        <?php
        for($i=1;$i <= $u->rating;$i++){
        ?>

                        <i class="icon-star voted"></i>
        <?php
        }
        ?>

        <?php
        $total = 5;
        $total -= $u->rating;

        for($i=1;$i <= $total;$i++){
        ?>

                       <i class="icon-star-empty"></i>
        <?php
        }
        ?>
          </div>

                          </div>
                          </div>
                        </div>

                      </div>
    </div>
</div>
@endforeach
@endif






</div>


</div>
<!-- End container -->

<style>
  .feature_home_x i {
    margin: auto;
    display: block;
    width: 120px;
    height: 120px;
    line-height: 110px;
    text-align: center;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 2px solid #f0f0f0;
    font-size: 62px;
    color: #6dcff6;
}
.banner_2 {
    background: url({{ url('img/banner_FB.jpg') }}) center center no-repeat;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    width: 100%;
    height: 400px;
    margin-bottom: 25px;
    position: relative;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    overflow: hidden;
}
.opacity-mask {
    width: 100%;
    min-height: 100%;
    position: absolute;
    left: 0;
    top: 0;
    z-index: 2;
    display: table;
}
.banner_2 .wrapper {
    color: #fff;
    padding: 60px;
}
.banner_2 .wrapper h3 {
    color: #fff;
    font-size: 32px;
    text-transform: uppercase;
    font-weight: 700;
}
.banner_2 .wrapper p {
    font-size: 24px;
    font-weight: 300;
}

</style>

<div class="white_bg">
			<div class="container margin_60">
				<div class="main_title">
					<h2>ทำไมต้อง <span>Kozang</span> </h2>
					<p>
          ค้นหาร้านวัสดุก่อสร้างและบริการที่แนะนำสำหรับ  โดย Kozang.com
					</p>
          <br>
				</div>
				<div class="row feature_home_2">
                    <div class="col-md-4 text-center">
                      <div class="feature_home_x">
                      <i class="icon_set_1_icon-41"></i>
                      </div>
                      <h3><span>+120k</span> ร้านวัสดุก่อสร้าง</h3>
                        <p>Suscipit invenire petentium per in. Ne magna assueverit vel. Vix movet perfecto facilisis in, ius ad maiorum corrumpit, his esse docendi in.</p>
                    </div>
                    <div class="col-md-4 text-center">
                    <div class="feature_home_x">
                      <i class="icon_set_1_icon-30"></i>
                      </div>
                      <h3><span>+ 1000</span> ผู้ใช้งาน</h3>
                        <p> Cum accusam voluptatibus at, et eum fuisset sententiae. Postulant tractatos ius an, in vis fabulas percipitur, est audiam phaedrum electram ex.</p>
                    </div>
                    <div class="col-md-4 text-center">
                    <div class="feature_home_x">
                      <i class="icon_set_1_icon-57"></i>
                      </div>
                      <h3><span>ติดต่อ</span> เพิ่มร้านค้าง่าย</h3>
                        <p>Integre vivendo percipitur eam in, graece suavitate cu vel. Per inani persius accumsan no. An case duis option est, pro ad fastidii contentiones.</p>
                    </div>
                </div>
                <br><br>
                <div class="banner_2">
                    
                    <!-- /wrapper -->
                    <a href="#">
                    <img src="{{ url('img/banner_FB.jpg') }}" class="img-responsive">
                    </a>
                </div>
                <!-- /banner_2 -->

			</div>
			<!-- End container -->
		</div>




<style>

  .foot_logo{
    margin-top:15px;
  }
</style>


    <div class="container margin_60">
            <div class="main_title">
                <h2> <span>พันธมิตรของเรา</span> </h2>
            </div>

            <div class="row">
              
                <div class="col-md-2 col-sm-3 col-xs-6 logo-style">
                  <img style="max-height: 180px; border: 2px solid #f3eded;" class="foot_logo"  src="{{ url('/img/logo/625746e6f8b1cf1c994a34ee512af67c.jpg') }}">
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6 logo-style">
                  <img style="max-height: 180px; border: 2px solid #f3eded;" class="foot_logo" src="{{ url('/img/logo/inwshop.png') }}">
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6 logo-style">
                  <img style="max-height: 180px; border: 2px solid #f3eded;" class="foot_logo" src="{{ url('/img/logo/images.png') }}">
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6 logo-style">
                  <img style="max-height: 180px; border: 2px solid #f3eded;" class="foot_logo"  src="{{ url('/img/logo/tpxmovi1vjostwraaflb-1.png') }}">
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6 logo-style">
                  <img style="max-height: 180px; border: 2px solid #f3eded;" class="foot_logo" src="{{ url('/img/logo/dohome600pix.png') }}">
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6 logo-style">
                  <img style="max-height: 180px; border: 2px solid #f3eded;" class="foot_logo" src="{{ url('/img/logo/lazada-logo.jpg') }}">
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6 logo-style">
                  <img style="max-height: 180px; border: 2px solid #f3eded;" class="foot_logo" src="{{ url('/img/logo/download.png') }}">
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6 logo-style">
                  <img style="max-height: 180px; border: 2px solid #f3eded;" class="foot_logo" src="{{ url('/img/logo/laScVLFL_400x400.webp') }}">
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6 logo-style">
                  <img style="max-height: 180px; border: 2px solid #f3eded;" class="foot_logo" src="{{ url('/img/logo/8a7908906299f6dce16e2a645b1a25a2.jpg') }}">
                </div>
              
              </div>
                <!-- /row -->
        </div>


<!-- End container -->
</main>
<!-- End main -->







@endsection

@section('scripts')

<script src='https://www.google.com/recaptcha/api.js?hl=th'></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.6/dist/loadingoverlay.min.js"></script>

<script>
    
$(document).on('click','#btnSendData',function (event) {
  event.preventDefault();
  
  var form = $('#contactForm')[0];
  var formData = new FormData(form);

  var product = document.getElementById("product").value;
  var email = document.getElementById("email").value;
  var phone = document.getElementById("phone").value;


    console.log(formData)

if(product == '' || email == '' || phone == ''){

  swal("กรูณา ป้อนข้อมูลให้ครบถ้วน");

}else{

  $.LoadingOverlay("show", {
    background  : "rgba(255, 255, 255, 0.4)",
    image       : "",
    fontawesome : "fa fa-cog fa-spin"
  });


  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="token"]').attr('value')
    }
});

  $.ajax({
      url: "{{url('/api/add_my_product_home')}}",
      headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}' },
      data: formData,
      processData: false,
      contentType: false,
      cache:false,
      type: 'POST',
      success: function (data) {

      //  console.log(data.data.status)
          if(data.data.status == 200){


            setTimeout(function(){
                $.LoadingOverlay("hide");
            }, 0);

            swal("สำเร็จ!", "ข้อความถูกส่งไปหาเจ้าหน้าที่เรียบร้อยแล้ว", "success");

            $("#product").val('');
            $("#email").val('');
            $("#phone").val('');


          setTimeout(function(){
            //    window.location.replace("{{url('clients/success_payment/')}}/"+data.data.value);
          }, 3000);

          }else{

            setTimeout(function(){
                $.LoadingOverlay("hide");
            }, 500);

            swal("กรูณา ป้อนข้อมูลให้ครบถ้วน");

          }
      },
      error: function () {

      }
  });

}


});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

<script type="text/javascript">
    var route = "{{ url('search/autocomplete') }}";
        $('#autocomplete').typeahead({
            source: function (query, process) {
                return $.get(route, {
                    query: query
                }, function (data) {
                    return process(data);
                });
            }
        });
</script>

@if ($message = Session::get('sent_myproduct_is_null'))


<script type="text/javascript">


    $(function(){
      // bind change event to select

      $.notify({
          // options
          icon: 'icon_set_1_icon-77',
          title: "<h4>กรอกข้อมูลไม่ครบค่ะ</h4> ",
          message: "กรอกข้อมูลให้ครบทุกช่องด้วยนะค่ะ เพื่อความสะดวกในการติดต่อกลับ. "
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


    });

</script>
@endif


@if ($message = Session::get('add_success_product'))
<script type="text/javascript">


    $(function(){
      // bind change event to select

      $.notify({
          // options
          icon: 'icon_set_1_icon-57',
          title: "<h4>ข้อความถูกส่งเรียบร้อยแล้ว</h4> ",
          message: "เจ้าหน้าที่จะรีบทำการติดต่อกลับไปหาท่านโดยไวที่สุด เมื่อเราพบสินค้าที่ท่านต้องการแล้ว. "
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


    });

</script>
@endif



<script type="text/javascript">

 $('.add_subscribe_btn').click(function(e){
       e.preventDefault();
     //  var username = $('form#cutproduct input[name=id]').val();


     var $form = $(this).closest("form#add_subscribe");
     var formData =  $form.serializeArray();


     var email =  $form.find("#subscribe_email").val();

     //Checkemail(email);

     var emailFilter=/^.+@.+\..{2,3}$/;






     if (!(emailFilter.test(email))) {

      console.log(email);

            $.notify({
          // options
          icon: 'icon_set_1_icon-77',
          title: "<h4>รูปแบบ Email ของท่านไม่ถูกต้องค่ะ</h4> ",
          message: "กรุณาทำการตรวจสอบ Email ของท่านด้วย. "
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

           return false;
     }


       if(email){
         $.ajax({
           type: "POST",
           url: "{{url('add_subscribe')}}",
           headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}' },
           data: "email="+email,
        success: function(data){

          console.log(data.data.status);

            if(data.data.status == 1001) {


               $("#subscribe_email").val('');


            $.notify({
          // options
          icon: 'icon_set_1_icon-57',
          title: "<h4>ข้อความถูกส่งเรียบร้อยแล้ว</h4> ",
          message: "เจ้าหน้าที่จะรีบทำการติดต่อกลับไปหาท่านโดยไวที่สุด เมื่อเราพบสินค้าที่ท่านต้องการแล้ว. "
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
          icon: 'icon_set_1_icon-77',
          title: "<h4>อีเมลของท่านอยู่ในระบบอยู่แล้ว</h4> ",
          message: "email ของท่านอยุ่ในระบบอยู่แล้ว กรุณาติดต่อเราในช่องทางอื่น. "
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
          icon: 'icon_set_1_icon-77',
          title: "<h4>กรอกข้อมูลไม่ครบค่ะ</h4> ",
          message: "กรอกข้อมูลให้ครบทุกช่องด้วยนะค่ะ เพื่อความสะดวกในการติดต่อกลับ. "
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
