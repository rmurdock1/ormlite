
create database orm;

create table user (
    firstName text,
    lastName  text,
    age INTEGER
);

insert into user (firstName, lastName, age) values
    ('new', 'input', 24);
