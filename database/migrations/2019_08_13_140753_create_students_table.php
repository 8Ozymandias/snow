<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');                
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('email');
            $table->string('trn');
            $table->string('school');
            $table->string('faculty');
            $table->string('programmeofstudy');
            $table->string('yearofstudy');
            $table->string('enrollmentstatus');
            $table->string('phone');
            $table->string('address');
            $table->string('emergencycontactname');
            $table->string('emergencyscontactrelationtoapplicant');
            $table->string('emergencycontactsphonenumberhome');
            $table->string('emergencycontactsaddress');
            $table->string('howdidyouhearaboutus');
            $table->string('gender');
            $table->string('maritalstatus');
            $table->string('placementoption');
            $table->string('dateofbirth');
            $table->text('description');             
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
        Schema::dropIfExists('students');
    }
}
