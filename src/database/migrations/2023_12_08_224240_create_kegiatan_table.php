<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKegiatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('jenis_id')->nullable();
            $table->bigInteger('subjenis1_id')->nullable();
            $table->bigInteger('subjenis2_id')->nullable();
            $table->bigInteger('koordinator_id')->nullable(); //diisi dengan employee id

            $table->integer('statuskegiatan_id')->nullable(); //open,close,cancel,reject
            $table->integer('progress')->nullable(); //percentage

            $table->string('name')->nullable();
            $table->text('description')->nullable();

            $table->dateTime('target_startdt')->nullable();
            $table->dateTime('target_enddt')->nullable();

            $table->dateTime('actual_startdt')->nullable();
            $table->dateTime('actual_enddt')->nullable();


            $table->timestamps();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kegiatan');
    }
}
