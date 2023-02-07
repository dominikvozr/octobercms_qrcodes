<?php namespace Dondo\Qrcodes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDondoQrcodesQrcodes6 extends Migration
{
    public function up()
    {
        Schema::table('dondo_qrcodes_qrcodes', function($table)
        {
            $table->string('id', 36)->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
            $table->dropColumn('url_id');
        });
    }
    
    public function down()
    {
        Schema::table('dondo_qrcodes_qrcodes', function($table)
        {
            $table->increments('id')->nullable(false)->unsigned()->default(null)->comment(null)->change();
            $table->string('url_id', 36);
        });
    }
}
