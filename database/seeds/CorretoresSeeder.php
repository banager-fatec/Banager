<?php

use Illuminate\Database\Seeder;

class CorretoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 50; $i++) {
            DB::table('corretor')->insert(
                [
                    'nome' => str_random(70),
                    'creci' => str_random(15),
                    'email' => str_random(10) . '@gmail.com',
                    'fone' => str_random(15)
                ]
            );
        }
    }
}
