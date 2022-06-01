<?php

namespace App\Http\Livewire\Admin\Config;

use Livewire\Component;

class AdminsCrud extends Component
{
    public function render()
    {
        return view('livewire.admin.config.admins-crud')->layout('layouts.admin', ['title' => 'Administradores']);
    }
}
