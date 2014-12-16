<?php

class Service extends Eloquent {

    # The guarded properties specifies which attributes should *not* be mass-assignable
    protected $guarded = array('id', 'created_at', 'updated_at');


    public static function search($query)
    {


        # The all() method will fetch all the rows from a Model/table

        $services = Service::all();


        # Make sure we have results before trying to print them...
        if ($services->isEmpty() != TRUE) {

            # Typically we'd pass $books to a View, but for quick and dirty demonstration, let's just output here...
            foreach ($services as $service) {
                echo $service->service_desc . '<br>';
            }
        } else {
            return 'No services found';
        }


    }

    public static function getServiceDesc() {

        $services = Array();

        $collection = Service::all();

        foreach($collection as $service) {
            $services[$service->id] = $service->service_desc;
        }

        return $services;
    }
}

