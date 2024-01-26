<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('expiry_month');
            $table->string('expiry_year');
            $table->string('start_month')->nullable();
            $table->string('start_year')->nullable();
            $table->string('issue_number')->nullable();
            $table->string('email');
            $table->date('birthday');
            $table->string('gender')->nullable();
            $table->string('billing_title')->nullable();
            $table->string('billing_firstName');
            $table->string('billing_lastName')->nullable();
            $table->string('billing_company')->nullable();
            $table->string('billing_address1');
            $table->string('billing_address2')->nullable();
            $table->string('billing_city');
            $table->string('billing_postcode');
            $table->string('billing_state')->nullable();
            $table->string('billing_country');
            $table->string('billing_phone')->nullable();
            $table->string('billing_fax')->nullable();
            $table->string('shipping_title')->nullable();
            $table->string('shipping_firstName');
            $table->string('shipping_company')->nullable();
            $table->string('shipping_address1');
            $table->string('shipping_address2')->nullable();
            $table->string('shipping_city')->nullable();
            $table->string('shipping_postcode');
            $table->string('shipping_state')->nullable();
            $table->string('shipping_country');
            $table->string('shipping_phone')->nullable();
            $table->string('shipping_fax')->nullable();
            $table->date('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
