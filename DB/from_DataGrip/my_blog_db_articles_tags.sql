create table `articles-tags`
(
    id_article int unsigned      not null,
    id_tag     smallint unsigned not null,
    primary key (id_article, id_tag),
    constraint `articles-tags_articles_id_article_fk`
        foreign key (id_article) references articles (id_article)
            on update cascade on delete cascade,
    constraint `articles-tags_tags_id_tag_fk`
        foreign key (id_tag) references tags (id_tag)
            on update cascade on delete cascade
);

INSERT INTO my_blog_db.`articles-tags` (id_article, id_tag) VALUES (2, 1);
INSERT INTO my_blog_db.`articles-tags` (id_article, id_tag) VALUES (2, 3);
INSERT INTO my_blog_db.`articles-tags` (id_article, id_tag) VALUES (2, 4);
INSERT INTO my_blog_db.`articles-tags` (id_article, id_tag) VALUES (3, 1);
INSERT INTO my_blog_db.`articles-tags` (id_article, id_tag) VALUES (5, 3);
INSERT INTO my_blog_db.`articles-tags` (id_article, id_tag) VALUES (5, 4);