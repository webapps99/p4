<?php
class Svcrequest extends Eloquent
{

    # The guarded properties specifies which attributes should *not* be mass-assignable
    protected $guarded = array('id', 'created_at', 'updated_at');




    public static function getRequestDesc() {

        $requests = Array();

        $collection = Svcrequest::all();

        foreach($collection as $request) {
            $requests[$request->id] = $request->service_desc;
        }

        return $requests;
    }
}

