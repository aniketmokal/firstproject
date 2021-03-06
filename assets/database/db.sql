create table pro_users(
	us_id int auto_increment primary key,
	us_name varchar(100),
	us_mobile bigint,
	us_email varchar(100),
	us_password varchar(100),
	us_status tinyint default 0,
	us_type tinyint default 1,
	us_otp smallint,
	us_photo text
);

create table pro_hotel(
	ho_id int auto_increment primary key,
	ho_name varchar(100),
	ho_userid int
);

alter table pro_hotel add column ho_photo text after ho_name;

create table pro_hotel_branch(
	br_id int auto_increment primary key,
	br_name varchar(100),
	br_hotel_id int
);

create table pro_hotel_room(
	ro_id int auto_increment primary key,
	ro_no varchar(100),
	ro_photo text,
	ro_price decimal(6,2),
	ro_brid int
);

alter table pro_hotel_room add column ro_price decimal(6,2) after ro_photo
--  9999.99

create table pro_room_book(
	book_id int auto_increment primary key,
	book_ro_id int,
	book_ro_uid int,
	book_date date,
	book_date_time timestamp
);

