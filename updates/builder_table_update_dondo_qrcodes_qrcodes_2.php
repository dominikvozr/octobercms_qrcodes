<?php namespace Dondo\Qrcodes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDondoQrcodesQrcodes2 extends Migration
{
    public function up()
    {
        Schema::table('dondo_qrcodes_qrcodes', function($table)
        {
            $table->dropColumn('id');
            $table->dropColumn('url_id');
        });
    }
    
    public function down()
    {
        Schema::table('dondo_qrcodes_qrcodes', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('url_id', 255);
        });
    }
}
