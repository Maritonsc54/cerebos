<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('GenYear'); 
            $table->string('GenID'); 
            $table->string('Order_ID'); 
            $table->string('PRODUCT_AMOUNT')->nullable(); 
            $table->string('PAY_TYPE')->nullable(); 
            $table->string('PAY_AMOUNT')->nullable(); 
            $table->string('TRANS_TYPE')->nullable(); 
            $table->string('TRANS_AMOUNT')->nullable(); 
            $table->string('CUST_ID')->nullable(); 
            $table->string('FRIST_NAME')->nullable(); 
            $table->string('LAST_NAME')->nullable(); 
            $table->string('Order_Source')->nullable(); 
            $table->string('Order_Subsource')->nullable(); 
            $table->string('Order_Purpose')->nullable(); 
            $table->string('Payment_Method')->nullable(); 
            $table->string('Payment_Provider')->nullable(); 
            $table->string('Payment_AuthCode')->nullable(); 
            $table->string('Terminal_ID')->nullable(); 
            $table->string('Order_discount_value')->nullable(); 
            $table->string('Voucher_code')->nullable(); 
            $table->string('Voucher_value')->nullable(); 
            $table->string('Loyalty_Point')->nullable(); 
            $table->string('Comments')->nullable(); 
            $table->string('Delivery_Date')->nullable(); 
            $table->string('Preferred_Time')->nullable(); 
            $table->string('Cust_prename')->nullable(); 
            $table->string('Cust_firstname')->nullable(); 
            $table->string('Cust_lastname')->nullable(); 
            $table->string('Cust_Mobile')->nullable(); 
            $table->string('Cust_Email')->nullable(); 
            $table->string('Cust_street')->nullable(); 
            $table->string('Cust_street3')->nullable(); 
            $table->string('Cust_sub_district')->nullable(); 
            $table->string('Cust_district')->nullable(); 
            $table->string('Cust_province')->nullable(); 
            $table->string('Cust_postal')->nullable(); 
            $table->string('Shipping_FristName')->nullable(); 
            $table->string('Shipping_LastName')->nullable(); 
            $table->string('Shipping_Telphone')->nullable(); 
            $table->string('Shipping_Street')->nullable(); 
            $table->string('Shipping_Street3')->nullable(); 
            $table->string('Shipping_Street4')->nullable(); 
            $table->string('Shipping_Street5')->nullable(); 
            $table->string('Shipping_OtherCity')->nullable(); 
            $table->string('Shipping_District')->nullable(); 
            $table->string('Shipping_City')->nullable(); 
            $table->string('Shipping_Region')->nullable(); 
            $table->string('Shipping_PostalCode')->nullable(); 
            $table->string('Billing_FristName')->nullable(); 
            $table->string('Billing_LastName')->nullable(); 
            $table->string('Billing_Telphone')->nullable(); 
            $table->string('Billing_Street')->nullable(); 
            $table->string('Billing_Street3')->nullable(); 
            $table->string('Billing_Street4')->nullable(); 
            $table->string('Billing_Street5')->nullable(); 
            $table->string('Billing_OtherCity')->nullable(); 
            $table->string('Billing_District')->nullable(); 
            $table->string('Billing_City')->nullable(); 
            $table->string('Billing_Region')->nullable(); 
            $table->string('Billing_PostalCode')->nullable(); 
            $table->string('Customer_Recruitment')->nullable(); 
            $table->string('Customer_SubSource')->nullable(); 
            $table->string('SaveType')->nullable(); 
            $table->string('Sub_Source')->nullable(); 
            $table->string('Vehicle_Number')->nullable(); 
            $table->string('Company_TaxId')->nullable(); 
            $table->string('Day_OfMonth')->nullable(); 
            $table->string('Frequency')->nullable(); 
            $table->string('GIFT_RULES')->nullable(); 
            $table->string('Invoice_Type')->nullable(); 
            $table->string('Donate_Number')->nullable(); 
            $table->string('Cust_Type_PCC')->nullable(); 
            $table->string('CUST_ID_NEW')->nullable(); 
            $table->string('SALE_BY'); 
            $table->date('SALE_DATE'); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
