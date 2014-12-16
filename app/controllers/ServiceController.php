<?php

class ServiceController extends \BaseController {


    /**
     *Child Construct is calling parent construct in Basecontroller and
     * adding logic for beforeFilter auth!!!
     */
    public function __construct() {

        # Make sure BaseController construct gets called
        parent::__construct();

        $this->beforeFilter('auth', array('except' => 'getIndex'));

    }



    /**
     * Display all services
     * @return View
     */
    public function getIndex() {

        $services = Service::all();



            return View::make('services_index')
                ->with('services', $services);

    }



    public function getRequest() {

        $services = Service::getServiceDesc();

        return View::make('requests_add')->with('services',$services);

    }


    /**
     * Process the "Add a request form"
     * @return Redirect
     */
    public function postRequest() {

        # Instantiate the request model
        $svcrequest = new Svcrequest();

        $svcrequest->fill(Input::all());

        // Build the validation constraint set.
        $rules = array(
            'email' => 'required|email',
            'breed' => 'required|alpha_spaces',
            'age' => 'required|numeric|min:0',
            'svcdate' => 'required|date',
            'nbrdogs' => 'required|numeric|min:0'

        );

        // Create a new validator instance.
        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()) {return Redirect::to('/requests_add')
            ->with('flash_message', 'Invalid Input; please complete the form.')
            ->withInput()
            ->withErrors($validator);}


        # Magic: Eloquent
        $svcrequest->save();

        return Redirect::action('ServiceController@getRequest')
            ->with('flash_message','Your Service Request has been received.');


    }

    public function getService() {

        return View::make('services_add');

    }


    /**
     * Process the "Add a service form"
     * @return Redirect
     */
    public function postService() {

        # Instantiate the request model
        $service = new Service();

        $service->fill(Input::all());

        # Magic: Eloquent
        $service->save();

        return Redirect::action('ServiceController@getService')->with('flash_message','Your Service has been added.');


    }


    /**
     * Show all requests for that user and allow edit/delete
     * @return View
     */
    public function getEdit() {

       $requests = Svcrequest::where('email',Auth::user()->email)->get();


        $services = Service::getServiceDesc();


        return View::make('requests')
            ->with('requests',$requests)
            ->with('services',$services);



    }


    /**
     * Show the "Edit a request form"
     * @return View
     */
    public function getRequestEdit($id) {

        $services = Service::getServiceDesc();

        try {
            $request = Svcrequest::findOrFail($id);

        }
        catch(exception $e) {
            return Redirect::to('/requests')->with('flash_message', 'Request not found');
        }

        return View::make('requests_edit')
            ->with('request', $request)
            ->with('services',$services);


    }


    /**
     * Process the "Edit a Request form"
     * @return Redirect
     */
    public function postEdit() {

        try {
            $request = Svcrequest::findOrFail(Input::get('id'));
        }
        catch(exception $e) {
            return Redirect::to('/requests')->with('flash_message', 'Request not found');
        }

        # http://laravel.com/docs/4.2/eloquent#mass-assignment
        $request->fill(Input::all());

        // Build the validation constraint set.
        $rules = array(
            'email' => 'required|email',
            'breed' => 'required|alpha_spaces',
            'age' => 'required|numeric|min:0',
            'svcdate' => 'required|date',
            'nbrdogs' => 'required|numeric|min:0'

        );

        // Create a new validator instance.
        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()) {return Redirect::to('/requests_edit/{id}')
            ->with('flash_message', 'Invalid Input; please complete the form.')
            ->withInput()
            ->withErrors($validator);}


        $request->save();

        return Redirect::action('ServiceController@getEdit')->with('flash_message','Your changes have been saved.');

    }


    /**
     * Process request deletion
     *
     * @return Redirect
     */
    public function postDelete() {

        try {
            $request = Svcrequest::findOrFail(Input::get('id'));
        }
        catch(exception $e) {
            return Redirect::to('/requests/')->with('flash_message', 'Could not delete request - not found.');
        }

        Svcrequest::destroy(Input::get('id'));

        return Redirect::to('/requests/')->with('flash_message', 'Service Request deleted.');

    }






}
