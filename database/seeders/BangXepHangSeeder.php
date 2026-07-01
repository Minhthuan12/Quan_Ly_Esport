<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BangXepHang;

class BangXepHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tournament 1: Teams 1 to 8
        $standings1 = [
            ['doi_tuyen_id' => 1, 'hang' => 1, 'thang' => 5, 'thua' => 0, 'he_so' => '+9', 'diem' => 15],
            ['doi_tuyen_id' => 2, 'hang' => 2, 'thang' => 4, 'thua' => 1, 'he_so' => '+6', 'diem' => 12],
            ['doi_tuyen_id' => 3, 'hang' => 3, 'thang' => 3, 'thua' => 2, 'he_so' => '+3', 'diem' => 9],
            ['doi_tuyen_id' => 4, 'hang' => 4, 'thang' => 3, 'thua' => 2, 'he_so' => '+1', 'diem' => 9],
            ['doi_tuyen_id' => 5, 'hang' => 5, 'thang' => 2, 'thua' => 3, 'he_so' => '-2', 'diem' => 6],
            ['doi_tuyen_id' => 6, 'hang' => 6, 'thang' => 2, 'thua' => 3, 'he_so' => '-3', 'diem' => 6],
            ['doi_tuyen_id' => 7, 'hang' => 7, 'thang' => 1, 'thua' => 4, 'he_so' => '-6', 'diem' => 3],
            ['doi_tuyen_id' => 8, 'hang' => 8, 'thang' => 0, 'thua' => 5, 'he_so' => '-8', 'diem' => 0]
        ];

        foreach ($standings1 as $st) {
            BangXepHang::create(array_merge($st, ['giai_dau_id' => 1]));
        }

        // Tournament 3: Teams 1, 2, 5, 6, 7, 8, 9, 10
        $standings3 = [
            ['doi_tuyen_id' => 1, 'hang' => 1, 'thang' => 4, 'thua' => 0, 'he_so' => '+8', 'diem' => 12],
            ['doi_tuyen_id' => 6, 'hang' => 2, 'thang' => 3, 'thua' => 1, 'he_so' => '+5', 'diem' => 9],
            ['doi_tuyen_id' => 2, 'hang' => 3, 'thang' => 2, 'thua' => 2, 'he_so' => '+1', 'diem' => 6],
            ['doi_tuyen_id' => 10, 'hang' => 4, 'thang' => 2, 'thua' => 2, 'he_so' => '0', 'diem' => 6],
            ['doi_tuyen_id' => 7, 'hang' => 5, 'thang' => 1, 'thua' => 3, 'he_so' => '-4', 'diem' => 3],
            ['doi_tuyen_id' => 8, 'hang' => 6, 'thang' => 0, 'thua' => 4, 'he_so' => '-10', 'diem' => 0]
        ];

        foreach ($standings3 as $st) {
            BangXepHang::create(array_merge($st, ['giai_dau_id' => 3]));
        }
    }
}
