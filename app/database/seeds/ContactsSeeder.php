<?php


use Faker\Factory;
class ContactsSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker\Factory::create();
        $faker->addProvider(new Faker\Provider\ru_RU\Person($faker));
        $faker->addProvider(new Faker\Provider\ru_RU\PhoneNumber($faker));
        //$faker->addProvider(new Faker\Provider\Lorem($faker));
        //$faker->addProvider(new Faker\Provider\Internet($faker));
        $faker->addProvider(new Faker\Provider\ru_RU\Text($faker));

        Contact::truncate();

for($i=0;$i<=20;$i++){
    Contact::create([
            'name' => $faker->firstName,
            'surname' => $faker->lastName,
            'phone' => $faker->phoneNumber,
            'email' => $faker->email,
            'description'=> $faker->realText($maxNbChars = 200, $indexSize = 2)

            ]);
}
        
    }
}
