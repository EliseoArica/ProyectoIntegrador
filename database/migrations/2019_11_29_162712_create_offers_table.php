<?php

use App\Offer;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->string('title');
            $table->char('estado', 1)->default(Offer::OFERTA_ACTIVA);
            $table->dateTime('expiration_date');
            $table->string('description');
            $table->string('salary');
            $table->string('address');
            $table->timestamps();
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('category_id');
            $table->softDeletes();

            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
}
