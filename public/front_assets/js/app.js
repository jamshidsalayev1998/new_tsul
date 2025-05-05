jQuery(document).ready(function () {
    jQuery('.main_content .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        autoplay:true,
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
                items: 4
            }
        }
    });



    $("#scientific_carousel").owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoPlay:true,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:2
            },
            1200: {
                items:3
            },
            1400: {
                items:4
            }
        }
    });

    $("#news_carousel").owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoPlay:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:2
            },
            1200: {
                items:3
            },
            1400: {
                items:4
            }
        }
    });
    $("#ads_carousel").owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoPlay:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:2
            },
            1200: {
                items:3
            },
            1400: {
                items:4
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
        $(".sub_sub_menu").slideUp(200);
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
            $('#header_pc').css('box-shadow', ' 0 0 3px 0 black')
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


var video_id = document.getElementById("vm_id");
var vm_play = document.getElementById("vm_play");
var vm_play_i = document.getElementById("vm_play_i");
var vm_play_box = document.querySelector(".vm_play_box");

vm_play?.addEventListener("click", () => {
    vm_play.style.display = 'none';
    vm_play_i.style.display = 'none';
    vm_play_box.style.display = 'none'
    video_id.setAttribute('controls', 'controls')
    video_id.play()
})
vm_play_i?.addEventListener("click", () => {
    vm_play.style.display = 'none';
    vm_play_i.style.display = 'none';
    vm_play_box.style.display = 'none'
    video_id.setAttribute('controls', 'controls')
    video_id.play()
})
var rp_video_id = document.getElementById("rp_vm_id");
var rp_vm_play = document.getElementById("rp_vm_play");
var rp_vm_play_i = document.getElementById("rp_vm_play_i");
var rp_vm_play_box = document.querySelector(".rp_vm_play_box");

rp_vm_play?.addEventListener("click", () => {
    rp_vm_play.style.display = 'none';
    rp_vm_play_i.style.display = 'none';
    rp_vm_play_box.style.display = 'none'
    rp_video_id.setAttribute('controls', 'controls')
    rp_video_id.play()
})
rp_vm_play_i?.addEventListener("click", () => {
    rp_vm_play.style.display = 'none';
    rp_vm_play_i.style.display = 'none';
    rp_vm_play_box.style.display = 'none'
    rp_video_id.setAttribute('controls', 'controls')
    rp_video_id.play()
})


var loading_video_gallery = document.querySelectorAll(".loading_video_gallery");

loading_video_gallery[loading_video_gallery?.length-1]?.addEventListener("load", () => {
    document.querySelector('.video_gallery_loader').style.display = "none"
    document.getElementById('video_gallery_box_parent_id').style.display = 'block';
})



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


const rp_tabs = document.querySelectorAll('[data-tab-target]')
const rp_tabContents = document.querySelectorAll('[data-tab-content]')

rp_tabs.forEach(tab => {
  tab.addEventListener('click', () => {
    const target = document.querySelector(tab.dataset.tabTarget)
    rp_tabContents.forEach(tabContent => {
      tabContent.classList.remove('active')
    })
    rp_tabs.forEach(tab => {
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


function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;
  
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent_news");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
  
    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  


