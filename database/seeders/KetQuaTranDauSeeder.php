<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KetQuaTranDau;

class KetQuaTranDauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $results = [
            ['tran_dau_id' => 1, 'doi_thang_id' => 1, 'ti_so_doi_1' => 2, 'ti_so_doi_2' => 1, 'mo_ta' => 'Rồng Lửa thắng kịch tính ở ván 3.'],
            ['tran_dau_id' => 2, 'doi_thang_id' => 3, 'ti_so_doi_1' => 2, 'ti_so_doi_2' => 0, 'mo_ta' => 'Phượng Hoàng Việt áp đảo hoàn toàn.'],
            ['tran_dau_id' => 3, 'doi_thang_id' => 6, 'ti_so_doi_1' => 1, 'ti_so_doi_2' => 2, 'mo_ta' => 'Thủy Quái lội ngược dòng xuất sắc.'],
            ['tran_dau_id' => 4, 'doi_thang_id' => 8, 'ti_so_doi_1' => 0, 'ti_so_doi_2' => 2, 'mo_ta' => 'Quỷ Vương hủy diệt đối thủ nhanh gọn.'],
            ['tran_dau_id' => 5, 'doi_thang_id' => 1, 'ti_so_doi_1' => 2, 'ti_so_doi_2' => 0, 'mo_ta' => 'Rồng Lửa thể hiện bản lĩnh nhà vua.'],
            ['tran_dau_id' => 6, 'doi_thang_id' => 2, 'ti_so_doi_1' => 2, 'ti_so_doi_2' => 1, 'mo_ta' => 'Bão Táp thắng sát nút ở ván quyết định.'],
            ['tran_dau_id' => 7, 'doi_thang_id' => 7, 'ti_so_doi_1' => 1, 'ti_so_doi_2' => 2, 'mo_ta' => 'Chiến Binh Đất Việt chiến thắng bất ngờ.'],
            ['tran_dau_id' => 8, 'doi_thang_id' => 6, 'ti_so_doi_1' => 2, 'ti_so_doi_2' => 0, 'mo_ta' => 'Thủy Quái củng cố ngôi vị đầu bảng.'],
            ['tran_dau_id' => 9, 'doi_thang_id' => 1, 'ti_so_doi_1' => 2, 'ti_so_doi_2' => 1, 'mo_ta' => 'Rồng Lửa vượt qua thử thách khó khăn.'],
            ['tran_dau_id' => 10, 'doi_thang_id' => 2, 'ti_so_doi_1' => 2, 'ti_so_doi_2' => 0, 'mo_ta' => 'Bão Táp thắng nhẹ nhàng 2 ván trắng.'],
            
            ['tran_dau_id' => 21, 'doi_thang_id' => 1, 'ti_so_doi_1' => 2, 'ti_so_doi_2' => 0, 'mo_ta' => 'Chiến thắng dễ dàng cho Rồng Lửa.'],
            ['tran_dau_id' => 22, 'doi_thang_id' => 6, 'ti_so_doi_1' => 1, 'ti_so_doi_2' => 2, 'mo_ta' => 'Thủy Quái chiến thắng quả cảm.'],
            ['tran_dau_id' => 23, 'doi_thang_id' => 7, 'ti_so_doi_1' => 2, 'ti_so_doi_2' => 1, 'mo_ta' => 'Chiến Binh Đất Việt tỏa sáng đúng lúc.'],
            ['tran_dau_id' => 24, 'doi_thang_id' => 10, 'ti_so_doi_1' => 0, 'ti_so_doi_2' => 2, 'mo_ta' => 'Phong Vân áp đảo hoàn toàn.'],
            ['tran_dau_id' => 25, 'doi_thang_id' => 1, 'ti_so_doi_1' => 3, 'ti_so_doi_2' => 1, 'mo_ta' => 'Chung Kết kịch tính, Rồng Lửa nâng cúp.'],
            
            ['tran_dau_id' => 26, 'doi_thang_id' => null, 'ti_so_doi_1' => 1, 'ti_so_doi_2' => 1, 'mo_ta' => 'Kết quả hòa tính điểm.'],
            ['tran_dau_id' => 27, 'doi_thang_id' => 3, 'ti_so_doi_1' => 1, 'ti_so_doi_2' => 0, 'mo_ta' => 'Phượng Hoàng Việt có trận thắng đầu tiên.']
        ];

        foreach ($results as $res) {
            KetQuaTranDau::create($res);
        }
    }
}
