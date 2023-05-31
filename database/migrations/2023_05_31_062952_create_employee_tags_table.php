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
        Schema::create('employee_tags', function (Blueprint $collection) {
            $collection->id();
            $collection->foreignUuid('employee_id')->constrained('employees')->onDelete('cascade');
            $collection->foreignUuid('tag_id')->constrained('tags')->onDelete('cascade');
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
        Schema::dropIfExists('employee_tags');
    }
};
