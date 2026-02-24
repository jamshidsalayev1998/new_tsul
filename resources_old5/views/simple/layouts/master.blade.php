<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="{{asset('logo_main.png')}}"/>
    <link rel="stylesheet" href="{{asset('front_assets/css/mdb.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/site.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/special_feature/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/special_feature/css/specialView.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/index.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/newmenu.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('front_assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/jamshid/jamshid.css')}}">
     <link rel="stylesheet" href="{{asset('front_assets/css/pop-up/pop_up.css')}}">
     <link rel="stylesheet" href="{{asset('front_assets/css/animate.css-main/animate.css')}}">
     <!-- loaderTSUL css -->
     <link rel="stylesheet" href="{{asset('front_assets/css/loaderTSUL.css')}}">
     <link rel="stylesheet" href="{{asset('front_assets/css/teacher2.css')}}">

{{--    <link rel="stylesheet" href="{{asset('front_assets/css/general_page_content_bekzod.css')}}">--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>--}}
    @yield('links')
   
       <!-- bootstrap5 dataTables css cdn -->
       <link
      rel="stylesheet"
      href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"
    />


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


        @include('simple.includes.footer')

    </div>


</body>

<script src="{{asset('front_assets/js/jquery.js')}}"></script>
{{--<script src="{{asset('front_assets/js/general_page_content_bekzod.js')}}"></script>--}}
<script src="{{asset('front_assets/js/app.js')}}"></script>
<script src="{{asset('front_assets/js/nav.js')}}"></script>
<script src="{{asset('front_assets/js/image_gallery.js')}}"></script>
<script src="{{asset('front_assets/js/language.js')}}"></script>
<script src="{{asset('front_assets/js/owl.carousel.js')}}"></script>
<script src="{{asset('front_assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('front_assets/js/popper.min.js')}}"></script>
<script src="{{asset('front_assets/js/mdb.min.js')}}"></script>
<script src="{{asset('front_assets/js/site.min.js')}}"></script>
<script src="{{asset('front_assets/special_feature/js/jquery-ui.js')}}"></script>
<script src="{{asset('front_assets/special_feature/js/specialView.js')}}"></script>
<script src="{{asset('front_assets/special_feature/js/jquery.cookie.min.js')}}"></script>
<script src="{{asset('front_assets/js/wow.js')}}"></script>
<sript src="{{asset('front_assets/jamshid/jamshid.js')}}"></sript>
<sript src="{{asset('front_assets/js/teacher2.js')}}"></sript>


<!-- Loader js files -->
<sript src="{{asset('front_assets/js/loaderTSUL.js')}}"></sript>

    <!-- bootstrap5 dataTables js cdn -->
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

@yield('js')
<script>    
$(document).ready(function () {
        $('#datatable').DataTable({
            'ordering': false,
            "pagingType": "full_numbers",
        "language":{
            sEmptyTable: "Keine Daten in der Tabelle vorhanden",
            sInfo: "",
            sInfoEmpty: "",
            sInfoFiltered: "",
            sInfoPostFix: "",
            sInfoThousands: ".",
            sLengthMenu: "_MENU_",
            sLoadingRecords: "@lang('index.Loading datas')",
            sProcessing: "@lang('index.loading')",
            sSearch: "@lang('index.Search')",
            sZeroRecords: "@lang('index.Nothing found')",
            oPaginate: {
            sFirst: "@lang('index.Prev')",
            sPrevious: "@lang('index.back')",
            sNext: "@lang('index.next')",
            sLast: "@lang('index.last')"},
  

}
        });
      });

    $('.allow-href').click(function(){
        if($(this).attr('data-href')){
            window.location.href=$(this).attr('data-href');
        }
    })
</script>
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
<script>
    $('.menu-h').click(function () {
    window.location.href=$(this).attr('data-href');
})

</script>
   <script>
        function openForm() {
          document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
          document.getElementById("myForm").style.display = "none";
        }
        </script>

    <script>
    function openFormTwo() {
      document.getElementById("myFormTwo").style.display = "block";
    }

    function closeFormTwo() {
      document.getElementById("myFormTwo").style.display = "none";
    }
    </script>

</html>
