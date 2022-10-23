<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string("caseRef")->nullable();
            $table->string("station")->nullable();
            $table->string("offence")->nullable();
            $table->string("briefOnCase")->nullable();
            $table->string("name")->nullable();
            $table->string("sex")->nullable();
            $table->string("age")->nullable();
            $table->string("nationality")->nullable();
            $table->string("nin")->nullable();
            $table->string("otherId")->nullable();
            $table->string("tribe")->nullable();
            $table->string("religion")->nullable();
            $table->string("maritalStatus")->nullable();
            $table->string("placeOfBirth")->nullable();
            $table->string("presentAddress")->nullable();
            $table->string("telephoneContact")->nullable();
            $table->string("distinguishFeatures")->nullable();
            $table->string("height")->nullable();
            $table->string("bodybuild")->nullable();
            $table->string("eyeColour")->nullable();
            $table->string("hairColour")->nullable();
            $table->string("levelOfEducation")->nullable();
            $table->string("occupation")->nullable();
            $table->string("father")->nullable();
            $table->string("fatherRO")->nullable();
            $table->string("fatherTel")->nullable();
            $table->string("mother")->nullable();
            $table->string("motherRO")->nullable();
            $table->string("motherTel")->nullable();
            $table->string("languagesSpoken")->nullable();
            $table->string("travelHistory")->nullable();
            $table->string("previousCriminalRecord")->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
