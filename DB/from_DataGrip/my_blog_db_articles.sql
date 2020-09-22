create table articles
(
    id_article   int unsigned auto_increment
        primary key,
    id_category  smallint unsigned                     not null,
    id_user      int unsigned                          not null,
    articleTitle varchar(256)                          not null,
    content      text                                  not null,
    publishDate  timestamp default current_timestamp() not null,
    isModerated  bit       default b'0'                not null,
    constraint articles_categories_id_category_fk
        foreign key (id_category) references categories (id_category),
    constraint articles_users_id_user_fk
        foreign key (id_user) references users (id_user)
);

create index articles_id_category_index
    on articles (id_category);

INSERT INTO my_blog_db.articles (id_article, id_category, id_user, articleTitle, content, publishDate, isModerated) VALUES (2, 4, 14, 'Some title', 'ыдлотплытилпмтжывдпмьы', '2020-09-18 11:12:18', false);
INSERT INTO my_blog_db.articles (id_article, id_category, id_user, articleTitle, content, publishDate, isModerated) VALUES (3, 1, 16, 'asdefas', 'фывафвыа', '2020-09-18 11:12:47', false);
INSERT INTO my_blog_db.articles (id_article, id_category, id_user, articleTitle, content, publishDate, isModerated) VALUES (4, 2, 15, 'sdfsf', 'sdfsdf', '2020-09-18 11:13:15', false);
INSERT INTO my_blog_db.articles (id_article, id_category, id_user, articleTitle, content, publishDate, isModerated) VALUES (5, 3, 13, 'some article', 'text text text', '2020-09-18 11:30:51', false);
INSERT INTO my_blog_db.articles (id_article, id_category, id_user, articleTitle, content, publishDate, isModerated) VALUES (7, 1, 14, 'sfsdfs', 'ааааа', '2020-09-18 11:43:01', false);
INSERT INTO my_blog_db.articles (id_article, id_category, id_user, articleTitle, content, publishDate, isModerated) VALUES (8, 3, 13, 'news of America', 'good news', '2020-09-18 18:10:53', false);
INSERT INTO my_blog_db.articles (id_article, id_category, id_user, articleTitle, content, publishDate, isModerated) VALUES (9, 4, 16, 'Kolya''s super article', 'some looong text', '2020-09-18 18:25:26', false);