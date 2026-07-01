<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GiaiDau;

class GiaiDauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $giaiDaus = [
            [
                'id' => 1,
                'ten_giai' => 'VCS Mùa Hè 2026',
                'game_id' => 1,
                'trang_thai' => 'dang_dien_ra',
                'anh_bia' => 'https://api.placeholder.com/tournaments/vcs.png',
                'ngay_bat_dau' => '2026-06-01',
                'ngay_ket_thuc' => '2026-08-30',
                'giai_thuong' => '1.200.000.000 VND',
                'so_doi_tham_gia' => 8,
                'so_doi_toi_da' => 8,
                'the_thuc' => 'Vòng bảng Double Round Robin (BO3) + Playoffs Double Elimination (BO5).',
                'luat_le' => 'Theo quy chuẩn thi đấu thể thao điện tử chuyên nghiệp của Riot Games.',
                'mo_ta' => 'Giải đấu Liên Minh Huyền Thoại chuyên nghiệp cấp độ cao nhất của Việt Nam.',
                'hinh_thuc' => 'Offline'
            ],
            [
                'id' => 2,
                'ten_giai' => 'Valorant Challengers Vietnam Split 2',
                'game_id' => 2,
                'trang_thai' => 'sap_dien_ra',
                'anh_bia' => 'https://api.placeholder.com/tournaments/vct.png',
                'ngay_bat_dau' => '2026-08-15',
                'ngay_ket_thuc' => '2026-09-20',
                'giai_thuong' => '500.000.000 VND',
                'so_doi_tham_gia' => 8,
                'so_doi_toi_da' => 12,
                'the_thuc' => 'Vòng tròn tính điểm Single Round Robin (BO3) + Playoff BO5.',
                'luat_le' => 'Theo quy tắc VCT Challengers 2026 chính thức.',
                'mo_ta' => 'Nơi các xạ thủ Việt Nam cạnh tranh suất dự Pacific Ascension.',
                'hinh_thuc' => 'Online'
            ],
            [
                'id' => 3,
                'ten_giai' => 'CS2 Vietnam Pro Championship 2026',
                'game_id' => 3,
                'trang_thai' => 'da_ket_thuc',
                'anh_bia' => 'https://api.placeholder.com/tournaments/cs2.png',
                'ngay_bat_dau' => '2026-05-01',
                'ngay_ket_thuc' => '2026-05-25',
                'giai_thuong' => '300.000.000 VND',
                'so_doi_tham_gia' => 8,
                'so_doi_toi_da' => 8,
                'the_thuc' => 'Vòng bảng GSL format + Playoff Single Elimination.',
                'luat_le' => 'Áp dụng bộ luật thi đấu chính thức của Valve và PGL.',
                'mo_ta' => 'Sân chơi đẳng cấp cao nhất dành cho các chiến đội Counter-Strike Việt.',
                'hinh_thuc' => 'Online'
            ],
            [
                'id' => 4,
                'ten_giai' => 'Dota 2 Hanoi Cup 2026',
                'game_id' => 4,
                'trang_thai' => 'sap_dien_ra',
                'anh_bia' => 'https://api.placeholder.com/tournaments/dota2.png',
                'ngay_bat_dau' => '2026-09-10',
                'ngay_ket_thuc' => '2026-09-30',
                'giai_thuong' => '200.000.000 VND',
                'so_doi_tham_gia' => 8,
                'so_doi_toi_da' => 8,
                'the_thuc' => 'Vòng bảng Round Robin + Playoff BO3.',
                'luat_le' => 'Theo luật thi đấu tiêu chuẩn của Valve Corporation.',
                'mo_ta' => 'Cup đấu Dota 2 thường niên quy tụ các đại diện mạnh nhất miền Bắc.',
                'hinh_thuc' => 'Offline'
            ],
            [
                'id' => 5,
                'ten_giai' => 'PUBG Saigon Survivors 2026',
                'game_id' => 5,
                'trang_thai' => 'dang_dien_ra',
                'anh_bia' => 'https://api.placeholder.com/tournaments/pubg.png',
                'ngay_bat_dau' => '2026-06-15',
                'ngay_ket_thuc' => '2026-07-15',
                'giai_thuong' => '400.000.000 VND',
                'so_doi_tham_gia' => 8,
                'so_doi_toi_da' => 16,
                'the_thuc' => 'Thi đấu tính điểm qua 30 trận đấu trên nhiều map.',
                'luat_le' => 'Quy tắc tính điểm chuẩn PGC SUPER toàn cầu.',
                'mo_ta' => 'Cuộc chiến sinh tồn khốc liệt nhất của các tay súng miền Nam.',
                'hinh_thuc' => 'Offline'
            ]
        ];

        foreach ($giaiDaus as $gd) {
            GiaiDau::create($gd);
        }
    }
}
