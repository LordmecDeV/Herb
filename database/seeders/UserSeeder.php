<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'name'     => 'Johnny almeida felisbino',
                    'email'    => 'johnny.almeida@admin.com.br',
                    'password' => 'narutobi1801',
                    'cargo' => 'Administrador'
                ],
            ]
        );
    }
}