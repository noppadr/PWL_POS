<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            //suplier 1
            ['kategori_id' => 1, 'barang_kode' => 'ELC001', 'barang_nama' => 'Tablet', 'harga_beli' => 4000000, 'harga_jual' => 6000000, 'created_at' => NOW()],
            ['kategori_id' => 1, 'barang_kode' => 'ELC002', 'barang_nama' => 'Headphone Wireless', 'harga_beli' => 1500000, 'harga_jual' => 2200000, 'created_at' => NOW()],
            ['kategori_id' => 1, 'barang_kode' => 'ELC101', 'barang_nama' => 'Speaker Bluetooth', 'harga_beli' => 800000, 'harga_jual' => 1200000, 'created_at' => NOW()],
            ['kategori_id' => 1, 'barang_kode' => 'ELC102', 'barang_nama' => 'Webcam HD', 'harga_beli' => 500000, 'harga_jual' => 750000, 'created_at' => NOW()],
            ['kategori_id' => 1, 'barang_kode' => 'ELC103', 'barang_nama' => 'Power Bank', 'harga_beli' => 300000, 'harga_jual' => 500000, 'created_at' => NOW()],

            // Supplier 2
            ['kategori_id' => 2, 'barang_kode' => 'FAS006', 'barang_nama' => 'Sweater', 'harga_beli' => 180000, 'harga_jual' => 250000, 'created_at' => NOW()],
            ['kategori_id' => 2, 'barang_kode' => 'FAS007', 'barang_nama' => 'Topi', 'harga_beli' => 100000, 'harga_jual' => 160000, 'created_at' => NOW()],
            ['kategori_id' => 2, 'barang_kode' => 'FAS201', 'barang_nama' => 'Jas', 'harga_beli' => 500000, 'harga_jual' => 750000, 'created_at' => NOW()],
            ['kategori_id' => 2, 'barang_kode' => 'FAS202', 'barang_nama' => 'Tas Ransel', 'harga_beli' => 400000, 'harga_jual' => 600000, 'created_at' => NOW()],
            ['kategori_id' => 2, 'barang_kode' => 'FAS203', 'barang_nama' => 'Sarung Tangan', 'harga_beli' => 120000, 'harga_jual' => 200000, 'created_at' => NOW()],

            // Supplier 3
            ['kategori_id' => 3, 'barang_kode' => 'OFC011', 'barang_nama' => 'Pulpen Gel', 'harga_beli' => 5000, 'harga_jual' => 10000, 'created_at' => NOW()],
            ['kategori_id' => 3, 'barang_kode' => 'OFC012', 'barang_nama' => 'Notebook Hardcover', 'harga_beli' => 25000, 'harga_jual' => 40000, 'created_at' => NOW()],
            ['kategori_id' => 3, 'barang_kode' => 'FNB301', 'barang_nama' => 'Teh Celup 50pcs', 'harga_beli' => 20000, 'harga_jual' => 35000, 'created_at' => NOW()],
            ['kategori_id' => 3, 'barang_kode' => 'FNB302', 'barang_nama' => 'Beras Premium', 'harga_beli' => 60000, 'harga_jual' => 85000, 'created_at' => NOW()],
            ['kategori_id' => 3, 'barang_kode' => 'FNB303', 'barang_nama' => 'Minyak Goreng', 'harga_beli' => 25000, 'harga_jual' => 40000, 'created_at' => NOW()],
        ];

        DB::table('m_barang')->insert($data);
    }
}
