@extends('layouts.template')

@section('title')
ค้นหาร้านวัสดุก่อสร้าง - kozang
@stop

@section('stylesheet')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
@stop('stylesheet')
@section('content')

<style>
#map {
  width: 100%;
  height: 450px;
}
.see-all-overlay {
    top: 3%;
    position: absolute;
    background: rgba(0,0,0,.5);
    color: #fff;
    width: 94%;
    height: 97%;
    text-align: center;
    display: table;
    background-color: rgba(0,0,0,.5);
    transition: all 250ms ease-in-out;
    -ms-transition: all 250ms ease-in-out;
    text-decoration: none;
    text-transform: uppercase;
}

.set_preview{
    max-height: 184px; overflow: hidden; position: relative;
}
@media screen and (max-width: 767px){

    .set_preview{
        max-height: 220px; max-height: 300px; overflow: hidden; position: relative;
}

    .thumbnail a>img, .thumbnail>img {
    width: 100%;
    margin-right: 0px;
    margin-left: 0px;
}

    .img-responsive{
        width: 100%;
    }

    .see-all-overlay {
    top: 0%;
    position: absolute;
    background: rgba(0,0,0,.5);
    color: #fff;
    width: 94%;
    height: 100%;
    text-align: center;
    display: table;
    background-color: rgba(0,0,0,.5);
    transition: all 250ms ease-in-out;
    -ms-transition: all 250ms ease-in-out;
    text-decoration: none;
    text-transform: uppercase;
}

}
.see-all-overlay-text {
    font-size: 14px;
    display: table-cell;
    vertical-align: middle;
    letter-spacing: normal;
    font-weight: 800;
}
/* secure_url */
</style>

