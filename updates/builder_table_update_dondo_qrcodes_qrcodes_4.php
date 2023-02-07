<?php namespace Dondo\Qrcodes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDondoQrcodesQrcodes4 extends Migration
{
    public function up()
    {
        Schema::table('dondo_qrcodes_qrcodes', function($table)
        {
            $table->string('url_id', 36);
            $table->increments('id')->nullable(false)->unsigned()->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('dondo_qrcodes_qrcodes', function($table)
        {
            $table->dropColumn('url_id');
            $table->string('id', 8)->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
