



CREATE
  TABLE Bookings
  (
    BookingID        INTEGER NOT NULL AUTO_INCREMENT,
    Pickup_location  varchar(50) NOT NULL,
    Return_location  varchar(50) NOT NULL,
    Bodytype         varchar(50) NOT NULL,
    Vehicle_selected varchar(50) NOT NULL,
    Pickup_date      DATE ,
    Return_date      DATE ,
    Primary	key (BookingID)
  ) ;



CREATE
  TABLE Cars
  (
    CarsID       INTEGER NOT NULL AUTO_INCREMENT,
    Brand        varchar(50) NOT NULL,
    Type         varchar(50) NOT NULL,
    Colour       varchar(50) NOT NULL,
    Location     varchar(50) NOT NULL,
    Status       varchar(50) NOT NULL,
    Rate         DOUBLE ,
	Primary key	(CarsID)
  ) ;



CREATE
  TABLE Users
  (
    UsersID    INTEGER NOT NULL AUTO_INCREMENT,
    Firstname varchar(50) NOT NULL,
    Lastname  varchar(50) NOT NULL,
    Email     varchar(50) NOT NULL,
    Mobile    varchar(50) NOT NULL,
	Primary	key (UsersID)
  ) ;
  
