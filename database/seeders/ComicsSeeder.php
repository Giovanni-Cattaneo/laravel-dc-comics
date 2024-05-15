<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Http\Controllers\ComicsController;
use App\Models\Comics;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = config('comics.comics');

        foreach ($products as $product) {
            $comic = new Comics();
            $comic->title = $product['title'];
            $comic->thumb = $product['thumb'];
            $comic->series = $product['series'];
            $comic->price = $product['price'];
            $comic->sale_date = $product['sale_date'];
            $comic->description = $product['description'];
            $comic->save();
        }
    }
}
