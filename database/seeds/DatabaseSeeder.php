<?php

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
        // $this->call(UserSeeder::class);

        $this->call(adminSeeder::class);
        $this->call(binhluanSeeder::class);
        $this->call(catrucSeeder::class);
        $this->call(chitiethoadonSeeder::class);
        $this->call(giaySeeder::class);
        $this->call(hoadonSeeder::class);
        $this->call(khachhangSeeder::class);
        $this->call(khuyenmaiSeeder::class);
        $this->call(loaigiaySeeder::class);
        $this->call(nhacungcapSeeder::class);
        $this->call(nhanvien_catrucSeeder::class);
        $this->call(nhanvienSeeder::class);
        
    }
}
