<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('caption');
            $table->string('title_ua');
            $table->string('title_en');
            $table->string('intro_ua');
            $table->string('intro_en');
            $table->text('content_ua');
            $table->string('content_en');
            $table->bigInteger('parent_id')->unsigned()->default(1);
            $table->foreign("parent_id")->references("id")->on("pages");
            $table->integer("order_num")->unsigned()->default(0);
            $table->integer("order_type")->unsigned()->default(1);
            $table->foreign("order_type")->references("id")->on("order_types");
            $table->string("cotainer_type")->nullable();
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
        Schema::dropIfExists('pages');
    }
}
