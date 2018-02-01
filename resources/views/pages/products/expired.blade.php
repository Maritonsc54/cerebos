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
                    <h4 class="card-title" id="basic-layout-colored-form-control"><i class="icon-cart4"></i> Expired Products</h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    <div class="heading-elements">
                    </div>
                  </div>
                  <div class="card-body collapse in">
                    <div class="card-block">

                      <!-- Hoverable rows start -->
                      <div class="row">
                        <div class="col-md-12">  

                              <table class="table table-hover mb-0">
                                  <thead class="thead-inverse">
                                    <tr>
                                      <th>#</th>
                                      <th>ID</th>
                                      <th>Name</th>
                                      <th>Price</th>
                                      <th>Status</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                  <thead>
                                    <tr >
                                      <th colspan="4">Staus | Disabled</th>
                                      <th colspan="2" class="text-xs-right">
                                        Total : <span class="tag tag-default tag-success">{{ $count_n }}</span>
                                      </th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php $no2=0; ?>
                                    @foreach($product_n as $row2)
                                    <?php $no2++; ?>
                                      <tr>
                                        <td class="text-xs-right">{{ (10 * ($product_n->currentPage() - 1)) + $no2 }}.</td>
                                        <td>{{ $row2->ID }}</td>
                                        <td>{{ $row2->NAME }}</td>
                                        <td>{{ $row2->PRICE }}</td>
                                        <td><span class="tag tag-default tag-danger"> Expired</span></td>
                                        <td>
                                          <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#iconModal" >
                                            <i class="icon-eye6"></i>
                                            view
                                          </button>
                                        </td>
                                      </tr>
                                    @endforeach 
                                  </tbody>
                                  </tbody>
                              </table>

                              <div class="col-xl-12 col-md-12">
                              <div class="text-xs-right mb-3"> 
                                <nav aria-label="Page navigation">
                                  @if (isset($product_n) && $product_n->lastPage() > 1)
                                    <ul class="pagination">
                                      <?php
                                        $interval = isset($interval) ? abs(intval($interval)) : 3 ;
                                        $from = $product_n->currentPage() - $interval;
                                        if($from < 1){
                                            $from = 1;
                                        }
                                        
                                        $to = $product_n->currentPage() + $interval;
                                        if($to > $product_n->lastPage()){
                                            $to = $product_n->lastPage();
                                        }
                                      ?>

                                      <!-- first/previous -->
                                      @if($product_n->currentPage() > 1)
                                      <li class="page-item">
                                        <a class="page-link" href="{{ $product_n->url($product_n->currentPage() - 1) }}" aria-label="Previous">
                                          <span aria-hidden="true">&laquo; Prev</span>
                                          <span class="sr-only">Previous</span>
                                        </a>
                                      </li>
                                      @endif
                                      
                                      <!-- links -->
                                      @for($i = $from; $i <= $to; $i++)
                                        <?php 
                                          $isCurrentPage = $product_n->currentPage() == $i;
                                        ?>
                                        <li class="page-item {{ $isCurrentPage ? 'active' : '' }}">
                                          <a class="page-link" href="{{ !$isCurrentPage ? $product_n->url($i) : '#' }}">{{ $i }}</a>
                                        </li>
                                      @endfor

                                      <!-- next/last -->
                                      @if($product_n->currentPage() < $product_n->lastPage())
                                      <li class="page-item">
                                        <a class="page-link" href="{{ $product_n->url($product_n->currentPage() + 1) }}" aria-label="Next">
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
                          <h4 class="modal-title" id="myModalLabel2"><i class="icon-cart4"></i> ID : 100000 </h4>
                          </div>
                          <div class="modal-body">
                          <div class="form-body">
                         
                            <div class="row">
                              <!-- form -->
                              <table class="table table-borderless table-sm">
                                <thead>
                                  <tr>
                                    <td class="text-xs-right" style="width:30%"><h4 class="form-section"> Product Details </h4></td>
                                    <td class="text-xs-right" style="width:70%">
                                      <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#iconModal" >
                                        <i class="icon-refresh2"></i>
                                        Retry Product
                                      </button>
                                    </td>
                                  </tr>  
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">ID :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <input type="text" id="userinput1" class="form-control border-primary" value="PD-1000" name="name" readonly>
                                    </td>
                                  </tr>  
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">Code :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <input type="text" id="userinput1" class="form-control border-primary" placeholder="Last Name" name="name">
                                    </td>
                                  </tr>
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">Product Code :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <input type="text" id="userinput1" class="form-control border-primary" placeholder="Mobile" name="name">
                                    </td>
                                  </tr>  
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">Product Name :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <input type="text" id="userinput1" class="form-control border-primary" placeholder="Email" name="name">
                                    </td>
                                  </tr> 
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">Product Price :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <input type="text" id="userinput1" class="form-control border-primary" placeholder="Email" name="name">
                                    </td>
                                  </tr>   
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">Status :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <span class="tag tag-default tag-danger"> Expired</span>
                                    </td>
                                  </tr>  
                                </thead>
                              </table>
                              <!-- /from -->
                            </div>

                          </div>
                          <div class="modal-footer">
                            <!--
                            <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Cancle</button>
                            <button type="button" class="btn btn-outline-primary">Save</button>
                            -->
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
                          <h4 class="modal-title " id="myModalLabel2" ><i class="icon-person-add"></i> Create New Product</h4>
                          </div>
                          <div class="modal-body">
                          <div class="form-body">
                            <h4 class="form-section "> Product Detail</h4>
							            	<div class="row">
                              <!-- form -->
                              <table class="table table-borderless table-sm">
                                <thead>
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">ID :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <input type="text" id="userinput1" class="form-control border-primary" value="PD-1000" name="name" readonly>
                                    </td>
                                  </tr>  
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">Code :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <input type="text" id="userinput1" class="form-control border-primary" placeholder="Last Name" name="name">
                                    </td>
                                  </tr>
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">Product Code :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <input type="text" id="userinput1" class="form-control border-primary" placeholder="Mobile" name="name">
                                    </td>
                                  </tr>  
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">Product Name :</td>
                                    <td class="text-xs-left" style="width:70%">
                                      <input type="text" id="userinput1" class="form-control border-primary" placeholder="Email" name="name">
                                    </td>
                                  </tr> 
                                  <tr class="bg-grey bg-lighten-4">
                                    <td class="text-xs-right" style="width:30%">Product Price :</td>
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
