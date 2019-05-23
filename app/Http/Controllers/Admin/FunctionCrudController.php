<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\FunctionRequest as StoreRequest;
use App\Http\Requests\FunctionRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;
use App\Models\FunctionSeat;
use Validator;
use Carbon\Carbon;

/**
 * Class FunctionCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class FunctionCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Funcion');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/function');
        $this->crud->setEntityNameStrings('function', 'functions');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        // $this->crud->setFromDb();

        $this->crud->addField([
            'label' => "Pelicula",
            'name' => 'movie_id',
            'type' => 'select2',
            'entity' => 'movie',
            'attribute' => 'name',
            'model' => 'App\Models\Movie',
        ]);

        $this->crud->addField([
            'label' => "Sala",
            'name' => 'room_id',
            'type' => 'select2',
            'entity' => 'room',
            'attribute' => 'name',
            'model' => 'App\Models\Room',
        ]);

        $this->crud->addField([
            'label' => 'Horario',
            'name' => 'schedule',
            'type' => 'time',
        ]);

       $this->crud->addColumn([
            'label' => 'Película',
            'name' => 'movie.name',
       ]);

       $this->crud->addColumn([
            'label' => 'Sala',
            'name' => 'room.name',
       ]);

       $this->crud->addColumn([
            'label' => 'Horario',
            'name' => 'schedule',
       ]);

       $this->crud->enableExportButtons();

        // add asterisk for fields that are required in FunctionRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {
        $seats = array();

        for ($i=0; $i < 100; $i++) {
          $seats[] = false;
        }

        $timeFormat = $request->request->get('schedule');
        $schedule = Carbon::parse($timeFormat)->format('H:i');

        $movie_id = $request->request->get('movie_id');
        $movie = \App\Models\Movie::where('id', $movie_id)->firstOrFail();
        $finish = Carbon::parse($schedule)->addMinutes($movie->duration + 30)->format('H:i');

        $request->request->set('finish', $finish);

        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry

        $seats = array();

        for ($i=0; $i < 100; $i++) {
          $seats[] = false;
        }

        $functionSeat = new FunctionSeat();
        $functionSeat->function_id = $this->crud->entry->id;
        $functionSeat->seats = json_encode($seats);
        $functionSeat->save();

        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        $timeFormat = $request->request->get('schedule');
        $schedule = Carbon::parse($timeFormat)->format('H:i');

        $movie_id = $request->request->get('movie_id');
        $movie = \App\Models\Movie::where('id', $movie_id)->firstOrFail();
        $finish = Carbon::parse($schedule)->addMinutes($movie->duration + 30)->format('H:i');

        $request->request->set('finish', $finish);
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
