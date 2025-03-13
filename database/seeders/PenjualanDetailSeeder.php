<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('t_penjualan_detail')->insert([
            ['penjualan_id' => 1, 'barang_id' => 3, 'harga' => 7100000, 'jumlah' => 2, 'created_at' => NOW()],
            ['penjualan_id' => 1, 'barang_id' => 6, 'harga' => 4800000, 'jumlah' => 1, 'created_at' => NOW()],
            
            ['penjualan_id' => 2, 'barang_id' => 4, 'harga' => 540000, 'jumlah' => 1, 'created_at' => NOW()],
            
            ['penjualan_id' => 3, 'barang_id' => 9, 'harga' => 170000, 'jumlah' => 2, 'created_at' => NOW()],
            ['penjualan_id' => 3, 'barang_id' => 8, 'harga' => 350000, 'jumlah' => 1, 'created_at' => NOW()],
            
            ['penjualan_id' => 4, 'barang_id' => 5, 'harga' => 320000, 'jumlah' => 3, 'created_at' => NOW()],
            
            ['penjualan_id' => 5, 'barang_id' => 2, 'harga' => 760000, 'jumlah' => 1, 'created_at' => NOW()],
            
            ['penjualan_id' => 6, 'barang_id' => 7, 'harga' => 165000, 'jumlah' => 1, 'created_at' => NOW()],
            ['penjualan_id' => 6, 'barang_id' => 11, 'harga' => 215000, 'jumlah' => 2, 'created_at' => NOW()],
            
            ['penjualan_id' => 7, 'barang_id' => 3, 'harga' => 470000, 'jumlah' => 2, 'created_at' => NOW()],
            
            ['penjualan_id' => 8, 'barang_id' => 10, 'harga' => 440000, 'jumlah' => 1, 'created_at' => NOW()],
            ['penjualan_id' => 8, 'barang_id' => 5, 'harga' => 325000, 'jumlah' => 2, 'created_at' => NOW()],
            
            ['penjualan_id' => 9, 'barang_id' => 6, 'harga' => 580000, 'jumlah' => 3, 'created_at' => NOW()],
            
            ['penjualan_id' => 10, 'barang_id' => 4, 'harga' => 330000, 'jumlah' => 2, 'created_at' => NOW()],
            ['penjualan_id' => 10, 'barang_id' => 8, 'harga' => 365000, 'jumlah' => 1, 'created_at' => NOW()],
        ]);
            
    }
}
