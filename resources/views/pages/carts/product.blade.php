@extends('layouts.default')
@section('content')

<!-- Page Content -->
<form action="{{ url('carts/invoice') }} " method="post" >
{{ csrf_field() }}
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
                    Checkout
                  </button>
                  </div>
                </div>
                <div class="card-body collapse in">
                  <div class="card-block">

                    <!-- Hoverable rows start -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th style="width: 10px;" >#</th>
                                    <th>รายการสินค้า</th>
                                    <th>ราคาต่อหน่วย/บาท</th>
                                    <th>จำนวน/ชุด</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                              $i=0;
                            ?>
                              @foreach($product as $row2)
                              <?php $i++ ?>
                                <tr>
                                    <th>
                                      <input class="form-control border-primary" name="Product{{ $row2->ID }}" type="checkbox" value="1" style="transform: scale(1.5);margin-top:5px">
                                    </th>
                                    <td>{{ $row2->NAME }}<input type="hidden" name="product" value="{{ $row2->NAME }}" /> </td>
                                    <td>{{ $row2->PRICE }}<input type="hidden" name="price" value="{{ $row2->PRICE }}" /> </td>
                                    <td>
                                      <input class="form-control border-primary" type="text" name="Amount{{ $row2->ID }}" placeholder="จำนวน" id="amount" style="width: 70px; height: 25px">
                                    </td>
                                
                                </tr>
                              @endforeach
                                
                            </tbody>
                        </table>
                        <input type="text" name="cnum" value="<?=$i?>" />
                      <!-- Hoverable rows end -->   


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
</form>

@stop
