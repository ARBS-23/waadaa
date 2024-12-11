<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WaadaaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        require_once(__DIR__ . '/seeder-data/brands.php');
        DB::table('brands')->insert($brands ?? []);

        require_once(__DIR__ . '/seeder-data/categories.php');
        DB::table('categories')->insert($categories ?? []);

        require_once(__DIR__ . '/seeder-data/products.php');
        DB::table('products')->insert($products ?? []);

        require_once(__DIR__ . '/seeder-data/category_product.php');
        DB::table('category_product')->insert($category_product ?? []);

        require_once(__DIR__ . '/seeder-data/sku_list.php');
        DB::table('sku_list')->insert($sku_list ?? []);

        require_once(__DIR__ . '/seeder-data/attributes.php');
        DB::table('attributes')->insert($attributes ?? []);

        require_once(__DIR__ . '/seeder-data/attribute_values.php');
        DB::table('attribute_values')->insert($attribute_values ?? []);

        require_once(__DIR__ . '/seeder-data/attribute_value_color_images.php');
        DB::table('attribute_value_color_images')->insert($attribute_value_color_images ?? []);

        require_once(__DIR__ . '/seeder-data/variant_groups.php');
        DB::table('variant_groups')->insert($variant_groups ?? []);

        require_once(__DIR__ . '/seeder-data/variant_prices.php');
        DB::table('variant_prices')->insert($variant_prices ?? []);

        require_once(__DIR__ . '/seeder-data/attribute_category.php');
        DB::table('attribute_category')->insert($attribute_category ?? []);
    }
}
