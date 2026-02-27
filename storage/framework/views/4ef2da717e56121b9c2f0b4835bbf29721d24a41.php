<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="icon" type="image/png" href="<?php echo e(asset('logo_main.png')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/mdb.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/all.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/owl.carousel.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/site.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/special_feature/css/jquery-ui.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/special_feature/css/specialView.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/index.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/newmenu.css')); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/animate.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/jamshid/jamshid.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/pop-up/pop_up.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/animate.css-main/animate.css')); ?>">
    <!-- loaderTSUL css -->
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/loaderTSUL.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/teacher2.css')); ?>">

    
    
    <?php echo $__env->yieldContent('links'); ?>

    <!-- bootstrap5 dataTables css cdn -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" />


</head>

<body>
    <button class="to_top_scroll">
        <i class="fas fa-arrow-up"></i>
    </button>
    <div id="close-sidebar" class="closing_sidebar"></div>
    <div class="wrap">
        <?php echo $__env->make('simple.includes.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--Main content-->
        <?php echo $__env->yieldContent('content'); ?>


        <?php echo $__env->make('simple.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>


</body>

<script src="<?php echo e(asset('front_assets/js/jquery.js')); ?>"></script>

<script src="<?php echo e(asset('front_assets/js/app.js')); ?>"></script>
<script src="<?php echo e(asset('front_assets/js/nav.js')); ?>"></script>
<script src="<?php echo e(asset('front_assets/js/image_gallery.js')); ?>"></script>
<script src="<?php echo e(asset('front_assets/js/language.js')); ?>"></script>
<script src="<?php echo e(asset('front_assets/js/owl.carousel.js')); ?>"></script>
<script src="<?php echo e(asset('front_assets/js/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('front_assets/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('front_assets/js/mdb.min.js')); ?>"></script>
<script src="<?php echo e(asset('front_assets/js/site.min.js')); ?>"></script>
<script src="<?php echo e(asset('front_assets/special_feature/js/jquery-ui.js')); ?>"></script>
<script src="<?php echo e(asset('front_assets/special_feature/js/specialView.js')); ?>"></script>
<script src="<?php echo e(asset('front_assets/special_feature/js/jquery.cookie.min.js')); ?>"></script>
<script src="<?php echo e(asset('front_assets/js/wow.js')); ?>"></script>
<sript src="<?php echo e(asset('front_assets/jamshid/jamshid.js')); ?>"></sript>
<sript src="<?php echo e(asset('front_assets/js/teacher2.js')); ?>"></sript>
<script src="<?php echo e(asset('js/rest_api_service.js')); ?>"></script>


<!-- Loader js files -->
<sript src="<?php echo e(asset('front_assets/js/loaderTSUL.js')); ?>"></sript>

<!-- bootstrap5 dataTables js cdn -->
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<?php echo $__env->yieldContent('js'); ?>
<script>
    $(document).ready(function() {

        $('#datatable').DataTable({
            "lengthMenu": [
                [20, 30, 50, -1],
                [20, 30, 50, "<?php echo app('translator')->get('index.All'); ?>"]
            ],
            'ordering': false,
            "pagingType": "full_numbers",
            "language": {
                sEmptyTable: "no data is founded",
                sInfo: "",
                sInfoEmpty: "",
                sInfoFiltered: "",
                sInfoPostFix: "",
                sInfoThousands: ".",
                sLengthMenu: "_MENU_",
                sLoadingRecords: "<?php echo app('translator')->get('index.Loading datas'); ?>",
                sProcessing: "<?php echo app('translator')->get('index.loading'); ?>",
                sSearch: "<?php echo app('translator')->get('index.Search'); ?>",
                sZeroRecords: "<?php echo app('translator')->get('index.Nothing found'); ?>",
                oPaginate: {
                    sFirst: "<?php echo app('translator')->get('index.Prev'); ?>",
                    sPrevious: "<?php echo app('translator')->get('index.back'); ?>",
                    sNext: "<?php echo app('translator')->get('index.next'); ?>",
                    sLast: "<?php echo app('translator')->get('index.last'); ?>"
                },
            }
        });

    });

    $(document).ready(function() {
        $('#feedback-form').on('submit', function(e) {
            e.preventDefault(); // Formani reload qilmaslik uchun

            var form = $(this);
            var url = form.attr('action');
            var method = form.attr('method'); // POST
            var data = form.serialize(); // input va textarea datalarni olib keladi
            var submitButton = $('#rateModalSubmitModal');

            submitButton.prop('disabled', true);
            var originalText = submitButton.html();
            submitButton.html(
                '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Yuborilmoqda...'
            );
            sendAjaxRequest(url, method, data,
                function(response) { // successCallback
                    alert('Fikringiz uchun rahmat!');
                    form[0].reset();
                    $('#rateModal').removeClass('show');
                    submitButton.prop('disabled', false);
                    submitButton.html(originalText);
                    $('#rating').val(0); // rating inputni 0 qilish
                    $('.star-rating i').removeClass('text-warning');
                },
                function(xhr, status, error) { // errorCallback
                    alert('Xatolik yuz berdi: ' + xhr.responseText);
                }
            );
        });
    });





    $('.allow-href').click(function() {
        if ($(this).attr('data-href')) {
            window.location.href = $(this).attr('data-href');
        }
    })
</script>
<script>
    wow = new WOW({
        animateClass: 'animated',
        offset: 100,
        callback: function(box) {
            console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
    });
    wow.init();
</script>

<script>
    $('.select-language-j').click(function() {
        var href = $(this).attr('data-href');
        window.location.href = href;
    });
</script>
<script>
    $('.menu-h').click(function() {
        window.location.href = $(this).attr('data-href');
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
<?php /**PATH /var/www/html/resources/views/simple/layouts/master.blade.php ENDPATH**/ ?>