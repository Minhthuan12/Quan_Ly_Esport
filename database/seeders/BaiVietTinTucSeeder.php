<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\BaiVietTinTuc;

class BaiVietTinTucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $titles = [
            'Giải đấu VCS Mùa Hè 2026 chính thức công bố thể thức mới',
            'Valorant Challengers Việt Nam công bố tiền thưởng khủng',
            'Rồng Lửa Esports chiêu mộ thành công ngôi sao đường giữa trẻ tuổi',
            'Đấu Trường Chân Lý cập nhật phiên bản mới: Cân bằng tộc hệ',
            'Chiến Binh Đất Việt bất ngờ đánh bại Bão Táp Gaming',
            'Cập nhật Dota 2: Làm lại bản đồ và thay đổi hệ thống rune',
            'PUBG Saigon Survivors: Các đội tuyển tập trung cao độ trước tuần thi đấu cuối',
            'Hắc Hổ Esports đặt mục tiêu lọt vào Top 3 mùa giải này',
            'Phượng Hoàng Việt công bố mẫu áo thi đấu mới cho mùa giải 2026',
            'Trọng tài phạt cảnh cáo đội tuyển Thần Sấm vì hành vi đi trễ',
            'Ban tổ chức giải đấu công bố đối tác tài trợ năng lượng mới',
            'Counter Strike 2: Cập nhật hệ thống chống gian lận mới',
            'Cộng đồng hào hứng với buổi ký tặng của các tuyển thủ Rồng Lửa',
            'Huấn luyện viên Sao Băng Gaming tự tin trước trận derby sắp tới',
            'Lộ diện danh sách 10 nhà tài trợ đồng hành cùng giải đấu lớn',
            'Phỏng vấn độc quyền: Đường trên của Quỷ Vương Esports chia sẻ mục tiêu',
            'Thủy Quái Gaming giữ vững ngôi đầu bảng sau chuỗi trận thắng',
            'Những điểm đáng chú ý trong tuần thi đấu thứ 4 của giải đấu',
            'Phong Vân Esports thay đổi đội hình ra sân trước trận chung kết',
            'Khép lại mùa giải CS2 đầy kịch tính với nhà vô địch mới'
        ];

        $images = [
            'https://images.unsplash.com/photo-1542751371-adc38448a05e?auto=format&fit=crop&w=500&q=80',
            'https://images.unsplash.com/photo-1553481187-be93c21490a9?auto=format&fit=crop&w=500&q=80',
            'https://images.unsplash.com/photo-1511512578047-dfb367046420?auto=format&fit=crop&w=500&q=80',
            'https://images.unsplash.com/photo-1538481199705-c710c4e965fc?auto=format&fit=crop&w=500&q=80'
        ];

        foreach ($titles as $index => $title) {
            $slug = Str::slug($title);
            $tomTat = "Bản tin tổng hợp về: $title. Cập nhật chi tiết các diễn biến chính và ý kiến nhận định từ giới chuyên môn.";
            $noiDung = "Đây là nội dung chi tiết bài viết cho tiêu đề: '$title'. Trận đấu đã diễn ra vô cùng kịch tính với những pha xử lý đỉnh cao từ cả hai đội. Ban tổ chức đánh giá cao tinh thần thể thao và sự cổ vũ nhiệt tình của khán giả.";
            $img = $images[$index % count($images)];
            $ngayDang = date('Y-m-d', strtotime('-' . ($index * 2) . ' days'));
            $views = rand(100, 5000);

            BaiVietTinTuc::create([
                'id' => $index + 1,
                'tieu_de' => $title,
                'slug' => $slug,
                'anh_bia' => $img,
                'noi_dung' => $noiDung,
                'ngay_dang' => $ngayDang,
                'nguoi_dang_id' => rand(1, 2), // Admin 1 or Admin 2
                'tom_tat' => $tomTat,
                'luot_xem' => $views
            ]);
        }
    }
}
