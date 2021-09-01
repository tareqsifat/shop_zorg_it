<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->integer('owner_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('temp_user_id')->nullable();
            $table->integer('address_id')->default(0);
            $table->integer('product_id')->nullable();
            $table->text('variation');
            $table->double('price')->default(0.00);
            $table->double('tax')->default(0.00);
            $table->double('shipping_cost')->default(0.00);
            $table->string('shipping_type');
            $table->integer('pickup_point')->nullable();
            $table->double('discount')->default(0.00);
            $table->string('product_referral_code')->nullable();
            $table->string('coupne_code');
            $table->tinyInteger('coupne_applied')->default(0);
            $table->integer('quantity')->default(0);
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
        Schema::dropIfExists('carts');
    }
}
