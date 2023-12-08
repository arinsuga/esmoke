<?php

use Illuminate\Database\Seeder;

class StatuspelaksanaanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Table reset
        DB::table("statuspelaksanaan")->delete();
        DB::table("statuspelaksanaan")->insert([ "id" => 1, "name" => "Open", "description" => "Open", "image" => null, "numsort" => 10, "status" => 1 ]);  
        DB::table("statuspelaksanaan")->insert([ "id" => 2, "name" => "Close", "description" => "Close", "image" => null, "numsort" => 20, "status" => 1 ]);  
        DB::table("statuspelaksanaan")->insert([ "id" => 3, "name" => "Cancel", "description" => "Cancel", "image" => null, "numsort" => 30, "status" => 1 ]);  
        DB::table("statuspelaksanaan")->insert([ "id" => 4, "name" => "Reject", "description" => "Reject", "image" => null, "numsort" => 40, "status" => 1 ]);  
        DB::table("statuspelaksanaan")->insert([ "id" => 5, "name" => "Pending", "description" => "Pending", "image" => null, "numsort" => 50, "status" => 1 ]);  
    }
}
