<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Menu;

class menuseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Menu = Menu::create([
            'menuname' => 'nasi uduk',
            'price' => '70000',
            'image' => ' '
        ]);
    }
}
