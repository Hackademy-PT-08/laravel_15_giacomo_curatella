<?php

namespace App\Http\Livewire;

use App\Models\Article;
use App\Models\Total;
use Livewire\Component;

class Giacomo extends Component
{

   

    public function render()
    {
        $totals = Total::all();
        $counter = 0;
        foreach($totals as $total){
            $counter ++;
        }
        return view('livewire.giacomo', ['counter'=>$counter]);
    }
}
