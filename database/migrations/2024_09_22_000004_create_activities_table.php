<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id('activity_id');
            $table->foreignId('activity_type_id')->nullable()->constrained('activity_types', 'activity_type_id')->onDelete('set null');
            $table->string('activity_name');
            $table->text('description');
            $table->integer('children_price')->nullable()->default(0);
            $table->integer('student_price')->nullable()->default(0);
            $table->integer('adult_price')->nullable()->default(0);
            $table->string('image')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
