<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	[
	        	'name' => 'Sumsung',
	        	'price' => '10000',
	        	'description' => 'Smart phone with 4GB RAM and much more features',
	        	'category' => 'mobile',
	        	'gallery' => 'https://t4.ftcdn.net/jpg/02/93/70/31/240_F_293703150_PNXpgaIn7vPzguH0x7zHFLDrPM1xS3Ph.jpg'
	        ],
	        [
	        	'name' => 'iPhone 11 Pro',
	        	'price' => '40000',
	        	'description' => 'iPhone 11 Pro with 4GB RAM and much more features',
	        	'category' => 'mobile',
	        	'gallery' => 'https://t3.ftcdn.net/jpg/02/34/19/34/240_F_234193434_MS9TjIhhB6nsJXEXO7TOOnmV2GeKsdR4.jpg'
	        ],
	        [
	        	'name' => 'Redmi Note 8 pro',
	        	'price' => '20000',
	        	'description' => 'Smart Fridge with much more features',
	        	'category' => 'fridge',
	        	'gallery' => 'https://t3.ftcdn.net/jpg/03/62/23/92/240_F_362239242_rhWgNBJLUK8yjPeIJvnEwx0T3TgKHZOz.jpg'
	        ],
	        [
	        	'name' => 'LG Tv',
	        	'price' => '30000',
	        	'description' => 'Smart TV with much more features',
	        	'category' => 'TV',
	        	'gallery' => 'https://t4.ftcdn.net/jpg/01/23/33/35/240_F_123333533_L57e12a294BwNUmapWZq7TkMlCJHRQad.jpg'
	        ],
        ]);
    }
}
