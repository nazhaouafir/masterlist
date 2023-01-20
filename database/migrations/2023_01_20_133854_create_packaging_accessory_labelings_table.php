<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagingAccessoryLabelingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packaging_accessory_labelings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('accessory_id')->constrained('accessories');
            $table->foreignId('packaging_id')->constrained('packagings');
            $table->foreignId('labeling_id')->constrained('labelings');
            $table->string('code')->nullable();
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
        Schema::dropIfExists('packaging_accessory_labelings');
    }
}
