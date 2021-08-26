<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccommodationCost extends Model
{
    protected $table='AccommodationCosts';
    public static function getByUniversity(University $university){
        return AccommodationCost::where('UniversityID',$university->UniversityID)->get()->first();
    }
}
