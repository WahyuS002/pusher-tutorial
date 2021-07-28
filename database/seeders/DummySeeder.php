<?php

namespace Database\Seeders;

use App\Models\{Task, Project};
use Illuminate\Database\Seeder;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create(['name' => 'Dummy Project 1']);
        Task::create(['project_id' => 1, 'body' => 'Dummy task for Project 1']);

        Project::create(['name' => 'Dummy Project 2']);
        Task::create(['project_id' => 2, 'body' => 'Dummy task for Project 2']);
    }
}
