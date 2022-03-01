<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Muhammad Isa ',
            'username' => 'muhammadisa226',
            'email' => 'muhammadisa226@gmail.com',
            'password' => bcrypt('password')
        ]);
        // User::create([
        //     'name' => 'Faisal Ali M',
        //     'email' => 'faisalalm27@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        User::factory(3)->create();
        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'Web-Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Post::factory(22)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A necessitatibus impedit nulla voluptatem! Rerum fuga accusantium ducimus, autem dolor sunt maiores',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A necessitatibus impedit nulla voluptatem! Rerum fuga accusantium ducimus, autem dolor sunt maiores. Ducimus beatae provident quasi nisi asperiores, sequi modi aperiam id cupiditate fuga autem. Accusantium animi vel numquam rerum exercitationem. Non harum est adipisci perspiciatis debitis ab exercitationem quaerat odit magnam accusamus obcaecati explicabo nihil quia voluptates quibusdam illo porro maiores quisquam sed ratione unde magni, dolorum aperiam! Inventore eligendi esse obcaecati commodi nulla magnam amet! Doloribus maxime repudiandae voluptatum, laboriosam atque officiis mollitia consectetur nesciunt maiores. Laudantium, autem eveniet. Eaque voluptatibus perspiciatis libero quos? Officia ratione exercitationem sunt beatae.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A necessitatibus impedit nulla voluptatem! Rerum fuga accusantium ducimus, autem dolor sunt maiores',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A necessitatibus impedit nulla voluptatem! Rerum fuga accusantium ducimus, autem dolor sunt maiores. Ducimus beatae provident quasi nisi asperiores, sequi modi aperiam id cupiditate fuga autem. Accusantium animi vel numquam rerum exercitationem. Non harum est adipisci perspiciatis debitis ab exercitationem quaerat odit magnam accusamus obcaecati explicabo nihil quia voluptates quibusdam illo porro maiores quisquam sed ratione unde magni, dolorum aperiam! Inventore eligendi esse obcaecati commodi nulla magnam amet! Doloribus maxime repudiandae voluptatum, laboriosam atque officiis mollitia consectetur nesciunt maiores. Laudantium, autem eveniet. Eaque voluptatibus perspiciatis libero quos? Officia ratione exercitationem sunt beatae.',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A necessitatibus impedit nulla voluptatem! Rerum fuga accusantium ducimus, autem dolor sunt maiores',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A necessitatibus impedit nulla voluptatem! Rerum fuga accusantium ducimus, autem dolor sunt maiores. Ducimus beatae provident quasi nisi asperiores, sequi modi aperiam id cupiditate fuga autem. Accusantium animi vel numquam rerum exercitationem. Non harum est adipisci perspiciatis debitis ab exercitationem quaerat odit magnam accusamus obcaecati explicabo nihil quia voluptates quibusdam illo porro maiores quisquam sed ratione unde magni, dolorum aperiam! Inventore eligendi esse obcaecati commodi nulla magnam amet! Doloribus maxime repudiandae voluptatum, laboriosam atque officiis mollitia consectetur nesciunt maiores. Laudantium, autem eveniet. Eaque voluptatibus perspiciatis libero quos? Officia ratione exercitationem sunt beatae.',
        //     'category_id' => 3,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A necessitatibus impedit nulla voluptatem! Rerum fuga accusantium ducimus, autem dolor sunt maiores',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A necessitatibus impedit nulla voluptatem! Rerum fuga accusantium ducimus, autem dolor sunt maiores. Ducimus beatae provident quasi nisi asperiores, sequi modi aperiam id cupiditate fuga autem. Accusantium animi vel numquam rerum exercitationem. Non harum est adipisci perspiciatis debitis ab exercitationem quaerat odit magnam accusamus obcaecati explicabo nihil quia voluptates quibusdam illo porro maiores quisquam sed ratione unde magni, dolorum aperiam! Inventore eligendi esse obcaecati commodi nulla magnam amet! Doloribus maxime repudiandae voluptatum, laboriosam atque officiis mollitia consectetur nesciunt maiores. Laudantium, autem eveniet. Eaque voluptatibus perspiciatis libero quos? Officia ratione exercitationem sunt beatae.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
