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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id() ;
            $table->longText("address") ;
            $table->string("email") ;
            $table->string("mobile") ;
            $table->string("fix_1") ;
            $table->string("fix_2") ;
            $table->string("fix_3") ;
            $table->string("fax") ;
            $table->timestamps() ;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
