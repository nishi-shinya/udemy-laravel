<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\VacancyLevel;
use App\Models\Reservation;

class Lesson extends Model
{
    
    public function getVacancyLevelAttribute(): VacancyLevel
    {
        return new VacancyLevel($this->remainingCount());
    }
    
    public function remainingCount(): int
    {
        return $this->capacity - $this->reservations()->count();
    }
    
    public function reservations()
    {
        return $this->hasMany('App\Models\Reservation');
    }
}
