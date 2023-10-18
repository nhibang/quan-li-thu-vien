create database QL_thuvien;

create table TAI_KHOAN
(Ten_dang_nhap varchar(50) not null primary key,
Mat_khau varchar(255),
Ho_ten varchar(50),
Email varchar(50),
Phan_quyen bit
);
create table NGUOI_DUNG
(ID_ND int not null primary key,
Ten_dang_nhap varchar(50) not null foreign key references TAI_KHOAN(Ten_dang_nhap)
);
create table NGUOI_QUAN_LY
(ID_NQL int not null primary key,
ID_ND int not null foreign key references NGUOI_DUNG(ID_ND)
);
create table LOAI_SACH
(Ma_loai char(10) not null primary key,
Ten_loai varchar(50),
ID_NQL int not null foreign key references NGUOI_QUAN_LY(ID_NQL)
);
create table Sach
(Ma_sach int not null primary key,
Ten_sach varchar(100),
Tac_gia varchar(50),
Tom_tat varchar(200),
Noi_dung text,
ID_NQL int not null foreign key references NGUOI_QUAN_LY(ID_NQL),
Ma_loai char(10) not null foreign key references LOAI_SACH(Ma_loai)
);
create table XEM_SACH
(ID_ND int not null foreign key references NGUOI_DUNG(ID_ND),
Ma_sach int not null foreign key references Sach(Ma_sach)
);
create table XEM_LOAI_SACH
(ID_ND int not null foreign key references NGUOI_DUNG(ID_ND),
Ma_loai char(10) not null foreign key references LOAI_SACH(Ma_loai)
);

insert into TAI_KHOAN values ('chiennd', '12345678', N'Nguyễn Đức Chiến', 'chiennd@gmail.com', '0');
insert into TAI_KHOAN values ('vanntt', '123456789', N'Nguyễn Thị Thanh Vân', 'vanntt@gmail.com', '0');
insert into TAI_KHOAN values ('phuong', '1234567', N'Lê Hà Phương', 'minialpha1234567@gmail.com', '0');
insert into TAI_KHOAN values ('bangnhi', '0000', N'Trương Thị Băng Nhi', 'bangnhi@gmail.com', '0');
insert into TAI_KHOAN values ('Abc', '12345678', N'Nguyễn Văn a', 'cutmovie3d@gmail.com', '0');
insert into TAI_KHOAN values ('Duc', '1234567890', N'Đức', 'ffggg@gmail.com', '0');
insert into TAI_KHOAN values ('hai123', 'hai1234', N'Hải', 'hai12345@gmail.com', '0');
insert into TAI_KHOAN values ('toan1234', 'toandeptrai', N'Toàn', 'fgfgfg@gmail.com', '0');

insert into NGUOI_DUNG values('001', 'chiennd');
insert into NGUOI_DUNG values('002', 'vanntt');
insert into NGUOI_DUNG values('003', 'phuong');
insert into NGUOI_DUNG values('004', 'bangnhi');
insert into NGUOI_DUNG values('005', 'Abc');
insert into NGUOI_DUNG values('006', 'Duc');
insert into NGUOI_DUNG values('007', 'hai123');
insert into NGUOI_DUNG values('008', 'toan1234');

insert into NGUOI_QUAN_LY values ('101', '001');
insert into NGUOI_QUAN_LY values ('102', '004');

insert into LOAI_SACH values('TH01', N'Toán rời rạc', '101');
insert into LOAI_SACH values('TH02', N'Giải tích', '101');
insert into LOAI_SACH values('TH03', N'Lập trình', '101');
insert into LOAI_SACH values('KT01', N'Vật lí', '102');
insert into LOAI_SACH values('KT02', N'Hoá học', '102');

insert into Sach values('201', N'Toán cao cấp', N'Nguyễn Văn Thẩm', N'Toán', 'Toán rời rạc', '101', 'TH01');
insert into Sach values('202', N'Giải tích hàm một biến', N'Bùi Xuấn Huấn', N'Toán1', 'Giải tích', '101', 'TH02');
insert into Sach values('203', N'Giải tích hàm nhiều biến', N'Bùi Xuân Huấn', N'Toán2', 'Giải tích', '101', 'TH02');
insert into Sach values('204', N'Nhập môn lập trình', N'Nguyễn Văn Quảng', N'C', 'Ngôn ngữ C', '101', 'TH03');
insert into Sach values('205', N'Lập trìnhn Python', N'Đặng Bá Hiệp', N'Python', 'Lập trình Python', '101', 'TH03');
insert into Sach values('206', N'Vật lí đại cương', N'Trịnh Xuân Thanh', N'Vật lí', 'Vật lí cơ bản', '102', 'KT01');
insert into Sach values('207', N'Hoá học đại cương', N'Trần Minh Phương Anh', N'Hoá học', 'Hoá học cơ bản', '102', 'KT02');

insert into XEM_SACH values('001' , '201');
insert into XEM_SACH values('003' , '207');
insert into XEM_SACH values('004' , '202');

insert into XEM_LOAI_SACH values('001' , 'TH01');
insert into XEM_LOAI_SACH values('002' , 'TH03');
insert into XEM_LOAI_SACH values('005' , 'KT01');
insert into XEM_LOAI_SACH values('007' , 'KT02');


















