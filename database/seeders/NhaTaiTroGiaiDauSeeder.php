<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NhaTaiTroGiaiDau;

class NhaTaiTroGiaiDauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sponsors = [
            ['giai_dau_id' => 1, 'ten_nha_tai_tro' => 'Hắc Tinh Energy', 'logo' => 'https://api.placeholder.com/sponsors/darkstar.png'],
            ['giai_dau_id' => 1, 'ten_nha_tai_tro' => 'Thiên Long Gaming', 'logo' => 'https://api.placeholder.com/sponsors/dragon.png'],
            ['giai_dau_id' => 1, 'ten_nha_tai_tro' => 'Phong Vũ Computer', 'logo' => 'https://api.placeholder.com/sponsors/phongvu.png'],
            ['giai_dau_id' => 2, 'ten_nha_tai_tro' => 'Vina Telecom', 'logo' => 'https://api.placeholder.com/sponsors/vinatelecom.png'],
            ['giai_dau_id' => 2, 'ten_nha_tai_tro' => 'Hộp Cát Esports', 'logo' => 'https://api.placeholder.com/sponsors/sandbox.png'],
            ['giai_dau_id' => 3, 'ten_nha_tai_tro' => 'Sao Kim Beverage', 'logo' => 'https://api.placeholder.com/sponsors/venus.png'],
            ['giai_dau_id' => 3, 'ten_nha_tai_tro' => 'Đế Vương Net', 'logo' => 'https://api.placeholder.com/sponsors/emperor.png'],
            ['giai_dau_id' => 4, 'ten_nha_tai_tro' => 'VNG Esports', 'logo' => 'https://api.placeholder.com/sponsors/vng.png'],
            ['giai_dau_id' => 5, 'ten_nha_tai_tro' => 'Rồng Vàng Tech', 'logo' => 'https://api.placeholder.com/sponsors/goldendragon.png'],
            ['giai_dau_id' => 5, 'ten_nha_tai_tro' => 'Thần Thoại Sport', 'logo' => 'https://api.placeholder.com/sponsors/mythic.png']
        ];

        foreach ($sponsors as $sp) {
            NhaTaiTroGiaiDau::create($sp);
        }
    }
}
