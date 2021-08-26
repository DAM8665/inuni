<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UniversityFacility extends Model
{
    protected $table='UniversityFacilities';
    protected $primaryKey = 'UniversityFacilityID';

    public static function getByUniversity(University $university){
        return UniversityFacility::where('UniversityID',$university->UniversityID)->get()->first();
    }
}
