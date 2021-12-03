create table customers
( customerid int unsigned not null auto_increment primary key,
  name char(50) not null,
);

create table orders
( orderid int unsigned not null auto_increment primary key,
  customerid int unsigned not null,
  amount float(6,2),
  date date not null
);

create table bags
(   reference char(13) not null primary key,
    title char(100),
    price float(5,2)
);

create table order_items
( orderid int unsigned not null,
reference char(13) not null,
  quantity tinyint unsigned,
  primary key (orderid,reference)

);

