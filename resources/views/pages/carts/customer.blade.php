@extends('layouts.default')
@section('content')

<!-- Page Content -->
<div class="app-content content container-fluid">
      <div class="content-wrapper">
        @foreach($cust as $row1) 
        <div class="content-body">
          <section id="basic-form-layouts">
            <div class="row match-height">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title" id="basic-layout-colored-form-control">ID : {{ $row1->CUST_ID }} |  {{ $row1->FIRSTNAME }}  {{ $row1->LASTNAME }}aa</h4>
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

                      <div class="col-md-2">
                        <form class="form">
                          <div class="form-body">
                            <h4 class="form-section"><i class="icon-menu5"></i>Menus</h4>
                            <a href="{{ url('/carts/product') }}/{{ $row1->CUST_ID }}">
                              <button type="button" class="btn btn-primary" ><i class="icon-cart4"></i> Order New</button> <hr>
                            </a>  
                              <button type="button" class="btn btn-primary" ><i class="icon-ios-telephone"></i> Call History</button> <hr>
                              <button type="button" class="btn btn-primary" ><i class="icon-clipboard2"></i> Tasks Events</button> <hr>             
                          </form>
                        </div>
                      </div>
                      <div class="col-md-10">
                        <form class="form">
                          <div class="form-body">
                            <h4 class="form-section"><i class="icon-bubble2"></i>Promotions Latest</h4>
                              <table class="table table-hover mb-0">
                                <thead class="thead-inverse">
                                  <tr>
                                    <th>#</th>
                                    <th>Promotions</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php 
                                  $i=1 ; 
                                  $promotion = DB::table('promotions')->where('cust_id',$row1->CUST_ID)->limit(5)->orderBy('id','desc')->get();
                                ?>
                                @foreach( $promotion as $row2)
                                  <tr>
                                    <td class="text-xs-left" style="width:1%">{{ $i++ }}.</td>
                                    <td style="width:60%">{{ $row2->pro_name }}</td>
                                    <td style="width:15%">{{ date_format(date_create($row2->prostart),"d/m/Y") }}</td>
                                    <td style="width:15%">{{ date_format(date_create($row2->proend),"d/m/Y") }}</td>
                                  </tr>
                                @endforeach 
                                </tbody>
                              </table>
                            </div> 
                            <h4 class="form-section"></h4>
                            <div class="row">
                              <div class="col-md-12">
                              <ul class="nav nav-tabs">
                                <li class="nav-item">
                                  <a class="nav-link active" id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#tab1" aria-expanded="true"><i class="icon-head"></i> ข้อมูลลูกค้า</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#tab2" aria-expanded="false"><i class="icon-layers"></i> ประวัติการสั่งซื้อ</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="base-tab3" data-toggle="tab" aria-controls="tab3" href="#tab3" aria-expanded="false"><i class="icon-paper"></i> ใบสั่งซื้อสินค้า</a>
                                </li>
                              </ul>
                              <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true" aria-labelledby="base-tab1">
                                @foreach($cust as $row2)
                                    <table class="table table-borderless table-sm">
                                      <thead>
                                        <tr>
                                            <th colspan="3">ข้อมูลลูกค้า (Profile)</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <th class="text-xs-right" style="width:20%">คำนำหน้า :</td>
                                          <td class="text-xs-left"><input class="form-control border-primary" type="text" name="prename" value="{{ $row2->PRENAME }}" placeholder="คำนำหน้า" id="prename" readonly ></td>
                                        </tr>
                                        <tr>
                                          <td class="text-xs-right">ชื่อ :</td>
                                          <td class="text-xs-left"><input class="form-control border-primary" type="text" name="firstname" value="{{ $row2->FIRSTNAME }}" placeholder="ชื่อ" readonly ></td>
                                        </tr>
                                        <tr>
                                          <td class="text-xs-right">สกุล :</td>
                                          <td class="text-xs-left"><input class="form-control border-primary"  type="text" name="lastname" value="{{ $row2->LASTNAME }}" placeholder="สกุล" readonly ></td>
                                        </tr>
                                        <tr>
                                          <td class="text-xs-right">เบอร์โทร :</td>
                                          <td class="text-xs-left"><input class="form-control border-primary" type="text" name="mobile" value="{{ $row2->MOBILE }}" placeholder="เบอร์โทรศัพท์" readonly></td>
                                        </tr>
                                        <tr>
                                          <td class="text-xs-right">อีเมล์ :</td>
                                          <td class="text-xs-left"><input class="form-control border-primary" type="text" name="email" value="{{ $row2->EMAIL }}" placeholder="อีเมล์" readonly ></td>
                                        </tr>
                                        <tr>
                                          <td class="text-xs-right">บ้านเลขที่ :</td>
                                          <td class="text-xs-left"><input class="form-control border-primary" type="text" name="street1" value="{{ $row2->ADDRESS1 }}" placeholder="ที่อยู่" readonly></td>
                                        </tr>
                                        <tr>
                                          <td class="text-xs-right">จังหวัด :</td>
                                          <td class="text-xs-left">
                                            <input class="form-control border-primary" type="text" name="street1" value="{{ $row2->ADDRESS1 }}" placeholder="ที่อยู่" readonly>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td class="text-xs-right">เขต/อำเภอ :</td>
                                          <td class="text-xs-left">
                                            <input class="form-control border-primary" type="text" name="street1" value="{{ $row2->ADDRESS1 }}" placeholder="ที่อยู่" readonly>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td class="text-xs-right">เเขวง/ตำบล :</td>
                                          <td class="text-xs-left">
                                            <input class="form-control border-primary" type="text" name="street1" value="{{ $row2->ADDRESS1 }}" placeholder="ที่อยู่" readonly>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td class="text-xs-right">ไปรษณีย์ :</td>
                                          <td class="text-xs-left"><input class="form-control border-primary" type="text" name="post" value="{{ $row2->POSTAL }}" placeholder="ไปรษณีย์" id="userinput5" readonly></td>
                                        </tr>
                                      </tbody>
                                     
                                  </table>
                                  @endforeach

                                </div>
                                <div class="tab-pane" id="tab2" aria-labelledby="base-tab2">
                                
                                <div class="table-responsive">
                                  <table class="table table-bordered mb-0">
                                      <thead class="thead-inverse">
                                          <tr>
                                              <th>#</th>
                                              <th>เลขที่ใบสั่งซื้อ</th>
                                              <th>วันที่สั่งซื้อ</th>
                                              <th>ชื่อผู้ขาย</th>
                                              <th>รายการสินค้า</th>
                                              <th>จำนวน</th>
                                              <th>ราคา</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <th scope="row">1</th>
                                              <td>Mark</td>
                                              <td>Otto</td>
                                              <td>Otto</td>
                                              <td>Otto</td>
                                              <td>Otto</td>
                                              <td>Otto</td>
                                          </tr>
                                              <td colspan="6" align="right" >รวมเป็นเงิน</td>
                                              <td colspan="1" align="right" >20000</td>
                                          </tr>
                                      </tbody>
                                  </table>
                                </div>

                                </div>
                                <div class="tab-pane" id="tab3" aria-labelledby="base-tab3">
                                  <table class="table table-bordered mb-0">
                                    <thead class="thead-inverse">
                                      <tr>
                                        <th>#</th>
                                        <th>เลขที่ใบสั่งซื้อ</th>
                                        <th>ชื่อ - สกุล</th>
                                        <th>วันที่สั่งซื้อ</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td class="text-xs-left" style="width:1%">.</td>
                                        <td ></td>
                                        <td ></td>
                                        <td ></td>
                                        <td  class="text-xs-right">
                                          <button type="button" class="btn btn-primary"  >
                                            <i class="icon-eye6"></i> 
                                          </button>
                                          <button type="button" class="btn btn-primary"  >
                                            <i class="icon-print"></i> 
                                          </button>
                                        </td>
                                      </tr>
                                    </tbody>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>  
                          </form>
                        </div> 

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>                    
        </div>
        @endforeach
      </div>
    </div>
<!-- /#page-wrapper -->

@stop
