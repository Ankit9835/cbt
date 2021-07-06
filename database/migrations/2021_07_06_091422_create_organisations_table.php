<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisations', function (Blueprint $table) {
            $table->id();
            $table->string('organisation_name');
            $table->string('organisation_id');
            $table->text('address');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('one_month_plan')->default(0)->nullable();
            $table->string('three_month_plan')->default(0)->nullable();
            $table->string('six_month_plan')->default(0)->nullable();
            $table->string('twelve_month_plan')->default(0)->nullable();
            $table->integer('is_active')->default(1);
            $table->timestamps();
            $table->SoftDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organisations');
    }
}
