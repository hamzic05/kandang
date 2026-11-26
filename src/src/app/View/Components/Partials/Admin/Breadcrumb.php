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
            //dashboard
            'admin.dashboard.*' => [
                ['title' => 'Dashboard', 'url' => null],
            ],

            //houses

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

            //zones

            'admin.zones.index' => [
                ['title' => 'Manajemen Kandang Ayam', 'url' => null],
                ['title' => 'Zona Kandang', 'url' => null],
            ],

            'admin.zones.create' => [
                ['title' => 'Manajemen Kandang Ayam', 'url' => null],
                ['title' => 'Zona Kandang', 'url' => route('admin.zones.index')],
                ['title' => 'Tambah Zona', 'url' => null],
            ],

            'admin.zones.show' => [
                ['title' => 'Manajemen Kandang Ayam', 'url' => null],
                ['title' => 'Zona Kandang', 'url' => route('admin.zones.index')],
                ['title' => 'Detail Zona Kandang', 'url' => null],
            ],

            //health
            'admin.health.*' => [
                ['title' => 'Kesehatan', 'url' => null],
            ],

            //feed and medicine

            'admin.feed.*' => [
                ['title' => 'Pakan dan Obat', 'url' => null],
                ['title' => 'Pakan', 'url' => null],
            ],

            'admin.medicine.index' => [
                ['title' => 'Pakan dan Obat', 'url' => null],
                ['title' => 'Obat', 'url' => null],
            ],

            'admin.medicine.create' => [
                ['title' => 'Pakan dan Obat', 'url' => null],
                ['title' => 'Obat', 'url' => route('admin.medicine.index')],
                ['title' => 'Tambah obat', 'url' => null],
            ],

            'admin.medicine.edit' => [
                ['title' => 'Pakan dan Obat', 'url' => null],
                ['title' => 'Obat', 'url' => route('admin.medicine.index')],
                ['title' => 'Edit obat', 'url' => null],
            ],

            'admin.medicine.show' => [
                ['title' => 'Pakan dan Obat', 'url' => null],
                ['title' => 'Obat', 'url' => route('admin.medicine.index')],
                ['title' => 'Detail obat', 'url' => null],
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