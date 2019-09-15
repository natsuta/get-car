CREATE
  TABLE Cars
  (
    CarsID       INTEGER NOT NULL ,
    Brand        VARCHAR2 (20) ,
    Type         VARCHAR2 (20) ,
    Colour       VARCHAR2 (20) ,
    Location     VARCHAR2 (50) ,
    Status       VARCHAR2 (50) ,
    Rate         NUMBER ,
    Users_UserID INTEGER NOT NULL
  ) ;
  
  CREATE
  TABLE Users
  (
    UserID    INTEGER NOT NULL ,
    Firstname VARCHAR2 (30) ,
    LastName  VARCHAR2 (30) ,
    Email     VARCHAR2 (30) ,
    Mobile    INTEGER
  ) ;
  
  
ALTER TABLE Cars ADD CONSTRAINT Cars_PK PRIMARY KEY ( CarsID ) ;



ALTER TABLE Users ADD CONSTRAINT Users_PK PRIMARY KEY ( UserID ) ;


ALTER TABLE Cars ADD CONSTRAINT Cars_Users_FK FOREIGN KEY ( Users_UserID )
REFERENCES Users ( UserID ) ;




