<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KhieuNaiToCao;

class KhieuNaiToCaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $complaints = [
            [
                'nguoi_khieu_nai_id' => 6, // Manager 1
                'tieu_de' => 'Khiếu nại về hành vi toxic của tuyển thủ đối phương',
                'noi_dung' => 'Tuyển thủ đội bạn liên tục có những phát ngôn không đúng mực trong phòng chờ trận đấu.',
                'bang_chung' => 'screenshot_toxic_chat.png',
                'trang_thai_xu_ly' => 'da_xu_ly',
                'nguoi_xu_ly_id' => 3, // BTC 1
                'ket_qua' => 'Phạt cảnh cáo tuyển thủ vi phạm và trừ 1 điểm hành vi.'
            ],
            [
                'nguoi_khieu_nai_id' => 7, // Manager 2
                'tieu_de' => 'Yêu cầu kiểm tra lỗi game (bug) trong ván 2',
                'noi_dung' => 'Đội chúng tôi phát hiện lỗi hiển thị bản đồ nhỏ khiến tầm nhìn bị ảnh hưởng nghiêm trọng.',
                'bang_chung' => 'gameplay_bug_log.txt',
                'trang_thai_xu_ly' => 'da_xu_ly',
                'nguoi_xu_ly_id' => 21, // Ref 1
                'ket_qua' => 'Đã xác minh lỗi game, trận đấu vẫn giữ nguyên kết quả do không ảnh hưởng trực tiếp đến kết quả chung cuộc.'
            ],
            [
                'nguoi_khieu_nai_id' => 8, // Manager 3
                'tieu_de' => 'Khiếu nại việc chậm trễ thanh toán giải thưởng',
                'noi_dung' => 'Giải đấu đã kết thúc 3 tuần nhưng đội chúng tôi vẫn chưa nhận được tiền thưởng như cam kết.',
                'bang_chung' => 'prize_receipt_request.pdf',
                'trang_thai_xu_ly' => 'dang_xu_ly',
                'nguoi_xu_ly_id' => 4, // BTC 2
                'ket_qua' => null
            ],
            [
                'nguoi_khieu_nai_id' => 26, // User 1
                'tieu_de' => 'Báo cáo tài khoản nghi ngờ hack/cheat ở giải cộng đồng',
                'noi_dung' => 'Tài khoản người chơi này có độ chính xác bắn súng 100% trong suốt cả trận đấu.',
                'bang_chung' => 'video_replay_link.mp4',
                'trang_thai_xu_ly' => 'dang_cho',
                'nguoi_xu_ly_id' => null,
                'ket_qua' => null
            ],
            [
                'nguoi_khieu_nai_id' => 9, // Manager 4
                'tieu_de' => 'Khiếu nại quyết định sai lầm của trọng tài chính',
                'noi_dung' => 'Trọng tài đã đưa ra quyết định pause game không hợp lý trong lúc pha giao tranh lớn đang diễn ra.',
                'bang_chung' => 'fight_clip.mp4',
                'trang_thai_xu_ly' => 'da_xu_ly',
                'nguoi_xu_ly_id' => 1, // Admin 1
                'ket_qua' => 'Sau khi họp ban tổ chức, quyết định của trọng tài được giữ nguyên vì lý do kỹ thuật bắt buộc.'
            ],
            [
                'nguoi_khieu_nai_id' => 10, // Manager 5
                'tieu_de' => 'Tố cáo hành vi đi trễ của đội tuyển Phong Vân',
                'noi_dung' => 'Trận đấu dự kiến lúc 15:00 nhưng đến 15:30 đối thủ mới có mặt đầy đủ.',
                'bang_chung' => 'lobby_screenshot.png',
                'trang_thai_xu_ly' => 'da_xu_ly',
                'nguoi_xu_ly_id' => 22, // Ref 2
                'ket_qua' => 'Xử thua Phong Vân ván đấu đầu tiên theo đúng điều lệ giải.'
            ],
            [
                'nguoi_khieu_nai_id' => 11, // Manager 6
                'tieu_de' => 'Yêu cầu thay đổi lịch thi đấu vòng tiếp theo',
                'noi_dung' => 'Hai tuyển thủ chủ chốt của đội bận việc học quân sự đột xuất, mong BTC dời trận đấu sang ngày hôm sau.',
                'bang_chung' => 'student_military_schedule.pdf',
                'trang_thai_xu_ly' => 'da_xu_ly',
                'nguoi_xu_ly_id' => 3, // BTC 1
                'ket_qua' => 'BTC chấp thuận và chuyển trận đấu sang 19:00 ngày 06/07/2026.'
            ],
            [
                'nguoi_khieu_nai_id' => 27, // User 2
                'tieu_de' => 'Tố cáo hành vi dàn xếp tỉ số (bán độ)',
                'noi_dung' => 'Có biểu hiện cố tình thua và feed mạng liên tục từ đội tuyển Sao Băng trong trận hôm qua.',
                'bang_chung' => 'chat_log_leaked.png',
                'trang_thai_xu_ly' => 'dang_xu_ly',
                'nguoi_xu_ly_id' => 2, // Admin 2
                'ket_qua' => null
            ],
            [
                'nguoi_khieu_nai_id' => 12, // Manager 7
                'tieu_de' => 'Khiếu nại về đường truyền Internet của ban tổ chức',
                'noi_dung' => 'Ping mạng tại khu vực thi đấu offline liên tục nhảy vọt lên 200ms gây giật lag.',
                'bang_chung' => 'network_ping_log.png',
                'trang_thai_xu_ly' => 'da_xu_ly',
                'nguoi_xu_ly_id' => 5, // BTC 3
                'ket_qua' => 'BTC đã khắc phục đường truyền dự phòng và trận đấu tiếp tục diễn ra.'
            ],
            [
                'nguoi_khieu_nai_id' => 13, // Manager 8
                'tieu_de' => 'Yêu cầu đổi trọng tài giám sát trận đấu',
                'noi_dung' => 'Trọng tài giám sát hiện tại có mối quan hệ thân thiết với đối thủ của chúng tôi.',
                'bang_chung' => 'facebook_post_relations.png',
                'trang_thai_xu_ly' => 'da_xu_ly',
                'nguoi_xu_ly_id' => 1, // Admin 1
                'ket_qua' => 'Chấp nhận thay đổi trọng tài khác để đảm bảo tính khách quan tối đa.'
            ],
            [
                'nguoi_khieu_nai_id' => 28, // User 3
                'tieu_de' => 'Tố cáo bình luận viên giải đấu có thiên vị',
                'noi_dung' => 'Bình luận viên liên tục dùng từ ngữ chê bai một đội và tâng bốc quá đà đội đối diện.',
                'bang_chung' => 'stream_timestamp_list.txt',
                'trang_thai_xu_ly' => 'dang_cho',
                'nguoi_xu_ly_id' => null,
                'ket_qua' => null
            ],
            [
                'nguoi_khieu_nai_id' => 14, // Manager 9
                'tieu_de' => 'Khiếu nại việc đội bạn đổi người không đăng ký trước',
                'noi_dung' => 'Đội bạn tự ý cho tuyển thủ dự bị vào thi đấu mà không gửi email thông báo trước 24 tiếng cho BTC.',
                'bang_chung' => 'match_roster.png',
                'trang_thai_xu_ly' => 'da_xu_ly',
                'nguoi_xu_ly_id' => 23, // Ref 3
                'ket_qua' => 'Phạt cảnh cáo và trừ 200.000 VND vào quỹ tiền thưởng của đội vi phạm.'
            ],
            [
                'nguoi_khieu_nai_id' => 15, // Manager 10
                'tieu_de' => 'Tố cáo hành vi phá hoại trang thiết bị phòng máy',
                'noi_dung' => 'Tuyển thủ đội bạn đập bàn phím của phòng máy sau khi thua trận đấu.',
                'bang_chung' => 'cctv_footage.mp4',
                'trang_thai_xu_ly' => 'da_xu_ly',
                'nguoi_xu_ly_id' => 3, // BTC 1
                'ket_qua' => 'Yêu cầu đội tuyển vi phạm bồi thường thiết bị và đình chỉ thi đấu tuyển thủ đó 1 trận.'
            ],
            [
                'nguoi_khieu_nai_id' => 29, // User 4
                'tieu_de' => 'Khiếu nại tài khoản thi đấu không chính chủ',
                'noi_dung' => 'Tuyển thủ sử dụng tài khoản của người khác để tham dự vòng loại.',
                'bang_chung' => 'discord_chat_confirm.png',
                'trang_thai_xu_ly' => 'dang_cho',
                'nguoi_xu_ly_id' => null,
                'ket_qua' => null
            ],
            [
                'nguoi_khieu_nai_id' => 30, // User 5
                'tieu_de' => 'Báo cáo lỗi nạp thẻ/đăng ký giải cộng đồng',
                'noi_dung' => 'Hệ thống trừ tiền đăng ký giải nhưng tài khoản vẫn hiển thị chưa đăng ký thành công.',
                'bang_chung' => 'bank_transaction_slip.png',
                'trang_thai_xu_ly' => 'dang_xu_ly',
                'nguoi_xu_ly_id' => 2, // Admin 2
                'ket_qua' => null
            ]
        ];

        foreach ($complaints as $cp) {
            KhieuNaiToCao::create($cp);
        }
    }
}