<section class="parallax-window" style="min-height: 270px;" data-parallax="scroll" data-image-src="{{url('img/geometic-bg-green.png')}}" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-2">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8" style="margin-top:20px;">



                    <span class="rating">

                    <?php
                                  for($i=1;$i <= $max;$i++){
                                  ?>

                                                  <i class="icon-star voted"></i>
                                  <?php
                                  }
                                  ?>

                                  <?php
                                  $total = 5;
                                  $total -= $max;

                                  for($i=1;$i <= $total;$i++){
                                  ?>

                                                <i class="icon-star-empty"></i>
                                  <?php
                                  }
                                  ?>
                        </span>



                    <h1>{{$objs->names}} </h1>
                    <span>{{$objs->keyword}}</span>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div id="price_single_main" class="hotel">
                        {{trans('message.view_sum')}} <span><sup></sup>{{number_format($objs->view)}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <div id="position">
        <div class="container">
                    <ul>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>{{$objs->names}}</li>
                    </ul>
        </div>
</div>





            <div class="container margin_60">



              <div class="row">
                      <div class="col-md-10 col-md-offset-1" id="single_tour_desc">

            
                      

<style>

.grid-wrapper > div {
	display: flex;
	justify-content: center;
	align-items: center;
}
.grid-wrapper > div > img {
	width: 100%;
	height: 100%;
	object-fit: cover;
	border-radius: 5px;
}

.grid-wrapper {
	display: grid;
	grid-gap: 10px;
	grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
	grid-auto-rows: 200px;
	grid-auto-flow: dense;
}
.grid-wrapper .wide {
	grid-column: span 2;
}
.grid-wrapper .tall {
	grid-row: span 2;
}
.grid-wrapper .big {
	grid-column: span 2;
	grid-row: span 2;
}


</style>
                      


                      <div class="grid-wrapper magnific-gallery">
                        @if(isset($home_image))
                        @foreach($home_image as $u)
	<div>

		<img src="{{url('assets/image/cusimage/'.$u->image)}}" alt="" />

	</div>
  @endforeach
	@endif

</div>


<div class="row magnific-gallery">
if(count(home_image) == 0)

<div class="col-md-12">

<a class="example-image-link" href="{{url('assets/image/cusimage/'.$objs->image)}}" >
<img class="img-responsive example-image" src="{{url('assets/image/cusimage/'.$objs->image)}}" alt=""></a>
</div>



@else
</div>













                          <hr>


                          <style>

figure {
  margin: 0;
  display: grid;
  grid-template-rows: 1fr auto;
  margin-bottom: 10px;
  break-inside: avoid;
}

figure > img {
  grid-row: 1 / -1;
  grid-column: 1;
}


figcaption {
  grid-row: 2;
  grid-column: 1;
  background-color: rgba(255,255,255,.5);
  padding: .2em .5em;
  justify-self: start;
}
.container_img {
  column-count: 3;
  column-gap: 10px;
}

                          </style>


                          <div class="row">
                              <div class="col-md-3">
                                  <h3>{{trans('message.detail_pro')}}</h3>
                              </div>

                              <div class="col-md-9">

                              <p style="font-size:16px;" align="justify">
                                  {!! $objs->details !!}
                                </p>



                                  <h4>{{trans('message.con_shop')}}</h4>
                                  <p><b>ที่อยู่ร้าน :</b> {{$objs->address}} </p>
                                  <div class="row">
                                      <div class="col-md-6 col-sm-6">
                                          <ul class="list_ok">
                                              <li><i class="fa icon-desktop"></i> : {{$objs->website}}</li>
                                              <li><i class="fa icon-mail-2"></i> : {{$objs->email}}</li>
                                              <li><i class="fa icon-phone"></i> : {{$objs->phone}}</li>
                                              <li><i class="fa icon-facebook"></i> : {{$objs->facebook}}/</li>

                                          </ul>
                                      </div>
                                      <div class="col-md-6 col-sm-6">
                                          <ul class="list_ok">
                                              <li><i class="fa icon-comment-empty"></i> Line : {{$objs->line_id}}</li>
                                              <li><i class="fa icon-instagramm"></i> : {{$objs->instagram}}</li>


                                          </ul>
                                      </div>



                                  </div><!-- End row  -->

              <hr>

              <div class="row">
                <div class="col-md-12">
                <div id="map" style="width:100%; border:0; height:416px;" frameborder="0"></div>
                </div>
              </div>




              <hr>


                                  <div class="row">
                                      <div class="col-md-4" style="margin-top:-12px; width: 33.33333333%; float:left;">
                                  <h4>Social share</h4>
                              </div>
                                      <div class="col-md-8" >
                                        <div class="fb-like" data-href="https://kozang.com/shop/{{$objs->id_p}}" data-layout="button_count" data-action="recommend" data-size="small" data-show-faces="true" data-share="true"></div>
                                      </div>


                                       </div>



                              </div><!-- End col-md-9  -->

                              <div class="col-md-12"><hr></div>

                              <div class="col-md-3">
                                  <h3>คะแนนของร้านค้า</h3>
                                  <a href="#" class="btn_1 add_bottom_30" data-toggle="modal" data-target="#myReview">รีวิวร้านค้า</a>
                              </div>

                              <div class="col-lg-9">
                                  <div id="general_rating">{{ $count_star }} รีวิว

                                  <div class="rating">
                                      <?php
                                  for($i=1;$i <= $max;$i++){
                                  ?>

                                                  <i class="icon-star voted"></i>
                                  <?php
                                  }
                                  ?>

                                  <?php
                                  $total = 5;
                                  $total -= $max;

                                  for($i=1;$i <= $total;$i++){
                                  ?>

                                                <i class="icon-star-empty"></i>
                                  <?php
                                  }
                                  ?>
                                      </div>

                                  </div>
                                  <hr>

                                  @if(isset($review))
              @foreach($review as $u)
              <div class="review_strip_single">
								<img src="{{ url('assets/images/avatar/'.$u->avatar) }}" alt="Image" class="rounded-circle" style="max-width:75px; max-height:75px;">
								<small> - {{ formatDateThat($u->created_at) }} -</small>
								<h4>{{ $u->name }}</h4>
								<p>
									"{{ $u->comment }}"
								</p>
								<div class="rating">
                <?php
            for($i=1;$i <= $u->star;$i++){
            ?>

                            <i class="icon-star voted"></i>
            <?php
            }
            ?>

            <?php
            $total = 5;
            $total -= $u->star;

            for($i=1;$i <= $total;$i++){
            ?>

                           <i class="icon-star-empty"></i>
            <?php
            }
            ?>
								</div>
							</div>
              @endforeach
              @endif

              {{ $review->links() }}
                              </div>


                              <div class="modal fade" id="myReview" tabindex="-1" aria-labelledby="myReviewLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="myReviewLabel">เขียนรีวิวร้านค้านี้</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                 
                  <form method="post" action="{{ url('post_review_shop') }}" name="review_tour" >
                  {{ csrf_field() }}
                    <input name="pro_id" id="tour_name" type="hidden" value="{{ $objs->id_p }}">

                    <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input name="name_review"  type="text" placeholder="ชื่อผู้ใช้งาน" class="form-control">
                      </div>
                    </div>
                  </div>
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>ให้คะแนนสินค้า</label>
                          <select class="form-control" name="star" id="position_review">
                            <option value="">เลือกดาวให้กับร้านค้า</option>
                            <option value="1">1 ดาว แย่มาก </option>
                            <option value="2">2 ดาว ราคาเหมาะสม</option>
                            <option value="3">3 ดาว เฉยๆกับสินค้านี้</option>
                            <option value="4">4 ดาว รู้สึกดี</option>
                            <option value="5">5 ดาว ยอดเยี่ยมมาก</option>
                          </select>
                        </div>
                      </div>
                  
                    </div>
                    
                    
                    <!-- End row -->
                    <div class="form-group">
                      <textarea name="comment" id="review_text" class="form-control" style="height:100px" placeholder="แสดงความเห็นเกี่ยวกับร้านค้านี้"></textarea>
                    </div>
                    <div class="form-group">
                    <div class="row" style="padding-left:18px;">
                        <div class="col-md-12">
                            <div >
                                <div class="g-recaptcha" data-sitekey="6LdQnlkUAAAAAOfsIz7o-U6JSgrSMseulLvu7lI8"></div>
                                <br>
                            </div>
                        </div>
                    </div>
                    </div>
                    <input type="submit" value="บันทึกข้อมูล" class="btn_1" id="submit-review">
                  </form>
                </div>
              </div>
            </div>
          </div>


                          </div><!-- End row  -->











                          <hr>

                          <div class="row">
                            <div class="col-md-12">
                              <h4>{{trans('message.if_like')}}</h4>
                            </div>


                            <style>
                            .descript-t {
                                float: right;
                                height: 40px;
                            }
                            .rating {
                                  font-size: 16px;
                              }
                            </style>





                            @if($ran)
                            @foreach($ran as $rans)

                            <div class="col-md-4">

                              <div class="thumbnail a_sd_move">
                                        <div class="set_preview">
                                        <a href="{{url('shop/'.$rans->id_p)}}">

                                        <img src="{{url('assets/image/cusimage/'.$rans->images_shop11)}}" alt="{{$rans->name}}">

                                        </a></div>
                                        <div class="caption" style="padding: 3px;">
                                          <div class="descript bold">
                                              <a href="{{url('shop/'.$rans->id_p)}}">{{ $rans->names }}</a>
                                          </div>
                                          <div class="descript" style="padding-bottom: 5px;color: #777; font-size: 12px;border-bottom: 1px dashed #dff0d8;">
                                          {{ $rans->name_c }}                       </div>

                                          <div class="descript" style="height: 20px;">
                                            <span style="color: #777; font-size: 12px;"><i class="fa fa-heart " style="color:#e04f67"></i> {{$rans->view}}</span>
                                            <div class="descript-t">
                                            <div class="postMetaInline-authorLockup">




                                              <div class="rating">

                                                <?php
                                                for($i=1;$i <= $rans->rating;$i++){
                                                ?>

                                                                          <i class="fa fa-star voted"></i>
                                                  <?php
                                                  }
                                                  ?>

                                                <?php
                                                $total = 5;
                                                $total -= $rans->rating;

                                                for($i=1;$i <= $total;$i++){
                                                ?>

                                                                         <i class="fa fa-star-o"></i>
                                                  <?php
                                                  }
                                                  ?>
                                              <span style="color: #777; font-size: 12px;">{{$rans->rating}}.0</span>
                                              </div>




                                                                  <!--            <div class="rating">
                                                  <i class="fa fa-star voted"></i>
                                                  <i class="fa fa-star voted"></i>
                                                  <i class="fa fa-star voted"></i>
                                                  <i class="fa fa-star voted"></i>
                                                  <i class="fa fa-star-o"></i>
                                                  <span style="color: #777; font-size: 12px;">4.0</span>
                                              </div> -->

                                            </div>
                                            </div>
                                          </div>

                                        </div>
                                      </div>

                            </div>



                            @endforeach
                            @endif









                          </div>


                          <hr>




                      </div><!--End  single_tour_desc-->
                      <style type="text/css">
                      tr.other_tours1 td a {
                          color: #333;
                          text-decoration:none;
                      }
                      tr.other_tours1 td a:hover{color:#e04f67}
                      </style>


                   
                  </div>





</div>

<style>
.candidate-info{
  padding-top: 10px;
  text-align: center;
}
</style>


@endsection

@section('scripts')


<script src='https://www.google.com/recaptcha/api.js?hl=th'></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script language=javascript src='https://maps.google.com/maps/api/js?key=AIzaSyDawi5qne05jM6TOClvpuN673ChaNoMVxs&callback=initMap'></script>
<script src="{{url('js/markerclusterer.js')}}"></script>
<script>
    function initialize() {
        var center = new google.maps.LatLng({{$objs->lat}}, {{$objs->long}});

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: center,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var markers = [];
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng({{$objs->lat}}, {{$objs->long}})
        });
        markers.push(marker);

        var options = {
            imagePath: 'images/m'
        };

        var markerCluster = new MarkerClusterer(map, markers, options);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>

@if ($message = Session::get('add_error'))
<script type="text/javascript">

$(document).ready(function(){


  swal("กรุณากรอกข้อมูล รีวิว ให้ครบ");
  
  
  
    });
</script>
@endif


@if ($message = Session::get('add_success'))
<script type="text/javascript">

$(document).ready(function(){


  swal("เพิ่มข้อมูลสำเร็จ!", "กรุณารอสักครู่ เพื่อการตรวจสอบของระบบ", "success");
  

  
    });
</script>
@endif


  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v3.0&appId=605342047539353&autoLogAppEvents=1';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>


  <script type="text/javascript">

      $('form#cutproduct2').on('submit',function(e){
            e.preventDefault();
            var username = $('form#cutproduct2 input[name=id]').val();

            if(username){
              $.ajax({
                type: "POST",
                async: true,
                url: "{{url('add_wishlist')}}",
                headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                data: "id="+username,
                dataType: "json",
             success: function(json){
               if(json.status == 1001) {


                 $.notify({
                  // options
                  icon: '',
                  title: "<h4>เพิ่มรายการที่ชอบ สำเร็จ</h4> ",
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
