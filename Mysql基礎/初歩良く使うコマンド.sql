-- ログインするとき
mysql -u root

-- データベースを作るとき
create database namae;

-- 使うデータベースの指定
use namae;

-- テーブルを作るとき
create table tablenamae(id int,name varchara(20),age int) values (1,"名前",30);

-- テーブルを見たいとき
show tables;

-- テーブルの中身を見たいとき
select * from tablenamae;

-- データベースの一覧を見たいとき
show databases;
