<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class University extends Model
{
    protected $table='Universities';
    protected $primaryKey = 'UniversityID';

    public function getCity(){
        return City::find($this->CityID);
    }
}
