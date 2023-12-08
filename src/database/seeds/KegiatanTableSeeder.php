<?php

use Illuminate\Database\Seeder;

class KegiatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Table reset
        DB::table("kegiatan")->delete();
        DB::table("kegiatan")->insert([
            "id" => 1, "jenis_id" => 1,
            "subjenis1_id" => null, "subjenis2_id" => null, 
            "koordinator_id" => null, "statuskegiatan_id" => 1, "progress" => 0,
            "name" => "Pelatihan", "description" => "Deskripsi pelatihan",
            "target_startdt" => null, "target_enddt" => null,
            "actual_startdt" => null, "actual_enddt" => null,
            "image" => null, "numsort" => 10,
            "created_at" => null, "updated_at" => null,
            "created_by" => "seeder", "updated_by" => null
        ]);  

        DB::table("kegiatan")->insert([
            "id" => 2, "jenis_id" => 1,
            "subjenis1_id" => null, "subjenis2_id" => null, 
            "koordinator_id" => null, "statuskegiatan_id" => 1, "progress" => 0,
            "name" => "Kunjungan", "description" => "Deskripsi Kunjungan",
            "target_startdt" => null, "target_enddt" => null,
            "actual_startdt" => null, "actual_enddt" => null,
            "image" => null, "numsort" => 10,
            "created_at" => null, "updated_at" => null,
            "created_by" => "seeder", "updated_by" => null
        ]);  

        DB::table("kegiatan")->insert([
            "id" => 3, "jenis_id" => 1,
            "subjenis1_id" => null, "subjenis2_id" => null, 
            "koordinator_id" => null, "statuskegiatan_id" => 1, "progress" => 0,
            "name" => "Penyuluhan", "description" => "Deskripsi Penyuluhan",
            "target_startdt" => null, "target_enddt" => null,
            "actual_startdt" => null, "actual_enddt" => null,
            "image" => null, "numsort" => 10,
            "created_at" => null, "updated_at" => null,
            "created_by" => "seeder", "updated_by" => null
        ]);  

        DB::table("kegiatan")->insert([
            "id" => 4, "jenis_id" => 1,
            "subjenis1_id" => null, "subjenis2_id" => null, 
            "koordinator_id" => null, "statuskegiatan_id" => 1, "progress" => 0,
            "name" => "Pengawasan", "description" => "Deskripsi Pengawasan",
            "target_startdt" => null, "target_enddt" => null,
            "actual_startdt" => null, "actual_enddt" => null,
            "image" => null, "numsort" => 10,
            "created_at" => null, "updated_at" => null,
            "created_by" => "seeder", "updated_by" => null
        ]);  

    }
}
