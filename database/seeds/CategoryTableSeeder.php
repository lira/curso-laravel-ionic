<?php

use Illuminate\Database\Seeder;
use Lira\Course\Delivery\Models\Category;
use Lira\Course\Delivery\Models\Product;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class, 10)->create()->each(function ($category) {
            for ($i = 0; $i <= 5; $i++) {
                $category->products()->save(
                    factory(Product::class)->make()
                );
            }
        });
    }
}
