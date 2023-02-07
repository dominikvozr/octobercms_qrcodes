<?php namespace Dondo\Qrcodes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDondoQrcodesQrcodes extends Migration
{
    public function up()
    {
        Schema::create('dondo_qrcodes_qrcodes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('url_id');
            $table->string('path');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dondo_qrcodes_qrcodes');
    }
}
