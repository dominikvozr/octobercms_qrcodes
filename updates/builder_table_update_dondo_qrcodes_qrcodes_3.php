<?php namespace Dondo\Qrcodes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDondoQrcodesQrcodes3 extends Migration
{
    public function up()
    {
        Schema::table('dondo_qrcodes_qrcodes', function($table)
        {
            $table->char('id',8)->primary();
        });
    }
    
    public function down()
    {
        Schema::table('dondo_qrcodes_qrcodes', function($table)
        {
            $table->dropPrimary(['id']);
            $table->dropColumn('id');
        });
    }
}
