
--ログインしたら文字化け対策をしておく（xamppの時だけ）
-- xamppは一旦cp932に設定する。コマンドプロンプトがcp932の為、utf8でも文字化けする。回避策はあるが、そこの説明までは今回は時間が掛かるのでしません。と学生に伝える。

-- やり方
-- １，xamppのコントロールパネルのmysqlのconfigのmy.iniを開く
-- ２，character　を検索する
-- ３，character-set-serverのところを全部cp932にする
-- ４，default-character-set=cp932　も行う
-- ※先頭に#マークがついていたら、それはコメント扱い



-- ログイン
mysql -u ユーザー名 -p パスワード
--xamppのデフォルト
mysql - u root 

-- 上記だけで入れる




-- データベースを作る
create database test;

-- DB上の文字コードの確認
show variables like "%chara%";
-- %の意味はワイルドカードで、前後に何か文字が入っている場合等
-- likeは曖昧検索。ワイルドカードとセットで使う事が多い

-- テーブル作成
create table samplebox (id int auto_increment not null primary key,name varchar(100));

insert into samplebox (name) values("名前ちゃん");
insert into samplebox (name) values("佐藤");
insert into samplebox (name) values("極道");
insert into samplebox (name) values("東西南北");

-- auto_incrementは自動的に番号を与えていくオプション
-- not null　はnullを許可しないように設定する
-- primary key　はこのテーブルの主キーとなる。（あとでリレーショナルを行う際に設定しておく事になる。キーを設定すると他のテーブルとの連携がしやすくなる）

-- 全カラム抽出
select * from samplebox;

-- 課題
-- １，データベースのtest2を作り、そのtest2の中にsample1とsample2というテーブルを作りなさい。

-- ２，上記のsample1のカラムはid,name,class,addressの4つのカラムを作りなさい。
-- データ型はそれぞれint、varchar、varchar、varcharとします。
-- 尚、固定長は自由に決めなさい。

-- ３，sample2のテーブルにはcus_id,cus_moneyの2つのカラムを作りなさい。
-- データ型は両方ともintとします。

-- ４，sample1に、4つほどのレコードをそれぞれ適当に入れなさい。

-- ５，上記のレコードを入れた後、selectでidとnameだけを取り出しなさい。