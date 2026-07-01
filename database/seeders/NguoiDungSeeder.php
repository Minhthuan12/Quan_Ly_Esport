<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\NguoiDung;

class NguoiDungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $defaultPassword = Hash::make('matkhau123');

        $users = [
            // 2 Admin (role_id: 1)
            [
                'id' => 1,
                'ten_dang_nhap' => 'admin1',
                'mat_khau' => $defaultPassword,
                'ho_ten' => 'Nguyễn Hoàng Bách',
                'email' => 'bach.nguyen@esports.vn',
                'so_dien_thoai' => '0901234567',
                'role_id' => 1,
                'trang_thai' => 'Hoạt động'
            ],
            [
                'id' => 2,
                'ten_dang_nhap' => 'admin2',
                'mat_khau' => $defaultPassword,
                'ho_ten' => 'Trần Minh Hùng',
                'email' => 'hung.tran@esports.vn',
                'so_dien_thoai' => '0907654321',
                'role_id' => 1,
                'trang_thai' => 'Hoạt động'
            ],

            // 3 Ban tổ chức (role_id: 2)
            [
                'id' => 3,
                'ten_dang_nhap' => 'btc1',
                'mat_khau' => $defaultPassword,
                'ho_ten' => 'Lê Tuấn Anh',
                'email' => 'anh.le@esports.vn',
                'so_dien_thoai' => '0912233445',
                'role_id' => 2,
                'trang_thai' => 'Hoạt động'
            ],
            [
                'id' => 4,
                'ten_dang_nhap' => 'btc2',
                'mat_khau' => $defaultPassword,
                'ho_ten' => 'Phạm Quốc Việt',
                'email' => 'viet.pham@esports.vn',
                'so_dien_thoai' => '0913344556',
                'role_id' => 2,
                'trang_thai' => 'Hoạt động'
            ],
            [
                'id' => 5,
                'ten_dang_nhap' => 'btc3',
                'mat_khau' => $defaultPassword,
                'ho_ten' => 'Vũ Đức Thành',
                'email' => 'thanh.vu@esports.vn',
                'so_dien_thoai' => '0914455667',
                'role_id' => 2,
                'trang_thai' => 'Hoạt động'
            ],

            // 10 Quản lý đội (role_id: 3)
            [
                'id' => 6,
                'ten_dang_nhap' => 'manager1',
                'mat_khau' => $defaultPassword,
                'ho_ten' => 'Đỗ Hoàng Nam',
                'email' => 'nam.do@teams.vn',
                'so_dien_thoai' => '0981122334',
                'role_id' => 3,
                'trang_thai' => 'Hoạt động'
            ],
            [
                'id' => 7,
                'ten_dang_nhap' => 'manager2',
                'mat_khau' => $defaultPassword,
                'ho_ten' => 'Trịnh Minh Đức',
                'email' => 'duc.trinh@teams.vn',
                'so_dien_thoai' => '0982233445',
                'role_id' => 3,
                'trang_thai' => 'Hoạt động'
            ],
            [
                'id' => 8,
                'ten_dang_nhap' => 'manager3',
                'mat_khau' => $defaultPassword,
                'ho_ten' => 'Lâm Quốc Bảo',
                'email' => 'bao.lam@teams.vn',
                'so_dien_thoai' => '0983344556',
                'role_id' => 3,
                'trang_thai' => 'Hoạt động'
            ],
            [
                'id' => 9,
                'ten_dang_nhap' => 'manager4',
                'mat_khau' => $defaultPassword,
                'ho_ten' => 'Phan Thanh Phong',
                'email' => 'phong.phan@teams.vn',
                'so_dien_thoai' => '0984455667',
                'role_id' => 3,
                'trang_thai' => 'Hoạt động'
            ],
            [
                'id' => 10,
                'ten_dang_nhap' => 'manager5',
                'mat_khau' => $defaultPassword,
                'ho_ten' => 'Bùi Xuân Hiếu',
                'email' => 'hieu.bui@teams.vn',
                'so_dien_thoai' => '0985566778',
                'role_id' => 3,
                'trang_thai' => 'Hoạt động'
            ],
            [
                'id' => 11,
                'ten_dang_nhap' => 'manager6',
                'mat_khau' => $defaultPassword,
                'ho_ten' => 'Đặng Huy Hoàng',
                'email' => 'hoang.dang@teams.vn',
                'so_dien_thoai' => '0986677889',
                'role_id' => 3,
                'trang_thai' => 'Hoạt động'
            ],
            [
                'id' => 12,
                'ten_dang_nhap' => 'manager7',
                'mat_khau' => $defaultPassword,
                'ho_ten' => 'Hoàng Tuấn Nghĩa',
                'email' => 'nghia.hoang@teams.vn',
                'so_dien_thoai' => '0987788990',
                'role_id' => 3,
                'trang_thai' => 'Hoạt động'
            ],
            [
                'id' => 13,
                'ten_dang_nhap' => 'manager8',
                'mat_khau' => $defaultPassword,
                'ho_ten' => 'Nguyễn Tiến Đạt',
                'email' => 'dat.nguyen@teams.vn',
                'so_dien_thoai' => '0988899001',
                'role_id' => 3,
                'trang_thai' => 'Hoạt động'
            ],
            [
                'id' => 14,
                'ten_dang_nhap' => 'manager9',
                'mat_khau' => $defaultPassword,
                'ho_ten' => 'Lý Thiên Phước',
                'email' => 'phuoc.ly@teams.vn',
                'so_dien_thoai' => '0989900112',
                'role_id' => 3,
                'trang_thai' => 'Hoạt động'
            ],
            [
                'id' => 15,
                'ten_dang_nhap' => 'manager10',
                'mat_khau' => $defaultPassword,
                'ho_ten' => 'Tống Minh Quân',
                'email' => 'quan.tong@teams.vn',
                'so_dien_thoai' => '0980011223',
                'role_id' => 3,
                'trang_thai' => 'Hoạt động'
            ],

            // 5 Huấn luyện viên (role_id: 4)
            [
                'id' => 16,
                'ten_dang_nhap' => 'coach1',
                'mat_khau' => $defaultPassword,
                'ho_ten' => 'Dương Thế Nam',
                'email' => 'nam.duong@coaches.vn',
                'so_dien_thoai' => '0971122334',
                'role_id' => 4,
                'trang_thai' => 'Hoạt động'
            ],
            [
                'id' => 17,
                'ten_dang_nhap' => 'coach2',
                'mat_khau' => $defaultPassword,
                'ho_ten' => 'Mai Quốc Trung',
                'email' => 'trung.mai@coaches.vn',
                'so_dien_thoai' => '0972233445',
                'role_id' => 4,
                'trang_thai' => 'Hoạt động'
            ],
            [
                'id' => 18,
                'ten_dang_nhap' => 'coach3',
                'mat_khau' => $defaultPassword,
                'ho_ten' => 'Ngô Thanh Hải',
                'email' => 'hai.ngo@coaches.vn',
                'so_dien_thoai' => '0973344556',
                'role_id' => 4,
                'trang_thai' => 'Hoạt động'
            ],
            [
                'id' => 19,
                'ten_dang_nhap' => 'coach4',
                'mat_khau' => $defaultPassword,
                'ho_ten' => 'Trương Gia Huy',
                'email' => 'huy.truong@coaches.vn',
                'so_dien_thoai' => '0974455667',
                'role_id' => 4,
                'trang_thai' => 'Hoạt động'
            ],
            [
                'id' => 20,
                'ten_dang_nhap' => 'coach5',
                'mat_khau' => $defaultPassword,
                'ho_ten' => 'Hồ Hải Đăng',
                'email' => 'dang.ho@coaches.vn',
                'so_dien_thoai' => '0975566778',
                'role_id' => 4,
                'trang_thai' => 'Hoạt động'
            ],

            // 5 Trọng tài (role_id: 5)
            [
                'id' => 21,
                'ten_dang_nhap' => 'ref1',
                'mat_khau' => $defaultPassword,
                'ho_ten' => 'Cao Hữu Nghĩa',
                'email' => 'nghia.cao@refs.vn',
                'so_dien_thoai' => '0961122334',
                'role_id' => 5,
                'trang_thai' => 'Hoạt động'
            ],
            [
                'id' => 22,
                'ten_dang_nhap' => 'ref2',
                'mat_khau' => $defaultPassword,
                'ho_ten' => 'Phùng Trọng Hiếu',
                'email' => 'hieu.phung@refs.vn',
                'so_dien_thoai' => '0962233445',
                'role_id' => 5,
                'trang_thai' => 'Hoạt động'
            ],
            [
                'id' => 23,
                'ten_dang_nhap' => 'ref3',
                'mat_khau' => $defaultPassword,
                'ho_ten' => 'Thái Thanh Sơn',
                'email' => 'son.thai@refs.vn',
                'so_dien_thoai' => '0963344556',
                'role_id' => 5,
                'trang_thai' => 'Hoạt động'
            ],
            [
                'id' => 24,
                'ten_dang_nhap' => 'ref4',
                'mat_khau' => $defaultPassword,
                'ho_ten' => 'Lương Minh Triết',
                'email' => 'triet.luong@refs.vn',
                'so_dien_thoai' => '0964455667',
                'role_id' => 5,
                'trang_thai' => 'Hoạt động'
            ],
            [
                'id' => 25,
                'ten_dang_nhap' => 'ref5',
                'mat_khau' => $defaultPassword,
                'ho_ten' => 'Đoàn Công Danh',
                'email' => 'danh.doan@refs.vn',
                'so_dien_thoai' => '0965566778',
                'role_id' => 5,
                'trang_thai' => 'Hoạt động'
            ],

            // 5 Người dùng / Khán giả (role_id: null)
            [
                'id' => 26,
                'ten_dang_nhap' => 'user1',
                'mat_khau' => $defaultPassword,
                'ho_ten' => 'Võ Hoàng Yến',
                'email' => 'yen.vo@users.vn',
                'so_dien_thoai' => '0951122334',
                'role_id' => null,
                'trang_thai' => 'Hoạt động'
            ],
            [
                'id' => 27,
                'ten_dang_nhap' => 'user2',
                'mat_khau' => $defaultPassword,
                'ho_ten' => 'Nguyễn Thu Trang',
                'email' => 'trang.nguyen@users.vn',
                'so_dien_thoai' => '0952233445',
                'role_id' => null,
                'trang_thai' => 'Hoạt động'
            ],
            [
                'id' => 28,
                'ten_dang_nhap' => 'user3',
                'mat_khau' => $defaultPassword,
                'ho_ten' => 'Phan Minh Khang',
                'email' => 'khang.phan@users.vn',
                'so_dien_thoai' => '0953344556',
                'role_id' => null,
                'trang_thai' => 'Hoạt động'
            ],
            [
                'id' => 29,
                'ten_dang_nhap' => 'user4',
                'mat_khau' => $defaultPassword,
                'ho_ten' => 'Đỗ Hoàng Sơn',
                'email' => 'son.do@users.vn',
                'so_dien_thoai' => '0954455667',
                'role_id' => null,
                'trang_thai' => 'Hoạt động'
            ],
            [
                'id' => 30,
                'ten_dang_nhap' => 'user5',
                'mat_khau' => $defaultPassword,
                'ho_ten' => 'Lê Quỳnh Chi',
                'email' => 'chi.le@users.vn',
                'so_dien_thoai' => '0955566778',
                'role_id' => null,
                'trang_thai' => 'Hoạt động'
            ]
        ];

        foreach ($users as $user) {
            NguoiDung::create($user);
        }
    }
}
