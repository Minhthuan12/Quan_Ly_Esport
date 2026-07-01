<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ChucNang;

class ChucNangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $chucNangs = [
            ['id' => 1, 'ten_chuc_nang' => 'Dashboard', 'ma_chuc_nang' => 'view_dashboard'],
            ['id' => 2, 'ten_chuc_nang' => 'Quản lý Game', 'ma_chuc_nang' => 'manage_games'],
            ['id' => 3, 'ten_chuc_nang' => 'Quản lý Giải đấu', 'ma_chuc_nang' => 'manage_tournaments'],
            ['id' => 4, 'ten_chuc_nang' => 'Quản lý Đội tuyển', 'ma_chuc_nang' => 'manage_teams'],
            ['id' => 5, 'ten_chuc_nang' => 'Quản lý Tuyển thủ', 'ma_chuc_nang' => 'manage_players'],
            ['id' => 6, 'ten_chuc_nang' => 'Quản lý Trận đấu', 'ma_chuc_nang' => 'manage_matches'],
            ['id' => 7, 'ten_chuc_nang' => 'Quản lý Bảng xếp hạng', 'ma_chuc_nang' => 'manage_standings'],
            ['id' => 8, 'ten_chuc_nang' => 'Quản lý Bài viết', 'ma_chuc_nang' => 'manage_news'],
            ['id' => 9, 'ten_chuc_nang' => 'Quản lý Khiếu nại', 'ma_chuc_nang' => 'manage_reports'],
            ['id' => 10, 'ten_chuc_nang' => 'Quản lý Người dùng', 'ma_chuc_nang' => 'manage_users']
        ];

        foreach ($chucNangs as $cn) {
            ChucNang::create($cn);
        }
    }
}
