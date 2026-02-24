@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">


                        <div class="card">
                            <div class="card-header w-100">
                                <div style="display: flex; justify-content: space-between ; width: 100%">
                                    <div>
                                        <h3 class="card-title">Savol qo'shish</h3>
                                    </div>
                                    <div>
                                        <button type="button" form="teacher_info"
                                                class="btn btn-success saqlash_button"> saqlash
                                        </button>
                                    </div>

                                </div>

                            </div>
                            <!-- /.card-header -->
                            <form action="{{route('requestment_question.store')}}" id="teacher_info" method="post"
                                  class="form_news"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <input type="text" hidden readonly value="{{$data->id}}" name="requestment_id">

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            @if ($errors->any())
                                                <div class="alert alert-danger" role="alert">
                                                    @foreach ($errors->all() as $error)
                                                        <div>{{$error}}</div>
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>


                                    </div>
                                    <ul class="nav nav-tabs" id="lang_tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="lang-uz-tab" data-toggle="tab"
                                               href="#lang-uz"
                                               role="tab" aria-controls="profile" aria-selected="false">UZ</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="lang-ru-tab" data-toggle="tab" href="#lang-ru"
                                               role="tab" aria-controls="contact" aria-selected="false">RU</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="lang-en-tab" data-toggle="tab" href="#lang-en"
                                               role="tab" aria-controls="contact" aria-selected="false">EN</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="lang_tabContent">
                                        <div class="tab-pane fade show  active" id="lang-uz" role="tabpanel"
                                             aria-labelledby="profile-tab">
                                            <div class="col-md-12 form-group">
                                                <label for=""> <span class="text-danger">*</span> Savol (UZ)</label>
                                                <textarea class="form-control" name="body_uz" id="" cols="30"
                                                          rows="6">{{old('body_uz')}}</textarea>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="lang-ru" role="tabpanel"
                                             aria-labelledby="contact-tab">
                                            <div class="col-md-12 form-group">
                                                <label for="">Savol (RU)</label>
                                                <textarea class="form-control" name="body_ru" id="" cols="30"
                                                          rows="6">{{old('body_ru')}}</textarea>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="lang-en" role="tabpanel"
                                             aria-labelledby="contact-tab">
                                            <div class="col-md-12 form-group">
                                                <label for="">Savol (EN)</label>
                                                <textarea class="form-control" name="body_en" id="" cols="30"
                                                          rows="6">{{old('body_en')}}</textarea>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">Javoblar</div>
                                    <div class="row answersBox">
                                        <div class="col-md-12 p-2 border answerItem" id="1">
                                            <div class="col-sm-12 d-flex justify-content-between "><span><b>Javob 1</b></span>
                                                <button type="button" class="btn btn-danger removeAnswer"
                                                        onclick="removeAnswer(1)" dataId="1"><i
                                                        class="fa fa-times"></i></button>
                                            </div>
                                            <div class="col-sm-12 d-flex mt-1">
                                                <div class="col-md-1">UZ <span class="text-danger">*</span></div>
                                                <div class="col-md-11">
                                                <textarea class="form-control" required name="answers[1][body_uz]" id=""
                                                          cols="30"
                                                          rows="1"></textarea>

                                                </div>
                                            </div>
                                            <div class="col-sm-12 d-flex mt-1">
                                                <div class="col-md-1">RU</div>
                                                <div class="col-md-11">
                                                <textarea class="form-control" name="answers[1][body_ru]" id=""
                                                          cols="30"
                                                          rows="1"></textarea>

                                                </div>
                                            </div>
                                            <div class="col-sm-12 d-flex mt-1">
                                                <div class="col-md-1">EN</div>
                                                <div class="col-md-11">
                                                <textarea class="form-control" name="answers[1][body_en]" id=""
                                                          cols="30"
                                                          rows="1"></textarea>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 p-2 border answerItem" id="2">
                                            <div class="col-sm-12 d-flex justify-content-between">
                                                <span><b>Javob 2</b></span>
                                                <button type="button" class="btn btn-danger removeAnswer"
                                                        onclick="removeAnswer(2)" dataId="2"><i
                                                        class="fa fa-times"></i></button>
                                            </div>
                                            <div class="col-sm-12 d-flex mt-1">
                                                <div class="col-md-1">UZ <span class="text-danger">*</span></div>
                                                <div class="col-md-11">
                                                <textarea class="form-control" required name="answers[2][body_uz]" id=""
                                                          cols="30"
                                                          rows="1"></textarea>

                                                </div>
                                            </div>
                                            <div class="col-sm-12 d-flex mt-1">
                                                <div class="col-md-1">RU</div>
                                                <div class="col-md-11">
                                                <textarea class="form-control" name="answers[2][body_ru]" id=""
                                                          cols="30"
                                                          rows="1"></textarea>

                                                </div>
                                            </div>
                                            <div class="col-sm-12 d-flex mt-1">
                                                <div class="col-md-1">EN</div>
                                                <div class="col-md-11">
                                                <textarea class="form-control" name="answers[2][body_en]" id=""
                                                          cols="30"
                                                          rows="1"></textarea>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-end mt-1 addAnswer" dataId="3">
                                        <button type="button" class="btn btn-success" dataId="3"><i
                                                class="fa fa-plus"></i> Javob qo'shish
                                        </button>
                                    </div>


                                </div>
                            </form>

                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@section('js_after')
    <script src="{{asset('admin_lte/ckeditor5/build/ckeditor.js')}}"></script>
    <script src="{{asset('admin_lte/ckeditor5/ckeditor5_connect.js')}}"></script>
@endsection
@section('js')

    <script src="{{asset('admin_lte/ckeditor5/correcting.js')}}"></script>

    <script>
        function removeAnswer(dataId) {
            $('#' + dataId).remove();

        }

        $(document).ready(function () {
            $('.addAnswer').click(function () {
                var dataId = $(this).attr('dataId');
                var txt = '<div class="col-md-12 p-2 border answerItem" id="' + dataId + '"> \
                                            <div class="col-sm-12 d-flex justify-content-between "><span><b>Javob ' + dataId + '</b></span> <button type="button" onclick="removeAnswer(' + dataId + ')" class="btn btn-danger removeAnswer" dataId="' + dataId + '"><i class="fa fa-times"></i></button></div> \
                                            <div class="col-sm-12 d-flex mt-1"> \
                                                <div class="col-md-1">UZ <span class="text-danger">*</span> </div> \
                                                <div class="col-md-11"> \
                                                <textarea class="form-control" required name="answers[' + dataId + '][body_uz]" id="" cols="30" \
                                                          rows="1"></textarea> \
                                                </div> \
                                            </div> \
                                             <div class="col-sm-12 d-flex mt-1"> \
                                                <div class="col-md-1">RU</div> \
                                                <div class="col-md-11"> \
                                                <textarea class="form-control" name="answers[' + dataId + '][body_ru]" id="" cols="30" \
                                                          rows="1"></textarea> \
                                                </div> \
                                            </div> \
                                             <div class="col-sm-12 d-flex mt-1"> \
                                                <div class="col-md-1">EN</div> \
                                                <div class="col-md-11"> \
                                                <textarea class="form-control" name="answers[' + dataId + '][body_en]" id="" cols="30" \
                                                          rows="1"></textarea> \
                                                </div>\
                                            </div>\
                                        </div>';
                $(this).attr('dataId', parseInt(dataId) + 1);
                $('.answersBox').append(txt);
            })

            $('.removeAnswer').click(function () {
                var dataId = $(this).attr('dataId');
                alert(dataId)
                $('#' + dataId).remove();
            })
        })
    </script>
@endsection
