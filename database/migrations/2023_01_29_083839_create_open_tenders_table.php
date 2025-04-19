<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('open_tenders', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('pde_id')->constrained('p_d_e_s');
            $table->string('reference');
            $table->date('dateposted');
            $table->date('closingdate');
            $table->text('downloads');
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
        Schema::dropIfExists('open_tenders');
    }
};
