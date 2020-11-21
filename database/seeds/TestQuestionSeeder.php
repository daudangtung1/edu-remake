<?php

use Illuminate\Database\Seeder;

class TestQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\TestQuestion::class, 20)->create();
    }
}
