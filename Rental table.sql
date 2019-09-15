CREATE TABLE IF NOT EXISTS `rental`(
   `rental_id` INT UNSIGNED AUTO_INCREMENT,
   `userid` INT NOT NULL,
   `carsid` INT NOT NULL,
   `start_date` DATE,
   `end_date` DATE,
   `pickup_location` varchar(200),
   `dropoff_location` varchar(200),
   PRIMARY KEY ( `rental_id` )
)
