<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                "name" => "Sharp",
                "slug" => 'sharp',
                "tagline" => "Sharp",
                "price" => 100,
                "discount" => 0,
                "discount_type" => "percent",
                "image" => "service_1.jpg",
                "thumbnail" => "service_1.jpg",
                "description" => "Sharp",
                "inclusion" => "Sharp",
                "exclusion" => "Sharp",
                "status" => "1",
                "created_at" => now(),
                "updated_at" => now()
            ],

            // Polytron
            [
                "name" => "Polytron",
                "slug" => 'polytron',
                "tagline" => "Polytron",

                "price" => 100,
                "discount" => 0,
                "discount_type" => "percent",
                "image" => "service_2.jpg",
                "thumbnail" => "service_2.jpg",
                "description" => "Polytron",
                "inclusion" => "Polytron",
                "exclusion" => "Polytron",
                "status" => "1",
                "created_at" => now(),
                "updated_at" => now()
            ],

            // Samsung
            [
                "name" => "Samsung",
                "slug" => 'samsung',
                "tagline" => "Samsung",

                "price" => 100,
                "discount" => 0,
                "discount_type" => "percent",
                "image" => "service_3.jpg",
                "thumbnail" => "service_3.jpg",
                "description" => "Samsung",
                "inclusion" => "Samsung",
                "exclusion" => "Samsung",
                "status" => "1",
                "created_at" => now(),
                "updated_at" => now()
            ],

            // Changhong
            [
                "name" => "Changhong",
                "slug" => 'changhong',
                "tagline" => "Changhong",

                "price" => 100,
                "discount" => 0,
                "discount_type" => "percent",
                "image" => "service_4.jpg",
                "thumbnail" => "service_4.jpg",
                "description" => "Changhong",
                "inclusion" => "Changhong",
                "exclusion" => "Changhong",
                "status" => "1",
                "created_at" => now(),
                "updated_at" => now()
            ],

            // LG
            [
                "name" => "LG",
                "slug" => 'lg',
                "tagline" => "LG",

                "price" => 100,
                "discount" => 0,
                "discount_type" => "percent",
                "image" => "service_5.jpg",
                "thumbnail" => "service_5.jpg",
                "description" => "LG",
                "inclusion" => "LG",
                "exclusion" => "LG",
                "status" => "1",
                "created_at" => now(),
                "updated_at" => now()
            ],

            // Toshiba
            [
                "name" => "Toshiba",
                "slug" => 'toshiba',
                "tagline" => "Toshiba",

                "price" => 100,
                "discount" => 0,
                "discount_type" => "percent",
                "image" => "service_6.jpg",
                "thumbnail" => "service_6.jpg",
                "description" => "Toshiba",
                "inclusion" => "Toshiba",
                "exclusion" => "Toshiba",
                "status" => "1",
                "created_at" => now(),
                "updated_at" => now()
            ],

        ]);
    }
}
