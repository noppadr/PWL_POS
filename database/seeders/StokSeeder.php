<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class StokSeeder extends Seeder
{
    /**
     * Jalankan database seeder.
     */
    public function run(): void
    {
        DB::table('t_stok')->insert([
            // Supplier 1 - Elektronik
            ['barang_id' => 1, 'user_id' => 1, 'stok_tanggal' => Carbon::now(), 'stok_jumlah' => 50, 'created_at' => Carbon::now()],
            ['barang_id' => 2, 'user_id' => 1, 'stok_tanggal' => Carbon::now(), 'stok_jumlah' => 40, 'created_at' => Carbon::now()],
            ['barang_id' => 3, 'user_id' => 1, 'stok_tanggal' => Carbon::now(), 'stok_jumlah' => 30, 'created_at' => Carbon::now()],
            ['barang_id' => 4, 'user_id' => 1, 'stok_tanggal' => Carbon::now(), 'stok_jumlah' => 40, 'created_at' => Carbon::now()],
            ['barang_id' => 5, 'user_id' => 1, 'stok_tanggal' => Carbon::now(), 'stok_jumlah' => 50, 'created_at' => Carbon::now()],

            // Supplier 2 - Pakaian
            ['barang_id' => 6, 'user_id' => 2, 'stok_tanggal' => Carbon::now(), 'stok_jumlah' => 80, 'created_at' => Carbon::now()],
            ['barang_id' => 7, 'user_id' => 2, 'stok_tanggal' => Carbon::now(), 'stok_jumlah' => 60, 'created_at' => Carbon::now()],
            ['barang_id' => 8, 'user_id' => 2, 'stok_tanggal' => Carbon::now(), 'stok_jumlah' => 40, 'created_at' => Carbon::now()],
            ['barang_id' => 9, 'user_id' => 2, 'stok_tanggal' => Carbon::now(), 'stok_jumlah' => 50, 'created_at' => Carbon::now()],
            ['barang_id' => 10, 'user_id' => 2, 'stok_tanggal' => Carbon::now(), 'stok_jumlah' => 100, 'created_at' => Carbon::now()],

            // Supplier 3 - Makanan dan Alat Tulis
            ['barang_id' => 11, 'user_id' => 3, 'stok_tanggal' => Carbon::now(), 'stok_jumlah' => 70, 'created_at' => Carbon::now()],
            ['barang_id' => 12, 'user_id' => 3, 'stok_tanggal' => Carbon::now(), 'stok_jumlah' => 50, 'created_at' => Carbon::now()],
            ['barang_id' => 13, 'user_id' => 3, 'stok_tanggal' => Carbon::now(), 'stok_jumlah' => 30, 'created_at' => Carbon::now()],
            ['barang_id' => 14, 'user_id' => 3, 'stok_tanggal' => Carbon::now(), 'stok_jumlah' => 60, 'created_at' => Carbon::now()],
            ['barang_id' => 15, 'user_id' => 3, 'stok_tanggal' => Carbon::now(), 'stok_jumlah' => 20, 'created_at' => Carbon::now()],
        ]);
    }
}
