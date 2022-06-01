<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class Aside extends Component
{
    public $menuTree;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->menuTree = [
            [
                'name' => 'Config.',
                'nav-icon' => 'fas fa-cog',
                'segment' => 'config',
                'submenu' => [
                    [
                        'name' => 'Usuarios',
                        'nav-icon' => 'fas fa-users',
                        'route' => 'admin.config.users',
                        'route-crud' => 'admin.config.users-crud'
                    ],
                    [
                        'name' => 'Administradores',
                        'nav-icon' => 'fas fa-users',
                        'route' => 'admin.config.admins',
                        'route-crud' => 'admin.config.admins-crud'
                    ],
                ]
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.aside');
    }
}
