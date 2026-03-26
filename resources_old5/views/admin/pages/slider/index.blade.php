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
                                        <h3 class="card-title">Slider</h3>
                                    </div>
                                    <div>
                                        <a type="submit" href="{{route('admin.slider.create')}}"
                                           class="btn btn-success"><i
                                                class="fa fa-plus-circle"></i> Yangi
                                        </a>
                                    </div>

                                </div>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table bordered " id="example1">
                                            <thead>
                                            <tr>
                                                <th>
                                                    Rasm
                                                </th>
                                                <th>
                                                    Tekst
                                                </th>
                                                <th>
                                                    Link
                                                </th>
                                                <th style="width: 1px">
                                                    Amallar
                                                </th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($slider_images as $item)
                                                <tr id="tr-href" hrefd="{{$item->link_text}}">
                                                    <td>
                                                        <img style="width: 100px; height: auto"
                                                             src="{{asset($item->image_uz)}}" alt="">
                                                    </td>
                                                    <td>
                                                        <div class="table-text"
                                                             style="font-size: 13px !important; height: 100px !important; overflow: hidden">
                                                            {!!  $item->text_uz ? $item->text_uz : 'Text example'!!}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        {{$item->link_uz?$item->link_uz:'Link text'}}
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="{{route('admin.slider.edit' , ['id' => $item->id])}}"
                                                               type="button" class="btn btn-light"><i
                                                                    class="fa fa-edit"></i></a>
                                                            <button type="button"
                                                                    class="btn btn-light text-danger delete-button"
                                                                    deletingId="slide{{$item->id}}"><i
                                                                    class="fa fa-trash"></i></button>
                                                            <form id="slide{{$item->id}}"
                                                                  action="{{route('admin.slider.delete' , ['id' => $item->id])}}"
                                                                  method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                            </form>
                                                        </div>
                                                    </td>

                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
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
@section('js')
    <script>
        $(document).ready(function () {
            $('#tr-href').click(function () {
                var href = $(this).attr('hrefd');
                // alert(href)
                if (href) {
                    window.location.href = href;
                }
            });
            $('.delete-button').click(function () {
                var id = $(this).attr('deletingId');
                if (confirm('O`chirasizmi?')) {
                    $('#' + id).submit();
                }
            })
            $('.table-text>p').css({
                fontSize: '11px',
                textAlign: 'start'
            })
            $('.table-text>h1').css({
                fontSize: '11px',
                textAlign: 'start'
            })
        })
        $(function () {
            $('#summernote').summernote()
        });
        $(function () {
            $('#summernote1').summernote()
        });
        $(function () {
            $('#summernote2').summernote()
        });

    </script>


@endsection
