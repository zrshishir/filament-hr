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
        Schema::create('employees', function (Blueprint $collection) {
            $collection->id();
            $collection->foreignId('country_id')->constrained()->cascadeOnDelete();
            $collection->foreignId('state_id')->constrained()->cascadeOnDelete();
            $collection->foreignId('city_id')->constrained()->cascadeOnDelete();
            $collection->foreignId('department_id')->constrained()->cascadeOnDelete();
            $collection->string('first_name');
            $collection->string('last_name');
            $collection->string('address');
            $collection->char('zip_code');
            $collection->date('birth_date');
            $collection->date('date_hired');
            $collection->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
