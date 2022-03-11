@extends('layouts.template')

@section('title')
TEENEEJJ - ตลาดนัดสวนจตุจักร
@stop

@section('stylesheet')


@stop('stylesheet')
@section('content')


<section class="parallax-window" data-parallax="scroll" data-image-src="{{url('img/geometic-bg-green.png')}}" data-natural-width="1400" data-natural-height="370">
            <div class="parallax-content-1">
              
            </div>
        </section>

        <div id="position">
            	<div class="container">
                        	<ul>
                            <li><a href="{{url('/')}}">{{ trans('message.index') }}</a></li>
                            <li><a href="#">ความเป็นส่วนตัวและข้อกำหนด</a></li>

                            </ul>
                </div>
            </div>


            <div class="container margin_60">

    <div class="main_title">
        <h2>ความเป็นส่วนตัวและข้อกำหนด </span></h2>
        <br>
        <p> โปรดอ่านและทำความเข้าใจนโยบายความเป็นส่วนตัวนี้อย่างละเอียด เข้าใช้งานแอพพลิเคชั่นนี้แล้ว ถือว่าท่านตกลงยอมรับข้อกำหนดที่ระบุในนโยบายความเป็นส่วนตัวนี้แล้วทุกประการ</p>
    </div>




        <div class="row">
            <div class="col-md-12">
                <h3>1.ความปลอดภัยของข้อมูล</h3>
                <p>TeeneeJJ เราพยายามอย่างยิ่งที่จะปกป้องข้อมูลของท่านจากการเข้าถึง การแก้ไขเปลี่ยนแปลง การเปิดเผย หรือการทำลายโดยไม่ได้รับอนุญาต</p>
                <br>
                <h3>2.วัตถุประสงค์ของนโยบายความเป็นส่วนตัว</h3>
                <p>จะใช้ข้อมูลที่รวบรวมจากแอพพลิเคชั่น TeeneeJJ ทั้งหมดของบริษัท เพื่อให้บริการ บำรุงรักษา ป้องกัน ปรับปรุง พัฒนาบริการใหม่ๆ และปกป้องบริษัทและท่าน ตลอดจนเพื่อนำเสนอเนื้อหาที่ได้รับการปรับแต่ง 
                    ให้เหมาะสมกับการใช้งานของท่านโดยเฉพาะ เช่น แสดงผลการค้นหาที่เกี่ยวข้องกับท่าน แสดงโฆษณาประชาสัมพันธ์บริการที่ท่านอาจสนใจและเป็นประโยชน์แก่ท่าน
                    บริษัทอาจใช้ข้อมูลที่รวบรวมได้จากคุกกี้และเทคโนโลยีอื่นๆ เช่น การใช้ Tag เป็นต้น ในการปรับปรุงประสบการณ์การใช้งานของท่าน และคุณภาพโดยรวมของแอพพลิเคชั่น
                    <br>บริษัทจะไม่นำข้อมูลของท่านไปแบ่งปันหรือเปิดเผยให้กับบริษัท และ/หรือองค์กรอื่น และ/หรือบุคคลภายนอก
                </p>
                <br>
                <h3>3.การเข้าถึงและอัปเดตข้อมูลส่วนบุคคล</h3>
                <p>ท่านสามารถเข้าถึงข้อมูลส่วนบุคคลของท่านได้ หากข้อมูลดังกล่าวมีความบกพร่องหรือไม่ถูกต้อง TeeneeJJ จะพยายามจัดหาวิธีการ และ/หรือช่องทางให้ท่านสามารถอัปเดตและ/หรือลบข้อมูลส่วนบุคคลของท่านได้อย่างเหมาะสม 
                    เว้นแต่ ในกรณีมีความจำเป็นที่บริษัทจะต้องจัดเก็บข้อมูลส่วนบุคคลของท่านไว้ เพื่อประโยชน์ทางธุรกิจ 
                    และ/หรือเพื่อการปฏิบัติตามกฎหมายที่ใช้บังคับ เมื่อท่านดำเนินการอัปเดตข้อมูลส่วนบุคคลของท่าน 
                    บริษัทอาจร้องขอให้ท่านยืนยันตัวตนก่อนที่บริษัทจะดำเนินการตามคำขอของท่านได้ ทั้งนี้ 
                    บริษัทขอสงวนสิทธิ์ปฏิเสธการทำคำขออัปเดตและการเข้าถึงข้อมูลส่วนบุคคลของท่าน </p>
                    <br>
                    <h3>4.การเปลี่ยนแปลงนโยบายความเป็นส่วนตัว</h3>
                    <p>TeeneeJJ ขอสงวนสิทธิ์ในการแก้ไขเปลี่ยนแปลงนโยบายความเป็นส่วนตัวนี้ได้ตลอดเวลา โดยไม่ต้องได้รับความยินยอมจากท่านล่วงหน้า 
                        เว้นแต่เป็นการแก้ไขเปลี่ยนแปลงที่เป็นการริดรอนสิทธิของท่านตามนโยบายความเป็นส่วนตัวนี้ บริษัทจะกระทำมิได้หากไม่ได้รับความยินยอมจากท่านก่อน</p>
                        <br>
                <h3>5.ข้อจำกัดการใช้นโยบายความเป็นส่วนตัว</h3>
                <p>นโยบายความเป็นส่วนตัวฉบับนี้ มีผลใช้บังคับกับแอพพลิเคชั่นนี้เท่านั้น ไม่รวมถึงแอพพลิเคชั่น TeeneeJJ และ/หรือบริการที่มีนโยบายความเป็นส่วนตัว 
                    แยกต่างหาก และ/หรือที่ไม่ได้กำหนดโดยชัดแจ้งให้ใช้ร่วมกันกับนโยบายความเป็นส่วนตัวนี้ ตลอดจนไม่มีผลใช้บังคับกับแอพพลิเคชั่น TeeneeJJ และบริการ หรือเว็บไซต์อื่นๆ ที่เชื่อมต่อ กับแอพพลิเคชั่น TeeneeJJ รวมถึงไม่ครอบคลุมหลักปฏิบัติด้านข้อมูลส่วนบุคคลของบริษัทอื่นๆ 
                    หรือองค์กรอื่นๆ ที่โฆษณาแอพพลิเคชั่นของTeeneeJJ ซึ่งอาจใช้คุกกี้ พิกเซลแท็ก และเทคโนโลยีอื่นๆ ในการนำเสนอและแสดงโฆษณาที่เกี่ยวข้อง</p>
            </div>
        </div>
    






        <hr>

</div>



@endsection

@section('scripts')



@stop('scripts')
