<?php namespace Pensoft\Synergies\Models;

use Model;

/**
 * Model
 */
class Synergy extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'pensoft_synergies_data';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    protected $jsonable = [
        'social_media'
    ];

    public $attachOne = [
        'logo' => 'System\Models\File'
    ];

    public $belongsToMany = [
        'articles' => [
            'Pensoft\Articles\Models\Article',
            'table' => 'pensoft_synergies_articles',
            'order' => 'title',
        ],
    ];

}
