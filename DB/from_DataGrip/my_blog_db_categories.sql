create table categories
(
    id_category  smallint unsigned auto_increment
        primary key,
    categoryName varchar(256) not null,
    categoryUrl  varchar(256) not null
);

INSERT INTO my_blog_db.categories (id_category, categoryName, categoryUrl) VALUES (1, 'sport', 'http://sport.ua');
INSERT INTO my_blog_db.categories (id_category, categoryName, categoryUrl) VALUES (2, 'live', 'http://live.ua');
INSERT INTO my_blog_db.categories (id_category, categoryName, categoryUrl) VALUES (3, 'cars', 'http://cars.ua');
INSERT INTO my_blog_db.categories (id_category, categoryName, categoryUrl) VALUES (4, 'health', 'http://healths.ua');
INSERT INTO my_blog_db.categories (id_category, categoryName, categoryUrl) VALUES (5, 'travels', 'http://travels.ua');