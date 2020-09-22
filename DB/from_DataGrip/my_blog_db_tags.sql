create table tags
(
    id_tag  smallint unsigned auto_increment
        primary key,
    tagName varchar(64)  not null,
    tagURL  varchar(128) not null,
    constraint tags_tagName_uindex
        unique (tagName)
);

INSERT INTO my_blog_db.tags (id_tag, tagName, tagURL) VALUES (1, 'COVID-19', '111.ua');
INSERT INTO my_blog_db.tags (id_tag, tagName, tagURL) VALUES (2, 'manchester-united', 'm-u.ua');
INSERT INTO my_blog_db.tags (id_tag, tagName, tagURL) VALUES (3, 'kievsport', 'kievsport.ua');
INSERT INTO my_blog_db.tags (id_tag, tagName, tagURL) VALUES (4, 'canhappends', 'canhappends.ua');