@extends('layouts.template')

@section('title')
TEENEEJJ - ตลาดนัดสวนจตุจักร
@stop

@section('stylesheet')
<style>
    .main_title p {
    line-height: 24px;
    font-size:16px;
}
</style>
@stop('stylesheet')
@section('content')


<section class="parallax-window" data-parallax="scroll" data-image-src="{{url('img/geometic-bg-green.png')}}" data-natural-width="1400" data-natural-height="370">
            <div class="parallax-content-1">
              <div class="animated fadeInDown">
                <h1>เกี่ยวกับเรา Kozang.com</h1>
              </div>
            </div>
        </section>

        <div id="position">
            	<div class="container">
                        	<ul>
                            <li><a href="{{url('/')}}">{{ trans('message.index') }}</a></li>
                            <li><a href="#">เกี่ยวกับเรา</a></li>

                            </ul>
                </div>
            </div>


            <div class="container margin_60">



    <div class="row add_bottom_45">

      <div class="col-md-12">

        <div class="main_title">
            <h2>Kozang<span> แหล่งค้นหาร้านวัสดุก่อสร้าง </span></h2>
           

        </div>

        <p class="text-center">เรารวบรวมร้านวัสดุก่อสร้าง แหล่งรวมข้อมูลธุรกิจออนไลน์ที่มากที่สุด สามารถค้นหาข้อมูลสินค้าและบริการ ข้อมูลแผนที่ธุรกิจได้ทันที รองรับทั้งภาษาไทยและภาษาอังกฤษ
             อิฐบล็อก อิฐมอญ อิฐมวลเบา หินก่อสร้าง หินเบอร์ ทรายก่อสร้าง ขายส่ง ปูนก่อ ปูนฉาบ ปูนมอตาร์ เซเม็กซ์สีเขียว cemex, ปูนราชสีห์, ปูนดอกบัว,
             ปูนทีพีไอ, ปูนอินทรีแดง, ปูนอิฐมวลเบา ปูนควิกโคท ตราลูกดิ่ง ปูนสำเร็จรูป สั่งคอนกรีต รามอินทรา น่ำเฮงคอนกรีต คอนกรีตผสมเสร็จ</p>


             <div class="row">
				<div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
					<div class="feature">
						<i class="icon_set_1_icon-30"></i>
						<h3><span>+ 1000</span> ผู้ใช้งาน</h3>
						<p>
							Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
						</p>
					</div>
				</div>
				<div class="col-lg-6 wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
					<div class="feature">
						<i class="icon_set_1_icon-41"></i>
						<h3><span>+120k</span> ร้านวัสดุก่อสร้าง</h3>
						<p>
							Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
						</p>
					</div>
				</div>
			</div>


            <div class="row">
				<div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
					<div class="feature">
						<i class="icon_set_1_icon-57"></i>
						<h3><span>ติดต่อ</span> เพิ่มร้านค้า</h3>
						<p>
							Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
						</p>
					</div>
				</div>
				<div class="col-lg-6 wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
					<div class="feature">
						<i class="icon_set_1_icon-61"></i>
						<h3><span>ร้านวัสดุก่อสร้าง</span> ที่มากที่สุด</h3>
						<p>
							Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
						</p>
					</div>
				</div>
			</div>


            
        



      </div>


    </div>


</div>



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

  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var msg = document.getElementById("comments").value;
  var phone = document.getElementById("phone").value;


    console.log(formData)

if(name == '' || msg == '' || email == '' || phone == ''){

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
      url: "{{url('/api/add_contact')}}",
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

            $("#name").val('');
            $("#comments").val('');
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



@stop('scripts')
