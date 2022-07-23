<footer class="revealed" >
        <div class="container">

        <style>

a#phone, a#line_id {
    display: block;
    position: relative;
    color: #fdf7ac;
    font-size: 16px;
    padding-left: 40px;
    margin: 20px 0;
}
a#line_id:before {
    font-size: 28px;
    content:"\75";
    left: 0;
    top: 5px;
}
a#line_id:before {
    font-style: normal;
    font-weight: 400;
    font-family: "icon_set_1";
    position: absolute;
}
        </style>
          <div class="row">
              <div class="col-md-4 col-sm-3">
              <a href="{{url('/')}}"><img src="{{url('img/logo.png')}}" height="54" alt="kozang" data-retina="true" class="logo_normal"></a>
                  <h3>Need help?</h3>
                  <a href="tel://086 551 7336" id="phone">086 551 7336</a>
                  <a href="#" id="email_footer">Contact@wiseboq.com</a>
                  <a href="#" id="line_id">LINE ID : Wiseboq</a>
              </div>
              <div class="col-md-2 col-sm-3">
                  <h3>About</h3>
                  <ul>
                    

                      @if (Auth::guest())
                      <li><a href="{{url('/login')}}">{{ trans('message.signin') }}</a></li>
                      @else
                      <li>{{ substr(Auth::user()->name,0,15) }}</li>
                      @endif


                     

                      <li><a href="{{url('/about_us')}}">เกี่ยวกับเรา</a></li>
                       <li><a href="{{url('/contact_us')}}">{{ trans('message.contact_us') }}</a></li>
                  </ul>
              </div>
              <div class="col-md-2 col-sm-3">
                  <h3>Discover</h3>
                  <ul>
                      <li><a href="{{url('/privacy')}}">นโยบายความเป็นส่วนตัว</a></li>
                      <li><a href="{{url('/terms')}}">ข้อกำหนดของบริการ</a></li> 
                      <li><a href="{{url('/delete_account')}}">การลบข้อมูลผู้ใช้</a></li> 

                  </ul>
             <!--   <h3>Languages</h3>
                <select class="form-control" name="lang" id="lang">
                            <option value="{{ URL::to('change/th') }}"
                            @if(trans('message.lang') == 'ไทย')
                            selected=""
                            @endif
                            >ภาษาไทย</option>
                            <option value="{{ URL::to('change/en') }}" @if(trans('message.lang') == 'Eng')
                            selected=""
                            @endif>English</option>
                           
                        </select> -->
              </div>
              <div class="col-md-4 col-sm-3">
                  <h3>Fanpage</h3>
                 <div class="fb-page" data-href="https://www.facebook.com/Kozang-%E0%B8%A3%E0%B8%A7%E0%B8%9A%E0%B8%A3%E0%B8%A7%E0%B8%A1%E0%B8%A7%E0%B8%B1%E0%B8%AA%E0%B8%94%E0%B8%B8%E0%B8%81%E0%B9%88%E0%B8%AD%E0%B8%AA%E0%B8%A3%E0%B9%89%E0%B8%B2%E0%B8%87%E0%B8%97%E0%B8%B1%E0%B9%88%E0%B8%A7%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%97%E0%B8%A8-109951878451000" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
                   <blockquote cite="https://www.facebook.com/Kozang-%E0%B8%A3%E0%B8%A7%E0%B8%9A%E0%B8%A3%E0%B8%A7%E0%B8%A1%E0%B8%A7%E0%B8%B1%E0%B8%AA%E0%B8%94%E0%B8%B8%E0%B8%81%E0%B9%88%E0%B8%AD%E0%B8%AA%E0%B8%A3%E0%B9%89%E0%B8%B2%E0%B8%87%E0%B8%97%E0%B8%B1%E0%B9%88%E0%B8%A7%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%97%E0%B8%A8-109951878451000" class="fb-xfbml-parse-ignore">
                     <a href="https://www.facebook.com/Kozang-%E0%B8%A3%E0%B8%A7%E0%B8%9A%E0%B8%A3%E0%B8%A7%E0%B8%A1%E0%B8%A7%E0%B8%B1%E0%B8%AA%E0%B8%94%E0%B8%B8%E0%B8%81%E0%B9%88%E0%B8%AD%E0%B8%AA%E0%B8%A3%E0%B9%89%E0%B8%B2%E0%B8%87%E0%B8%97%E0%B8%B1%E0%B9%88%E0%B8%A7%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%97%E0%B8%A8-109951878451000">Wiseboq ให้บริการสืบราคา-สั่งซื้อ วัสดุก่อสร้าง ออนไลน์</a>
                   </blockquote></div>
              </div>
          </div><!-- End row -->


            <div class="row">
                <div class="col-md-12">
                  <div id="social_footer">
                      <ul>
                          <li><a href="https://www.facebook.com/Kozang-%E0%B8%A3%E0%B8%A7%E0%B8%9A%E0%B8%A3%E0%B8%A7%E0%B8%A1%E0%B8%A7%E0%B8%B1%E0%B8%AA%E0%B8%94%E0%B8%B8%E0%B8%81%E0%B9%88%E0%B8%AD%E0%B8%AA%E0%B8%A3%E0%B9%89%E0%B8%B2%E0%B8%87%E0%B8%97%E0%B8%B1%E0%B9%88%E0%B8%A7%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%97%E0%B8%A8-109951878451000"><i class="icon-facebook"></i></a></li>
                          <li><a href="#"><i class="icon-twitter"></i></a></li>
                          <li><a href="#"><i class="icon-google"></i></a></li>
                          <li><a href="#"><i class="icon-instagram"></i></a></li>

                      </ul>
                      <p>© Kozang 2022</p>
                  </div>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </footer><!-- End footer -->

	<div id="toTop" style="display: none;"></div><!-- Back to top button -->
