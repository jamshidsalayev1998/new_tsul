@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">


                        <div class="card">
                            <div class="card-header w-100">
                                <div style="display: flex; justify-content: space-between ; width: 100%">
                                    <div>
                                        <h3 class="card-title">O'qituvchi</h3>
                                    </div>


                                </div>

                            </div>
                            <!-- /.card-header -->

                            <div class="card-body">

                                <ul class="nav nav-tabs" id="lang_tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="lang-ru-tab" data-toggle="tab"
                                           href="#create-article"
                                           role="tab" aria-controls="create-article" aria-selected="false">Yangi maqola
                                            qo'shish</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " id="lang-uz-tab" data-toggle="tab"
                                           href="#lang-uz"
                                           role="tab" aria-controls="profile" aria-selected="false">Maqolalari</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="lang-ru-tab" data-toggle="tab" href="#lang-ru"
                                           role="tab" aria-controls="contact" aria-selected="false">Umumiy</a>
                                    </li>

                                </ul>
                                <div class="tab-content" id="lang_tabContent">
                                    <div class="tab-pane fade show active" id="create-article" role="tabpanel"
                                         aria-labelledby="contact-tab">
                                        <form action="{{route('articles.store')}}" method="post" class="form_news">
                                            @csrf
                                            @method('POST')
                                            <input type="text" readonly hidden value="{{$data->id}}" name="teacher_id">
                                            <div class="row">
                                                <div class="col-md-12 text-center">
                                                    @if ($errors->any())
                                                        @foreach ($errors->all() as $error)
                                                            <div class="text-danger"> * {{$error}}</div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                                <div class="col-md-12 row" style="justify-content: flex-end">
                                                    <button type="button" form="teacher_info"
                                                            class="btn btn-success saqlash_button"> saqlash
                                                    </button>
                                                </div>
                                                <div class="col-md-12 form-group">
                                                    <label for=""> <span class="text-danger">*</span> Maqola ssilkasi</label>
                                                    <input type="text" class="form-control" name="link"
                                                           value="{{old('link')}}">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for=""><span class="text-danger">*</span>Nomi (UZ)</label>
                                                    <input type="text" class="form-control" name="name_uz"
                                                           value="{{old('name_uz')}}">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="">Nomi (RU)</label>
                                                    <input type="text" class="form-control" name="name_ru"
                                                           value="{{old('name_ru')}}">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="">Nomi (EN)</label>
                                                    <input type="text" class="form-control" name="name_en"
                                                           value="{{old('name_en')}}">
                                                </div>
                                            </div>
                                            <ul class="nav nav-tabs mt-3" id="myTab2" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="general-tab" data-toggle="tab"
                                                       href="#general2"
                                                       role="tab" aria-controls="profile" aria-selected="false">Qisqacha
                                                        ma'lumot</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="contact-tab" data-toggle="tab"
                                                       href="#contact2"
                                                       role="tab" aria-controls="contact" aria-selected="false">Izoh</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="myTab2Content">
                                                <div class="tab-pane fade show  active" id="general2" role="tabpanel"
                                                     aria-labelledby="profile-tab">
                                                    <div class="form-group">
                                                        <label for="">Qisqacha ma'lumot kiriting</label>
                                                        <div id="toolbar-container3"></div>
                                                        <div id="editor3" data-text="editor_text3" class="border"></div>
                                                        <textarea name="short_info" hidden id="editor_text3"
                                                                  cols="30"
                                                                  rows="10"></textarea>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="contact2" role="tabpanel"
                                                     aria-labelledby="contact-tab">
                                                    <div class="form-group">
                                                        <label for="">Izoh kiriting</label>
                                                        <div id="toolbar-container4"></div>
                                                        <div id="editor4" data-text="editor_text4" class="border"></div>
                                                        <textarea name="description" hidden id="editor_text4"
                                                                  cols="30"
                                                                  rows="10"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                    <div class="tab-pane fade  " id="lang-uz" role="tabpanel"
                                         aria-labelledby="profile-tab">

                                        <table class="table table-bordered connect-datatable ">
                                            <thead>
                                            <tr>
                                                <th class="last-td">
                                                    #
                                                </th>
                                                <th>
                                                    Nomi
                                                </th>
                                                <th class="last-td"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i = 0;?>
                                            @foreach($data->articles as $item)
                                                <tr>
                                                    <td>{{++$i}}</td>
                                                    <td>
                                                        <a href="{{route('articles.show' , ['article' => $item->id])}}">{{$item->name_uz}}</a>
                                                    </td>
                                                    <td class="last-td">
                                                        <button class="btn btn-danger form-delete"
                                                                data-id="{{$item->id}}"
                                                        ><i class="fa fa-trash"></i></button>
                                                        <form class="form-card-delete-{{$item->id}}"
                                                              id="{{$item->id}}formdelete"
                                                              action="{{route('articles.destroy' , ['article' => $item->id])}}"
                                                              method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="lang-ru" role="tabpanel"
                                         aria-labelledby="contact-tab">
                                        <div class="row">
                                            <div class="col-md-12 d-flex" style="justify-content: flex-end">
                                                <a class="btn btn-light"
                                                   href="{{route('teachers.edit' , ['teacher' => $data->id])}}"><i
                                                        class="fa fa-edit"></i> O'zgartirish</a>
                                            </div>

                                            <div class="col-md-4 form-group">
                                                <label for="">Ilmiy darajasi</label>
                                                <input type="text" class="form-control" name="degree" readonly
                                                       value="{{$data->teacher_degree ? $data->teacher_degree->name_uz:''}}">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="">Ilmiy unvoni</label>
                                                <input type="text" class="form-control" name="degree" readonly
                                                       value="{{$data->teacher_academic_title ? $data->teacher_academic_title->name_uz:''}}">
                                            </div>
                                            <div class="col-md-12">
                                                <nav>
                                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                        <a class="nav-item nav-link active" id="nav-home-tab"
                                                           data-toggle="tab" href="#nav-home" role="tab"
                                                           aria-controls="nav-home" aria-selected="true">UZ</a>
                                                        <a class="nav-item nav-link" id="nav-profile-tab"
                                                           data-toggle="tab" href="#nav-profile" role="tab"
                                                           aria-controls="nav-profile" aria-selected="false">RU</a>
                                                        <a class="nav-item nav-link" id="nav-contact-tab"
                                                           data-toggle="tab" href="#nav-contact" role="tab"
                                                           aria-controls="nav-contact" aria-selected="false">EN</a>
                                                    </div>
                                                </nav>
                                                <div class="tab-content" id="nav-tabContent">
                                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                                         aria-labelledby="nav-home-tab">
                                                        <div class="col-md-12">
                                                            <div class="col-md-4 form-group">
                                                                <label for="">F.I.O (UZ)</label>
                                                                <input type="text" class="form-control" name="fio_uz"
                                                                       readonly
                                                                       value="{{$data->fio_uz}}">
                                                            </div>
                                                            <div class="w-100 text-center">
                                                                <h3><b>Umumiy ma'lumot</b></h3>
                                                            </div>
                                                            <div class="w-100">
                                                                {!! $data->general_info_uz !!}
                                                            </div>
                                                            <div class="w-100 text-center">
                                                                <h3><b>Kontakt ma'lumot</b></h3>
                                                            </div>
                                                            <div class="w-100">
                                                                {!! $data->contact_info_uz !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                                         aria-labelledby="nav-profile-tab">
                                                        <div class="col-md-12">
                                                            <div class="col-md-4 form-group">
                                                                <label for="">F.I.O (RU)</label>
                                                                <input type="text" class="form-control" name="fio_ru"
                                                                       readonly
                                                                       value="{{$data->fio_ru}}">
                                                            </div>
                                                            <div class="w-100 text-center">
                                                                <h3><b>Umumiy ma'lumot</b></h3>
                                                            </div>
                                                            <div class="w-100">
                                                                {!! $data->general_info_ru !!}
                                                            </div>
                                                            <div class="w-100 text-center">
                                                                <h3><b>Kontakt ma'lumot</b></h3>
                                                            </div>
                                                            <div class="w-100">
                                                                {!! $data->contact_info_ru !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                                         aria-labelledby="nav-contact-tab">
                                                        <div class="col-md-12">
                                                            <div class="col-md-4 form-group">
                                                                <label for="">F.I.O (EN)</label>
                                                                <input type="text" class="form-control" name="fio_en"
                                                                       readonly
                                                                       value="{{$data->fio_en}}">
                                                            </div>
                                                            <div class="w-100 text-center">
                                                                <h3><b>Umumiy ma'lumot</b></h3>
                                                            </div>
                                                            <div class="w-100">
                                                                {!! $data->general_info_en !!}
                                                            </div>
                                                            <div class="w-100 text-center">
                                                                <h3><b>Kontakt ma'lumot</b></h3>
                                                            </div>
                                                            <div class="w-100">
                                                                {!! $data->contact_info_en !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>

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
    @include('admin.pages.teachers.articles.create')
@endsection

@section('js_after')
    <script src="{{asset('admin_lte/ckeditor5/build/ckeditor.js')}}"></script>
    <script src="{{asset('admin_lte/ckeditor5/ckeditor5_connect.js')}}"></script>
@endsection
@section('js')

    <script src="{{asset('admin_lte/ckeditor5/correcting.js')}}"></script>
    <script>
        $('.form-delete').click(function () {
            var id = $(this).attr('data-id');
            if (confirm('O`chirishni tasdiqlaysizmi')) {
                // alert('.form-card-delete-'+id);
                $('.form-card-delete-' + id).submit();
            }
        })
    </script>
@endsection
