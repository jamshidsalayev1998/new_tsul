@extends('simple.layouts.master')
@section('title')
    <?php
    $locale = app()->getLocale();
    $content_locale = 'content_' . $locale;
    $general_info_locale = 'general_info_' . $locale;
    $contact_info_locale = 'contact_info_' . $locale;
    $text_locale = 'text_' . $locale;
    $name_locale = 'name_' . $locale;
    $image_locale = 'image_' . $locale;
    $link_locale = 'link_' . $locale;
    $fio_locale = 'fio_' . $locale;
    $title_locale = 'title_' . $locale;
    $short_info_locale = 'short_info_' . $locale;
    ?>
    {{--    {{$menu->$name_locale}}--}}
@endsection
@section('content')
    <div class="container allTeacherSection  p-0  bg-white my-4">

        <div class="allTeacherImg position-relative">
            <img class="img-fluid"
                @if($banner->image) src="{{asset($banner->image)}}" @else src="{{asset('front_assets/assets/all_teachers_banner/photo_2021-12-25_12-58-50.jpg')}}" @endif alt="">
            <!-- img backgroun shadow -->
            <div class="text-white allTeacherImgbackBlack"></div>
            <div class="text-white allTeacherImgbackCustom"></div>

            <!-- Start img backgroun shadow -->
            <div class="imgFrontText">
                <h1 class="topleft fs-1 BunderlineWhite">{{$banner->$title_locale}}</h1>
                <h2 class="bottomleft fs-3">{!! $banner->$content_locale !!}
                </h2>

            </div>
        </div>

        <div class="row">
            <!-- all teacher table section -->
            <div class="col-12  px-5 py-5">
                <div class="align-items-center justify-content-between d-flex">
                    <h5 class="my-3 bold textColor Bunderline">@lang('index.All teachers list') {{$filters?isset($filters['kafedra'])?' | '.$filters['kafedra']->$name_locale:'':''}} {{$filters?isset($filters['degree'])?' | '.$filters['degree']->$name_locale:'':''}}   </h5>
                </div>

                <!--Start table  -->
                <div class="col-12 table-responsive  mt-4 p-0">
                    <table class="table table-hover  m-0 p-0" id="datatable">
                        <thead class="bgTable text-center thead">
                        <tr class="dataTable">
                            <th class="col-4 border-end align-middle" scope="col"><a href="#">@lang('index.Last name first name')</a>
                            </th>
                            <th class="col-2 border-end align-middle" scope="col"><a href="#">@lang('index.Academic degree')</a></th>
                            <th class="col-5 border-end align-middle" scope="col"><a href="#">@lang('index.Kafedra')</a></th>
                            <th class="col-1 border-end align-middle" scope="col"><a href="#">>></a></th>
                        </tr>
                        </thead>
                        <tbody class="tbody border-0">
                        @foreach($data as $item)
                            <tr class="text-center">
                                <td class="align-start text-start ps-4 border-end"><a href="{{route('simple.teacher.show' , ['id' => $item->id , 'slug' => $item->$fio_locale])}}">{{$item->$fio_locale}}</a></td>
                                <td class="align-start text-start ps-4 border-end">
                                    <a href="{{route('simple.teacher.index' , ['degree_id' => $item->degree])}}">{{$item->teacher_degree->$name_locale}}</a>
                                </td>
                                <td class="align-start border-end text-start ps-4">
                                    <a href="{{route('simple.teacher.index' , ['degree_id' => 'all','department_id' => $item->kafedra_id])}}">{{$item->kafedra->$name_locale}}</a>
                                </td>
                                <td class="align-middle small bold"><a href="#">>></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- End table  -->

                <!-- Start pagination  -->
                <div class="mt-4 paginationTeach justify-content-center d-flex">
{{--                    <nav aria-label="Page navigation example justify-content-center d-flex">--}}
{{--                        <ul class="pagination justify-content-center">--}}

{{--                            <li class="page-item">--}}
{{--                                <a class="page-link" href="#" aria-label="Previous">--}}
{{--                                    &laquo;--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="page-item"><a class="page-link pageActive" href="#">1</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">4</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">50</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">100</a></li>--}}

{{--                            <li class="page-item">--}}
{{--                                <a class="page-link" href="#" aria-label="Next">--}}
{{--                                    &raquo;--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </nav>--}}
                </div>
                <!-- End pagination  -->


            </div>
            <!--End all teacher table section -->

        </div>
    </div>
@endsection
