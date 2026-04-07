<?php namespace Pensoft\Synergies\Updates;

use Schema;
use Illuminate\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePensoftSynergiesData extends Migration
{
    public function up(): void
    {
        Schema::create('pensoft_synergies_data', function(Blueprint $table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('name')->nullable();
            $table->text('description');
            $table->text('social_media');
            $table->text('newsletter');
            $table->text('url');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pensoft_synergies_data');
    }
}