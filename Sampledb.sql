CREATE TABLE `User`
(
    userID mediumint(6) not null,
    first_name varchar(30) not null,
    last_name varchar(30),
    email varchar(60) not null,
    password char(60) not null,
    registration_date datetime not null,
    user_level tinyint(1) not null
                       
);