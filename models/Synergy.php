<?php namespace Pensoft\Synergies\Models;

use Model;
use System\Models\File;
use Pensoft\Articles\Models\Article;

class Synergy extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;
    use \October\Rain\Database\Traits\Sortable;

    protected $casts = ['deleted_at' => 'datetime'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'pensoft_synergies_data';

    /**
     * @var array Validation rules
     */
    public $rules = [];

    protected $jsonable = [
        'social_media'
    ];

    public $attachOne = [
        'logo' => File::class
    ];

    public $belongsToMany = [
        'articles' => [
            Article::class,
            'table' => 'pensoft_synergies_articles',
            'order' => 'title',
        ],
    ];
}