<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;
use App\Models\User;
use App\Models\Project;

class TaskSeeder extends Seeder
{
    public function run()
    {
        $user1 = User::where('email', 'john@example.com')->first();
        $user2 = User::where('email', 'jane@example.com')->first();

        $project1 = Project::where('name', 'Project Alpha')->first();
        $project2 = Project::where('name', 'Project Beta')->first();

        Task::create([
            'title' => 'Task 1 for Alpha',
            'description' => 'Description for Task 1',
            'user_id' => $user1->id,
            'project_id' => $project1->id,
        ]);

        Task::create([
            'title' => 'Task 2 for Beta',
            'description' => 'Description for Task 2',
            'user_id' => $user2->id,
            'project_id' => $project2->id,
        ]);

        Task::create([
            'title' => 'Task 3 for Beta',
            'description' => 'Description for Task 3',
            'user_id' => $user2->id,
            'project_id' => $project2->id,
        ]);
    }
}
