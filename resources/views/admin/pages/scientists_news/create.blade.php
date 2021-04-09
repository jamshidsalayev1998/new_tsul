@extends('admin.layouts.master')
@section('link')
      <link rel="stylesheet" href="{{asset('admin_lte/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin_lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
@endsection
@section('content')
    <style>
        /*.select2-selection__rendered{*/
        /*    margin-top: -13px !important;*/
        /*}*/
        .select2-container--default .select2-selection--multiple .select2-selection__choice {
                background-color: #6f42c1 !important;
                border-color: #643ab0 !important;
                color: #fff;
        }
    </style>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card- header w-100 mt-2">
                  <div  style="display: flex; justify-content: space-between ; width: 100%">
                      <div>
                        <h3 class="card-title">Separately news</h3>
                    </div>
                      <div>
                        <button type="button"  class="btn btn-success saqlash_button" >saqlash</button>
                    </div>

                  </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <form action="{{route('admin_young_scientist_new.store')}}" class="scientist_form" method="post">
                      @csrf
                      <input type="text" name="data_id" hidden readonly>
                      <input type="text" name="has"  hidden readonly>
                  <div class="row">
                      <div class="col-md-4">
                          <div class="form-group">
                              <label for="">Date</label>
                              <input type="date" class="form-control" name="date">
                          </div>
                      </div>
                      <div class="col-md-12 mt-3">
                        <div class="card card-primary card-outline card-outline-tabs">
                          <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-four-1-tab" data-toggle="pill" href="#custom-tabs-four-1" role="tab" aria-controls="custom-tabs-four-1" aria-selected="false">Title uz</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-2-tab" data-toggle="pill" href="#custom-tabs-four-2" role="tab" aria-controls="custom-tabs-four-2" aria-selected="false">Title ru</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-3-tab" data-toggle="pill" href="#custom-tabs-four-3" role="tab" aria-controls="custom-tabs-four-3" aria-selected="false">Title en</a>
                              </li>
                            </ul>
                          </div>
                          <div class="card-body">
                            <div class="tab-content" id="custom-tabs-four-tabContent">
                              <div class="tab-pane fade show active" id="custom-tabs-four-1" role="tabpanel" aria-labelledby="custom-tabs-four-1-tab">
                                  <input type="text" class="form-control" name="title_uz" >
                              </div>
                              <div class="tab-pane fade" id="custom-tabs-four-2" role="tabpanel" aria-labelledby="custom-tabs-four-2-tab">
                                  <input type="text" class="form-control" name="title_ru" >
                              </div>
                              <div class="tab-pane fade" id="custom-tabs-four-3" role="tabpanel" aria-labelledby="custom-tabs-four-3-tab">
                                  <input type="text" class="form-control" name="title_en" >
                              </div>
                            </div>
                          </div>
                          <!-- /.card -->
                        </div>
                      </div>
                      <div class="col-md-12 mt-3">
                        <div class="card card-primary card-outline card-outline-tabs">
                          <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-short-1-tab" data-toggle="pill" href="#custom-tabs-short-1" role="tab" aria-controls="custom-tabs-short-1" aria-selected="false">Short info uz</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-short-2-tab" data-toggle="pill" href="#custom-tabs-short-2" role="tab" aria-controls="custom-tabs-short-2" aria-selected="false">Short info ru</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-short-3-tab" data-toggle="pill" href="#custom-tabs-short-3" role="tab" aria-controls="custom-tabs-short-3" aria-selected="false">Short info en</a>
                              </li>
                            </ul>
                          </div>
                          <div class="card-body">
                            <div class="tab-content" id="custom-tabs-short-tabContent">
                              <div class="tab-pane fade show active" id="custom-tabs-short-1" role="tabpanel" aria-labelledby="custom-tabs-short-1-tab">
                                  <textarea rows="5" class="form-control" name="short_info_uz" ></textarea>
                              </div>
                              <div class="tab-pane fade" id="custom-tabs-short-2" role="tabpanel" aria-labelledby="custom-tabs-short-2-tab">
                                  <textarea rows="5" class="form-control" name="short_info_ru" ></textarea>
                              </div>
                              <div class="tab-pane fade" id="custom-tabs-short-3" role="tabpanel" aria-labelledby="custom-tabs-short-3-tab">
                                  <textarea rows="5" class="form-control" name="short_info_en" ></textarea>
                              </div>
                            </div>
                          </div>
                          <!-- /.card -->
                        </div>
                      </div>
                      <div class="col-md-12 mt-3">
                        <div class="card card-primary card-outline card-outline-tabs">
                          <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-four-short4-tab" data-toggle="pill" href="#custom-tabs-four-short4" role="tab" aria-controls="custom-tabs-four-short4" aria-selected="false">Content uz</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-short5-tab" data-toggle="pill" href="#custom-tabs-four-short5" role="tab" aria-controls="custom-tabs-four-short5" aria-selected="false">Content ru</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-short6-tab" data-toggle="pill" href="#custom-tabs-four-short6" role="tab" aria-controls="custom-tabs-four-short6" aria-selected="false">Content en</a>
                              </li>
                            </ul>
                          </div>
                          <div class="card-body">
                            <div class="tab-content" id="custom-tabs-four-tabContent">
                              <div class="tab-pane fade show active" id="custom-tabs-four-short4" role="tabpanel" aria-labelledby="custom-tabs-four-short4-tab">
                                  <div id="toolbar-container1"></div>
                                  <div id="editor1" data-text="editor_text1" class="border" ></div>
                                  <textarea name="content_uz" hidden rows="11"  cols="30" id="editor_text1" class="form-control"></textarea>
                              </div>
                              <div class="tab-pane fade" id="custom-tabs-four-short5" role="tabpanel" aria-labelledby="custom-tabs-four-short5-tab">
                                   <div id="toolbar-container2"></div>
                                  <div id="editor2" data-text="editor_text2" class="border" ></div>
                                  <textarea name="content_ru" hidden rows="11"  cols="30" id="editor_text2" class="form-control"></textarea>
                              </div>
                              <div class="tab-pane fade" id="custom-tabs-four-short6" role="tabpanel" aria-labelledby="custom-tabs-four-short6-tab">
                                  <div id="toolbar-container3"></div>
                                  <div id="editor3" data-text="editor_text3" class="border"></div>
                                  <textarea name="content_en" hidden rows="11" id="editor_text3"  cols="30" class="form-control"></textarea>
                              </div>
                            </div>
                          </div>
                          <!-- /.card -->
                        </div>
                      </div>
                  </div>
                      </form>
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
@endsection
@section('js_after')
    <script src="{{asset('admin_lte/ckeditor5/build/ckeditor.js')}}"></script>
    <script>
        DecoupledDocumentEditor
			.create( document.querySelector( '#editor1' ), {
				toolbar: {
					items: [
						'heading',
						'|',
						'fontSize',
						'fontFamily',
						'|',
						'fontColor',
						'fontBackgroundColor',
						'|',
						'bold',
						'italic',
						'underline',
						'strikethrough',
						'|',
						'alignment',
						'|',
						'numberedList',
						'bulletedList',
						'|',
						'outdent',
						'indent',
						'|',
						'todoList',
						'link',
						'blockQuote',
						'insertTable',
						'mediaEmbed',
						'|',
						'undo',
						'redo'
					]
				},
				language: 'en',
				image: {
					toolbar: [
						'imageTextAlternative',
						'imageStyle:full',
						'imageStyle:side'
					]
				},
				table: {
					contentToolbar: [
						'tableColumn',
						'tableRow',
						'mergeTableCells',
						'tableCellProperties',
						'tableProperties'
					]
				},
				licenseKey: '',
			} )
			.then( editor => {
				window.editor = editor;
				// Set a custom container for the toolbar.
				document.querySelector( '#toolbar-container1' ).appendChild( editor.ui.view.toolbar.element );
				document.querySelector( '.ck-toolbar' ).classList.add( 'ck-reset_all' );
			} )
			.catch( error => {
				console.error( 'Oops, something went wrong!' );
				console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
				console.warn( 'Build id: 12wnwvrp0o4v-pqf1ta5h7q1c' );
				console.error( error );
			} );
        DecoupledDocumentEditor
            .create( document.querySelector( '#editor2' ), {
                toolbar: {
                    items: [
                        'heading',
                        '|',
                        'fontSize',
                        'fontFamily',
                        '|',
                        'fontColor',
                        'fontBackgroundColor',
                        '|',
                        'bold',
                        'italic',
                        'underline',
                        'strikethrough',
                        '|',
                        'alignment',
                        '|',
                        'numberedList',
                        'bulletedList',
                        '|',
                        'outdent',
                        'indent',
                        '|',
                        'todoList',
                        'link',
                        'blockQuote',
                        'insertTable',
                        'mediaEmbed',
                        '|',
                        'undo',
                        'redo'
                    ]
                },
                language: 'en',
                image: {
                    toolbar: [
                        'imageTextAlternative',
                        'imageStyle:full',
                        'imageStyle:side'
                    ]
                },
                table: {
                    contentToolbar: [
                        'tableColumn',
                        'tableRow',
                        'mergeTableCells',
                        'tableCellProperties',
                        'tableProperties'
                    ]
                },
                licenseKey: '',
            } )
            .then( editor => {
                window.editor = editor;
                // Set a custom container for the toolbar.
                document.querySelector( '#toolbar-container2' ).appendChild( editor.ui.view.toolbar.element );
                document.querySelector( '.ck-toolbar' ).classList.add( 'ck-reset_all' );
            } )
            .catch( error => {
                console.error( 'Oops, something went wrong!' );
                console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
                console.warn( 'Build id: 12wnwvrp0o4v-pqf1ta5h7q1c' );
                console.error( error );
            } );
        DecoupledDocumentEditor
			.create( document.querySelector( '#editor3' ), {
				toolbar: {
					items: [
						'heading',
						'|',
						'fontSize',
						'fontFamily',
						'|',
						'fontColor',
						'fontBackgroundColor',
						'|',
						'bold',
						'italic',
						'underline',
						'strikethrough',
						'|',
						'alignment',
						'|',
						'numberedList',
						'bulletedList',
						'|',
						'outdent',
						'indent',
						'|',
						'todoList',
						'link',
						'blockQuote',
						'insertTable',
						'mediaEmbed',
						'|',
						'undo',
						'redo'
					]
				},
				language: 'en',
				image: {
					toolbar: [
						'imageTextAlternative',
						'imageStyle:full',
						'imageStyle:side'
					]
				},
				table: {
					contentToolbar: [
						'tableColumn',
						'tableRow',
						'mergeTableCells',
						'tableCellProperties',
						'tableProperties'
					]
				},
				licenseKey: '',
			} )
			.then( editor => {
				window.editor = editor;
				// Set a custom container for the toolbar.
				document.querySelector( '#toolbar-container3' ).appendChild( editor.ui.view.toolbar.element );
				document.querySelector( '.ck-toolbar' ).classList.add( 'ck-reset_all' );
			} )
			.catch( error => {
				console.error( 'Oops, something went wrong!' );
				console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
				console.warn( 'Build id: 12wnwvrp0o4v-pqf1ta5h7q1c' );
				console.error( error );
			} );
	</script>

@endsection
@section('js')
    <script>
        $('.saqlash_button').click(function(){
            var data_text = $('#editor1').attr('data-text');
            var text = $('#editor1').html();
            $('#'+data_text).html(text);
            var data_text = $('#editor2').attr('data-text');
            var text = $('#editor2').html();
            $('#'+data_text).html(text);
            var data_text = $('#editor3').attr('data-text');
            var text = $('#editor3').html();
            $('#'+data_text).html(text);
            if(confirm('Saqlaysizmi? ')){
                // alert('dsd');
                // console.log($('form'));
                $('.scientist_form').submit();
            }
        });
    </script>

    <script>
        function readURL1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview1').attr('src' , e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload1").change(function() {
            readURL1(this);
        });
        $('.select-image1').click(function(){
            $("#imageUpload1").click();
        });


        function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview2').attr('src' , e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload2").change(function() {
            readURL2(this);
        });
        $('.select-image2').click(function(){
            $("#imageUpload2").click();
        });

        function readURL3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview3').attr('src' , e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload3").change(function() {
            readURL3(this);
        });
        $('.select-image3').click(function(){
            $("#imageUpload3").click();
        });
    </script>
@endsection
