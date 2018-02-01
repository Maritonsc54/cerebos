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
                  @foreach($cust as $row1)
                    <h4 class="card-title" id="basic-layout-colored-form-control">ID : {{ $row1->CUST_ID }} | {{ $row1->FIRSTNAME }} {{ $row1->LASTNAME }}</h4>
                    <input type="hidden" name="cust_id" value="{{ $row1->CUST_ID }}" />
                  @endforeach 
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    <div class="heading-elements">
                    <button type="submit" class="btn btn-primary">
                      Back
                    </button>
                    <button type="submit" class="btn btn-primary">
                      Checkout
                    </button>
                    </div>
                  </div>
                  <div class="card-body collapse in">
                    <div class="card-block">
                      	<!-- Invoice Items Details -->
       
                            <div class="row">
                              <div class="col-md-5 col-sm-12 text-xs-center text-md-left">
                                <p class="lead">สรุปการสั่งซื้อ :</p>
                                <div class="row">
                                  <div class="col-md-12">
                                    <table class="table table-borderless table-sm">
                                      <thead>
                                        <tr>
                                            <th>สินค้า</th>
                                            <th>จำนวน</th>
                                            <th>ราคา</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                      <?php
                                        $price = 0;
                                        foreach( $product as $row1){
                                          $pd = "Product".$row1->ID;
                                          $am = "Amount".$row1->ID;

                                          $getproduct = Input::get($pd);
                                          $getAmount = Input::get($am);
                                          if($getproduct == ""){
                                          //   echo "bbb";
                                          }else{
                                            //  echo $row1->NAME ."-".$getAmount."-".$row1->PRICE."<br>"; 
                                        
                                      ?>
                                        <tr>
                                          <td>{{ $row1->NAME }}</td>
                                          <td class="text-xs-right">{{ $getAmount }}</td>
                                          <td class="text-xs-right">
                                            <?php
                                              echo $row1->PRICE;
                                              $price += $row1->PRICE ;
                                            ?>
                                            </td>
                                        </tr>
                                      <?php
                                          }
                                        }
                                      ?> 
                                      </tbody>
                                      <thead>
                                        <tr>
                                          <td colspan="3"></td>
                                        </tr>
                                        <tr class="bg-grey bg-lighten-4">
                                          <td class="text-bold-800">มูลค่าสินค้า</td>
                                          <td colspan="2" class="text-xs-right"><?=$price?> บาท</td>
                                        </tr>  
                                        <tr class="bg-grey bg-lighten-4">
                                          <td class="text-bold-800">ยอดสุทธิ</td>
                                          <td colspan="2" class="text-xs-right"><?=$price?> บาท</td>
                                        </tr>  
                                      </thead>
                                    </table>
                                  </div>
                                  <div class="col-md-12"><hr></div>
                                  <div class="col-md-12">
                                    <table class="table table-borderless table-sm">
                                     
                                      <tbody>
                                        <tr>
                                          <td class="text-xs-right">Order Subsource :</td>
                                          <td> 
                                            <select id="projectinput5" name="interested" class="form-control border-primary" style=" height: 25px">
                                              <option value="none" selected="" disabled="">Interested in</option>
                                              <option value="design">design</option>
                                            </select>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td class="text-xs-right">ประเภทลูกค้า (Cerebos) :</td>
                                          <td> 
                                            <select id="projectinput5" name="interested" class="form-control border-primary" style=" height: 25px">
                                              <option value="none" selected="" disabled="">Interested in</option>
                                              <option value="design">design</option>
                                            </select>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td class="text-xs-right">วิธีการชำระเงิน :</td>
                                          <td> 
                                            <select id="projectinput5" name="interested" class="form-control border-primary" style=" height: 25px">
                                              <option value="none" selected="" disabled="">Interested in</option>
                                              <option value="design">design</option>
                                            </select>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td class="text-xs-right">Customer Recruitment :</td>
                                          <td> 
                                            <select id="projectinput5" name="interested" class="form-control border-primary" style=" height: 25px">
                                              <option value="none" selected="" disabled="">Interested in</option>
                                              <option value="design">design</option>
                                            </select>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td class="text-xs-right">Payment Auth Code :</td>
                                          <td> 
                                            <input class="form-control border-primary" type="email" id="userinput5" style=" height: 25px">
                                          </td>
                                        </tr>
                                        <tr>
                                          <td class="text-xs-right">Terminal ID :</td>
                                          <td> 
                                            <input class="form-control border-primary" type="email" id="userinput5" style=" height: 25px">
                                          </td>
                                        </tr>
                                      </tbody>
                                    
                                    </table>
                                  </div>

                                </div>
                              </div>
                              
                              @foreach($cust as $row2)
                              <div class="col-md-7 col-sm-12 text-xs-center text-md-left">
                                <p class="lead">ทีอยู่จัดส่งสินค้า :</p>
                                <div class="row">
                                  <div class="col-md-12">
                                    <table class="table table-borderless table-sm">
                                      <thead>
                                        <tr>
                                            <th colspan="3">ข้อมูลลูกค้า (Profile)</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td class="text-xs-right">คำนำหน้า :</td>
                                          <td class="text-xs-left"><input class="form-control border-primary" type="text" name="prename" value="{{ $row2->PRENAME }}" placeholder="คำนำหน้า" id="prename" style=" height: 25px"></td>
                                        </tr>
                                        <tr>
                                          <td class="text-xs-right">ชื่อ :</td>
                                          <td class="text-xs-left"><input class="form-control border-primary" type="text" name="firstname" value="{{ $row2->FIRSTNAME }}" placeholder="ชื่อ"  style=" height: 25px"></td>
                                        </tr>
                                        <tr>
                                          <td class="text-xs-right">สกุล :</td>
                                          <td class="text-xs-left"><input class="form-control border-primary"  type="text" name="lastname" value="{{ $row2->LASTNAME }}" placeholder="สกุล"  style=" height: 25px"></td>
                                        </tr>
                                        <tr>
                                          <td class="text-xs-right">เบอร์โทร :</td>
                                          <td class="text-xs-left"><input class="form-control border-primary" type="text" name="mobile" value="{{ $row2->MOBILE }}" placeholder="เบอร์โทรศัพท์" style=" height: 25px"></td>
                                        </tr>
                                        <tr>
                                          <td class="text-xs-right">อีเมล์ :</td>
                                          <td class="text-xs-left"><input class="form-control border-primary" type="text" name="email" value="{{ $row2->EMAIL }}" placeholder="อีเมล์" style=" height: 25px"></td>
                                        </tr>
                                        <tr>
                                          <td class="text-xs-right">บ้านเลขที่ :</td>
                                          <td class="text-xs-left"><input class="form-control border-primary" type="text" name="street1" value="{{ $row2->ADDRESS1 }}" placeholder="ที่อยู่"  style=" height: 25px"></td>
                                        </tr>
                                        <tr>
                                          <td class="text-xs-right">จังหวัด :</td>
                                          <td class="text-xs-left">
                                            <select id="projectinput5" name="interested" class="form-control border-primary" style=" height: 25px">
                                              <option value="none" selected="" disabled="">Interested in</option>
                                              <option value="design">design</option>
                                            </select>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td class="text-xs-right">เขต/อำเภอ :</td>
                                          <td class="text-xs-left">
                                            <select id="projectinput5" name="interested" class="form-control border-primary" style=" height: 25px">
                                              <option value="none" selected="" disabled="">Interested in</option>
                                              <option value="design">design</option>
                                            </select>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td class="text-xs-right">เเขวง/ตำบล :</td>
                                          <td class="text-xs-left">
                                            <select id="projectinput5" name="interested" class="form-control border-primary" style=" height: 25px">
                                              <option value="none" selected="" disabled="">Interested in</option>
                                              <option value="design">design</option>
                                              <option value="development">development</option>
                                            </select>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td class="text-xs-right">ไปรษณีย์ :</td>
                                          <td class="text-xs-left"><input class="form-control border-primary" type="text" name="post" value="{{ $row2->POSTAL }}" placeholder="ไปรษณีย์" id="userinput5" style=" height: 25px"></td>
                                        </tr>
                                      </tbody>
                                    <thead>
                                      <tr>
                                          <th><p style="margin-top:5px ; margin-bottom:10px">ที่อยู่ในการจัดส่ง</p></th>
                                          <th colspan="2"  class="text-xs-left">
                                            
                                              <label class="display-inline-block custom-control custom-radio ml-1">
                                                <input type="radio" name="customer1" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description ml-0">ที่อยู่เดียวกับ (Profile)</span>
                                              </label>
                                              <label class="display-inline-block custom-control custom-radio">
                                                <input type="radio" name="customer1" checked class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description ml-0">ที่อยู่อื่นๆ</span>
                                              </label>
                                        
                                          </th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td class="text-xs-right">คำนำหน้ :</td>
                                        <td class="text-xs-left"><input class="form-control border-primary" type="email" placeholder="จำนวน" id="userinput5" style=" height: 25px"></td>
                                      </tr>
                                      <tr>
                                        <td class="text-xs-right">ชื่อ :</td>
                                        <td class="text-xs-left"><input class="form-control border-primary" type="email" placeholder="จำนวน" id="userinput5" style=" height: 25px"></td>
                                      </tr>
                                      <tr>
                                        <td class="text-xs-right">สกุล :</td>
                                        <td class="text-xs-left"><input class="form-control border-primary" type="email" placeholder="จำนวน" id="userinput5" style=" height: 25px"></td>
                                      </tr>
                                      <tr>
                                        <td class="text-xs-right">เบอร์โทร :</td>
                                        <td class="text-xs-left"><input class="form-control border-primary" type="email" placeholder="จำนวน" id="userinput5" style=" height: 25px"></td>
                                      </tr>
                                      <tr>
                                        <td class="text-xs-right">อีเมล์ :</td>
                                        <td class="text-xs-left"><input class="form-control border-primary" type="email" placeholder="จำนวน" id="userinput5" style=" height: 25px"></td>
                                      </tr>
                                      <tr>
                                        <td class="text-xs-right">บ้านเลขที่ :</td>
                                        <td class="text-xs-left"><input class="form-control border-primary" type="email" placeholder="จำนวน" id="userinput5" style=" height: 25px"></td>
                                      </tr>
                                      <tr>
                                        <td class="text-xs-right">จังหวัด :</td>
                                        <td class="text-xs-left">
                                          <select id="projectinput5" name="interested" class="form-control border-primary" style=" height: 25px">
                                            <option value="none" selected="" disabled="">Interested in</option>
                                            <option value="design">design</option>
                                          </select>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-xs-right">เขต/อำเภอ :</td>
                                        <td class="text-xs-left">
                                          <select id="projectinput5" name="interested" class="form-control border-primary" style=" height: 25px">
                                            <option value="none" selected="" disabled="">Interested in</option>
                                            <option value="design">design</option>
                                          </select>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-xs-right">เเขวง/ตำบล :</td>
                                        <td class="text-xs-left">
                                          <select id="projectinput5" name="interested" class="form-control border-primary" style=" height: 25px">
                                            <option value="none" selected="" disabled="">Interested in</option>
                                            <option value="design">design</option>
                                            <option value="development">development</option>
                                          </select>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="text-xs-right">ไปรษณีย์ :</td>
                                        <td class="text-xs-left"><input class="form-control border-primary" type="email" placeholder="จำนวน" id="userinput5" style=" height: 25px"></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  </div>
                                </div>
                              </div>
                            @endforeach


                            </div>
                      

                        <!-- Invoice Footer -->   


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
