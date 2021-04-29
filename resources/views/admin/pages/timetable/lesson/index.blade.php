@extends('admin.layouts.master')
@section('content')

    <style>
        .delete-file{
            background-color: transparent;
            border-radius: 5px;
        }
        .delete-file:hover {
            background-color: #E2E6EA;
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
              <div class="card-header w-100">
                  <div  style="display: flex; justify-content: space-between ; width: 100%">
                      <div>
                        <h3 class="card-title">Pages</h3>
                    </div>


                  </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <div class="card card-primary card-outline card-outline-tabs">
                      <div class="card-header p-0 border-bottom-0">
                        <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                            @foreach($data as $item)
                          <li class="nav-item">
                            <a class="nav-link @if($loop->first) active @endif" id="custom-tabs-four-home-tab{{$item->id}}" data-toggle="pill" href="#custom-tabs-{{$item->id}}" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">{{$item->name}}</a>
                          </li>
                            @endforeach

                        </ul>
                      </div>
                      <div class="card-body">
                        <div class="tab-content" id="custom-tabs-four-tabContent">
                            @foreach($data as $item)
                                <?php
                                $faculties = 'App\Faculty'::where('type_id' , $item->type_id)->get();
                                ?>
                          <div class="tab-pane fade show  @if($loop->first) active @endif" id="custom-tabs-{{$item->id}}" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab{{$item->id}}">
                              <div class="row" style="justify-content: flex-end">
                                  <button class="btn btn-success" data-toggle="modal" data-target="#add_group{{$item->id}}">+ New</button>
                                  <div class="modal fade" id="add_group{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <form action="{{route('admin.lesson.group.store')}}" method="post" enctype="multipart/form-data">
                                          @csrf
                                          <input type="text" readonly hidden name="course_id" value="{{$item->id}}">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">{{$item->name}} - group add</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                  <div class="form-group">
                                                      <label for="">Name</label>
                                                      <input type="text" class="form-control" name="name">
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="">Faculty</label>
                                                      <select name="faculty_id" class="form-control"  id="">
                                                          @foreach($faculties as $faculty)
                                                              <option value="{{$faculty->id}}">{{$faculty->name_uz}}</option>
                                                          @endforeach
                                                      </select>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="">Time table</label>
                                                      <input type="file" class="form-control" name="timetable_file">
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="">Session</label>
                                                      <input type="file" class="form-control" name="timetable_session_file">
                                                  </div>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                              </div>
                                            </div>
                                          </div>
                                       </form>
                                    </div>
                              </div>
                              <div class="row mt-3">
                                  <table class="table table-bordered">
                                  <thead>
                                  <tr>
                                      <th class="last-td">
                                          #
                                      </th>
                                      <th>
                                          Name
                                      </th>
                                      <th>
                                          Faculty
                                      </th>
                                      <th class="last-td">Lesson</th>
                                      <th class="last-td">Session</th>
                                      <th class="last-td"></th>
                                      <th class="last-td"></th>

                                  </tr>
                                  </thead>
                                  <tbody>
                                  <?php $i = 0;?>
                                  @foreach($item->groups as $group)
                                      <tr>
                                          <td>{{++$i}}</td>
                                          <td>{{$group->name}}</td>
                                          <td>{{$group->faculty->name_uz}}</td>
                                          <td>
                                              @if($group->timetable_file)
                                               <div style="display: flex">
                                                    <a class="btn btn-light" href="{{asset('')}}{{$group->timetable_file}}"><i class="fa fa-file" aria-hidden="true"></i></a>
                                                  <button type="button" class="delete-file" data-id="{{$group->id}}" data-type="1" style="color: red; padding: 7px; border:none; "><i class="fa fa-times-circle" aria-hidden="true"></i></button>
                                               </div>
                                              @endif
                                          </td>
                                          <td>
                                               @if($group->timetable_session_file)
                                                   <div style="display: flex">
                                                    <a class="btn btn-light" href="{{asset('')}}{{$group->timetable_session_file}}"><i class="fa fa-file" aria-hidden="true"></i></a>
                                                  <button type="button" class="delete-file" data-id="{{$group->id}}" data-type="2" style="color: red; padding: 7px; border:none; background-color: transparent"><i class="fa fa-times-circle" aria-hidden="true"></i></button>
                                               </div>
                                              @endif
                                          </td>
                                          <td>
                                              <button class="btn btn-light" data-toggle="modal" data-target="#edit_group{{$group->id}}"><i class="fa fa-edit"></i></button>
                                              <div class="modal fade" id="edit_group{{$group->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                  <form action="{{route('admin.lesson.group.update')}}" method="post" enctype="multipart/form-data">
                                                      @csrf
                                                      <input type="text" readonly hidden name="group_id" value="{{$group->id}}">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">{{$item->name}} - group edit</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                            </button>
                                                          </div>
                                                          <div class="modal-body">
                                                              <div class="form-group">
                                                                  <label for="">Name</label>
                                                                  <input type="text" class="form-control" name="name" value="{{$group->name}}">
                                                              </div>
                                                              <div class="form-group">
                                                                  <label for="">Faculty</label>
                                                                  <select name="faculty_id" class="form-control"  id="">
                                                                      @foreach($faculties as $facultyy)
                                                                          <option @if($group->faculty_id == $facultyy->id) selected @endif value="{{$facultyy->id}}">{{$facultyy->name_uz}}</option>
                                                                      @endforeach
                                                                  </select>
                                                              </div>
                                                              <div class="form-group">
                                                                  <label for="">Time table</label>
                                                                  <input type="file" class="form-control" name="timetable_file" placeholder="ds">
                                                              </div>
                                                              <div class="form-group">
                                                                  <label for="">Session</label>
                                                                  <input type="file" class="form-control" name="timetable_session_file" placeholder="ds">
                                                              </div>
                                                          </div>
                                                          <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save</button>
                                                          </div>
                                                        </div>
                                                      </div>
                                                   </form>
                                                </div>
                                          </td>
                                          <td class="last-td">
                                              <button type="button" class="btn btn-light form-delete" data-id="{{$group->id}}">
                                                  <i class="fa fa-trash"></i>
                                              </button>
                                              <form action="#" class="form-card-delete-{{$group->id}}" method="post">
                                                  @method('DELETE')
                                                  @csrf
                                                  <input type="text" hidden readonly value="{{$group->id}}" name="id">
                                              </form>
                                          </td>
                                      </tr>
                                  @endforeach
                                  </tbody>
                              </table>
                              </div>

                          </div>
                                 @endforeach

                        </div>
                      </div>
                      <!-- /.card -->
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
@endsection
@section('js')
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
        $('.delete-file').click(function(){
            var id = $(this).attr('data-id');
            var type = $(this).attr('data-type');
            if(confirm("Faylni o`chirasizmi ? ")){
                var url = '/admin/timetable-delete-file/'+id+'/'+type;
                window.location.href = url;
            }
        })
    </script>
@endsection
