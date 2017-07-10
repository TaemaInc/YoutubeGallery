<?php

namespace Taema\Youtubegallery\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePlaylistVideoTable extends Migration
{
    public function up()
    {
        Schema::create('taema_youtubegallery_playlist_video', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('playlist_id');
            $table->unsignedInteger('video_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('taema_youtubegallery_playlist_video');
    }
}
