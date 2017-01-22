<?php namespace App\Http\Repository;

use App\Location;

class DbMainRepository
{

    public function getLocations () {
        return Location::all();
    }

}