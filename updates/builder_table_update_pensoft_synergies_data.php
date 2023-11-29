<?php namespace Pensoft\Synergies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftSynergiesData extends Migration
{
    public function up()
    {
        Schema::table('pensoft_synergies_data', function($table)
        {
            $table->string('name', 255)->nullable(false)->change();
            $table->text('description')->nullable()->change();
            $table->text('social_media')->nullable()->change();
            $table->text('newsletter')->nullable()->change();
            $table->text('url')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('pensoft_synergies_data', function($table)
        {
            $table->string('name', 255)->nullable()->change();
            $table->text('description')->nullable(false)->change();
            $table->text('social_media')->nullable(false)->change();
            $table->text('newsletter')->nullable(false)->change();
            $table->text('url')->nullable(false)->change();
        });
    }
}
