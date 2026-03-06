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
                  <div  style="display: flex; justify-content: space-between ; width: 100%">
                      <div>
                        <h3 class="card-title">Rektorat</h3>
                    </div>
                      <div>
                        <button type="button" class="btn btn-success saqlash_button" > <i class="fa fa-save"></i> Saqlash</button>
                    </div>
                  </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <form action="{{route('admin.rektorat.store')}}" class="form_sub" id="ttt" method="post" enctype="multipart/form-data">
                      @csrf
                  <div class="row">
                        <div class="col-md-3">
                          <div class="form-group ">
                              <label for="">Image</label>
                              <div class="border"  style="height: 300px;">
                                <img src="" alt=""  id="imagePreview1" style="width: 100%; height: auto; max-height: 300px;" name="image">
                              </div>
                              <input type="file" id="imageUpload1" hidden name="image">
                          </div>
                          <div>
                              <button type="button" class="btn btn-light select-image1" style="right: 0; bottom: 0; position: absolute"><i class="fa fa-edit"></i></button>
                          </div>
                      </div>
                      <div class="col-md-9">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="card card-primary card-outline card-outline-tabs">
                          <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-four-image1-tab" data-toggle="pill" href="#custom-tabs-four-image1" role="tab" aria-controls="custom-tabs-four-image1" aria-selected="false">UZ</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-image2-tab" data-toggle="pill" href="#custom-tabs-four-image2" role="tab" aria-controls="custom-tabs-four-image2" aria-selected="false">RU</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-image3-tab" data-toggle="pill" href="#custom-tabs-four-image3" role="tab" aria-controls="custom-tabs-four-image3" aria-selected="false">EN</a>
                              </li>
                            </ul>
                          </div>
                          <div class="card-body">
                            <div class="tab-content" id="custom-tabs-four-tabContent">
                              <div class="tab-pane fade show active" id="custom-tabs-four-image1" role="tabpanel" aria-labelledby="custom-tabs-four-image1-tab">
                                  <div class="row">
                                      <div class="form-group col-md-8">
                                          <label for="">Full name uz</label>
                                          <input type="text" class="form-control" name="full_name_uz">
                                     </div>
                                      <div class="form-group col-md-4">
                                          <label for="">Type name uz</label>
                                          <input type="text" class="form-control" name="type_name_uz">
                                     </div>
                                      <div class="form-group col-md-6">
                                          <label for="">Address uz</label>
                                          <input type="text" class="form-control" name="address_uz">
                                     </div>
                                      <div class="form-group col-md-6">
                                          <label for="">Academic title uz</label>
                                          <input type="text" class="form-control" name="academic_title_uz">
                                     </div>
                                      <div class="form-group col-md-6">
                                          <label for="">Academic degree uz</label>
                                          <input type="text" class="form-control" name="academic_degree_uz">
                                     </div>
                                  </div>

                              </div>
                              <div class="tab-pane fade" id="custom-tabs-four-image2" role="tabpanel" aria-labelledby="custom-tabs-four-image2-tab">
                                  <div class="row">
                                      <div class="form-group col-md-8">
                                          <label for="">Full name ru</label>
                                          <input type="text" class="form-control" name="full_name_ru">
                                     </div>
                                      <div class="form-group col-md-4">
                                          <label for="">Type name ru</label>
                                          <input type="text" class="form-control" name="type_name_ru">
                                     </div>
                                      <div class="form-group col-md-6">
                                          <label for="">Address ru</label>
                                          <input type="text" class="form-control" name="address_ru">
                                     </div>
                                      <div class="form-group col-md-6">
                                          <label for="">Academic title ru</label>
                                          <input type="text" class="form-control" name="academic_title_ru">
                                     </div>
                                      <div class="form-group col-md-6">
                                          <label for="">Academic degree ru</label>
                                          <input type="text" class="form-control" name="academic_degree_ru">
                                     </div>
                                  </div>
                              </div>
                              <div class="tab-pane fade" id="custom-tabs-four-image3" role="tabpanel" aria-labelledby="custom-tabs-four-image3-tab">
                                    <div class="row">
                                      <div class="form-group col-md-8">
                                          <label for="">Full name en</label>
                                          <input type="text" class="form-control" name="full_name_en">
                                     </div>
                                      <div class="form-group col-md-4">
                                          <label for="">Type name en</label>
                                          <input type="text" class="form-control" name="type_name_en">
                                     </div>
                                      <div class="form-group col-md-6">
                                          <label for="">Address en</label>
                                          <input type="text" class="form-control" name="address_en">
                                     </div>
                                        <div class="form-group col-md-6">
                                          <label for="">Academic title en</label>
                                          <input type="text" class="form-control" name="academic_title_en">
                                     </div>
                                        <div class="form-group col-md-6">
                                          <label for="">Academic degree en</label>
                                          <input type="text" class="form-control" name="academic_degree_en">
                                     </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                          <!-- /.card -->
                        </div>

                              </div>

                          </div>
                      </div>
                          <div class="col-md-4">
                                  <div class="form-group">
                                      <label for="">Email</label>
                                      <input type="text" class="form-control" name="email">
                                  </div>
                          </div>
                      <div class="col-md-4">
                                  <div class="form-group">
                                      <label for="">Phone 1</label>
                                      <input type="text" class="form-control" name="phone1">
                                  </div>
                              </div>
                               <div class="col-md-4">
                                  <div class="form-group">
                                      <label for="">Phone 2</label>
                                      <input type="text" class="form-control" name="phone2">
                                  </div>
                               </div>
                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label for="">Phone 3</label>
                                      <input type="text" class="form-control" name="phone3">
                                  </div>
                               </div>

                      <div class="col-md-12 mt-3">
                        <div class="card card-primary card-outline card-outline-tabs">
                          <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-four-4-tab" data-toggle="pill" href="#custom-tabs-four-4" role="tab" aria-controls="custom-tabs-four-4" aria-selected="false">Content uz</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-5-tab" data-toggle="pill" href="#custom-tabs-four-5" role="tab" aria-controls="custom-tabs-four-5" aria-selected="false">Content ru</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-6-tab" data-toggle="pill" href="#custom-tabs-four-6" role="tab" aria-controls="custom-tabs-four-6" aria-selected="false">Content en</a>
                              </li>
                            </ul>
                          </div>
                          <div class="card-body">
                            <div class="tab-content" id="custom-tabs-four-tabContent">
                              <div class="tab-pane fade show active" id="custom-tabs-four-4" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                  <div id="toolbar-container1"></div>
                                  <div id="editor1" data-text="editor_text1" class="border" ></div>
                                  <textarea name="content_uz" hidden id="editor_text1" cols="30" rows="10"></textarea>
                              </div>
                              <div class="tab-pane fade" id="custom-tabs-four-5" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                                  <div id="toolbar-container2"></div>
                                  <div id="editor2" data-text="editor_text2" class="border" ></div>
                                  <textarea name="content_ru" hidden id="editor_text2" cols="30" rows="10"></textarea>
                              </div>
                              <div class="tab-pane fade" id="custom-tabs-four-6" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                                  <div id="toolbar-container3"></div>
                                  <div id="editor3" data-text="editor_text3" class="border"></div>
                                  <textarea name="content_en" hidden id="editor_text3" cols="30" rows="10"></textarea>
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
@section('js')
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
                $('.form_sub').submit();
            }
        });
     </script>
    <script>
        $('.form-delete').click(function(){
            var id = $(this).attr('data-id');
            if(confirm('O`chirishni tasdiqlaysizmi')){
                // alert('.form-card-delete-'+id);
                $('.form-card-delete-'+id).submit();
            }
        })
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
     </script>
@endsection
