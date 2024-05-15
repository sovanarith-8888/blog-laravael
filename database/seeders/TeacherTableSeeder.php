<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teacher::factory()->count(10)->create();
        DB::table("teachers")->insert([

        ]);
    }
}
