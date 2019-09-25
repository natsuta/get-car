



CREATE
  TABLE Bookings
  (
    BookingID        INTEGER NOT NULL ,
    Pickup_location  varchar(50) NOT NULL,
    Return_location  varchar(50) NOT NULL,
    Bodytype         varchar(50) NOT NULL,
    Vehicle_selected varchar(50) NOT NULL,
    Pickup_date      DATE ,
    Return_date      DATE ,
    Users_UesrID     INTEGER NOT NULL
  ) ;



CREATE
  TABLE Cars
  (
    CarsID       INTEGER NOT NULL ,
    Brand        varchar(50) NOT NULL,
    Type         varchar(50) NOT NULL,
    Colour       varchar(50) NOT NULL,
    Location     varchar(50) NOT NULL,
    Status       varchar(50) NOT NULL,
    Rate         DOUBLE ,
    Users_UesrID INTEGER NOT NULL
  ) ;



CREATE
  TABLE Users
  (
    UesrID    INTEGER NOT NULL ,
    Firstname varchar(50) NOT NULL,
    Lastname  varchar(50) NOT NULL,
    Email     varchar(50) NOT NULL,
    Mobile    INTEGER
  ) ;
  
  ALTER TABLE Bookings ADD CONSTRAINT Bookings_PK PRIMARY KEY ( BookingID ) ;
  
  ALTER TABLE Cars ADD CONSTRAINT Cars_PK PRIMARY KEY ( CarsID ) ;
ALTER TABLE Users ADD CONSTRAINT Users_PK PRIMARY KEY ( UesrID ) ;


ALTER TABLE Bookings ADD CONSTRAINT Bookings_Users_FK FOREIGN KEY (
Users_UesrID ) REFERENCES Users ( UesrID ) ;

ALTER TABLE Cars ADD CONSTRAINT Cars_Users_FK FOREIGN KEY ( Users_UesrID )
REFERENCES Users ( UesrID ) ;

