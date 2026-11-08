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

            'admin.houses.index' => [
                ['title' => 'Manajemen Kandang', 'url' => null],
                ['title' => 'Kandang Ayam', 'url' => null],          // halaman aktif, tanpa link
            ],

            'admin.houses.create' => [
                ['title' => 'Manajemen Kandang', 'url' => null],
                ['title' => 'Kandang Ayam', 'url' => route('admin.houses.index')],
                ['title' => 'Tambah Kandang', 'url' => null],
            ],

            'admin.houses.edit' => [
                ['title' => 'Manajemen Kandang', 'url' => null],
                ['title' => 'Kandang Ayam', 'url' => route('admin.houses.index')],
                ['title' => 'Ubah Kandang', 'url' => null],
            ],

            'admin.zones.*' => [
                ['title' => 'Manajemen Kandang Ayam', 'url' => null],
                ['title' => 'Zone Kandang', 'url' => null],
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