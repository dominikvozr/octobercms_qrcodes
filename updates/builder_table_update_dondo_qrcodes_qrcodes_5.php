<?php namespace Dondo\Qrcodes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDondoQrcodesQrcodes5 extends Migration
{
    public function up()
    {
        Schema::table('dondo_qrcodes_qrcodes', function($table)
        {
            $table->string('name', 36)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('dondo_qrcodes_qrcodes', function($table)
        {
            $table->dropColumn('name');
        });
    }
}
