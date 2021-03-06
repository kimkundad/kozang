@extends('layouts.template')

@section('title')
ค้นหาร้านวัสดุก่อสร้าง - kozang
@stop

@section('stylesheet')

@stop('stylesheet')


@section('content')


<section class="parallax-window" data-parallax="scroll" data-image-src="{{url('img/bg_kozang.jpg')}}" data-natural-width="1400" data-natural-height="370">
            <div class="parallax-content-1">
              
            </div>
        </section>

        <div id="position">
            	<div class="container">
                        	<ul>
                            <li><a href="{{url('/')}}">{{ trans('message.index') }}</a></li>
                            <li><a href="#">ข้อกำหนดและเงื่อนไขในการใช้งาน</a></li>

                            </ul>
                </div>
            </div>


            <div class="container margin_60">

    <div class="main_title">
        <h2>ข้อกำหนดและเงื่อนไขในการใช้งาน </span></h2>
        <br>
        <p> ข้อกำหนดและเงื่อนไขในการใช้งาน kozang ฉบับนี้ ("ข้อกำหนดและเงื่อนไขฯ") ได้ระบุถึงข้อกำหนดและเงื่อนไขในการใช้งานผลิตภัณฑ์และบริการใดๆ (เรียกรวมกันว่า “บริการฯ”) ของ TeeNeeJJแก่ผู้ใช้บริการ (โดยแต่ละรายเรียกว่า "ผู้ใช้" หรือ “ผู้ใช้รายต่างๆ” ขึ้นอยู่กับเนื้อหา)</p>
    </div>




        <div class="row">
            <div class="col-md-12">
                <h3>1.คำนิยาม</h3>
                <p>1.1 "เนื้อหา" หมายถึง ข้อมูลต่างๆ เช่น ข้อความ เสียง เพลง รูปภาพ วิดีโอ ซอฟต์แวร์ โปรแกรม รหัสคอมพิวเตอร์ และข้อมูลอื่นๆt</p>
                <p>1.2 "เนื้อหาหลัก" หมายถึง เนื้อหาที่สามารถเข้าถึงได้ผ่านทางบริการฯ</p>
                <p>1.3 "เนื้อหาจากผู้ใช้" หมายถึง เนื้อหาที่ผู้ใช้ได้ส่ง ส่งผ่าน หรือ อัพโหลดบนระบบการให้บริการฯ</p>
                <p>1.4 "เหรียญ" หมายถึง ตราสารการชำระหนี้แบบเติมเงินหรือสิ่งอื่นใดที่มีความคล้ายคลึงกัน ซึ่งผู้ใช้สามารถใช้ตราสารดังกล่าวแลกเปลี่ยนกับเนื้อหาและบริการต่างๆ โดยเสียค่าตอบแทนซึ่ง TeeNeeJJ เป็นผู้ให้บริการ</p>
                <p>1.5 "ข้อกำหนดและเงื่อนไขฯ เพิ่มเติม" หมายถึง ข้อกำหนดและเงื่อนไขอื่นใดซึ่งแยกต่างหากจากข้อกำหนดและเงื่อนไขฯ ฉบับนี้ และเกี่ยวข้องกับบริการฯ ซึ่งเผยแพร่หรืออัพโหลดโดย LINE ภายใต้ชื่อ "ข้อตกลง" "แนวทางปฏิบัติ" "นโยบาย" หรือภายใต้ชื่ออื่นๆ ที่มีความหมายคล้ายคลึงกัน</p>
                <h3>2.การตกลงยอมรับข้อกำหนดและเงื่อนไขฯ ฉบับนี้</h3>
                <p>2.1.ผู้ใช้ทุกรายจะต้องใช้บริการฯ ตามข้อกำหนดที่ระบุไว้ในข้อกำหนดและเงื่อนไขฯ ฉบับนี้ โดยผู้ใช้จะไม่สามารถใช้บริการฯ ได้เว้นเสียแต่ผู้ใช้ได้ตกลงยอมรับข้อกำหนดและเงื่อนไขฯ ฉบับนี้แล้ว</p>
                <p>2.2.ผู้ใช้ซึ่งเป็นผู้เยาว์จะสามารถใช้บริการฯ ได้ก็ต่อเมื่อได้รับความยินยอมล่วงหน้าจากบิดามารดาหรือผู้แทนโดยชอบกฎหมายเท่านั้น นอกจากนี้ หากผู้ใช้ดังกล่าวใช้บริการฯ ในนามหรือเพื่อวัตถุประสงค์ขององค์กรธุรกิจใด ให้ถือว่าองค์กรธุรกิจดังกล่าวได้ตกลงยอมรับข้อกำหนดและเงื่อนไขฯ ฉบับนี้แล้วล่วงหน้า</p>
                <p>2.3.หากมีข้อกำหนดและเงื่อนไขฯ เพิ่มเติมใดๆ ซึ่งเกี่ยวข้องกับการให้บริการฯ ผู้ใช้จะต้องปฏิบัติตามข้อกำหนดและเงื่อนไขฯ เพิ่มเติมดังกล่าวเช่นเดียวกับข้อกำหนดและเงื่อนไขฯ ในการใช้งานฉบับนี้</p>
            </div>
        </div>
    






        <hr>

</div>



@endsection

@section('scripts')



@stop('scripts')
