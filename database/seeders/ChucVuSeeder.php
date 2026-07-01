<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ChucVu;

class ChucVuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $chucVus = [
            ['id' => 1, 'ten_chuc_vu' => 'Admin', 'mo_ta' => 'Quản trị hệ thống tối cao'],
            ['id' => 2, 'ten_chuc_vu' => 'Ban tổ chức', 'mo_ta' => 'Quản lý, điều hành giải đấu'],
            ['id' => 3, 'ten_chuc_vu' => 'Quản lý đội', 'mo_ta' => 'Quản lý đại diện các đội tuyển'],
            ['id' => 4, 'ten_chuc_vu' => 'Huấn luyện viên', 'mo_ta' => 'Chỉ đạo chiến thuật cho đội tuyển'],
            ['id' => 5, 'ten_chuc_vu' => 'Trọng tài', 'mo_ta' => 'Giám sát tính công bằng của các trận đấu']
        ];

        foreach ($chucVus as $cv) {
            ChucVu::create($cv);
        }
    }
}
