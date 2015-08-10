<?php


class TasksSeeder extends Seeder
{

    public function run()
    {

for($i=0;$i<=20;$i++){
    Tasks::create([
            'id' => $i+1,
            'title' => 'Задача '.$i,
            'complete' => rand(0,1) == 1,
            ]);
}
        
    }
}
