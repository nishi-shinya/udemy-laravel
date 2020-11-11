<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VacancyLevel extends Model
{
    private $level;
    public $mark;
    public $slug;
    
    
    public function __construct($level)
    {
        $this->level = $level;
    }
    
    public function mark ()
    {
        $marks = [
            'empty' => '×',
            'fee' => '△',
            'enough' => '〇'
        ];
        $slug = $this->slug();
        assert(isset($marks[$slug]), new \DomainException('invalid slug value.'));
        
        return $marks[$slug];
    }
    
    public function slug ()
    {
        if ($this->level === 0) {
            $slug = 'empty';
        } else if ($this->level < 5) {
            $slug = 'fee';
        } else {
            $slug = 'enough';
        }
        return $slug;
    }
}
