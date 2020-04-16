<?php

use Illuminate\Database\Seeder;
use App\Task;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $task = new Task([
        'title' => 'Quiz do'
        ]);
        $task->save();

        $task = new Task([
        'title' => 'Lab ass'
        ]);
        $task->save();

        $task = new Task([
        'title' => 'Home ass'
        ]);
        $task->save();

        $task = new Task([
        'title' => 'Gym do'
        ]);
        $task->save();


    }
}
