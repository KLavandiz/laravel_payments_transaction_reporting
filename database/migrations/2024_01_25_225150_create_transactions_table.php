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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('reference_no');
            $table->foreignId('merchant_id');
            $table->foreign('merchant_id')->references('id')->on('merchants');
            $table->string('status');
            $table->string('channel');
            $table->string('custom_data')->nullable();
            $table->string('chain_id');
            $table->foreignId('agent_info_id');
            $table->foreign('agent_info_id')->references('id')->on('agents');
            $table->string('operation');
            $table->foreignId('fx_transaction_id');
            $table->foreign('fx_transaction_id')->references('id')->on('foreign_exchanges');
            $table->foreignId('acquirer_transaction_id');
            $table->foreign('acquirer_transaction_id')->references('id')->on('acquirers');
            $table->string('code');
            $table->string('message');
            $table->string('transaction_id');
            $table->boolean('refundable')->default(true);
            $table->foreignId('client_id');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
