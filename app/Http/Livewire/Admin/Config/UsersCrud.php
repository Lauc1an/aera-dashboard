<?php

namespace App\Http\Livewire\Admin\Config;

use Livewire\Component;

class UsersCrud extends Component
{
    public function render()
    {
        return view('livewire.admin.config.users-crud')->layout('layouts.admin', ['title' => 'Usuarios']);
    }
}
