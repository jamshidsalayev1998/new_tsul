<div class="pop-upup">
        <div class="form-popup animate__animated animate__fadeInDown" id="myFormTwo" style="">
            <div action="/action_page.php" class="form-container">
             <img class="animate__animated animate__fadeInDown animate__delay-1s" src="{{asset('front_assets/assets/img/logo_main_white.png')}}" alt="Network error!">
              <button type="button" class="btn cancel"  onclick="closeFormTwo()"><i class="fas fa-times"></i></button>


  <button  class="col-xl-12 button-open d-flex">

    <div class="top-icons">
        <a href="https://www.fb.com/tsulofficial" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://t.me/tsulofficial" target="_blank"><i class="fab fa-telegram-plane"></i></a>
        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://twitter.com/tsulofficial" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://www.youtube.com/channel/UCTAhGEQDYohjqmDAsD9yRBg" target="_blank"><i class="fab fa-youtube"></i></a>
    </div>

      <div class="top-menu-linksTwo col-xl-12 d-flex">
           @foreach($menus as $mn)
          <a href="#">{{$mn->$name_locale}}</a>
          @endforeach
      </div>

  </button>
                  <style>
                        .panelTwo::-webkit-scrollbar {
                          width: 10px;
                          background-color: white;
                          border-radius: 4px;
                          border: 1px solid #939393;
                          box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
                          box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;

                        }
                        .panelTwo::-webkit-scrollbar-track {
                            border: 1px solid white;
                            border-radius: 10px;
                            color: white;
                         }
                        .panelTwo::-webkit-scrollbar-thumb {
                          margin-left: 1px;
                          color: #939393;
                          border-radius: 4px;
                          border: 1px solid white;
                          padding-left: 2px;
                        }
                        .panelTwo::-webkit-scrollbar-thumb:hover {
                        background: #3F4652;
                        }
                </style>

      <div class="panelTwo " style="overflow: hidden; overflow-y: auto; height: 80vh; margin-right:10px;">
          <div class="row mt-3">
              <!--First menu PanelTwo-->
              <div class="col-xl-12 d-flex">
                  @foreach($menus as $mn)
                       <div class="col-xl-2 ">
                            <ul>
                                <h6><a href="#">{{$mn->$name_locale}}</a></h6>
                                @foreach($mn->childs() as $mn_ch)
                                <h5><a href="@if($mn_ch->slug){{$mn_ch->slug}}@else#@endif">{{$mn_ch->$name_locale}}</a></h5>
                                @foreach($mn_ch->childs() as $mn_ch_ch)
                                  <li><a href="@if($mn_ch_ch->slug){{$mn_ch_ch->slug}}@else#@endif"><i class="fas fa-caret-right"></i>{{$mn_ch_ch->$name_locale}}</a></li>
                                 @endforeach

                                @endforeach
                            </ul>
                    </div>
                  @endforeach

              </div>




                <!--Open secon menu panel-->
              <div class="col-xl-12  mb-4 fixed-footer">
                <button class="button-open animate__animated animate__fadeInUp" onclick="openForm()">

                    <div class="top-menu-linksNoactiveOne fixed-bottom d-flex">
                        <div class="animate__animated animate__fadeInUp animate__infinite">
                            <i class="fas fa-angle-double-up"></i>
                        </div>
                        @foreach($menus_top_all as $mt_a)
                        <a href="#">{{$mt_a->$name_locale}}</a>
                        @endforeach
                    </div>
                </button>
              </div>

          </div>
      </div>

            </div>
          </div>

        <div class="form-popup animate__animated animate__fadeInUp" id="myForm">
          <div action="/action_page.php" class="form-container">
           <img src="{{asset('front_assets/assets/img/logo_main_white.png')}}" alt="Network error!">
            <button type="button" class="btn cancel" onclick="closeAll()"><i class="fas fa-times"></i></button>

<div class="row">

    <button class="col-xl-12 button-open" onclick="closeForm()">

        <div class="top-menu-linksTwoNoactiveTwo col-xl-12 d-flex">
            <div class="animate__animated animate__fadeInDown animate__infinite">
                <i class="fas fa-angle-double-down"></i>
            </div>
            @foreach($menus as $mn)
          <a href="#">{{$mn->$name_locale}}</a>
          @endforeach
        </div>
    </button>

    <button  class="col-xl-12 button-open">

        <div class="top-icons">
            <a href="https://www.fb.com/tsulofficial" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://t.me/tsulofficial" target="_blank"><i class="fab fa-telegram-plane"></i></a>
            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://twitter.com/tsulofficial" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.youtube.com/channel/UCTAhGEQDYohjqmDAsD9yRBg" target="_blank"><i class="fab fa-youtube"></i></a>
        </div>

        <div class="top-menu-links col-xl-12 d-flex" >
            @foreach($menus_top_all as $mt_a)
                        <a href="#">{{$mt_a->$name_locale}}</a>
                        @endforeach
        </div>

    </button>



</div>




    <div class="panel">
        <div class="row mt-5">
            <div class="col-xl-12 d-flex">
                @foreach($menus_top_all as $mt_a)
                    <div class="col-xl-2 d-block">
                        <ul>
                            <h5><a href="#">{{$mt_a->$name_locale}}</a></h5>
                            @foreach($mt_a->childs() as $mt_a_ch)
                            <li><a href="@if($mt_a_ch->slug) {{$mt_a_ch->slug}} @else # @endif"><i class="fas fa-caret-right"></i>{{$mt_a_ch->$name_locale}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                 @endforeach
            </div>

        </div>
    </div>

          </div>
        </div>





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

    <script>
        function closeAll() {
            document.getElementById("myForm").style.display = "none";
            document.getElementById("myFormTwo").style.display= "none";
        }
    </script>

    </div>
