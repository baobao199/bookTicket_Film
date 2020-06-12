-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 01, 2020 lúc 11:36 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `datvexemphim`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `adminUser` varchar(255) NOT NULL,
  `adminPass` varchar(255) NOT NULL,
  `adminName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`adminUser`, `adminPass`, `adminName`) VALUES
('admin1', '123456', 'Nguyễn Văn Tèo'),
('admin2', '123456', 'Võ Thị Tú');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdatve`
--

CREATE TABLE `chitietdatve` (
  `maDatVe` varchar(255) NOT NULL,
  `khachHang` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rapPhim` varchar(255) NOT NULL,
  `tenPhim` varchar(255) NOT NULL,
  `ngayChieu` date NOT NULL,
  `gioChieu` time NOT NULL,
  `loaiVe` varchar(50) NOT NULL,
  `soLuongVe` int(11) NOT NULL,
  `giaVe` int(11) NOT NULL,
  `doAn` varchar(255) NOT NULL,
  `soLuong` int(11) NOT NULL,
  `giaDoAn` int(11) NOT NULL,
  `tongTien` int(11) NOT NULL,
  `ghe` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitietdatve`
--

INSERT INTO `chitietdatve` (`maDatVe`, `khachHang`, `email`, `rapPhim`, `tenPhim`, `ngayChieu`, `gioChieu`, `loaiVe`, `soLuongVe`, `giaVe`, `doAn`, `soLuong`, `giaDoAn`, `tongTien`, `ghe`) VALUES
('VCM00001', 'Nguyễn Văn A', 'nguyenbao605@gmail.com', 'CGV Vivo City', 'NỮ HOÀNG BĂNG GIÁ 2', '2020-06-01', '09:30:00', 'TK2D', 1, 79000, 'Bắp', 1, 45000, 124000, 'C3'),
('VCM00002', 'Nguyễn Văn A', 'nguyenbao605@gmail.com', 'CGV Vivo City', 'NGƯỜI NHỆN XA NHÀ', '2020-06-01', '13:30:00', 'TK2D', 1, 79000, 'Nước + Bắp', 1, 80000, 159000, 'A3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `datve`
--

CREATE TABLE `datve` (
  `maDatVe` varchar(100) NOT NULL,
  `khachHang` varchar(255) NOT NULL,
  `ngayDat` date NOT NULL,
  `tongTien` int(11) NOT NULL,
  `tinhTrang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `datve`
--

INSERT INTO `datve` (`maDatVe`, `khachHang`, `ngayDat`, `tongTien`, `tinhTrang`) VALUES
('VCM00001', 'Nguyễn Văn A', '2020-06-01', 124000, 'No approved'),
('VCM00002', 'Nguyễn Văn A', '2020-06-01', 159000, 'Approved');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `doan`
--

CREATE TABLE `doan` (
  `maDoAn` varchar(50) NOT NULL,
  `tenDoAn` varchar(255) NOT NULL,
  `giaTien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `doan`
--

INSERT INTO `doan` (`maDoAn`, `tenDoAn`, `giaTien`) VALUES
('combo', 'Nước + Bắp', 80000),
('corn', 'Bắp', 45000),
('drink', 'Nước', 45000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `taiKhoan` varchar(255) NOT NULL,
  `matKhau` varchar(255) NOT NULL,
  `hoTen` varchar(255) NOT NULL,
  `gioiTinh` varchar(255) NOT NULL,
  `ngaySinh` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `diaChi` varchar(255) NOT NULL,
  `SDT` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`taiKhoan`, `matKhau`, `hoTen`, `gioiTinh`, `ngaySinh`, `email`, `diaChi`, `SDT`) VALUES
('user1', '123456', 'Nguyễn Văn A', 'Nam', '1998-06-01', 'nguyenbao605@gmail.com', 'quận 7', '0356779331'),
('user2', '123456', 'Nguyễn Văn B', 'Nam', '1999-10-09', 'duymark42@gmail.com', 'quận 7', '0356779331');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `maKM` varchar(50) NOT NULL,
  `tenKM` varchar(255) NOT NULL,
  `loaiKM` varchar(255) NOT NULL,
  `noiDung` text NOT NULL,
  `hinhAnh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`maKM`, `tenKM`, `loaiKM`, `noiDung`, `hinhAnh`) VALUES
('50K', 'MUA VÉ XEM PHIM GIÁ 50K BẰNG THẺ VISA', 'KM', 'THỜI GIAN ƯU ĐÃI: Áp dụng vào các ngày Thứ ba (Bắt đầu vào lúc 9:00 sáng) hàng tuần từ 20/02/2020 – 17/11/2020 (Toàn quốc) \r\n\r\nNỘI DUNG ƯU ĐÃI: \r\n\r\n- Khách hàng khi sử dụng thẻ do VISA phát hành thực hiện giao dịch mua vé xem phim 2D CGV sẽ được hưởng ưu đãi mua vé xem phim với giá 50.000VNĐ/ vé', 'views/promotion/uploads/50k.jpg'),
('60K', 'XEM PHIM XUYÊN ĐÊM - GIÁ CHỈ TỪ 60K', 'SK', 'XEM PHIM XUYÊN ĐÊM\r\nTận hưởng giá vé siêu ưu đãi cho các suất chiếu sau 22:00\r\n- Đồng giá từ 60.000 VNĐ* – Vé xem phim 2D\r\n- Đồng giá 85.000 VNĐ* – 2 Nước + 1 Bắp', 'views/promotion/uploads/60K.jpg'),
('85K', '02 VÉ XEM PHIM 2D CHỈ VỚI 85K', 'KM', '- Mua 02 vé xem phim 2D chỉ với 85.000 VNĐ khi đặt vé online qua website CGV.vn hoặc ứng dụng di động (app mobile) của CGV bằng thẻ quốc tế SeABank.\r\n- Áp dụng từ 9h vào thứ năm đến chủ nhật hàng tuần. Từ 05/03/2020 đến 05/05/2020 (hoặc đến khi hết ngân sách chương trình).\r\n- Áp dụng tất cả Thẻ quốc tế SeABank (bao gồm cả thẻ chính và thẻ phụ).', 'views/promotion/uploads/85k.jpg'),
('combo', 'NƯỚC NGỌT THẢ GA KHI MUA COMBO COCA', 'KM', 'Nội dung ưu đãi:\r\n- Khách hàng khi mua Combo Coca (bao gồm 1 bắp mix, 2 nước ngọt, 1 snack) giá 119,00 VNĐ, được tặng ngay 01 lần refill nước ngọt miễn phí.', 'views/promotion/uploads/nuoc.jpg'),
('U22', 'NHẬP HỘI U22', 'SK', 'Khách hàng có độ tuổi từ 12 – 22 nhanh chóng nhập hội CGV U22 để nhận ngay ưu đãi đồng giá vô cùng hấp dẫn:\r\n- 45.000 VNĐ - 55.000 VNĐ / 1 vé 2D (*)\r\n- 59.000 VNĐ / 1 nước + 1 bắp\r\n- 89.000 VNĐ / 2 nước + 1 bắp\r\n\r\n', 'views/promotion/uploads/u22.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaivephim`
--

CREATE TABLE `loaivephim` (
  `maLoai` varchar(50) NOT NULL,
  `tenLoai` varchar(255) NOT NULL,
  `giaTien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaivephim`
--

INSERT INTO `loaivephim` (`maLoai`, `tenLoai`, `giaTien`) VALUES
('TK2D', '2D', 79000),
('TK3D', '3D', 95000),
('TK4D', '4D', 145000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phim`
--

CREATE TABLE `phim` (
  `maPhim` varchar(50) NOT NULL,
  `tenPhim` varchar(255) NOT NULL,
  `daoDien` varchar(255) NOT NULL,
  `dienVien` varchar(255) NOT NULL,
  `theLoai` varchar(255) NOT NULL,
  `khoiChieu` date NOT NULL,
  `thoiLuong` text NOT NULL,
  `ngonNgu` varchar(255) NOT NULL,
  `moTa` text NOT NULL,
  `hinhAnh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phim`
--

INSERT INTO `phim` (`maPhim`, `tenPhim`, `daoDien`, `dienVien`, `theLoai`, `khoiChieu`, `thoiLuong`, `ngonNgu`, `moTa`, `hinhAnh`) VALUES
('ATYQ', 'ANH TRAI YÊU QUÁI', 'Vũ Ngọc Phượng', 'Kiều Minh Tuấn, Isaac, Diệu Nhi, Phi Phụng...', 'Gia đình, Hài, Tâm Lý', '2019-11-29', '103 phút', 'Tiếng Việt - Phụ đề Tiếng Anh', ' Lâm là một vận động viên Judo quốc gia bỗng chốc phải bỏ dở sự nghiệp vì gặp chấn thương mất đi thị giác. Phong - người anh cùng cha khác mẹ đang ở trong tù - ngay lập tức lợi dụng bi kịch của em trai để xin được ân xá về nhà chăm sóc em. Chưa thể chấp nhận sự thật mình sẽ bị mù vĩnh viễn, Lâm càng phát điên khi ông anh 10 năm không gặp bỗng dưng trở về, mang theo toàn phiền toái.', 'views/filmmanager/uploads/atyq.jpg'),
('FZ2', 'NỮ HOÀNG BĂNG GIÁ 2', 'Chris Buck, Jennifer Lee', 'Evan Rachel Wood, Kristen Bell, Jonathan Groff', 'Hài, Hoạt Hình, Phiêu Lưu', '2019-11-22', '120 phút', 'Tiếng Anh - Phụ đề Tiếng Việt; Lồng tiếng', ' Cùng dấn thân vào một cuộc phiêu lưu xa xôi thú vị, hai chị em Anna và Elsa đi đến chốn rừng sâu để tìm kiếm sự thật về bí ẩn cổ xưa của vương quốc mình. Tất cả những gì Anna & Elsa biết về bản thân, lịch sử và gia đình của họ đều bị thử thách khi họ bị cuốn vào một chuyến đi đầy quả cảm đến với vùng đất phía bắc bí ẩn ngoài Arendelle được báo trước.', 'views/filmmanager/uploads/Frozen2.jpg'),
('JK2019', 'JOKER', 'Todd Phillips', 'Robert De Niro, Joaquin Phoenix, Zazie Beetz', 'Hồi hộp, Tâm Lý, Tội phạm', '2020-02-17', '103 phút', 'Tiếng Anh - Phụ đề Tiếng Việt', ' Joker từ lâu đã là siêu ác nhân huyền thoại của điện ảnh thế giới. Nhưng có bao giờ bạn tự hỏi, Joker đến từ đâu và điều gì đã biến Joker trở thành biểu tượng tội lỗi của thành phố Gotham? JOKER sẽ là cái nhìn độc đáo về tên ác nhân khét tiếng của Vũ trụ DC – một câu chuyện gốc thấm nhuần, nhưng tách biệt rõ ràng với những truyền thuyết quen thuộc xoay quanh nhân vật mang đầy tính biểu tượng này', 'views/filmmanager/uploads/joker.jpg'),
('NANG3', 'NẮNG 3: LỜI HỨA CỦA CHA', 'Đồng Đăng Giao', 'Kiều Minh Tuấn, Khả Như, Oanh Kiều, Ngân Chi, Hữu Châu', 'Hài, Tâm Lý', '2020-06-03', '109 phút', 'Tiếng Việt - Phụ đề Tiếng Anh', 'Lời Hứa Của Cha kể về cuộc sống của 2 mẹ con lừa đảo Quế Phương ( Khả Như ) và bé Hồng Ân ( Ngân Chi). Mọi thứ trở nên đảo lộn khi 2 mẹ con vô tình lừa phải bác sĩ Tùng Sơn ( Kiều Minh Tuấn ), người có khả năng là cha mà bé Hồng Ân bấy lâu đang tìm kiếm. Hành trình chinh phục người cha bất đắc dĩ của 2 mẹ con không hề suôn sẻ khi gặp phải chướng ngại đáng gờm là Thùy Linh (Oanh Kiều), người yêu hiện tại của Sơn. Số phận nghiệt ngã còn trêu đùa và thử thách tình cha con hơn nữa khi đặt Hồng Ân vào tình huống hiểm nghèo.\r\n', 'views/filmmanager/uploads/nang3.jpg'),
('SPM2019', 'NGƯỜI NHỆN XA NHÀ', 'Jon Watts', 'Tom Holland, Zendaya, Jake Gyllenhaal, Marisa Tomei', 'Hành Động, Khoa Học Viễn Tưởng', '2019-07-05', '135 minutes', 'Tiếng Anh và phụ đề tiếng Việt', ' Hậu chiến Vô Cực, Người Nhện Peter Parker và nhóm bạn thân cùng tham gia chuyến du lịch châu Âu của trường. Tuy nhiên, kế hoạch siêu anh hùng nghỉ phép của Peter nhanh chóng bị hủy bỏ sau khi cậu đồng ý giúp Nick Fury khám phá bí ẩn về những cuộc tấn công của nhóm kẻ thù mang sức mạnh nguyên tố đang tàn phá khắp lục địa.', 'views/filmmanager/uploads/spm.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phimnoibat`
--

CREATE TABLE `phimnoibat` (
  `maPhim` varchar(50) NOT NULL,
  `tenPhim` varchar(255) NOT NULL,
  `daoDien` varchar(255) NOT NULL,
  `dienVien` varchar(255) NOT NULL,
  `theLoai` varchar(255) NOT NULL,
  `khoiChieu` date NOT NULL,
  `thoiLuong` varchar(50) NOT NULL,
  `ngonNgu` varchar(255) NOT NULL,
  `moTa` text NOT NULL,
  `hinhAnh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phimnoibat`
--

INSERT INTO `phimnoibat` (`maPhim`, `tenPhim`, `daoDien`, `dienVien`, `theLoai`, `khoiChieu`, `thoiLuong`, `ngonNgu`, `moTa`, `hinhAnh`) VALUES
('ANN', 'ÁC QUỶ TRỞ VỀ', 'Gary Dauberman', 'Madison Iseman, Mckenna Grace, Vera Farmiga, Patrick Wilson, Katie Sarife', 'Kinh Dị', '2019-06-19', '135 minutes', 'Tiếng Anh và phụ đề tiếng Việt', '   Sau những sự kiện xưa, vợ chồng pháp sư trừ tà Warren đưa Annabelle về nhà và niêm phong nó trong một căn phòng đặc biệt. Một ngày nọ trong lúc vợ chồng Warren rời khỏi nhà để thực hiện một nhiệm vụ bí ẩn, cơn ác mộng thực sự bắt đầu khi người bạn Daniela của Mary Ellen - bảo mẫu nhà Warren tò mò khám phá căn phòng đầy những món đồ quỷ ám và vô tình giải thoát cho Annabelle. Từ đó, Annabelle dẫn dắt các linh hồn khác có trong căn phòng cùng trỗi dậy, với mục tiêu mới nhằm vào chính Judy – cô con gái nhà Warren và bạn bè của cô bé', 'views/outstanding/uploads/annabelle.jpg'),
('EXIT', 'LỐI THOÁT TRÊN KHÔNG', 'Lee Sang-geun', 'Jo Jung-seok, Im Yoona, Go Doo-shim, Park In-hwan, Kim Ji-young', 'Hài, Hành Động', '0000-00-00', '103 phút', 'Tiếng Hàn - Phụ đề tiếng Việt', '  Lối Thoát Trên Không là câu chuyện “khá buồn” về cuộc đời thất bại của Lee Yong-nam (Jo Jung-seok): thất nghiệp, thất tình, lại còn gặp phải thảm họa rò rỉ khí ga nguy hiểm chết người!Thời đại học, Lee Yong-nam khá nổi tiếng trong câu lạc bộ leo núi. Nhưng cuộc đời sau này của anh thật sự nghiệt ngã hơn nhiều. Dù đã ra trường nhiều năm, Lee Yong-nam vẫn thất nghiệp và đành phải “muối mặt” nhờ cha mẹ xin một công việc tạm bợ qua ngày. Nhân dịp sinh nhật lần thứ 70 của mẹ, Yong-nam nằng nặc đòi tổ chức tiệc tại nơi mà Eui-ji (Im Yoona) – cô gái anh theo đuổi một thời đang làm việc.', 'views/outstanding/uploads/exit.jpg'),
('INFW', 'ENDGAME', 'Anthony Russo, Joe Russo', 'Robert Downey Jr., Chris Hemsworth, Mark Ruffalo, Chris Evans, Benedict Cumberbatch,...', 'Hành Động, Khoa Học Viễn Tưởng', '2019-04-26', '182 Phút', 'Tiếng Anh với phụ đề tiếng Việt', ' Sau sự kiện Thanos làm cho một nửa vũ trụ tan biến và khiến cho biệt đội Avengers thảm bại, những siêu anh hùng sống sót phải tham gia trận chiến cuối cùng trong Avengers: Endgame - tác phẩm điện ảnh đánh dấu sự khép lại sau 22 bộ phim của Marvel Studios.', 'views/outstanding/uploads/infw.jpg'),
('TNRR', 'THÁNG NĂM RỰC RỠ', 'Nguyễn Quang Dũng', ' Hồng Ánh - Hoàng Yến Chibi, Thanh Hằng - Hoàng Oanh, Jun Vũ, Mỹ Uyên - Khổng Tú Quỳnh, Mỹ Duyên - Trịnh Thảo, Minh Tuyền - Minh Thảo...', 'Hài, Tâm Lý', '2018-03-07', '118 phút', 'Tiếng Việt với phụ đề tiếng Anh', 'THÁNG NĂM RỰC RỠ là câu chuyện về tình bạn, về thời tuổi trẻ cuồng nhiệt của một nhóm bạn gái thời trung học. Bộ phim là hành trình đi tìm lại những ký ức thanh xuân của Hiểu Phương (Hồng Ánh) và nhóm nữ quái Ngựa Hoang. Tình cờ gặp lại người bạn cũ Mỹ Dung (Thanh Hằng) và cũng là trưởng nhóm Ngựa Hoang, Hiểu Phương đau xót khi biết bạn đang mắc bệnh hiểm nghèo. Để thực hiện tâm nguyện của bạn thân, Hiểu Phương quyết tâm tìm lại các thành viên của nhóm Ngựa Hoang.', 'views/outstanding/uploads/tnrr.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phimsapchieu`
--

CREATE TABLE `phimsapchieu` (
  `maPhim` varchar(50) NOT NULL,
  `tenPhim` varchar(255) NOT NULL,
  `daoDien` varchar(255) NOT NULL,
  `dienVien` varchar(255) NOT NULL,
  `theLoai` varchar(255) NOT NULL,
  `khoiChieu` date NOT NULL,
  `thoiLuong` time NOT NULL,
  `ngonNgu` varchar(255) NOT NULL,
  `moTa` text NOT NULL,
  `hinhAnh` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phimsapchieu`
--

INSERT INTO `phimsapchieu` (`maPhim`, `tenPhim`, `daoDien`, `dienVien`, `theLoai`, `khoiChieu`, `thoiLuong`, `ngonNgu`, `moTa`, `hinhAnh`) VALUES
('ff9', 'FAST & FURIOUS 9', 'Justin Lin', 'Charlize Theron, Jim Parrack, John Cena', 'Hành Động, Phiêu Lưu', '2021-04-23', '00:01:03', ' Tiếng Anh - Phụ đề Tiếng Việt', 'Plot unknown. The ninth installment of the &#39;Fast and Furious&#39; franchise.', 'views/moviecomingsoon/uploads/ff9.jpg'),
('MINIONS2020', 'SỰ TRỖI DẬY CỦA GRU', 'Kyle Balda, Brad Ableson, Jonathan del Val', 'Steve Carell, Lucy Lawless, Michelle Yeoh...', 'Hài, Hoạt Hình, Phiêu Lưu', '2021-07-23', '00:01:35', 'Tiếng Anh và phụ đề tiếng Việt', 'Đến ác nhân cũng có những nỗi đau khôn nguôi... MINIONS: SỰ TRỖI DẬY CỦA GRU dự kiến khởi chiếu 03.07.2020', 'views/moviecomingsoon/uploads/minion_2020.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rapphim`
--

CREATE TABLE `rapphim` (
  `maRapPhim` varchar(50) NOT NULL,
  `tenRapPhim` varchar(255) NOT NULL,
  `diaChi` varchar(255) NOT NULL,
  `soDienThoai` varchar(15) NOT NULL,
  `hinhAnh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `rapphim`
--

INSERT INTO `rapphim` (`maRapPhim`, `tenRapPhim`, `diaChi`, `soDienThoai`, `hinhAnh`) VALUES
('CGVCM', 'CGV Crescent Mall', 'Lầu 5, Crescent Mall Đại lộ Nguyễn Văn Linh, Phú Mỹ Hưng Quận 7 TP. Hồ Chí Minh', '0462755240', 'views/movietheater/uploads/cgv-crescent-mall.png'),
('CGVHV', 'CGV Hùng Vương Plaza', 'Tầng 7 | Hùng Vương Plaza 126 Hùng Vương Quận 5 Tp. Hồ Chí Minh', '0462755241', 'views/movietheater/uploads/cgvHV.jpg'),
('CGVVC', 'CGV Vivo City', 'Lầu 5, Trung tâm thương mại SC VivoCity - 1058 Nguyễn Văn Linh, Quận 7', '0462755240', 'views/movietheater/uploads/cgvvivo.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `maSlide` varchar(50) NOT NULL,
  `tenSlide` varchar(255) NOT NULL,
  `maCT` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`maSlide`, `tenSlide`, `maCT`, `picture`) VALUES
('ADV1', 'title', 'Gift', 'views/slide/uploads/title.jpg'),
('ADV2', 'End Game', 'CS', 'views/slide/uploads/infw.jpg'),
('ADV3', 'Quà Tặng', 'Gift', 'views/slide/uploads/km.jpg'),
('ADV4', 'JOKER', 'CS', 'views/slide/uploads/Joker.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `suatchieuphim`
--

CREATE TABLE `suatchieuphim` (
  `maSuatChieu` varchar(50) NOT NULL,
  `maPhim` varchar(50) NOT NULL,
  `tenPhim` varchar(255) NOT NULL,
  `maRapPhim` varchar(50) NOT NULL,
  `phongChieu` varchar(20) NOT NULL,
  `loaiVe` varchar(50) NOT NULL,
  `ngayChieu` date NOT NULL,
  `gioChieu` time NOT NULL,
  `ghe` varchar(500) NOT NULL,
  `gheDaChon` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `suatchieuphim`
--

INSERT INTO `suatchieuphim` (`maSuatChieu`, `maPhim`, `tenPhim`, `maRapPhim`, `phongChieu`, `loaiVe`, `ngayChieu`, `gioChieu`, `ghe`, `gheDaChon`) VALUES
('MXC1', 'FZ2', 'Nữ Hoàng Băng Giá', 'CGVVC', 'R1', 'TK2D', '2020-06-03', '09:30:00', '200', ' C3'),
('MXC2', 'FZ2', 'Nữ Hoàng Băng Giá', 'CGVVC', 'R2', 'TK2D', '2020-06-04', '10:30:00', '200', ''),
('MXC3', 'SPM2019', 'Người Nhện Xa Nhà', 'CGVVC', 'R4', 'TK2D', '2020-06-03', '13:30:00', '200', ' A3'),
('MXC4', 'ANN', 'Ác Quỷ Trở về', 'CGVVC', 'R1', 'TK2D', '2020-06-04', '14:30:00', '200', ''),
('MXC5', 'EXIT', 'Lối Thoát Trên Không', 'CGVCM', 'R3', 'TK2D', '2020-06-03', '15:30:00', '200', ''),
('MXC6', 'JK2019', 'Joker', 'CGVCM', 'R2', 'TK2D', '2020-06-04', '16:30:00', '200', ''),
('MXC7', 'INFW', 'End Game', 'CGVHV', 'R2', 'TK2D', '2020-06-03', '17:30:00', '200', ''),
('MXC8', 'TNRR', 'Tháng Năm Rực Rỡ', 'CGVHV', 'R3', 'TK2D', '2020-06-04', '09:30:00', '200', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminUser`);

--
-- Chỉ mục cho bảng `chitietdatve`
--
ALTER TABLE `chitietdatve`
  ADD PRIMARY KEY (`maDatVe`);

--
-- Chỉ mục cho bảng `datve`
--
ALTER TABLE `datve`
  ADD PRIMARY KEY (`maDatVe`);

--
-- Chỉ mục cho bảng `doan`
--
ALTER TABLE `doan`
  ADD PRIMARY KEY (`maDoAn`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`taiKhoan`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`maKM`);

--
-- Chỉ mục cho bảng `loaivephim`
--
ALTER TABLE `loaivephim`
  ADD PRIMARY KEY (`maLoai`);

--
-- Chỉ mục cho bảng `phim`
--
ALTER TABLE `phim`
  ADD PRIMARY KEY (`maPhim`);

--
-- Chỉ mục cho bảng `phimnoibat`
--
ALTER TABLE `phimnoibat`
  ADD PRIMARY KEY (`maPhim`);

--
-- Chỉ mục cho bảng `phimsapchieu`
--
ALTER TABLE `phimsapchieu`
  ADD PRIMARY KEY (`maPhim`);

--
-- Chỉ mục cho bảng `rapphim`
--
ALTER TABLE `rapphim`
  ADD PRIMARY KEY (`maRapPhim`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`maSlide`);

--
-- Chỉ mục cho bảng `suatchieuphim`
--
ALTER TABLE `suatchieuphim`
  ADD PRIMARY KEY (`maSuatChieu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
