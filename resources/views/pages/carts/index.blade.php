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
                    <h4 class="card-title" id="basic-layout-colored-form-control"><i class="icon-head"></i> Search Customer</h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    <div class="heading-elements">
                      <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                        <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                      </ul>
                    </div>
                  </div>

                  <div class="card-body collapse in">
                    <div class="card-block">
                    <!-- card-block -->
                      <div class="card-block card-dashboard">
                      <div class="row">
                      <form action='cust_search' method="post">
                        {{ csrf_field() }}
                        <div class="col-md-3">
                          <h4 class="text-xs-right">Customer ID :</h4>
                        </div>
                        <div class="col-md-6">
                          <input type="text"  id="search" class="form-control " placeholder="Search Customer ID" name="search">
                        </div>  
                        <div class="col-md-3">
                          <button type="submit" class="btn btn-primary btn-min-width mr-1 mb-1">
                            <i class="icon-search7"></i>
                            Search
                          </button>
                        </div> 
                      </form>
                      </div>
                    </div>
                    <h4 class="form-section"> Search Results</h4>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>#</th>
                                    <th>PCC Id</th>
                                    <th>Cerebos Id</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(isset($cust))
                              @foreach($cust as $row1)
                                <tr>
                                    <th style="width:1%">1.</th>
                                    <td style="width:15%">PCC-10000</td>
                                    <td style="width:15%">{{ $row1->CUST_ID }}</td>
                                    <td style="width:20%">{{ $row1->FIRSTNAME }} {{ $row1->LASTNAME }}</td>
                                    <td style="width:19%">Otto@hotmail.com</td>
                                    <td style="width:19%">{{ $row1->MOBILE }} </td>
                                    <td style="width:1%">
                                      <a href="{{ url('/cust_detail') }}/{{ $row1->CUST_ID }}">
                                        <button type="button" class="btn btn-primary"  >
                                          <i class="icon-eye6"></i>
                                          View
                                        </button>
                                      </a>
                                    </td>
                                </tr>
                              @endforeach
                            @endif
                            </tbody>
                        </table>
                        <br><br><br><br><br><br><br><br><br><br><br><br>
                    </div>
                    <!-- card-block -->
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
