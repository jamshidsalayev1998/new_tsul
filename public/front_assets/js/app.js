jQuery(document).ready(function () {
    jQuery('.main_content .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        autoPlay: 1000,
        items: 10,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    jQuery('.seventh-part .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoPlay: 1000,
        items: 10,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            },
            1300: {
                items: 6
            }
        }
    });






    // Custom Button
    jQuery('.customNextBtn').click(function () {
        jQuery('.owl-carousel').trigger('next.owl.carousel');
    });
    jQuery('.customPreviousBtn').click(function () {
        jQuery('.owl-carousel').trigger('prev.owl.carousel');
    });


    $(".sidebar-dropdown > a").click(function () {
        $(".sidebar-submenu").slideUp(200);
        if (
            $(this)
                .parent()
                .hasClass("active")
        ) {
            $(".sidebar-dropdown").removeClass("active");
            $(this)
                .parent()
                .removeClass("active");
        } else {
            $(".sidebar-dropdown").removeClass("active");
            $(this)
                .next(".sidebar-submenu")
                .slideDown(200);
            $(this)
                .parent()
                .addClass("active");
        }
    });

    $(".sub_sub_link > a").click(function(){
        $(".sub_sub_menu").slideToggle(200);
        if (
            $(this)
                .parent()
                .hasClass("active")
        ) {
            $(".sub_sub_link").removeClass("active");
            $(this)
                .parent()
                .removeClass("active");
        } else {
            $(".sub_sub_link").removeClass("active");
            $(this)
                .next(".sub_sub_menu")
                .slideDown(200);
            $(this)
                .parent()
                .addClass("active");
        }
    })

    $("#close-sidebar").click(function () {
        $(".page-wrapper").removeClass("toggled");
        $(".closing_sidebar").css('display', 'none')
    });
    $("#show-sidebar").click(function () {
        $(".page-wrapper").addClass("toggled");
        $(".closing_sidebar").css('display', 'block')
    });

    $(window).scroll(function (e) {
        if ($(this).scrollTop() > 200) { 
            $('#header_pc').css('position', 'sticky')
            $('#header_pc').css('z-index', '1500')
            $('#header_pc').css('top', '0')
            $('#header_pc').css('left', '0')
            $('#header_pc').css('right  ', '0')
            $('#header_pc').css('width', '100%')
            $('#header_pc').css('transition', 'all 2s ease-in-out')
            $('#header_pc').css('box-shadow', ' 0 0 4px 0 black')
        } else {
            $('#header_pc').removeAttr('style');
        }
    });


    // accordion

    $(function () {
        var Accordion = function (el, multiple) {
            this.el = el || {};
            this.multiple = multiple || false;

            var links = this.el.find('.article-title');
            links.on('click', {
                el: this.el,
                multiple: this.multiple
            }, this.dropdown)
        }

        Accordion.prototype.dropdown = function (e) {
            var $el = e.data.el;
            $this = $(this),
                $next = $this.next();

            $next.slideToggle();
            $this.parent().toggleClass('open');

            if (!e.data.multiple) {
                $el.find('.accordion-content').not($next).slideUp().parent().removeClass('open');
            };
        }
        var accordion = new Accordion($('.accordion-container'), false);
    });

    // $(document).on('click', function (event) {
    //     if (!$(event.target).closest('#accordion').length) {
    //         $this.parent().toggleClass('open');
    //     }
    // });

    // accordion


    $('.c_main_link > a').click(function(){
        $('.main_links').removeClass("active_link");
        $(this).addClass("active_link");

    })

	
        $('ul.tabs_media li').click(function(){
            var tab_id = $(this).attr('data-tab');
    
            $('ul.tabs_media li').removeClass('current');
            $('.tab-content').removeClass('current');
    
            $(this).addClass('current');
            $("#"+tab_id).addClass('current');
        })


});


const fc_tabs = document.querySelectorAll('[data-tab-target]')
const fc_tabContents = document.querySelectorAll('[data-tab-content]')

fc_tabs.forEach(tab => {
  tab.addEventListener('click', () => {
    const target = document.querySelector(tab.dataset.tabTarget)
    fc_tabContents.forEach(tabContent => {
      tabContent.classList.remove('active')
    })
    fc_tabs.forEach(tab => {
      tab.classList.remove('active')
    })
    tab.classList.add('active')
    target.classList.add('active')
  })
})


// mobiscroll.setOptions({
//     theme: 'ios',
//     themeVariant: 'light'
// });

// mobiscroll.datepicker('#demo', {
//     controls: ['calendar'],
//     display: 'inline'
// });




