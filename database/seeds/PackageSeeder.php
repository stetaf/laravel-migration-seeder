<?php

use App\Package;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $p = new Package();
            $p->type = $faker->randomElement(['Hotel', 'Residence', 'B&B', 'Apartments']);
            $p->name = $faker->company() . ' ' . $p->type;
            $p->city = $faker->city();
            $p->address = $faker->streetAddress();
            $p->phone = $faker->phoneNumber();
            $p->price = $faker->numberBetween(90, 400);
            $p->breakfast = $faker->numberBetween(0,1);
            $p->image = "https://source.unsplash.com/400x400/?hotel";
            $p->save();
        }
    }
}
