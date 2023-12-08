<?php

use Illuminate\Database\Seeder;

class JenisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("jenis")->delete();
        DB::table("jenis")->insert([
            "id" => 1,
            "name" => "Pelatihan", "description" => "Deskripsi pelatihan",
            "image" => null, "numsort" => 10, "status" => 1,
            "created_at" => null, "updated_at" => null,
            "created_by" => "seeder", "updated_by" => null
        ]);  
        DB::table("jenis")->insert([
            "id" => 2,
            "name" => "Kunjungan", "description" => "Deskripsi kunjungan",
            "image" => null, "numsort" => 10, "status" => 1,
            "created_at" => null, "updated_at" => null,
            "created_by" => "seeder", "updated_by" => null
        ]);  
        DB::table("jenis")->insert([
            "id" => 3,
            "name" => "Penyuluhan", "description" => "Deskripsi penyuluhan",
            "image" => null, "numsort" => 10, "status" => 1,
            "created_at" => null, "updated_at" => null,
            "created_by" => "seeder", "updated_by" => null
        ]);  
        DB::table("jenis")->insert([
            "id" => 4,
            "name" => "Pengawasan", "description" => "Deskripsi pengawasan",
            "image" => null, "numsort" => 10, "status" => 1,
            "created_at" => null, "updated_at" => null,
            "created_by" => "seeder", "updated_by" => null
        ]);  

    }
}
