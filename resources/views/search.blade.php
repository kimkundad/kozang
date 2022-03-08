@extends('layouts.template')

@section('title')
TEENEEJJ - ตลาดนัดสวนจตุจักร
@stop

@section('stylesheet')


@stop('stylesheet')
@section('content')

<style>
#map {
  width: 100%;
  height: 450px;
}
.candidate-info{
  padding-top: 10px;
  text-align: center;
}



</style>
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
                                    <input class="form-control pac-target-input" type="text" name="term" value="{{ $term }}" placeholder="จังหวัด..." id="autocomplete">
                                    <i class="icon-pin-outline"></i>
                                </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group">
                                    <input class="form-control pac-target-input" type="text" name="shop_name" value="{{ $search }}" placeholder="ชื่อร้านวัสดุก่อสร้าง..."  >
                                  
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



    <div class="container margin_60">
      <div class="row">

        <div class="col-lg-9 col-md-9 col-md-offset-2">
         

          <div id="tools">
               <div class="row">
               	<div class="col-md-12">
                  <p style="margin: 8px 0 5px 5px;"> จำนวนการค้นหาทั้งหมด ({{ count($objs) }})</p>
                </div>


            	</div>
          </div>



    <div class="infinite-scroll">
          @if($objs)
          @foreach($objs as $option)

          <div class="strip_all_tour_list wow fadeIn  animated" >
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="wishlist">
                    <form id="cutproduct" class="typePay2 " novalidate="novalidate" action="" method="post" role="form">
                        <input class="user_id form hide" type="text" name="id" value="30">
                        <a class="tooltip_flip tooltip-effect-1">
                        +<span class="tooltip-content-flip">
                        <span class="tooltip-back">Add to wishlist</span></span>
                        </a>
                    </form>
                  </div>
                            <div class="img_list"><a href="{{url('shop/'.$option->id)}}">
                            <img src="{{url('assets/image/cusimage/'.$option->image)}}" alt="a.m.p clothing">
                            <!--<div class="ribbon top_rated"></div>-->
                            <div class="short_info"></div>
                            </a>
                            </div>
                </div>
                <div class="clearfix visible-xs-block"></div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <div class="tour_list_desc">

                        <div id="score">Superb<span>{{$option->rating}}.0</span></div>
                        <div class="rating">

                          <?php
                          for($i=1;$i <= $option->rating;$i++){
                          ?>

                                                    <i class="icon-star voted"></i>
                            <?php
                            }
                            ?>

                          <?php
                          $total = 5;
                          $total -= $option->rating;

                          for($i=1;$i <= $total;$i++){
                          ?>

                                                   <i class="icon-star-empty"></i>
                            <?php
                            }
                            ?>

                        </div>

                              <h3><strong>{{$option->name}}</strong></h3>
                              <p>{!!mb_substr(strip_tags($option->detail),0,150,'UTF-8')!!}...</p>
                              <ul class="add_info">
                                <li>
                                    <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="" data-original-title="{{$option->phone}}"><i class="fa icon-phone"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="" data-original-title="{{$option->facebook}}"><i class="fa icon-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="" data-original-title="ID Line : {{$option->line_id}}"><i class="fa icon-comment-empty"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="" data-original-title="{{$option->email}}"><i class="fa icon-mail-2"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="" data-original-title="{{$option->website}}"><i class="fa icon-desktop"></i></a>
                                </li>
                              </ul>
                          </div>
                      </div>

                      <div class="col-lg-2 col-md-2 col-sm-2">
                          <div class="price_list">
                            <div>{{number_format($option->view)}}<span class="normal_price_list"></span><small>*ยอดเข้าชม</small>
                            <p><a href="{{url('shop/'.$option->id)}}" class="btn_1">ดูรายละเอียด</a></p>
                            </div>
                          </div>
                      </div>
                        </div>
                    </div>


                    @endforeach
                    @endif



                    {{ $objs->links() }}

      </div>


        </div>

      </div>
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



@stop('scripts')
