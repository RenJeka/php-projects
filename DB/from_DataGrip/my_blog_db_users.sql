create table users
(
    id_user          int(11) unsigned auto_increment
        primary key,
    userName         varchar(64)  not null,
    userSurname      varchar(128) not null,
    email            varchar(256) not null,
    userPasswordHash varchar(256) not null,
    address          varchar(256) null,
    constraint users_email_uindex
        unique (email)
);

INSERT INTO my_blog_db.users (id_user, userName, userSurname, email, userPasswordHash, address) VALUES (13, 'Иван', 'Иванов', 'ivanIvanov@i.ua', '2g5sdf6s', '222 pravdy street');
INSERT INTO my_blog_db.users (id_user, userName, userSurname, email, userPasswordHash, address) VALUES (14, 'Petro', 'Sagaidachnyi', 'petro@gmail.com', '5s64dg6sd6', 'Zapirizka Sich');
INSERT INTO my_blog_db.users (id_user, userName, userSurname, email, userPasswordHash, address) VALUES (15, 'Sveta', 'Malynko', 'malunkosvetlana@i.ua', '2d1s32d1f', null);
INSERT INTO my_blog_db.users (id_user, userName, userSurname, email, userPasswordHash, address) VALUES (16, 'Kolya', 'Malynko', 'malunkomykola@i.ua', '2ds41g5ds4', null);