<?php

namespace Taema\Youtubegallery\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateVideosTable extends Migration
{
    public function up()
    {
        Schema::create('taema_youtubegallery_videos', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('yt_watch');
            $table->boolean('published');
            $table->integer('order')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('taema_youtubegallery_videos');
    }
}
