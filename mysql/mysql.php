<?php
create database blog;

create table admin(
id int unsigned auto_increment key,
name varchar(20) not null unique,
pin varchar(32) not null
);

create table article(
id int unsigned auto_increment key,
title varchar(255) not null,
content text,
dtime datetime default now()
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

?>