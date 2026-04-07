<?php namespace Pensoft\Synergies\Updates;

use Schema;
use Illuminate\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftSynergiesData3 extends Migration
{
    public function up(): void
    {
        Schema::table('pensoft_synergies_data', function(Blueprint $table)
        {
            $table->string('label')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('pensoft_synergies_data', function(Blueprint $table)
        {
            $table->dropColumn('label');
        });
    }
}