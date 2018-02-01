@extends('layouts.default')
@section('content')

<!-- Page Content -->
<div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-body">
          <section id="basic-form-layouts">
            <div class="row match-height">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title" id="basic-layout-colored-form-control"><i class="icon-clipboard2"></i> Tasks Management</h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    <div class="heading-elements">
                    </div>
                  </div>
                  <div class="card-body collapse in">
                    <div class="card-block">
                      <div class="row">
                        <div class="col-md-12">
                          <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#iconModal-create" >
                            <i class="icon-clipboard2"></i> Create Task
                          </button>
                          </br></br>
                        </div> 
                      </div>
                
                      <!-- Hoverable rows start -->
                      <div class="row">
                        <div class="col-md-12">  

                        <ul class="nav nav-tabs">
                          <li class="nav-item">
                            <a class="nav-link active" id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#tab1" aria-expanded="true">Pending</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#tab2" aria-expanded="false">Completed</a>
                          </li>
                        </ul>
                        <div class="tab-content px-1 pt-1">
                          <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true" aria-labelledby="base-tab1">
                            <div class="table-responsive">
                              <table class="table table-hover mb-0">
                                <thead class="thead-inverse">
                                  <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Detail</th>
                                    <th>Date Time</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <thead>
                                  <tr >
                                    <th colspan="4">Staus | Pendding</th>
                                    <th colspan="2" class="text-xs-right">
                                      Total : <span class="tag tag-default tag-success">{{ $count_pendding }}</span>
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php $pi=1; ?>
                                @foreach ($task_pendding as $ptask)
                                  <tr>
                                    <td style="width:1%" class="text-xs-right">{{ $pi++ }}.</td>
                                    <td style="width:28%">{{ $ptask->title }}</td>
                                    <td style="width:40%">{{ $ptask->detail }}</td>
                                    <td style="width:20%">{{ date_format(date_create($ptask->task_time),'d-m-Y H:i') }}</td>
                                    <td style="width:10%"><div class="tag tag-info">{{ $ptask->status }} </div>
                                    </td>
                                    <td style="width:1%">
                                      <div class="btt_vpend"
                                        data-id="{{ $ptask->id }}"
                                        data-title="{{ $ptask->title }}"
                                        data-detail="{{ $ptask->detail }}"
                                        data-taskdate="{{ $ptask->task_date }}"
                                        data-tasktime="{{ date_format(date_create($ptask->task_time),'H:i') }}"
                                        data-taskstatus ="{{ $ptask->status }}"
                                      >
                                        <button type="submit"  class="btn btn-primary" data-toggle="modal" data-target="#iconModal" >
                                          <i class="icon-eye6"></i> view
                                        </button>
                                      </div>  
                                    </td>
                                  </tr>
                                @endforeach
                                </tbody>
                              </table>
                            </div>  
                          </div>

                          <div class="tab-pane" id="tab2" aria-labelledby="base-tab2">
                            <div class="table-responsive">
                              <table class="table table-hover mb-0">
                                <thead class="thead-inverse">
                                  <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Detail</th>
                                    <th>Date Time</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <thead>
                                  <tr >
                                    <th colspan="4">Staus | Complete</th>
                                    <th colspan="2" class="text-xs-right">
                                      Total : <span class="tag tag-default tag-success">{{ $count_complete }}</span>
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php $ci=1; ?>
                                  @foreach ($task_complete as $ctask)
                                  <tr>
                                    <td style="width:1%" class="text-xs-right">{{ $ci++ }}.</td>
                                    <td style="width:28%">{{ $ctask->title }}</td>
                                    <td style="width:40%">{{ $ctask->detail }}</td>
                                    <td style="width:20%">{{ $ctask->task_time }}</td>
                                    <td style="width:10%"><div class="tag tag-success">{{ $ctask->status }} </div></td>
                                    <td style="width:1%">
                                      <div class="btt_vcomp"
                                        data-id="{{ $ctask->id }}"
                                        data-title="{{ $ctask->title }}"
                                        data-detail="{{ $ctask->detail }}"
                                        data-taskdate="{{ $ctask->task_date }}"
                                        data-tasktime="{{ date_format(date_create($ctask->task_time),'H:i') }}"
                                        data-taskstatus ="{{ $ctask->status }}"
                                      >
                                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#iconModal">
                                          <i class="icon-eye6"></i> view
                                        </button>
                                      </div>  
                                    </td>
                                  </tr>
                                  @endforeach 
                                </tbody>
                              </table>
                            </div>  

                          </div>
                        </div>  

                        </div>  
                      </div>  
                    <!-- Hoverable rows end -->   

                    <script src="{{ asset('public/app-assets/js/core/libraries/jquery.min.js') }}" type="text/javascript"></script>
                    <script>
                      $( document ).ready(function() {

                        $('.btt_vpend').click(function(){
                          // set value to modal
                          $("#v_header").text(" | " + $(this).attr('data-title'));
                          $("#v_id").val( $(this).attr('data-id'));
                          $("#v_title").val($(this).attr('data-title'));
                          $("#v_detail").val($(this).attr('data-detail'));
                          $("#v_taskdate").val($(this).attr('data-taskdate'));
                          $("#v_tasktime").val($(this).attr('data-tasktime'));

                          if( $(this).attr('data-taskstatus') == "Pendding" ){
                           $("#v_taskstatus").val("Pendding");
                          }
                        });

                        $('.btt_vcomp').click(function(){
                          // set value to modal
                          $("#v_header").text(" | " + $(this).attr('data-title'));
                          $("#v_id").val( $(this).attr('data-id'));
                          $("#v_title").val($(this).attr('data-title'));
                          $("#v_detail").val($(this).attr('data-detail'));
                          $("#v_taskdate").val($(this).attr('data-taskdate'));
                          $("#v_tasktime").val($(this).attr('data-tasktime'));
                          
                          if( $(this).attr('data-taskstatus') == "Complete" ){
                            $("#v_taskstatus").val("Complete");
                          }
                           
                        });

                      });
                    </script>

                    <!-- Modal Show-->
                      <div class="modal fade text-xs-left" id="iconModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2"><i class="icon-clipboard2"></i><span id="v_header"></span></h4>
                          </div>
                          <div class="modal-body">
                          <div class="form-body">
                            <div class="row">
                              <!-- form -->
                              <table class="table table-borderless table-sm">
                                <thead>
                                  <tr>
                                    <td class="text-xs-right" style="width:20%">Task Title :</td>
                                    <td class="text-xs-left" style="width:80%">
                                      <input type="text" id="v_title" class="form-control border-primary" placeholder="Title" name="v_title">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="text-xs-right" style="width:20%">Task Detail :</td>
                                    <td class="text-xs-left" style="width:80%">
                                    <textarea id="v_detail" rows="3" class="form-control border-primary" name="v_detail" placeholder="Detail"></textarea>
                                    </td>
                                  </tr>  
                                  <tr>
                                    <td class="text-xs-right" style="width:20%">Task Date :</td>
                                    <td class="text-xs-left" style="width:80%">
                                      <div class="position-relative has-icon-left">
                                        <input type="date" id="v_taskdate" class="form-control border-primary" name="taskdate">
                                        <div class="form-control-position">
                                          <i class="icon-calendar5"></i>
                                        </div>
                                      </div>
                                    </td>
                                  </tr> 
                                  <tr>
                                    <td class="text-xs-right" style="width:20%">Task Time :</td>
                                    <td class="text-xs-left" style="width:80%">
                                      <div class="position-relative has-icon-left">
                                        <input type="time" id="v_tasktime" class="form-control border-primary" name="v_tasktime">
                                        <div class="form-control-position">
                                          <i class="icon-clock5"></i>
                                        </div>
                                      </div>
                                    </td>
                                  </tr> 
                                  <tr>
                                    <td class="text-xs-right" style="width:20%">Status :</td>
                                    <td class="text-xs-left" style="width:80%">
                                      <select id="v_taskstatus" name="v_taskstatus" class="form-control border-primary">
                                        <option value="Pendding" >Pendding</option>
                                        <option value="Complete" >Complete</option>
                                      </select>
                                    </td>
                                  </tr> 
                                </thead>
                              </table>
                              <!-- /from -->
                            </div>

                          </div>
                          <div class="modal-footer">
                          <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Cancle</button>
                          <button type="button" class="btn btn-outline-primary">Save</button>
                          </div>
                        </div>
                        </div>
                      </div>
                      </div>
                    <!-- Modal Show -->

                    <!-- Modal Create-->
                    {!! Form::open(['url' => 'foo/bar', 'mathod'=>'post' ]) !!}
                     <div class="modal fade text-xs-left" id="iconModal-create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          <h4 class="modal-title " id="myModalLabel2" ><i class="icon-clipboard2"></i> Create New Task</h4>
                          </div>
                          <div class="modal-body">
                          <div class="form-body">

							            	<div class="row">
                              <!-- table -->
                              <table class="table table-borderless table-sm">
                                <thead>
                                  <tr>
                                    <td class="text-xs-right" style="width:20%">Task Title :</td>
                                    <td class="text-xs-left" style="width:80%">
                                      <input type="text" id="c_title" class="form-control border-primary" placeholder="Task Title" name="c_title">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="text-xs-right" style="width:20%">Task Detail :</td>
                                    <td class="text-xs-left" style="width:80%">
                                    <textarea id="c_detail" rows="3" class="form-control border-primary" name="c_detail" placeholder="Task Detail"></textarea>
                                    </td>
                                  </tr>  
                                  <tr>
                                    <td class="text-xs-right" style="width:20%">Task Date :</td>
                                    <td class="text-xs-left" style="width:80%">
                                      <div class="position-relative has-icon-left">
                                        <input type="date" id="c_taskdate" class="form-control border-primary" name="c_taskdate">
                                        <div class="form-control-position">
                                          <i class="icon-calendar5"></i>
                                        </div>
                                      </div>
                                    </td>
                                  </tr> 
                                  <tr>
                                    <td class="text-xs-right" style="width:20%">Task Time :</td>
                                    <td class="text-xs-left" style="width:80%">
                                      <div class="position-relative has-icon-left">
                                        <input type="time" id="c_tasktime" class="form-control border-primary" name="c_tasktime">
                                        <div class="form-control-position">
                                          <i class="icon-clock5"></i>
                                        </div>
                                      </div>
                                    </td>
                                  </tr> 
                                </thead>
                              </table>

                              <!-- /table -->
                            </div>
                          </div>
                          <div class="modal-footer">
                          <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Cancle</button>
                          <button type="submit" class="btn btn-outline-primary">Save</button>
                          </div>
                        </div>
                        </div>
                      </div>
                    {!! Form::close() !!}
                    <!-- Modal -->

                   

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>                    
        </div>
      </div>
    </div>
<!-- /#page-wrapper -->

@stop
