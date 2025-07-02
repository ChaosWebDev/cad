<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Dashboard extends Component
{
    public function render()
    {
        dd(DB::connection()->getDatabaseName(), DB::connection()->getConfig('driver'));
        return view('dashboard');
    }
}
