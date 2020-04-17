<?php

use Illuminate\Database\Seeder;
use App\Task;


class TasksTableSeeder extends Seeder
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
          'title' => 'task1'
]);
$task->save();
$task = new Task([
          'title' => 'task2'
]);
$task->save();$task = new Task([
          'title' => 'task3'
]);
$task->save();$task = new Task([
          'title' => 'task4'
]);
$task->save();$task = new Task([
          'title' => 'task5'
]);
$task->save();
    }
}
