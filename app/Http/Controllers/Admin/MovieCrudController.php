<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\MovieRequest as StoreRequest;
use App\Http\Requests\MovieRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class MovieCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class MovieCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Movie');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/movie');
        $this->crud->setEntityNameStrings('movie', 'movies');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        // $this->crud->setFromDb();

        $this->crud->addField([
            'label' => "Nombre",
            'type' => 'text',
            'name' => 'name',
        ]);

        $this->crud->addField([
            'label' => "Duración (minutos)",
            'name' => 'duration',
            'type' => 'number',
            'suffix' => ' min',
        ]);

        $this->crud->addField([
            'label' => "Sinopsis",
            'name' => 'synopsis',
            'type' => 'textarea',
        ]);

        $this->crud->addField([
            'label' => "País",
            'name' => 'country',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'label' => "Trailer",
            'name' => 'trailer',
            'type' => 'video',
        ]);

        $this->crud->addField([
            'label' => "Poster (<a href='https://www.lahiguera.net/cinemania/'>Descargar de aquí</a>)",
            'name' => 'poster',
            'type' => 'image',
            'upload' => true,
            'crop' => true,
            'aspect_ratio' => 0,

        ]);

        $this->crud->addField([
            'label' => "Año",
            'name' => 'year',
            'type' => 'number',
        ]);

        $this->crud->addField([
            'label' => "Director",
            'name' => 'director_id',
            'type' => 'select2',
            'entity' => 'director',
            'attribute' => 'name',
            'model' => 'App\Models\Director',
        ]);

        $this->crud->addColumn([
            'name' => 'name',
            'label' => 'Nombre',
        ]);

        $this->crud->addColumn([
            'name' => 'director.name',
            'label' => 'Director',
        ]);

        $this->crud->addColumn([
            'name' => 'duration',
            'label' => 'Duración',
            'type' => 'number',
            'suffix' => ' min'
        ]);


        // add asterisk for fields that are required in MovieRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
