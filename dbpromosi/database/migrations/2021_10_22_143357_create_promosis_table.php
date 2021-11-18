<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromosisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promosis', function (Blueprint $table) {
            $table->id();
            
            $table->string('namap');
            $table->string('jenisp');
            $table->string('idp');
            $table->string('asalp');
            $table->string('untukp');
            $table->date('mulaip');
            $table->date('akhirp');
            $table->string('gmbrp');
            $table->string('pdfp');
            
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
        Schema::dropIfExists('promosis');
    }
}
