<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FacultyFacility extends Model
{
    protected $table='FacultyFacilities';
    protected $primaryKey = 'FacultyFacilityID';

    public static function getByFaculty(Faculty $faculty)
    {
        return FacultyFacility::where('FacultyID', $faculty->FacultyID)->get()->first();
    }
}
