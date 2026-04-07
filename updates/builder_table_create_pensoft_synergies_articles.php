<?php namespace Pensoft\Synergies\Updates;

use Schema;
use Illuminate\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePensoftSynergiesArticles extends Migration
{
    public function up(): void
    {
        Schema::create('pensoft_synergies_articles', function(Blueprint $table)
        {
            $table->engine = 'InnoDB';
            $table->integer('article_id');
            $table->integer('synergy_id');
            $table->primary(['article_id','synergy_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pensoft_synergies_articles');
    }
}