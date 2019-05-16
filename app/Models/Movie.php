<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Laravel\Scout\Searchable;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Str;

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

    public function setImageAttribute($value) {
        $attribute_name = "image";
        $disk = "public_folder";
        $destination_path = "posters";

        if($value == null) {
            \Storage::disk($disk)->delete($this->{attribute_name});

            $this->attributes[attribute_name] = null;
        }

        if(starts_with($value, 'data:image')) {
            $image = \Image::make($value)->encode('jpg', 90);

            $filename = md5($value.time()).'.jpg';

            \Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());

            $this->attributes[$attribute_name] = $destination_path.'/'.$filename;
        }
    }

    public static function boot()
    {
        parent::boot();
        static::deleting(function($obj) {
            \Storage::disk('public_folder')->delete($obj->image);
        });
    }

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
