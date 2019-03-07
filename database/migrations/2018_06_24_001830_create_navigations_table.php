<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNavigationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navigations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nav_name');
            $table->string('alias');
            $table->string('caption')->nullable();
            $table->string('nav_category');
            $table->string('page_type');
            $table->integer('position');
            $table->text('short_content')->nullable();
            $table->text('long_content')->nullable();
            $table->integer('parent_page_id');
            $table->string('icon_image')->nullable();
            $table->string('icon_image_caption')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('link')->nullable();
            $table->string('attachment')->nullable();  
            $table->string('page_title')->nullable();
            $table->string('page_keyword')->nullable();
            $table->string('page_description')->nullable();    
            $table->enum('page_status',['1','0']);        
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
        Schema::dropIfExists('navigations');
    }
}

