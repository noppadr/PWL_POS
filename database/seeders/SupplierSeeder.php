<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_supplier')->insert([
            ['supplier_kode' => 'SPR001', 'supplier_nama' => 'PT. Nusantara', 'created_at' => NOW()],
            ['supplier_kode' => 'SPR002', 'supplier_nama' => 'PT. Otsuka', 'created_at' => NOW()],
            ['supplier_kode' => 'SPR003', 'supplier_nama' => 'UD. Indo', 'created_at' => NOW()], 
        ]);
    }
}
