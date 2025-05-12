<?php namespace Pensoft\Synergies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftSynergiesData2 extends Migration
{
    public function up()
    {
        Schema::table('pensoft_synergies_data', function($table)
        {
            $table->integer('type')->default(1);
            $table->integer('sort_order')->default(1);
        });
    }
    
    public function down()
    {
        Schema::table('pensoft_synergies_data', function($table)
        {
            $table->dropColumn('type');
            $table->dropColumn('sort_order');
        });
    }
}
