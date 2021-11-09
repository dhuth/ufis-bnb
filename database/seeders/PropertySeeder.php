<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;


class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('property')->insert([
            ['title' => 'Heart of Salt Lake City', 'property_type' => 'House', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['title' => 'Glamorous Draper Mansion w/ Pool', 'property_type' => 'House', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['title' => 'Historic Downtown Apartment', 'property_type' => 'Apartment',  'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['title' => 'Charming Salt Lake Valley Bed & Breakfast', 'property_type' => 'Apartment', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['title' => 'Secluded Cabin in Midway, UT', 'property_type' => 'Cabin', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]    
        ]);
        
        DB::table('review')->insert([
            ['property_id'  => 1, 'rating' => 3, 'comment' => ""],
            ['property_id'  => 2, 'rating' => 1, 'comment' => "haunted"],
            ['property_id'  => 2, 'rating' => 1, 'comment' => "gohst would not leave kids alone"],
            ['property_id'  => 2, 'rating' => 5, 'comment' => "Just don't put your feet on the automan, and the Pultrigiest will leave you alone"],
            ['property_id'  => 3, 'rating' => 4, 'comment' => ""],
            ['property_id'  => 3, 'rating' => 3, 'comment' => ""],
            ['property_id'  => 4, 'rating' => 2, 'comment' => ""],
            ['property_id'  => 5, 'rating' => 5, 'comment' => "rustic is an understatement"],
            ['property_id'  => 5, 'rating' => 1, 'comment' => "rustic is an understatement"]
        ]);

    }
}
