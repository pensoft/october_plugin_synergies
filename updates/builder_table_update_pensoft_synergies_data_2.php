<?php namespace Pensoft\Synergies\Updates;

use Schema;
use Illuminate\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftSynergiesData2 extends Migration
{
    public function up(): void
    {
        Schema::table('pensoft_synergies_data', function(Blueprint $table)
        {
            $table->integer('type')->default(1);
            $table->integer('sort_order')->default(1);
        });
    }

    public function down(): void
    {
        Schema::table('pensoft_synergies_data', function(Blueprint $table)
        {
            $table->dropColumn('type');
            $table->dropColumn('sort_order');
        });
    }
}