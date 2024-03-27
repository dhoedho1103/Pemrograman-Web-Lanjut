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
        $data = [
            // 10 penjualan data
            [
                'penjualan_tanggal' => now(),
                'id_user' => 3,
                'pembeli' => 'Ayu',
                'penjualan_kode' => 'P001',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_tanggal' => now(),
                'id_user' => 3,
                'pembeli' => 'Gelis',
                'penjualan_kode' => 'P002',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_tanggal' => now(),
                'id_user' => 3,
                'pembeli' => 'Jojo',
                'penjualan_kode' => 'P003',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_tanggal' => now(),
                'id_user' => 3,
                'pembeli' => 'Pia',
                'penjualan_kode' => 'P004',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_tanggal' => now(),
                'id_user' => 3,
                'pembeli' => 'Gala',
                'penjualan_kode' => 'P005',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_tanggal' => now(),
                'id_user' => 3,
                'pembeli' => 'Moci',
                'penjualan_kode' => 'P006',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_tanggal' => now(),
                'id_user' => 3,
                'pembeli' => 'Rudy',
                'penjualan_kode' => 'P007',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_tanggal' => now(),
                'id_user' => 3,
                'pembeli' => 'Fany',
                'penjualan_kode' => 'P008',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_tanggal' => now(),
                'id_user' => 3,
                'pembeli' => 'leki',
                'penjualan_kode' => 'P009',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_tanggal' => now(),
                'id_user' => 3,
                'pembeli' => 'ferlo',
                'penjualan_kode' => 'PK010',
                'penjualan_tanggal' => now(),
            ],
        ];

        DB::table('m_penjualan')->insert($data);
    }
}