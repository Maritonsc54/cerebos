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
                    <h4 class="card-title" id="basic-layout-colored-form-control"><i class="icon-head"></i> All Customer</h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    <div class="heading-elements">
                    </div>
                  </div>
                  <div class="card-body collapse in">
                    <div class="card-block">
                      <div class="row">
                        <div class="col-md-12">
                          <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#iconModal-create" >
                            <i class="icon-person-add"></i> Create Customer
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
                                    <th>ID</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <thead>
                                  <tr >
                                    <th colspan="5">Group | Customer</th>
                                    <th colspan="2" class="text-xs-right">
                                      Total : <span class="tag tag-default tag-success">
                                     {{ $countall }}
                                      </span>
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php $no=0; ?>
                                @foreach($cust as $row3)
                                <?php $no++; ?>
                                  <tr>
                                    <td class="text-xs-right">{{ (10 * ($cust->currentPage() - 1)) + $no }}.</td>
                                    <td>{{ $row3->CUST_ID}}</td>
                                    <td>{{ $row3->FIRSTNAME}} {{ $row3->LASTNAME }}</td>
                                    <td>{{ $row3->EMAIL }}</td>
                                    <td>{{ $row3->MOBILE }}</td>
                                    <td>Active</td>
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
                      <div class="col-xl-12 col-md-12">
                        <div class="text-xs-right mb-3">

                          <nav aria-label="Page navigation">
                          @if (isset($cust) && $cust->lastPage() > 1)
                            <ul class="pagination">
                              <?php
                                $interval = isset($interval) ? abs(intval($interval)) : 3 ;
                                $from = $cust->currentPage() - $interval;
                                if($from < 1){
                                    $from = 1;
                                }
                                
                                $to = $cust->currentPage() + $interval;
                                if($to > $cust->lastPage()){
                                    $to = $cust->lastPage();
                                }
                              ?>

                               <!-- first/previous -->
                              @if($cust->currentPage() > 1)
                              <li class="page-item">
                                <a class="page-link" href="{{ $cust->url($cust->currentPage() - 1) }}" aria-label="Previous">
                                  <span aria-hidden="true">&laquo; Prev</span>
                                  <span class="sr-only">Previous</span>
                                </a>
                              </li>
                              @endif
                              
                              <!-- links -->
                              @for($i = $from; $i <= $to; $i++)
                                <?php 
                                  $isCurrentPage = $cust->currentPage() == $i;
                                ?>
                                <li class="page-item {{ $isCurrentPage ? 'active' : '' }}">
                                  <a class="page-link" href="{{ !$isCurrentPage ? $cust->url($i) : '#' }}">{{ $i }}</a>
                                </li>
                               @endfor

                              <!-- next/last -->
                              @if($cust->currentPage() < $cust->lastPage())
                              <li class="page-item">
                                <a class="page-link" href="{{ $cust->url($cust->currentPage() + 1) }}" aria-label="Next">
                                  <span aria-hidden="true">Next &raquo;</span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </li>
                              @endif

                            </ul>
                          @endif
                          </nav>
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
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">ID (PCC) :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <input type="text" id="userinput1" class="form-control border-primary" value="PCC-10000" name="name" readonly>
                                    </td>
                                  </tr>
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">ID (Cerebos) :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <input type="text" id="userinput1" class="form-control border-primary" value="0100000" name="name" >
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
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">Address :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <textarea id="projectinput8" rows="2" class="form-control border-primary" name="comment" placeholder="Address"></textarea>
                                    </td>
                                  </tr>
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">Province :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <select id="projectinput5" name="interested" class="form-control border-primary" >
                                        <option value="none" selected="" disabled=""> Select Province </option>
                                        <option value="1">Active</option>
                                        <option value="2">locked</option>
                                        <option value="3">Disabled</option>
                                      </select>
                                    </td>
                                  </tr>
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">District :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <select id="projectinput5" name="interested" class="form-control border-primary" >
                                        <option value="none" selected="" disabled=""> Select District</option>
                                        <option value="1">Active</option>
                                        <option value="2">locked</option>
                                        <option value="3">Disabled</option>
                                      </select>
                                    </td>
                                  </tr>      
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">Sub-District :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <select id="projectinput5" name="interested" class="form-control border-primary" >
                                        <option value="none" selected="" disabled="">Select Sub-District</option>
                                        <option value="1">Active</option>
                                        <option value="2">locked</option>
                                        <option value="3">Disabled</option>
                                      </select>
                                    </td>
                                  </tr> 
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">PostID :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <input type="text" id="userinput1" class="form-control border-primary" placeholder="Email" name="name">
                                    </td>
                                  </tr>      
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">Status :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <select id="projectinput5" name="interested" class="form-control border-primary" >
                                        <option value="1" selected>Active</option>
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
                          <h4 class="modal-title" id="myModalLabel2"><i class="icon-person-add"></i> Create New Customer</h4>
                          </div>
                          <div class="modal-body">
                          <div class="form-body">
							            	<div class="row">
                              <!-- form -->
                              <table class="table table-borderless table-sm">
                                <thead>
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">ID (PCC) :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <input type="text" id="userinput1" class="form-control border-primary" value="PCC-10000" name="name" readonly>
                                    </td>
                                  </tr>
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">ID (Cerebos) :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <input type="text" id="userinput1" class="form-control border-primary" value="0100000" name="name" >
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
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">Address :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <textarea id="projectinput8" rows="2" class="form-control border-primary" name="comment" placeholder="Address"></textarea>
                                    </td>
                                  </tr>
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">Province :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <select id="projectinput5" name="interested" class="form-control border-primary" >
                                        <option value="none" selected="" disabled=""> Select Province </option>
                                        <option value="1">Active</option>
                                        <option value="2">locked</option>
                                        <option value="3">Disabled</option>
                                      </select>
                                    </td>
                                  </tr>
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">District :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <select id="projectinput5" name="interested" class="form-control border-primary" >
                                        <option value="none" selected="" disabled=""> Select District</option>
                                        <option value="1">Active</option>
                                        <option value="2">locked</option>
                                        <option value="3">Disabled</option>
                                      </select>
                                    </td>
                                  </tr>      
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">Sub-District :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <select id="projectinput5" name="interested" class="form-control border-primary" >
                                        <option value="none" selected="" disabled="">Select Sub-District</option>
                                        <option value="1">Active</option>
                                        <option value="2">locked</option>
                                        <option value="3">Disabled</option>
                                      </select>
                                    </td>
                                  </tr> 
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">PostID :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <input type="text" id="userinput1" class="form-control border-primary" placeholder="Email" name="name">
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
