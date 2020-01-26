<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
            'name'=>'Na mira da Sinny',
            'name_slug'=>'na-mira-da-sinny',
            'parent_id'=>null
            ]
        );
        DB::table('categories')->insert([
            [
                'name'=>'Festival de Parintins',
                'name_slug'=>'festival-de-parintins',
                'parent_id'=>null
            ]
        ]);
        DB::table('categories')->insert([
            [
                'name'=>'Caprichoso',
                'name_slug'=>'caprichoso',
                'parent_id'=>2
            ]
        ]);
        DB::table('categories')->insert([
            [
                'name'=>'Garantido',
                'name_slug'=>'garantido',
                'parent_id'=>2
            ]
        ]);
        DB::table('categories')->insert([
            [
                'name'=>'Sobre',
                'name_slug'=>'sobre',
                'parent_id'=>null
            ]
        ]);
        DB::table('categories')->insert([
            [
                'name'=>'Contato',
                'name_slug'=>'contato',
                'parent_id'=>null
            ]
        ]);
        DB::table('users')->insert([
            [
                'name' => 'messias',
                'email' => 'messias.freire@gmail.com',
                'password' => bcrypt('123456789'),
            ]
        ]);
    }
}
