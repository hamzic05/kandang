<?php

namespace App\View\Components\Partials\Admin;

use Illuminate\View\Component;
use Illuminate\View\View;

class Breadcrumb extends Component
{
    public $breadcrumbs;

    public function __construct()
    {
        $menus = [
            'admin.dashboard.*' => [
                ['title' => 'Dashboard', 'url' => null],
            ],

            'admin.houses.*' => [
                ['title' => 'Zone & Kamar Ayam', 'url' => null],
                ['title' => 'Nomor Kamar', 'url' => null],
            ],

            'admin.chickens.*' => [
                ['title' => 'Zone & Kamar Ayam', 'url' => null],
                ['title' => 'Data Ayam', 'url' => null],
            ],

            'admin.zones.*' => [
                ['title' => 'Zone & Kamar Ayam', 'url' => null],
                ['title' => 'Zone Kamar', 'url' => null],
            ],

            'admin.health.*' => [
                ['title' => 'Kesehatan', 'url' => null],
            ],

            'admin.feed.*' => [
                ['title' => 'Pakan dan Obat', 'url' => null],
                ['title' => 'Pakan', 'url' => null],
            ],

            'admin.medicine.*' => [
                ['title' => 'Pakan dan Obat', 'url' => null],
                ['title' => 'Obat', 'url' => null],
            ],

            'admin.vitamin.*' => [
                ['title' => 'Pakan dan Obat', 'url' => null],
                ['title' => 'Vitamin', 'url' => null],
            ],
        ];

        $this->breadcrumbs = [];

        foreach ($menus as $route => $items) {
            if (request()->routeIs($route)) {
                $this->breadcrumbs = $items;
                break;
            }
        }
    }

    public function render(): View
    {
        return view('components.partials.admin.breadcrumb');
    }
}