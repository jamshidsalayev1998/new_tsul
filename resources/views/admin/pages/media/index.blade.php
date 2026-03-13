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
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col-md-3">
                    <h3 class="card-title">Media Galereyasi</h3>
                  </div>
                  <div class="col-md-7">
                    <form action="{{route('admin.media.index')}}" method="GET" class="row">
                      <div class="col-md-6">
                        <div class="input-group">
                          <input type="text" name="search" class="form-control" placeholder="Fayl nomi bo'yicha qidiruv..." value="{{request('search')}}">
                          <div class="input-group-append">
                            <button class="btn btn-default" type="submit">
                              <i class="fa fa-search"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <select name="type" class="form-control" onchange="this.form.submit()">
                          <option value="">Barcha turlar</option>
                          <option value="1" {{request('type') == '1' ? 'selected' : ''}}>Rasm</option>
                          <option value="2" {{request('type') == '2' ? 'selected' : ''}}>PDF</option>
                          <option value="3" {{request('type') == '3' ? 'selected' : ''}}>Word</option>
                          <option value="4" {{request('type') == '4' ? 'selected' : ''}}>Excel</option>
                          <option value="5" {{request('type') == '5' ? 'selected' : ''}}>Video</option>
                          <option value="6" {{request('type') == '6' ? 'selected' : ''}}>Audio</option>
                          <option value="7" {{request('type') == '7' ? 'selected' : ''}}>Arxiv (zip/rar)</option>
                          <option value="0" {{request('type') == '0' ? 'selected' : ''}}>Boshqalar</option>
                        </select>
                      </div>
                    </form>
                  </div>
                  <div class="col-md-2 text-right">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-lg"><i class="fa fa-plus"></i> Yangi yuklash</button>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <style>
                  .media-box {
                    border: 1px solid #ddd;
                    border-radius: 8px;
                    margin-bottom: 20px;
                    padding: 10px;
                    transition: all 0.3s ease;
                    background: #fff;
                    position: relative;
                  }
                  .media-box:hover {
                    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
                  }
                  .media-preview {
                    height: 150px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    background: #f8f9fa;
                    border-radius: 4px;
                    overflow: hidden;
                    margin-bottom: 10px;
                  }
                  .media-preview img {
                    max-height: 100%;
                    max-width: 100%;
                    object-fit: contain;
                  }
                  .media-preview i {
                    font-size: 60px;
                    color: #6c757d;
                  }
                  .media-info {
                    font-size: 14px;
                  }
                  .media-actions {
                    position: absolute;
                    top: 10px;
                    right: 10px;
                    opacity: 0;
                    transition: opacity 0.3s ease;
                    display: flex;
                    gap: 5px;
                  }
                  .media-box:hover .media-actions {
                    opacity: 1;
                  }
                  .truncate {
                    white-space: nowrap;
                    overflow: hidden;
                    text-overflow: ellipsis;
                  }
                </style>
                <div class="row">
                  @foreach($data as $item)
                  @php
                    $ext = pathinfo($item->path, PATHINFO_EXTENSION);
                  @endphp
                  <div class="col-md-3">
                    <div class="media-box text-center">
                      <div class="media-preview">
                        @if($item->type == 1)
                          <img src="{{asset($item->path)}}" alt="{{$item->name}}">
                        @elseif($item->type == 2)
                          <i class="fas fa-file-pdf text-danger"></i>
                        @elseif($item->type == 3)
                          <i class="fas fa-file-word text-primary"></i>
                        @elseif($item->type == 4)
                          <i class="fas fa-file-excel text-success"></i>
                        @elseif($item->type == 5)
                          <i class="fas fa-file-video text-warning"></i>
                        @elseif($item->type == 6)
                          <i class="fas fa-file-audio text-info"></i>
                        @elseif($item->type == 7)
                          <i class="fas fa-file-archive text-secondary"></i>
                        @else
                          <i class="fas fa-file text-muted"></i>
                        @endif
                        <span class="badge badge-dark" style="position: absolute; bottom: 5px; right: 5px; font-size: 10px; opacity: 0.8;">{{strtoupper($ext)}}</span>
                      </div>
                      
                      <div class="media-info">
                        <p class="truncate mb-1" title="{{$item->name}}"><strong>{{$item->name}}</strong></p>
                        <div class="btn-group btn-group-sm w-100">
                          <button type="button" class="btn btn-default" onclick="copyToClipboard('{{asset($item->path)}}')" title="Havolani nusxalash">
                            <i class="fa fa-copy"></i>
                          </button>
                          <a href="{{asset($item->path)}}" target="_blank" class="btn btn-default" title="Ko'rish">
                            <i class="fa fa-eye"></i>
                          </a>
                          <a href="{{asset($item->path)}}" download class="btn btn-default" title="Yuklab olish">
                            <i class="fa fa-download"></i>
                          </a>
                          <form action="{{ route('admin.media.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Haqiqatdan ham o\'chirmoqchimisiz?')" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" title="O'chirish">
                              <i class="fa fa-trash"></i>
                            </button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
                
                <div class="d-flex justify-content-center mt-4">
                  {{ $data->appends(request()->input())->links() }}
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
     <div class="modal fade" id="modal-lg">
         <form action="{{route('admin.media.store')}}" method="post" enctype="multipart/form-data">
             @csrf
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Yangi fayl yuklash</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="form-group">
                          <label for="">Faylni tanlang (Rasm, PDF, Word, Excel, Video...)</label>
                          <div class="img-box border d-flex align-items-center justify-content-center" style="width: 100%; height: 250px; overflow: hidden; background: #f8f9fa; border-radius: 8px; cursor: pointer" onclick="$('#imageUpload1').click()">
                              <img src="" alt="" id="imagePreview1" style="max-width: 100%; max-height: 100%; display: none">
                              <div id="fileInfo1" style="text-align: center; color: #6c757d;">
                                <i class="fa fa-cloud-upload" style="font-size: 50px;"></i>
                                <p class="mb-0">Tanlash uchun bosing</p>
                              </div>
                              <input type="file" id="imageUpload1" hidden name="image" required>
                          </div>
                      </div>
                      
                      <div class="form-group">
                            <label for="">Nomi (ixtiyoriy)</label>
                            <input type="text" name="name" class="form-control" placeholder="Fayl uchun nom kiriting...">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Yopish</button>
                      <button type="submit" class="btn btn-primary">Yuklash</button>
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
        <!-- /.modal-dialog -->
           </form>
      </div>
@endsection
@section('js')
    <script>
         function readURL1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                var file = input.files[0];
                var fileType = file['type'];
                var validImageTypes = ['image/gif', 'image/jpeg', 'image/png', 'image/webp', 'image/svg+xml'];
                
                reader.onload = function(e) {
                    if ($.in_array(fileType, validImageTypes) < 0) {
                        $('#imagePreview1').hide();
                        $('#fileInfo1').html('<i class="fa fa-file" style="font-size: 50px;"></i><p class="mt-2">' + file.name + '</p>').show();
                    } else {
                        $('#imagePreview1').attr('src', e.target.result).show();
                        $('#fileInfo1').hide();
                    }
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload1").change(function() {
            readURL1(this);
        });

        function copyToClipboard(text) {
          var $temp = $("<input>");
          $("body").append($temp);
          $temp.val(text).select();
          document.execCommand("copy");
          $temp.remove();
          
          // Toast notification or similar could be added here
          alert("Havola nusxalandi!");
        }
    </script>
@endsection
