<?php namespace Pensoft\Synergies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftSynergiesData3 extends Migration
{
    public function up()
    {
        Schema::table('pensoft_synergies_data', function($table)
        {
            $table->string('label')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('pensoft_synergies_data', function($table)
        {
            $table->dropColumn('label');
        });
    }
}
