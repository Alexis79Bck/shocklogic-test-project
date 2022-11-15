<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class Participants extends Component
{
    public function render()
    {
        $participants = User::where('admin','=',false)->get();
        return view('livewire.admin.participants', compact('participants'))->extends('layouts.app')->section('content');
    }
}
