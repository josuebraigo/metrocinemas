<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Laravel\Scout\Searchable;
use Cviebrock\EloquentSluggable\Sluggable;

class Movie extends Model
{
    use CrudTrait;
    //use Searchable;
    use Sluggable;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'movies';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    //protected $fillable = ['name', 'country_id', ''];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function actors() {
        return $this->belongsToMany('App\Models\Actor')->withTimestamps();
    }

    public function director() {
        return $this->belongsTo('App\Models\Director');
    }

    public function funcion() {
        return $this->hasMany('App\Models\Funcion');
    }

    public function genres() {
        return $this->belongsToMany('App\Models\Genre')->withTimestamps();
    }

    public function country(){
      return $this->belongsTo('App\Models\Country');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
