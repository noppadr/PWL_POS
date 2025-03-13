<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('t_penjualan')->insert([
            ['user_id' => 1, 'pembeli' => 'Kevin', 'penjualan_kode' => 'TRX101', 'penjualan_tanggal' => now(), 'created_at' => NOW()],
            ['user_id' => 1, 'pembeli' => 'Bramasta', 'penjualan_kode' => 'TRX102', 'penjualan_tanggal' => now(), 'created_at' => NOW()],
            ['user_id' => 1, 'pembeli' => 'Arvyto', 'penjualan_kode' => 'TRX103', 'penjualan_tanggal' => now(), 'created_at' => NOW()],
            ['user_id' => 2, 'pembeli' => 'Wardhana', 'penjualan_kode' => 'TRX104', 'penjualan_tanggal' => now(), 'created_at' => NOW()],
            ['user_id' => 2, 'pembeli' => 'Nova', 'penjualan_kode' => 'TRX105', 'penjualan_tanggal' => now(), 'created_at' => NOW()],
            ['user_id' => 2, 'pembeli' => 'Diana', 'penjualan_kode' => 'TRX106', 'penjualan_tanggal' => now(), 'created_at' => NOW()],
            ['user_id' => 3, 'pembeli' => 'Ramadhan', 'penjualan_kode' => 'TRX107', 'penjualan_tanggal' => now(), 'created_at' => NOW()],
            ['user_id' => 3, 'pembeli' => 'Toto', 'penjualan_kode' => 'TRX108', 'penjualan_tanggal' => now(), 'created_at' => NOW()],
            ['user_id' => 3, 'pembeli' => 'Nagumo', 'penjualan_kode' => 'TRX109', 'penjualan_tanggal' => now(), 'created_at' => NOW()],
            ['user_id' => 3, 'pembeli' => 'Kacchan', 'penjualan_kode' => 'TRX110', 'penjualan_tanggal' => now(), 'created_at' => NOW()],
        ]);
    }
}
