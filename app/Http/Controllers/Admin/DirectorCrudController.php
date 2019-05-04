<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\DirectorRequest as StoreRequest;
use App\Http\Requests\DirectorRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class DirectorCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class DirectorCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Director');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/director');
        $this->crud->setEntityNameStrings('director', 'directors');

        $this->crud->enableExportButtons();

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        // $this->crud->setFromDb();

        $this->crud->addField([
            'label' => "Nombre del Director(es)",
            'name' => 'name',
            'type' => 'text',
        ]);

        $this->crud->addColumn('name');

        // add asterisk for fields that are required in DirectorRequest
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
