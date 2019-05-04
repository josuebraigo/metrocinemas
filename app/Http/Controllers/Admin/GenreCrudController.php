<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\GenreRequest as StoreRequest;
use App\Http\Requests\GenreRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;
use Illuminate\Support\Str;


/**
 * Class GenreCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class GenreCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Genre');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/genre');
        $this->crud->setEntityNameStrings('genre', 'genres');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        // $this->crud->setFromDb();

        $this->crud->addField([
            'label' => "Género",
            'type' => 'text',
            'name' => 'name',
        ]);

        $this->crud->addColumn([
            'label' => "Genero",
            'name' => 'name',
        ]);

        $this->crud->enableExportButtons();

        // add asterisk for fields that are required in GenreRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {
        $name = $request->request->get('name');
        $slug = Str::slug($name, '-');
        $request->request->set('slug', $slug);
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        $name = $request->request->get('name');
        $slug = Str::slug($name, '-');
        $request->request->set('slug', $slug);
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
