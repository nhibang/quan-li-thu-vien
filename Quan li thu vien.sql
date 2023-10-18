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

