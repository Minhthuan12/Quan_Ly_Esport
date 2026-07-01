<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TranDau;

class TranDauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $matches = [
            // Tournament 1 (giai_dau_id: 1) - 15 Matches
            [
                'id' => 1,
                'giai_dau_id' => 1,
                'doi_1_id' => 1,
                'doi_2_id' => 2,
                'thoi_gian' => '2026-06-01 17:00:00',
                'ti_so' => '2 - 1',
                'trang_thai' => 'da_dau',
                'doi_thang_id' => 1,
                'dia_diem' => 'GG Stadium Quận 7',
                'vong_dau' => 'Vòng bảng - Tuần 1',
                'series' => 'BO3'
            ],
            [
                'id' => 2,
                'giai_dau_id' => 1,
                'doi_1_id' => 3,
                'doi_2_id' => 4,
                'thoi_gian' => '2026-06-01 20:00:00',
                'ti_so' => '2 - 0',
                'trang_thai' => 'da_dau',
                'doi_thang_id' => 3,
                'dia_diem' => 'GG Stadium Quận 7',
                'vong_dau' => 'Vòng bảng - Tuần 1',
                'series' => 'BO3'
            ],
            [
                'id' => 3,
                'giai_dau_id' => 1,
                'doi_1_id' => 5,
                'doi_2_id' => 6,
                'thoi_gian' => '2026-06-02 17:00:00',
                'ti_so' => '1 - 2',
                'trang_thai' => 'da_dau',
                'doi_thang_id' => 6,
                'dia_diem' => 'GG Stadium Quận 7',
                'vong_dau' => 'Vòng bảng - Tuần 1',
                'series' => 'BO3'
            ],
            [
                'id' => 4,
                'giai_dau_id' => 1,
                'doi_1_id' => 7,
                'doi_2_id' => 8,
                'thoi_gian' => '2026-06-02 20:00:00',
                'ti_so' => '0 - 2',
                'trang_thai' => 'da_dau',
                'doi_thang_id' => 8,
                'dia_diem' => 'GG Stadium Quận 7',
                'vong_dau' => 'Vòng bảng - Tuần 1',
                'series' => 'BO3'
            ],
            [
                'id' => 5,
                'giai_dau_id' => 1,
                'doi_1_id' => 1,
                'doi_2_id' => 3,
                'thoi_gian' => '2026-06-08 17:00:00',
                'ti_so' => '2 - 0',
                'trang_thai' => 'da_dau',
                'doi_thang_id' => 1,
                'dia_diem' => 'GG Stadium Quận 7',
                'vong_dau' => 'Vòng bảng - Tuần 2',
                'series' => 'BO3'
            ],
            [
                'id' => 6,
                'giai_dau_id' => 1,
                'doi_1_id' => 2,
                'doi_2_id' => 4,
                'thoi_gian' => '2026-06-08 20:00:00',
                'ti_so' => '2 - 1',
                'trang_thai' => 'da_dau',
                'doi_thang_id' => 2,
                'dia_diem' => 'GG Stadium Quận 7',
                'vong_dau' => 'Vòng bảng - Tuần 2',
                'series' => 'BO3'
            ],
            [
                'id' => 7,
                'giai_dau_id' => 1,
                'doi_1_id' => 5,
                'doi_2_id' => 7,
                'thoi_gian' => '2026-06-09 17:00:00',
                'ti_so' => '1 - 2',
                'trang_thai' => 'da_dau',
                'doi_thang_id' => 7,
                'dia_diem' => 'GG Stadium Quận 7',
                'vong_dau' => 'Vòng bảng - Tuần 2',
                'series' => 'BO3'
            ],
            [
                'id' => 8,
                'giai_dau_id' => 1,
                'doi_1_id' => 6,
                'doi_2_id' => 8,
                'thoi_gian' => '2026-06-09 20:00:00',
                'ti_so' => '2 - 0',
                'trang_thai' => 'da_dau',
                'doi_thang_id' => 6,
                'dia_diem' => 'GG Stadium Quận 7',
                'vong_dau' => 'Vòng bảng - Tuần 2',
                'series' => 'BO3'
            ],
            [
                'id' => 9,
                'giai_dau_id' => 1,
                'doi_1_id' => 1,
                'doi_2_id' => 5,
                'thoi_gian' => '2026-06-15 17:00:00',
                'ti_so' => '2 - 1',
                'trang_thai' => 'da_dau',
                'doi_thang_id' => 1,
                'dia_diem' => 'GG Stadium Quận 7',
                'vong_dau' => 'Vòng bảng - Tuần 3',
                'series' => 'BO3'
            ],
            [
                'id' => 10,
                'giai_dau_id' => 1,
                'doi_1_id' => 2,
                'doi_2_id' => 6,
                'thoi_gian' => '2026-06-15 20:00:00',
                'ti_so' => '2 - 0',
                'trang_thai' => 'da_dau',
                'doi_thang_id' => 2,
                'dia_diem' => 'GG Stadium Quận 7',
                'vong_dau' => 'Vòng bảng - Tuần 3',
                'series' => 'BO3'
            ],
            // Active match (dang_dau)
            [
                'id' => 11,
                'giai_dau_id' => 1,
                'doi_1_id' => 1,
                'doi_2_id' => 7,
                'thoi_gian' => '2026-07-01 17:00:00',
                'ti_so' => '1 - 0',
                'trang_thai' => 'dang_dau',
                'doi_thang_id' => null,
                'dia_diem' => 'GG Stadium Quận 7',
                'vong_dau' => 'Vòng bảng - Tuần 4',
                'series' => 'BO3'
            ],
            // Future matches (sap_dau)
            [
                'id' => 12,
                'giai_dau_id' => 1,
                'doi_1_id' => 2,
                'doi_2_id' => 8,
                'thoi_gian' => '2026-07-02 17:00:00',
                'ti_so' => '0 - 0',
                'trang_thai' => 'sap_dau',
                'doi_thang_id' => null,
                'dia_diem' => 'GG Stadium Quận 7',
                'vong_dau' => 'Vòng bảng - Tuần 4',
                'series' => 'BO3'
            ],
            [
                'id' => 13,
                'giai_dau_id' => 1,
                'doi_1_id' => 3,
                'doi_2_id' => 5,
                'thoi_gian' => '2026-07-02 20:00:00',
                'ti_so' => '0 - 0',
                'trang_thai' => 'sap_dau',
                'doi_thang_id' => null,
                'dia_diem' => 'GG Stadium Quận 7',
                'vong_dau' => 'Vòng bảng - Tuần 4',
                'series' => 'BO3'
            ],
            [
                'id' => 14,
                'giai_dau_id' => 1,
                'doi_1_id' => 4,
                'doi_2_id' => 6,
                'thoi_gian' => '2026-07-03 17:00:00',
                'ti_so' => '0 - 0',
                'trang_thai' => 'sap_dau',
                'doi_thang_id' => null,
                'dia_diem' => 'GG Stadium Quận 7',
                'vong_dau' => 'Vòng bảng - Tuần 4',
                'series' => 'BO3'
            ],
            [
                'id' => 15,
                'giai_dau_id' => 1,
                'doi_1_id' => 1,
                'doi_2_id' => 8,
                'thoi_gian' => '2026-08-10 19:00:00',
                'ti_so' => '0 - 0',
                'trang_thai' => 'sap_dau',
                'doi_thang_id' => null,
                'dia_diem' => 'Nhà thi đấu Phú Thọ',
                'vong_dau' => 'Chung Kết Tổng',
                'series' => 'BO5'
            ],

            // Tournament 2 (giai_dau_id: 2) - 5 Matches (sap_dau)
            [
                'id' => 16,
                'giai_dau_id' => 2,
                'doi_1_id' => 1,
                'doi_2_id' => 2,
                'thoi_gian' => '2026-08-16 18:00:00',
                'ti_so' => '0 - 0',
                'trang_thai' => 'sap_dau',
                'doi_thang_id' => null,
                'dia_diem' => 'Online',
                'vong_dau' => 'Vòng bảng - Nhóm A',
                'series' => 'BO3'
            ],
            [
                'id' => 17,
                'giai_dau_id' => 2,
                'doi_1_id' => 3,
                'doi_2_id' => 4,
                'thoi_gian' => '2026-08-17 18:00:00',
                'ti_so' => '0 - 0',
                'trang_thai' => 'sap_dau',
                'doi_thang_id' => null,
                'dia_diem' => 'Online',
                'vong_dau' => 'Vòng bảng - Nhóm A',
                'series' => 'BO3'
            ],
            [
                'id' => 18,
                'giai_dau_id' => 2,
                'doi_1_id' => 5,
                'doi_2_id' => 6,
                'thoi_gian' => '2026-08-18 18:00:00',
                'ti_so' => '0 - 0',
                'trang_thai' => 'sap_dau',
                'doi_thang_id' => null,
                'dia_diem' => 'Online',
                'vong_dau' => 'Vòng bảng - Nhóm B',
                'series' => 'BO3'
            ],
            [
                'id' => 19,
                'giai_dau_id' => 2,
                'doi_1_id' => 9,
                'doi_2_id' => 10,
                'thoi_gian' => '2026-08-19 18:00:00',
                'ti_so' => '0 - 0',
                'trang_thai' => 'sap_dau',
                'doi_thang_id' => null,
                'dia_diem' => 'Online',
                'vong_dau' => 'Vòng bảng - Nhóm B',
                'series' => 'BO3'
            ],
            [
                'id' => 20,
                'giai_dau_id' => 2,
                'doi_1_id' => 1,
                'doi_2_id' => 3,
                'thoi_gian' => '2026-08-25 18:00:00',
                'ti_so' => '0 - 0',
                'trang_thai' => 'sap_dau',
                'doi_thang_id' => null,
                'dia_diem' => 'Online',
                'vong_dau' => 'Vòng bảng - Nhóm A',
                'series' => 'BO3'
            ],

            // Tournament 3 (giai_dau_id: 3) - 5 Matches (da_dau)
            [
                'id' => 21,
                'giai_dau_id' => 3,
                'doi_1_id' => 1,
                'doi_2_id' => 2,
                'thoi_gian' => '2026-05-02 19:00:00',
                'ti_so' => '2 - 0',
                'trang_thai' => 'da_dau',
                'doi_thang_id' => 1,
                'dia_diem' => 'Vikings Arena',
                'vong_dau' => 'Vòng bảng - Nhánh thắng',
                'series' => 'BO3'
            ],
            [
                'id' => 22,
                'giai_dau_id' => 3,
                'doi_1_id' => 5,
                'doi_2_id' => 6,
                'thoi_gian' => '2026-05-03 19:00:00',
                'ti_so' => '1 - 2',
                'trang_thai' => 'da_dau',
                'doi_thang_id' => 6,
                'dia_diem' => 'Vikings Arena',
                'vong_dau' => 'Vòng bảng - Nhánh thắng',
                'series' => 'BO3'
            ],
            [
                'id' => 23,
                'giai_dau_id' => 3,
                'doi_1_id' => 7,
                'doi_2_id' => 8,
                'thoi_gian' => '2026-05-04 19:00:00',
                'ti_so' => '2 - 1',
                'trang_thai' => 'da_dau',
                'doi_thang_id' => 7,
                'dia_diem' => 'Vikings Arena',
                'vong_dau' => 'Vòng bảng - Nhánh thua',
                'series' => 'BO3'
            ],
            [
                'id' => 24,
                'giai_dau_id' => 3,
                'doi_1_id' => 9,
                'doi_2_id' => 10,
                'thoi_gian' => '2026-05-05 19:00:00',
                'ti_so' => '0 - 2',
                'trang_thai' => 'da_dau',
                'doi_thang_id' => 10,
                'dia_diem' => 'Vikings Arena',
                'vong_dau' => 'Vòng bảng - Nhánh thua',
                'series' => 'BO3'
            ],
            [
                'id' => 25,
                'giai_dau_id' => 3,
                'doi_1_id' => 1,
                'doi_2_id' => 6,
                'thoi_gian' => '2026-05-20 18:00:00',
                'ti_so' => '3 - 1',
                'trang_thai' => 'da_dau',
                'doi_thang_id' => 1,
                'dia_diem' => 'Vikings Arena',
                'vong_dau' => 'Chung Kết Tổng',
                'series' => 'BO5'
            ],

            // Tournament 5 (giai_dau_id: 5) - 5 Matches (dang_dien_ra)
            [
                'id' => 26,
                'giai_dau_id' => 5,
                'doi_1_id' => 1,
                'doi_2_id' => 2,
                'thoi_gian' => '2026-06-20 15:00:00',
                'ti_so' => '1 - 1',
                'trang_thai' => 'da_dau',
                'doi_thang_id' => null,
                'dia_diem' => 'Kingdom Corporation',
                'vong_dau' => 'Trận đấu vòng tròn số 1',
                'series' => 'BO1'
            ],
            [
                'id' => 27,
                'giai_dau_id' => 5,
                'doi_1_id' => 3,
                'doi_2_id' => 4,
                'thoi_gian' => '2026-06-21 15:00:00',
                'ti_so' => '1 - 0',
                'trang_thai' => 'da_dau',
                'doi_thang_id' => 3,
                'dia_diem' => 'Kingdom Corporation',
                'vong_dau' => 'Trận đấu vòng tròn số 2',
                'series' => 'BO1'
            ],
            [
                'id' => 28,
                'giai_dau_id' => 5,
                'doi_1_id' => 7,
                'doi_2_id' => 8,
                'thoi_gian' => '2026-07-01 15:00:00',
                'ti_so' => '0 - 0',
                'trang_thai' => 'dang_dau',
                'doi_thang_id' => null,
                'dia_diem' => 'Kingdom Corporation',
                'vong_dau' => 'Trận đấu vòng tròn số 3',
                'series' => 'BO1'
            ],
            [
                'id' => 29,
                'giai_dau_id' => 5,
                'doi_1_id' => 9,
                'doi_2_id' => 10,
                'thoi_gian' => '2026-07-02 15:00:00',
                'ti_so' => '0 - 0',
                'trang_thai' => 'sap_dau',
                'doi_thang_id' => null,
                'dia_diem' => 'Kingdom Corporation',
                'vong_dau' => 'Trận đấu vòng tròn số 4',
                'series' => 'BO1'
            ],
            [
                'id' => 30,
                'giai_dau_id' => 5,
                'doi_1_id' => 1,
                'doi_2_id' => 3,
                'thoi_gian' => '2026-07-03 15:00:00',
                'ti_so' => '0 - 0',
                'trang_thai' => 'sap_dau',
                'doi_thang_id' => null,
                'dia_diem' => 'Kingdom Corporation',
                'vong_dau' => 'Trận đấu vòng tròn số 5',
                'series' => 'BO1'
            ]
        ];

        foreach ($matches as $match) {
            TranDau::create($match);
        }
    }
}
