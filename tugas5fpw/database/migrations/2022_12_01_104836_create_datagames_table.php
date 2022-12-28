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
        Schema::create('datagames', function (Blueprint $table) {
            $table->id();
            $table->string('publisher');
            $table->enum('platform', ['mobile', 'console', 'pc']);
            $table->string('rating');

            $table->foreignId('game_id')->unique()->constrained();
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
        Schema::dropIfExists('datagames');
    }
};
