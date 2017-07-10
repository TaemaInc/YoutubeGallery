<?php namespace Taema\Youtubegallery\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePlaylistsTable extends Migration
{
    public function up()
    {
        Schema::create('taema_youtubegallery_playlists', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('taema_youtubegallery_playlists');
    }
}
