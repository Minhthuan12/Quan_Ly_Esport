<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TuyenThu;

class TuyenThuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ho = ['Nguyễn', 'Trần', 'Lê', 'Phạm', 'Hoàng', 'Huỳnh', 'Phan', 'Vũ', 'Võ', 'Đặng', 'Bùi', 'Đỗ', 'Hồ', 'Ngô'];
        $dem = ['Minh', 'Anh', 'Khánh', 'Duy', 'Hữu', 'Quốc', 'Thanh', 'Văn', 'Tuấn', 'Đức', 'Xuân', 'Hoàng', 'Gia'];
        $ten = ['Tuấn', 'Hải', 'Hùng', 'Nam', 'Việt', 'Khánh', 'Long', 'Đạt', 'Bảo', 'Phong', 'Sơn', 'Dũng', 'Huy', 'Tùng', 'Hoàng', 'Thành', 'Bình', 'Trung', 'Kiên', 'Tấn'];
        
        $nicknames = [
            'Sol', 'Luna', 'Nova', 'Apex', 'Vortex', 'Pulse', 'Fury', 'Rage', 'Zenith', 'Echo',
            'Specter', 'Wraith', 'Phantom', 'Ghost', 'Shade', 'Glimmer', 'Flash', 'Bolt', 'Spark', 'Volt',
            'Titan', 'Colossus', 'Goliath', 'Beast', 'Ogre', 'Gargoyle', 'Viper', 'Cobra', 'Python', 'Basilisk',
            'Phoenix', 'Griffin', 'Wyvern', 'Drake', 'Kraken', 'Leviathan', 'Aegis', 'Bulwark', 'Bastion', 'Shield',
            'Saber', 'Rapier', 'Claymore', 'Halberd', 'Trident', 'Javelin', 'Blaze', 'Cinder', 'Embers', 'Pyre'
        ];

        $vitris = ['Đường Trên', 'Đi Rừng', 'Đường Giữa', 'Xạ Thủ', 'Hỗ Trợ'];

        $count = 0;
        for ($doiId = 1; $doiId <= 10; $doiId++) {
            for ($p = 0; $p < 5; $p++) {
                $hoTen = $ho[array_rand($ho)] . ' ' . $dem[array_rand($dem)] . ' ' . $ten[array_rand($ten)];
                $nickname = $nicknames[$count];
                $viTri = $vitris[$p];
                $soAo = rand(1, 99);
                $birthYear = rand(1998, 2007);
                $birthMonth = str_pad(rand(1, 12), 2, '0', STR_PAD_LEFT);
                $birthDay = str_pad(rand(1, 28), 2, '0', STR_PAD_LEFT);
                $ngaySinh = "$birthYear-$birthMonth-$birthDay";

                TuyenThu::create([
                    'id' => $count + 1,
                    'doi_tuyen_id' => $doiId,
                    'ho_ten' => $hoTen,
                    'nickname' => $nickname,
                    'vi_tri_thi_dau' => $viTri,
                    'avatar' => 'https://api.placeholder.com/players/avatar.png',
                    'so_ao' => $soAo,
                    'quoc_tich' => 'Việt Nam',
                    'ngay_sinh' => $ngaySinh
                ]);

                $count++;
            }
        }
    }
}
