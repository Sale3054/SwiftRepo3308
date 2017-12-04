create table if not exists usrInfo (
‘id’ int(4) not null auto_increment,
‘login’ varchar(20) not null,
‘password’ varchar(20) not null,
‘email’ varchar(20) not null,
primary key (‘id’, ‘login’)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=8;
insert into usrInfo (‘id’, ‘login’, ‘password’, ‘email’) values
(0001, 'spencer', '****', 'spmi@ex.com'),
(0002, 'sam', '*****', 'sale3054@c.com'),
(0003, 'telly', '*******', 'teum@c.com');

create table if not exists colorInfo (
‘id’ int(4) not null auto_increment,
‘colorschemes’ varchar(10) not null,
‘numschemes’ varchar(6) not null,
primary key (‘id’, ‘colorschemes’)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=8;
insert into colorInfo (‘id’, ‘colorschemes’, ‘numschemes’) values
(0001, 'green', '00FF21'),
(0001, 'red', 'FF0000'),
(0002, 'green', '00FF21'),
(0002, 'red', 'FF0000'),
(0003, 'blue', '4800FF');
