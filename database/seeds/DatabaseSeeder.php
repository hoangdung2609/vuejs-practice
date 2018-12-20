<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $faker = Faker::create();

        for ($i = 0; $i < 5; $i++) {
            $user = new \App\User();
            $user->name = $faker->name;
            $user->email = $faker->unique()->safeEmail;
            $user->password = bcrypt('123456');
            $user->save();

            for ($j = 0; $j < 5; $j++) {
                \App\Post::create([
                    'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                    'slug' => 'post-' . $i . $j, // slug tạm thời để đơn giản thế này, sau sẽ nâng cấp sử dụng helper để tạo slug từ title
                    'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                    'content' => $faker->text,
                    'user_id' => $user->id,
                    'created_at' => Carbon::now(),
                    'created_at' => Carbon::now(),
                ]);
            }
        }
    }
}
