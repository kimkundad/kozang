@extends('layouts.template')

@section('title')
TEENEEJJ - ตลาดนัดสวนจตุจักร
@stop

@section('stylesheet')
<link rel="stylesheet" href="{{url('css/bootstrap-social.css')}}" />
<link rel="stylesheet" href="{{url('css/font-awesome.css')}}" />
@stop('stylesheet')
@section('content')



<style>

.alert-success {
    color: #fff;
    background-color: #5cb85c;
    border-color: #4cae4c;
}
.close{
    color: #fff;
    text-decoration: none;
    cursor: pointer;
    filter: alpha(opacity=50);
    opacity: .9;
}

.thumb_cart img {
    padding: 1px;
    width: auto;
    height: 58px; 
}
/* secure_url */
</style>


<section id="hero_2">
		<div class="intro_title animated fadeInDown">
			<h1>ทำการสั่งซื้อ</h1>
			<div class="bs-wizard">

				<div class="col-xs-3 bs-wizard-step active">
					<div class="text-center bs-wizard-stepnum">Cart</div>
					<div class="progress">
						<div class="progress-bar"></div>
					</div>
					<a href="{{url('cart')}}" class="bs-wizard-dot"></a>
				</div>

				<div class="col-xs-3 bs-wizard-step disabled">
					<div class="text-center bs-wizard-stepnum">Shipping</div>
					<div class="progress">
						<div class="progress-bar"></div>
					</div>
					<a href="{{url('shipping/')}}" class="bs-wizard-dot"></a>
				</div>

				<div class="col-xs-3 bs-wizard-step disabled">
					<div class="text-center bs-wizard-stepnum">Payment</div>
					<div class="progress">
						<div class="progress-bar"></div>
					</div>
					<a href="{{url('payment')}}" class="bs-wizard-dot"></a>
				</div>

        <div class="col-xs-3 bs-wizard-step disabled">
					<div class="text-center bs-wizard-stepnum">Complete</div>
					<div class="progress">
						<div class="progress-bar"></div>
					</div>
					<a href="{{url('confirmation')}}" class="bs-wizard-dot"></a>
				</div>

			</div>
			<!-- End bs-wizard -->
		</div>
		<!-- End intro-title -->
	</section>

  <div id="position">
			<div class="container">
				<ul>
					<li><a href="{{url('/')}}">{{ trans('message.index') }}</a></li>
					<li>รถเข็น
					</li>

				</ul>
			</div>
		</div>



    <div class="container margin_60">

      <div class="row">

        <div class="col-md-8">
          <table class="table table-striped cart-list add_bottom_30">
						<thead>
							<tr>
								<th>
                                สินค้า
								</th>
								<th>
                                จำนวน
								</th>
								<th>
                                ส่วนลด
								</th>
								<th>
                                ราคารวม
								</th>
								<th>
                                แอคชั่น
								</th>
							</tr>
						</thead>
						<tbody>
              <?php
              $total = 0;
              $shipping_price = 0;
              $sum = 0;
               ?>
              @if(Session::get('cart') != null)
              <?php
              $cart = session()->get('cart');

               ?>


               @foreach ($cart as $product_item)
               <form  method="POST" id="my_form{{$product_item['id']}}" action="{{url('updateCart')}}">
                 {{ csrf_field() }}
               <input type="hidden" name="id"  value="{{$product_item['id']}}"/>
							<tr>
								<td>
									<div class="thumb_cart">
										<img src="{{url('assets/image/product/'.$product_item['image'])}}">
									</div>
									<span class="item_cart" style="display: contents;">{{$product_item['name_product']}}</span>
								</td>
								<td>
									<div class="numbers-row">
										<input type="text" value="{{$product_item['qty']}}" class="qty2 form-control" name="quantity">
									<div class="inc button_inc">+</div><div class="dec button_inc">-</div></div>
								</td>
								<td>
									0%
								</td>
								<td>
									<strong>฿{{number_format($product_item['price']*$product_item['qty'])}}</strong>
								</td>
								<td class="options">
									<a href="{{url('/deleteCart/'.$product_item['id'])}}" ><i class=" icon-trash"></i></a>
                  <a href="javascript:{}" onclick="document.getElementById('my_form{{$product_item['id']}}').submit();"><i class="icon-ccw-2"></i></a>
								</td>
							</tr>



              <?php
                $sum += $product_item['qty'];
                $total += ($product_item['qty'] * $product_item['price']);
                $shipping_price += ($product_item['qty'] * $product_item['shipping_price']);
               ?>
               </form>
              @endforeach


              @endif


						</tbody>
					</table>
        </div>


        <aside class="col-md-4">
          <div class="box_style_1">
						<h3 class="inner">- ผลรวมทั้งหมด -</h3>
						<table class="table table_summary">
							<tbody>
              <tr>
                <td colspan="2">
                  @if(count($objs)> 0)
                <div class="form-group" >
									<select class="form-control" id="my_code" name="country_order" id="country" >
										<option value="" selected="">--เลือกโค้ดส่วนลด--</option>
                    @if(isset($objs))
                      @foreach($objs as $u)
                      <option value="{{ $u->idp }}" >{{ $u->name }} ลด {{ $u->detail }}%</option>
                      @endforeach
                    @endif
									</select>
                                    
								</div>
                @else
                <div class="form-group" >
									<select class="form-control" name="country_order" id="country"  disabled>
										<option value="" selected="">--เลือกโค้ดส่วนลด--</option>

									</select>
                                    
								</div>
                @endif
                </td>
              </tr>

                <?php
                  $price_s = 0;
                ?>

                @if(Session::get('vouchers_value') != null)
                <tr>
									<td>
                    ใช้โค้ดส่วนลด
									</td>
									<td class="text-right">
										{{ Session::get('vouchers_name') }} <br> ( ส่วนลด {{ Session::get('vouchers_value') }}% )
									</td>
								</tr> 
                @endif

                

								<tr>
									<td>
                                    จำนวนสินค้า
									</td>
									<td class="text-right">
										{{$sum}}
									</td>
								</tr>
								<tr>
									<td>
										ค่าจัดส่ง
									</td>
									<td class="text-right">
										฿{{$shipping_price}}
									</td>
								</tr>

								
                @if(Session::get('vouchers_value') != null)
                <tr class="text-info">
									<td>
                   ส่วนลดรวม
									</td>
									<td class="text-right">
                    
										-{{ ceil(((($total+$shipping_price)*Session::get('vouchers_value'))/100)) }}

                    <?php 
                     $Sum = ceil(((($total+$shipping_price)*Session::get('vouchers_value'))/100));
                    ?>

									</td>
								</tr>
                <tr class="total">
									<td>
										ราคารวม
									</td>
									<td class="text-right">
                    
										฿{{$total+$shipping_price-$Sum}}

									</td>
								</tr>
                @else
                <tr class="total">
									<td>
                   ราคารวม
									</td>
									<td class="text-right">
                    
										฿{{$total+$shipping_price}}

									</td>
								</tr>
                @endif
							</tbody>
						</table>
						<a class="btn_full" style="font-size:15px" href="{{url('shipping/')}}">สั่งสินค้า</a>
						<a class="btn_full_outline" style="font-size:15px" href="{{url('/')}}"><i class="icon-right"></i> กลับไปเลือกสินค้า</a>
					</div>

          <div class="box_style_2">
      			<i class="icon_set_1_icon-57"></i>
      			<h4>{{ trans('message.want') }} <span>{{ trans('message.help') }}</span></h4>
      			<a href="tel://004542344599" class="phone">086 551 7336</a>
      			<small>{{ trans('message.con_t') }}</small>
      		</div>

        </aside>

      </div>






</div>



@endsection

@section('scripts')


<script type="text/javascript">

$(document).ready(function(){

document.getElementById('my_code').addEventListener('change', function() {

console.log('You selected: ', this.value);

              $.ajax({
                  type: "POST",
                  async: true,
                  url: "{{url('add_vouchers_cart')}}",
                  headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                  data: "id="+this.value,
                  dataType: "json",
               success: function(json){
                 if(json.data.status == 200) {


                  location.reload();
                  


                  }
                  },
                  failure: function(errMsg) {
                    alert(errMsg.Msg);
                  }
                  
                });


});
});

</script>


@if ($message = Session::get('add_success'))
<script type="text/javascript">

$(document).ready(function(){


  
  $.notify({
   // options
   icon: '',
   title: "<h4>เพิ่มสินค้า สำเร็จ</h4> ",
   message: "ท่านสามารถเข้า เลือกซื้อสินค้าต่อได้ตามใจชอบ . "
  },{
   // settings
   type: 'success',
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




@stop('scripts')
