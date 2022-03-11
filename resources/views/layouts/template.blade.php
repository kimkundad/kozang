<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <link rel="shortcut icon" href="{{ url('img/fav_icon.png') }}" />

    <title> @yield('title')</title>
    <meta name="description" content="ค้นหาร้านวัสดุก่อสร้างและบริการที่แนะนำสำหรับ โดย Kozang.com">
    <meta name="author" content="Kozang">
    <meta name="keywords" content="">
    <meta name="googlebot" content="ALL">

    <meta property="og:url"           content="https://kozang.com" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="ค้นหาร้านวัสดุก่อสร้างทั่วไทย" />
    <meta property="og:image"         content="{{ url('img/banner_FB.jpg') }}" />
    <meta property="og:description"   content="ค้นหาร้านวัสดุก่อสร้างและบริการที่แนะนำสำหรับ โดย Kozang.com" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="314" />
    <meta property="fb:admins" content="100002037238809">


    @include('layouts.inc-style')
    @yield('stylesheet')

</head>
<body class="bobo"style="">



    @include('layouts.inc-header')






@yield('content')










    @include('layouts.inc-footer')

    <!-- JavaScripts -->
    @include('layouts.inc-script')
    @yield('scripts')


        </body>
</html>
