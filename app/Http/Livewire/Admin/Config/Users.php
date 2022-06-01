<?php

namespace App\Http\Livewire\Admin\Config;

use Livewire\Component;

class Users extends Component
{
    public function render()
    {
        return view('livewire.admin.config.users')->layout('layouts.admin', ['title' => 'Usuarios']);
    }
}
