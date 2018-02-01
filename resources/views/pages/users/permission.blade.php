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
                    <h4 class="card-title" id="basic-layout-colored-form-control"><i class="icon-head"></i> Page Permission</h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    <div class="heading-elements">
                    </div>
                  </div>
                  <div class="card-body collapse in">
                    <div class="card-block">
                      <!-- Hoverable rows start -->
                      <div class="row">
                        <div class="col-md-12">  
                          <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="thead-inverse">
                                  <tr>
                                    <th style="width:1%">#</th>
                                    <th style="width:60%">Page Permission</th>
                                    <th style="width:10%">Lv.Agent</th>
                                    <th style="width:10%">Lv.Supervisor</th>
                                    <th style="width:10%">Lv.Admin</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="text-xs-left">1.</td>
                                    <td>Calls</td>
                                    <td><input class="form-control border-primary" type="checkbox" style="transform: scale(1.3);"></td>
                                    <td><input class="form-control border-primary" type="checkbox" style="transform: scale(1.3);"></td>
                                    <td><input class="form-control border-primary" type="checkbox" style="transform: scale(1.3);"></td>
                                  </tr>
                                  <tr>
                                    <td class="text-xs-left">2.</td>
                                    <td>Cart</td>
                                    <td><input class="form-control border-primary" type="checkbox" style="transform: scale(1.3);"></td>
                                    <td><input class="form-control border-primary" type="checkbox" style="transform: scale(1.3);"></td>
                                    <td><input class="form-control border-primary" type="checkbox" style="transform: scale(1.3);"></td>
                                  </tr>
                                  <tr>
                                    <td class="text-xs-left">3.</td>
                                    <td>Note</td>
                                    <td><input class="form-control border-primary" type="checkbox" style="transform: scale(1.3);"></td>
                                    <td><input class="form-control border-primary" type="checkbox" style="transform: scale(1.3);"></td>
                                    <td><input class="form-control border-primary" type="checkbox" style="transform: scale(1.3);"></td>
                                  </tr>
                                  <tr>
                                    <td class="text-xs-left">4.</td>
                                    <td>Campaign</td>
                                    <td><input class="form-control border-primary" type="checkbox" style="transform: scale(1.3);"></td>
                                    <td><input class="form-control border-primary" type="checkbox" style="transform: scale(1.3);"></td>
                                    <td><input class="form-control border-primary" type="checkbox" style="transform: scale(1.3);"></td>
                                  </tr>
                                  <tr>
                                    <td class="text-xs-left">5.</td>
                                    <td>Product</td>
                                    <td><input class="form-control border-primary" type="checkbox" style="transform: scale(1.3);"></td>
                                    <td><input class="form-control border-primary" type="checkbox" style="transform: scale(1.3);"></td>
                                    <td><input class="form-control border-primary" type="checkbox" style="transform: scale(1.3);"></td>
                                  </tr>
                                  <tr>
                                    <td class="text-xs-left">6.</td>
                                    <td>Promotion</td>
                                    <td><input class="form-control border-primary" type="checkbox" style="transform: scale(1.3);"></td>
                                    <td><input class="form-control border-primary" type="checkbox" style="transform: scale(1.3);"></td>
                                    <td><input class="form-control border-primary" type="checkbox" style="transform: scale(1.3);"></td>
                                  </tr>
                                  <tr>
                                    <td class="text-xs-left">7.</td>
                                    <td>User</td>
                                    <td><input class="form-control border-primary" type="checkbox" style="transform: scale(1.3);"></td>
                                    <td><input class="form-control border-primary" type="checkbox" style="transform: scale(1.3);"></td>
                                    <td><input class="form-control border-primary" type="checkbox" style="transform: scale(1.3);"></td>
                                  </tr>
                                  <tr>
                                    <td class="text-xs-left">8.</td>
                                    <td>Customer</td>
                                    <td><input class="form-control border-primary" type="checkbox" style="transform: scale(1.3);"></td>
                                    <td><input class="form-control border-primary" type="checkbox" style="transform: scale(1.3);"></td>
                                    <td><input class="form-control border-primary" type="checkbox" style="transform: scale(1.3);"></td>
                                  </tr>
                                  <tr>
                                    <td class="text-xs-left">9.</td>
                                    <td>Report</td>
                                    <td><input class="form-control border-primary" type="checkbox" style="transform: scale(1.3);"></td>
                                    <td><input class="form-control border-primary" type="checkbox" style="transform: scale(1.3);"></td>
                                    <td><input class="form-control border-primary" type="checkbox" style="transform: scale(1.3);"></td>
                                  </tr>
                                 
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
                            <h4 class="form-section"> User Detail</h4>
                            <div class="row">
                              <!-- form -->
                              <table class="table table-borderless table-sm">
                                <thead>
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

                            <h4 class="form-section"> User Login Detail</h4>
                            <div class="row">
                              <!-- form -->
                              <table class="table table-borderless table-sm">
                                <thead>
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

                            <h4 class="form-section"> User Login Detail</h4>
							            	<div class="row">
                              <!-- form -->
                              <table class="table table-borderless table-sm">
                                <thead>
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
