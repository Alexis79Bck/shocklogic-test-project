<?php

namespace App\Http\Livewire\Admin;

use App\Models\Event;
use Livewire\Component;

class Events extends Component
{
    public function render()
    {
        $events = Event::all();
        return view('livewire.admin.events', compact('events'))->extends('layouts.app')->section('content');
    }
}
