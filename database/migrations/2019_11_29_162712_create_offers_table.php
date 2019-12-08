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
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            
            $table->bigIncrements('id')->autoIncrement();
            $table->string('title');
            $table->text('description');
            $table->text('functions');
            $table->text('requirements');
            $table->string('salary');
            $table->string('address');
            $table->char('status', 1)->default(Offer::OFERTA_ACTIVA);
            $table->dateTime('expiration_date');
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
