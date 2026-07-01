<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DoiTuyen;

class DoiTuyenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $doiTuyens = [
            [
                'id' => 1,
                'ten_doi' => 'Rồng Lửa Esports',
                'ten_viet_tat' => 'RLE',
                'logo' => 'https://api.placeholder.com/teams/rle.png',
                'anh_bia' => null,
                'mo_ta' => 'Chiến đội Rồng Lửa đầy nhiệt huyết và sức mạnh bùng nổ.',
                'diem_so' => 15,
                'nguoi_quan_ly_id' => 6,
                'email' => 'contact@ronglua.vn',
                'so_dien_thoai' => '0981122334'
            ],
            [
                'id' => 2,
                'ten_doi' => 'Bão Táp Gaming',
                'ten_viet_tat' => 'BTG',
                'logo' => 'https://api.placeholder.com/teams/btg.png',
                'anh_bia' => null,
                'mo_ta' => 'Cuốn phăng mọi đối thủ cản đường như một cơn bão.',
                'diem_so' => 12,
                'nguoi_quan_ly_id' => 7,
                'email' => 'contact@baotap.vn',
                'so_dien_thoai' => '0982233445'
            ],
            [
                'id' => 3,
                'ten_doi' => 'Phượng Hoàng Việt',
                'ten_viet_tat' => 'PHV',
                'logo' => 'https://api.placeholder.com/teams/phv.png',
                'anh_bia' => null,
                'mo_ta' => 'Tượng trưng cho sự tái sinh mạnh mẽ từ đống tro tàn.',
                'diem_so' => 9,
                'nguoi_quan_ly_id' => 8,
                'email' => 'contact@phuonghoang.vn',
                'so_dien_thoai' => '0983344556'
            ],
            [
                'id' => 4,
                'ten_doi' => 'Hắc Hổ Esports',
                'ten_viet_tat' => 'HHE',
                'logo' => 'https://api.placeholder.com/teams/hhe.png',
                'anh_bia' => null,
                'mo_ta' => 'Mãnh hổ bóng đêm với lối chơi ẩn hiện, bất ngờ.',
                'diem_so' => 9,
                'nguoi_quan_ly_id' => 9,
                'email' => 'contact@hacho.vn',
                'so_dien_thoai' => '0984455667'
            ],
            [
                'id' => 5,
                'ten_doi' => 'Thần Sấm Esports',
                'ten_viet_tat' => 'TSE',
                'logo' => 'https://api.placeholder.com/teams/tse.png',
                'anh_bia' => null,
                'mo_ta' => 'Sức mạnh sấm sét rung chuyển đấu trường.',
                'diem_so' => 6,
                'nguoi_quan_ly_id' => 10,
                'email' => 'contact@thansam.vn',
                'so_dien_thoai' => '0985566778'
            ],
            [
                'id' => 6,
                'ten_doi' => 'Thủy Quái Gaming',
                'ten_viet_tat' => 'TQG',
                'logo' => 'https://api.placeholder.com/teams/tqg.png',
                'anh_bia' => null,
                'mo_ta' => 'Thống trị biển cả, nhấn chìm mọi chiến đội đối thủ.',
                'diem_so' => 6,
                'nguoi_quan_ly_id' => 11,
                'email' => 'contact@thuyquai.vn',
                'so_dien_thoai' => '0986677889'
            ],
            [
                'id' => 7,
                'ten_doi' => 'Chiến Binh Đất Việt',
                'ten_viet_tat' => 'CBV',
                'logo' => 'https://api.placeholder.com/teams/cbv.png',
                'anh_bia' => null,
                'mo_ta' => 'Lòng quả cảm và tinh thần đồng đội sắt son của người Việt.',
                'diem_so' => 3,
                'nguoi_quan_ly_id' => 12,
                'email' => 'contact@chienbinh.vn',
                'so_dien_thoai' => '0987788990'
            ],
            [
                'id' => 8,
                'ten_doi' => 'Quỷ Vương Esports',
                'ten_viet_tat' => 'QVE',
                'logo' => 'https://api.placeholder.com/teams/qve.png',
                'anh_bia' => null,
                'mo_ta' => 'Lối chơi tàn nhẫn, áp đảo toàn diện đối thủ.',
                'diem_so' => 3,
                'nguoi_quan_ly_id' => 13,
                'email' => 'contact@quyvuong.vn',
                'so_dien_thoai' => '0988899001'
            ],
            [
                'id' => 9,
                'ten_doi' => 'Sao Băng Gaming',
                'ten_viet_tat' => 'SBG',
                'logo' => 'https://api.placeholder.com/teams/sbg.png',
                'anh_bia' => null,
                'mo_ta' => 'Vụt sáng trên bầu trời Esports với những tài năng trẻ.',
                'diem_so' => 0,
                'nguoi_quan_ly_id' => 14,
                'email' => 'contact@saobang.vn',
                'so_dien_thoai' => '0989900112'
            ],
            [
                'id' => 10,
                'ten_doi' => 'Phong Vân Esports',
                'ten_viet_tat' => 'PVE',
                'logo' => 'https://api.placeholder.com/teams/pve.png',
                'anh_bia' => null,
                'mo_ta' => 'Phong vân biến ảo, chiến thuật đa dạng vô lường.',
                'diem_so' => 0,
                'nguoi_quan_ly_id' => 15,
                'email' => 'contact@phongvan.vn',
                'so_dien_thoai' => '0980011223'
            ]
        ];

        foreach ($doiTuyens as $dt) {
            DoiTuyen::create($dt);
        }
    }
}
