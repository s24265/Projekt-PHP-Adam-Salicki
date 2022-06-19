create table if not exists user
(
    id int auto_increment
        primary key,
    username varchar(255) not null,
    password varchar(255) not null
);

INSERT INTO giganewsdb.user (id, username, password) VALUES (1, 'admin', '1234');