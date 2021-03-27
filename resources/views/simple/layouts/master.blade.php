<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('front_assets/css/mdb.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/site.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/special_feature/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/special_feature/css/specialView.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/index.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    @yield('links')

</head>

<body>
    <button class="to_top_scroll">
        <i class="fas fa-arrow-up"></i>
    </button>
    <div id="close-sidebar" class="closing_sidebar"></div>
    <div class="wrap">
        @include('simple.includes.menu')
        <!--Main content-->
        @yield('content')



    </div>
        @include('simple.includes.footer')


</body>

<script src="{{asset('front_assets/js/jquery.js')}}"></script>
<script src="{{asset('front_assets/js/app.js')}}"></script>
<script src="{{asset('front_assets/js/mdb.min.js')}}"></script>
<script src="{{asset('front_assets/js/owl.carousel.js')}}"></script>
<script src="{{asset('front_assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('front_assets/js/popper.min.js')}}"></script>
<script src="{{asset('front_assets/js/image_gallery.js')}}"></script>
<script src="{{asset('front_assets/js/site.min.js')}}"></script>
<script src="{{asset('front_assets/js/language.js')}}"></script>
<script src="{{asset('front_assets/special_feature/js/jquery-ui.js')}}"></script>
<script src="{{asset('front_assets/special_feature/js/specialView.js')}}"></script>
<script src="{{asset('front_assets/special_feature/js/jquery.cookie.min.js')}}"></script>
<script src="{{asset('front_assets/js/wow.js')}}"></script>
@yield('js')
<script>
    wow = new WOW({
        animateClass: 'animated',
        offset: 100,
        callback: function (box) {
            console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
    });
    wow.init();

</script>

<script>
    $('.select-language-j').click(function () {
        var href = $(this).attr('data-href');
        window.location.href=href;
    });
</script>

</html>
