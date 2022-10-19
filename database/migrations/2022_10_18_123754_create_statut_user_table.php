<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatutUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statut_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("statut_id");
            $table->unsignedBigInteger("user_id");
            $table->foreign("statut_id")->references("id")->on("statuts")->onDelete('cascade')->onUpdate('cascade');
            $table->foreign("user_id")->references("id")->on("users")->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('statut_user');
    }
}
