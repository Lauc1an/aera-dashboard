<?php

namespace App\Http\Livewire\Admin\Config;

use Livewire\Component;

class Admins extends Component
{
    public function render()
    {
        return view('livewire.admin.config.admins')->layout('layouts.admin', ['title' => 'Administradores']);
    }
}
