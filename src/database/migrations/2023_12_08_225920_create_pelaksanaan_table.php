<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelaksanaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelaksanaan', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('kegiatan_id')->nullable();
            $table->bigInteger('jenis_id')->nullable();
            $table->bigInteger('subjenis1_id')->nullable();
            $table->bigInteger('subjenis2_id')->nullable();

            $table->integer('statuspelaksanaan_id')->nullable(); //open,close,cancel,reject
            $table->integer('progress')->nullable(); //percentage


            $table->text('subject')->nullable();
            $table->text('description')->nullable();
            $table->text('resolution')->nullable();


            $table->dateTime('startdt')->nullable();
            $table->dateTime('enddt')->nullable();
            $table->dateTime('targetdt')->nullable();

            $table->bigInteger('employee_id')->nullable();
            $table->bigInteger('employeedept_id')->nullable();
            $table->bigInteger('employeesubdept_id')->nullable();

            $table->bigInteger('enduser_id')->nullable();
            $table->bigInteger('enduserdept_id')->nullable();
            $table->bigInteger('endusersubdept_id')->nullable();

            $table->string('image')->nullable();

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
        Schema::dropIfExists('pelaksanaan');
    }
}
