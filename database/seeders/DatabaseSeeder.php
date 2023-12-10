<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $frontend = Category::factory()->create(['name' => 'frontend', 'slug' => 'frontend']);
        $backend = Category::factory()->create(['name' => 'backend', 'slug' => 'backend']);

        $kyaw = User::factory()->create(['name' => 'Kyaw Kyaw', 'username' => 'kyaw']);
        $aung = User::factory()->create(['name' => 'Aung Aung', 'username' => 'aung']);
        Blog::factory(2)->create(['category_id' => $frontend->id, 'user_id' => $kyaw->id]);
        Blog::factory(2)->create(['category_id' => $backend->id, 'user_id' => $aung->id]);
    }
}
