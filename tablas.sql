create table Users(
  id int(4),
  dni varchar(9) UNIQUE,
  name varchar(12),
  surname varchar(20),
  birth date,
  address varchar(40),
  phone int(9),
  username varchar(15) UNIQUE,
  passwd varchar(512),
  email varchar(50) UNIQUE,
  isAdmin boolean,
  PRIMARY KEY(id)
);
create table Flights(
  id int(4),
  duration int(3),
  origin varchar(15),
  destination varchar(15),
  pilot1 varchar(12),
  pilot2 varchar(12),
  tickets int(3),
  tickets_sold int(3),
  fdate date,
  price float(4),
  PRIMARY KEY(id)
);
