<?php namespace Pensoft\Synergies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePensoftSynergiesArticles extends Migration
{
    public function up()
    {
        Schema::create('pensoft_synergies_articles', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('article_id');
            $table->integer('synergy_id');
            $table->primary(['article_id','synergy_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pensoft_synergies_articles');
    }
}
