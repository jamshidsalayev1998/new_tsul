<section class="seventh-part w-100 my-5  bg-white rounded-3">
                <div class="container">

                    <div class="align-items-center justify-content-between d-block d-md-flex mb-4">
                        <div class="Bunderline">
                            <h2 class="textColor ">@lang('index.Our teachers')</h2>
                        </div>
                        <div>
                            <a href="{{route('simple.teacher.index')}}" class="fw-bold Bline decNone textColor fs-5">@lang('index.All teachers list')</a>
                        </div>
                    </div>
                    <div class="gtco-testimonials">
                        <div id="owl-carousel1" class="owl-carousel owl-carousel1 owl-theme">
                            @foreach($other_teachers as $other_teacher)

                                <div class="divHR">
                                    <a href="{{route('simple.teacher.show' , ['id' => $other_teacher->id , 'slug' => $other_teacher->$fio_locale])}}">
                                    <div class="card text-center rounded-0">
                                        <div>
                                            <img class="card-img-top rounded-0"
                                                 src="{{asset($other_teacher->image)}}"
                                                 alt="">
                                        </div>
                                        <div>
                                            <a href="{{route('simple.teacher.show' , ['id' => $other_teacher->id , 'slug' => $other_teacher->$fio_locale])}}"
                                               class="decNone">
                                                <p class=" py-3">{{$other_teacher->$fio_locale}}</p>
                                                <p class="text-white  py-3 bgText">{{$other_teacher->teacher_degree->$name_locale}}</p>
                                            </a>
                                        </div>
                                    </div>
                                        </a>
                                </div>

                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
