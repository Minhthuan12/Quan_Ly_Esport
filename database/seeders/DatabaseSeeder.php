<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            GameSeeder::class,
            ChucVuSeeder::class,
            ChucNangSeeder::class,
            PhanQuyenSeeder::class,
            NguoiDungSeeder::class,
            GiaiDauSeeder::class,
            DoiTuyenSeeder::class,
            TuyenThuSeeder::class,
            GiaiDauTuyenSeeder::class,
            TranDauSeeder::class,
            KetQuaTranDauSeeder::class,
            ChiTietVanDauSeeder::class,
            ThongSoCauThuSeeder::class,
            BangXepHangSeeder::class,
            NhaTaiTroGiaiDauSeeder::class,
            BaiVietTinTucSeeder::class,
            KhieuNaiToCaoSeeder::class,
        ]);
    }
}
