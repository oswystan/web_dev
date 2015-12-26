################################
# INIT DATABASE
################################
drop database if exists epmp;
create database epmp;
use epmp;

create table user_base
(
    id int auto_increment primary key,
    username char(16) not null,
    nickname char(32),
    email varchar(32),
    phone char(16),
    tel char(16),
    address varchar(32),
    picture varchar(32),
    language char(8),
    password char(16),
    index (username)
);
insert into user_base(id, username, password, nickname) values (0, "root", "1", "super");
insert into user_base(id, username, password, nickname) values (0, "wangyu", "w", "ironman");
insert into user_base(id, username, password, nickname) values (0, "pengyan", "p", "beauty");

create table group_base
(
    id int auto_increment primary key,
    group_name char(32) not null,
    create_user_id int not null,
    create_date datetime not null,
    description varchar(32),
    index (group_name)
);
insert into group_base values(0, "manager", 1, now(), "first manager group");
insert into group_base values(0, "opensource-manager", 1, now(), "opensource code manager group");
insert into group_base values(0, "developer", 1, now(), "first developer group");

create table group_user
(
    group_id int not null,
    user_id int not null,
    index (group_id, user_id)
);
insert into group_user values(1, 1);
insert into group_user values(2, 2);
insert into group_user values(3, 3);

create table product_base
(
    id int auto_increment primary key,
    product_name char(32) not null,
    create_user_id int not null,
    create_date datetime not null,
    manage_group_id int not null,
    develop_group_id int not null,
    flags int not null,
    picture varchar(32),
    description varchar(32),
    index (product_name)
);
insert into product_base values(0, "omx-framework", 2, now(), 1, 1, 0, "", "openmax framework develop");
insert into product_base values(0, "common-lib", 1, now(), 1, 2, 1, "", "one common lib for everyone");
insert into product_base values(0, "epmp", 1, now(), 1, 2, 1, "", "enterprise product manage platform");
insert into product_base values(0, "mysql", 1, now(), 1, 2, 1, "", "mysql project");
insert into product_base values(0, "android", 1, now(), 2, 3, 1, "", "android project");
insert into product_base values(0, "nginex", 1, now(), 2, 3, 1, "", "ngniex project");
insert into product_base values(0, "jquery", 1, now(), 2, 3, 1, "", "jquery project");
insert into product_base values(0, "openbiz", 1, now(), 2, 3, 1, "", "openbiz project");
insert into product_base values(0, "bootstrap", 1, now(), 1, 2, 1, "", "bootstrap project");
insert into product_base values(0, "github", 1, now(), 1, 1, 1, "", "github project");

create table version_base
(
    id int auto_increment primary key,
    version_no char(32) not null,
    create_user_id int not null,
    create_date datetime not null,
    product_id int not null,
    description varchar(32),
    delivery_date datetime,
    state int,
    configuration_url varchar(32),
    daily_build_url varchar(64),
    delivery_url varchar(64),
    index (version_no)
);
insert into version_base values(0, "v1.0", 2, now(), 1, "version 1.0", now(), 0, "", "", "");
insert into version_base values(0, "v2.0", 2, now(), 1, "version 2.0", now(), 0, "", "", "");
insert into version_base values(0, "v3.0", 2, now(), 1, "version 3.0", now(), 0, "", "", "");
insert into version_base values(0, "v4.0", 2, now(), 1, "version 4.0", now(), 0, "", "", "");
insert into version_base values(0, "v5.0", 2, now(), 1, "version 5.0", now(), 0, "", "", "");

insert into version_base values(0, "v1.5", 2, now(), 5, "cupcake", now(), 0, "", "", "");
insert into version_base values(0, "v1.6", 2, now(), 5, "donut", now(), 0, "", "", "");
insert into version_base values(0, "v2.0", 2, now(), 5, "eclair", now(), 0, "", "", "");
insert into version_base values(0, "v2.3", 2, now(), 5, "gingerbread", now(), 0, "", "", "");
insert into version_base values(0, "v3.0", 2, now(), 5, "honeycombo", now(), 0, "", "", "");
insert into version_base values(0, "v4.0", 2, now(), 5, "ice cream sandwich", now(), 0, "", "", "");



create table feature_base
(
    id int auto_increment primary key,
    abbreviation char(32) not null,
    create_user_id int not null,
    create_date datetime not null,
    product_id int not null,
    version_id int not null,
    owner int,
    state int,
    start_time datetime,
    end_time datetime,
    description varchar(64),
    index (abbreviation)
);
insert into feature_base values(0, "basic framework", 2, now(), 1, 1, 0, 0, now(), now(), "the basic openmx");
insert into feature_base values(0, "mediaplayer", 2, now(), 5, 6, 0, 0, now(), now(), "mediaplayer codec");
insert into feature_base values(0, "camera", 2, now(), 5, 6, 0, 0, now(), now(), "camera-hal");
insert into feature_base values(0, "ion", 2, now(), 5, 6, 0, 0, now(), now(), "ion driver");

create table feature_backlog
(
    id int auto_increment primary key,
    feature_id int,
    create_user_id int,
    create_date datetime,
    description varchar(64),
    index (feature_id)
);

