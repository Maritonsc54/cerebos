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
                    <h4 class="card-title" id="basic-layout-colored-form-control"><i class="icon-head"></i> All Users</h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    <div class="heading-elements">
                    </div>
                  </div>
                  <div class="card-body collapse in">
                    <div class="card-block">
                      <div class="row">
                        <div class="col-md-12">
                          <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#iconModal-create" >
                            <i class="icon-person-add"></i> Create User
                          </button>
                          </br></br>
                        </div> 
                      </div>
                    
                      <!-- Hoverable rows start -->
                      <div class="row">
                        <div class="col-md-12">  
                          <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="thead-inverse">
                                  <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Group</th>
                                    <th>Login ID</th>
                                    <th>Level</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <thead>
                                  <tr >
                                    <th colspan="5">Group | Administrator</th>
                                    <th colspan="2" class="text-xs-right">
                                      Online : <span class="tag tag-default tag-success">{{ $count_admin_online }}</span> 
                                      Total : <span class="tag tag-default tag-success">{{ $count_admin }}</span>
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php 
                                    $i1 = 1;
                                  ?>
                                  @foreach( $user_admin as $row1)
                                  <tr>
                                    <td class="text-xs-right">{{ $i1++ }}.</td>
                                    <td>
                                      @if($row1->online == 1) 
                                        <span class="tag tag-default tag-success">Online</span> 
                                      @else
                                        <span class="tag tag-default tag-defult">Offline</span> 
                                      @endif
                                      
                                      {{ $row1->firstname }} {{ $row1->lastname }}</td>
                                    <td>Cerebos</td>
                                    <td>{{ $row1->username}}</td>
                                    <td>Admin</td>
                                    <td>@if( $row1->status == '1') Active @else Disabled @endif </td>
                                    <td>
                                      <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#iconModal" >
                                        <i class="icon-eye6"></i>
                                        view
                                      </button>
                                    </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                                <thead>
                                  <tr>
                                    <th colspan="5">Group | Agent</th>
                                    <th colspan="2" class="text-xs-right">
                                      Online : <span class="tag tag-default tag-success">{{ $count_agent_online }}</span> 
                                      Total : <span class="tag tag-default tag-success">{{ $count_agent }}</span>
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php 
                                    $i2 = 1;
                                  ?>
                                  @foreach( $user_agent as $row2)
                                  <tr>
                                    <td class="text-xs-right">{{  $i2++ }}.</td>
                                    <td>
                                      @if($row2->online == 1) 
                                        <span class="tag tag-default tag-success">Online</span> 
                                      @else
                                        <span class="tag tag-default tag-defult">Offline</span> 
                                      @endif
                                      {{ $row2->firstname }} {{ $row2->lastname }}
                                    </td>
                                    <td>Cerebos</td>
                                    <td>{{ $row2->username}}</td>
                                    <td>Agent</td>
                                    <td>@if( $row2->status == '1') Active @else Disabled @endif </td>
                                    <td>
                                      <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#iconModal" >
                                        <i class="icon-eye6"></i>
                                        view
                                      </button>
                                    </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                            </table>
                          </div>  
                        </div>  
                      </div>  
                      
                    <!-- Hoverable rows end -->   
                    <!-- Modal Show-->
                      <div class="modal fade text-xs-left" id="iconModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2"><i class="icon-person"></i> ID : 100000 | สมหมาย ชายเเท้</h4>
                          </div>
                          <div class="modal-body">
                          <div class="form-body">
                            
                            <div class="row">
                              <!-- form -->
                              <table class="table table-borderless table-sm">
                                <thead>
                                  <tr>
                                    <td class="text-xs-right" style="width:30%"><h4 class="form-section"> User Detail</h4></td>
                                    <td class="text-xs-left" style="width:70%">
                                      
                                    </td>
                                  </tr>  
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">First Name :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <input type="text" id="userinput1" class="form-control border-primary" placeholder="First Name" name="name">
                                    </td>
                                  </tr>  
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">Last Name :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <input type="text" id="userinput1" class="form-control border-primary" placeholder="Last Name" name="name">
                                    </td>
                                  </tr>
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">Mobile :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <input type="text" id="userinput1" class="form-control border-primary" placeholder="Mobile" name="name">
                                    </td>
                                  </tr>  
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">Email :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <input type="text" id="userinput1" class="form-control border-primary" placeholder="Email" name="name">
                                    </td>
                                  </tr>    
                                </thead>
                              </table>
                              <!-- /from -->
                            </div>

                           
                            <div class="row">
                              <!-- form -->
                              <table class="table table-borderless table-sm">
                                <thead>
                                  <tr>
                                    <td class="text-xs-right" style="width:30%"> <h4 class="form-section"> User Login Detail</h4></td>
                                    <td class="text-xs-left" style="width:70%">
                                    
                                    </td>
                                  </tr>
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">* Login ID :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <input type="text" id="userinput1" class="form-control border-primary" placeholder="Login ID" name="name">
                                    </td>
                                  </tr>  
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">* Password :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <input type="text" id="userinput1" class="form-control border-primary" placeholder="Password" name="name">
                                    </td>
                                  </tr>
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">Retype Password :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <input type="text" id="userinput1" class="form-control border-primary" placeholder="Retype Password" name="name">
                                    </td>
                                  </tr>  
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">* Level :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <select id="projectinput5" name="interested" class="form-control border-primary" >
                                        <option value="none" selected="" disabled=""></option>
                                        <option value="1">Admin</option>
                                        <option value="2">Supervisor</option>
                                        <option value="3">Agent</option>
                                      </select>
                                    </td>
                                  </tr>
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">* Status :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <select id="projectinput5" name="interested" class="form-control border-primary" >
                                        <option value="none" selected="" disabled=""></option>
                                        <option value="1">Active</option>
                                        <option value="2">locked</option>
                                        <option value="3">Disabled</option>
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
                    <form class="form-horizontal" method="POST" action="{{ url('/users/add') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      
                     <div class="modal fade text-xs-left" id="iconModal-create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2"><i class="icon-person-add"></i> Create New User</h4>
                          </div>
                          <div class="modal-body">
                          <div class="form-body">
                            <h4 class="form-section"> User Detail</h4>
							            	<div class="row">
                              <!-- form -->
                              <table class="table table-borderless table-sm">
                                <thead>
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">First Name :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <input type="text" name="c_firstname" id="c_firstname" class="form-control border-primary" placeholder="First Name" >
                                    </td>
                                  </tr>  
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">Last Name :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <input type="text" name="c_lastname" id="c_lastname" class="form-control border-primary" placeholder="Last Name" >
                                    </td>
                                  </tr>
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">Mobile :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <input type="text" name="c_mobile" id="c_mobile" class="form-control border-primary" placeholder="Mobile">
                                    </td>
                                  </tr>  
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">Email :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <input type="text" name="c_email" id="c_email" class="form-control border-primary" placeholder="Email" >
                                    </td>
                                  </tr>    
                                </thead>
                              </table>
                              <!-- /from -->
                            </div>

                            <h4 class="form-section"> User Login Detail</h4>
							            	<div class="row">
                              <!-- form -->
                              <table class="table table-borderless table-sm">
                                <thead>
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">* Login ID :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <input type="text"  name="c_username" id="c_username" class="form-control border-primary" placeholder="Login ID">
                                    </td>
                                  </tr>  
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">* Password :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <input type="password" name="c_password" id="c_password" class="form-control border-primary" placeholder="Password" >
                                    </td>
                                  </tr>
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">Retype Password :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <input type="password" name="c_repassword" id="c_repassword" class="form-control border-primary" placeholder="Retype Password" >
                                    </td>
                                  </tr>  
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">* Level :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <select id="c_level" name="c_level" class="form-control border-primary" >
                                        <option value="none" selected="" disabled=""></option>
                                        <option value="3">Admin</option>
                                        <option value="2">Supervisor</option>
                                        <option value="1">Agent</option>
                                      </select>
                                    </td>
                                  </tr>
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">* Status :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <select id="c_status" name="c_status" class="form-control border-primary" >
                                        <option value="none" selected="" disabled=""></option>
                                        <option value="1">Active</option>
                                        <option value="2">locked</option>
                                        <option value="3">Disabled</option>
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
                          <button type="submit" class="btn btn-outline-primary">Save</button>
                          </div>
                        </div>
                        </div>
                      </div>
                    <!-- Modal -->
                   </form>

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
