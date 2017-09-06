CREATE TABLE Passenger(
	passenger_id INT AUTO_INCREMENT,
						passenger_name VARCHAR(20),
						apt_number VARCHAR(10),
						street_name VARCHAR(10),
						hometown VARCHAR(10),
						traveled_distance INT,
						PRIMARY KEY(passenger_id) );
                        
CREATE TABLE Admin (
admin_id  INT AUTO_INCREMENT ,
					first_name VARCHAR(15) NOT NULL, 
					last_name VARCHAR(15) NOT NULL, 
					PRIMARY KEY (admin_id) );


						
CREATE TABLE Taxi(	reg_number VARCHAR(10),
					type VARCHAR (10),
					capacity int,
					PRIMARY KEY(reg_number));
CREATE TABLE Tour ( tour_id VARCHAR(10),
					date DATE,
					time TIME,
					Customer_feed_back VARCHAR(50),
					due_charges NUMERIC(10,2),
					reg_number VARCHAR(10),
					PRIMARY KEY (tour_id),
					FOREIGN KEY (reg_number) REFERENCES Taxi(reg_number),
					CHECK (due_charges > 0));
					
CREATE TABLE Taxi_Driver(	driver_id INT AUTO_INCREMENT,
							first_name VARCHAR(20) NOT NULL,
							last_name VARCHAR(20) NOT NULL,
							date_of_birth DATE NOT NULL,
							liscense_no VARCHAR(15) NOT NULL ,
							apt_number VARCHAR(5),
							street_name VARCHAR(20),
							home_town VARCHAR(20),
							min_fee NUMERIC(10,2),
							availability BOOLEAN NOT NULL,
							no_of_accidents INT,
							no_of_police_complains INT,
							UNIQUE(liscense_no),
							PRIMARY KEY(driver_id));
							
CREATE TABLE Passenger_Request (request_id INT AUTO_INCREMENT,
								passenger_id INT NOT NULL,
								pickup_location VARCHAR (20) NOT NULL,
								dropoff_location VARCHAR (20) NOT NULL,
								split_fare NUMERIC (10,2),
								max_payment NUMERIC (10,2),
								tour_date DATE NOT NULL,
								tour_time TIME NOT NULL,
								taxi_type VARCHAR(10),
								PRIMARY KEY(request_id),
								FOREIGN KEY(passenger_id) REFERENCES Passenger(passenger_id));
								

CREATE TABLE driver_login( username VARCHAR(10) NOT NULL,
							password VARCHAR(15) NOT NULL,
							driver_id INT ,
							PRIMARY KEY (username),
							FOREIGN KEY (driver_id) REFERENCES Taxi_Driver(driver_id));
							
CREATE TABLE passenger_login(username VARCHAR(10) NOT NULL,
							password VARCHAR(15) NOT NULL,
							passenger_id INT ,
							PRIMARY KEY (username),
							FOREIGN KEY (passenger_id) REFERENCES Passenger(passenger_id));
							
							
							
CREATE TABLE admin_login(username VARCHAR(10) NOT NULL,
						password VARCHAR(15) NOT NULL,
						admin_id INT,
						PRIMARY KEY (username),
						FOREIGN KEY (admin_id) REFERENCES Admin(admin_id));
						
CREATE TABLE Accident_report(accident_report_id INT AUTO_INCREMENT,
							reg_number VARCHAR(15),
							date DATE,
							time TIME,
							police_report_number VARCHAR(15),
							PRIMARY KEY(accident_report_id ),
							FOREIGN KEY(reg_number) REFERENCES Taxi(reg_number) );
							
CREATE TABLE admin_areports(admin_id INT,
					accident_report_id INT,
					PRIMARY KEY(admin_id,accident_report_id),
					FOREIGN KEY (admin_id) REFERENCES Admin(admin_id),
					FOREIGN KEY (accident_report_id) REFERENCES accident_report(accident_report_id));
					
CREATE TABLE Taxi_admin( admin_id INT,
						driver_id INT,
						PRIMARY KEY(admin_id,driver_id) ,
						FOREIGN KEY (admin_id) REFERENCES Admin(admin_id),
						FOREIGN KEY(driver_id) REFERENCES Taxi_Driver(driver_id));						
CREATE TABLE admin_pasenger(admin_id VARCHAR(10),
						passenger_id VARCHAR(10),
						PRIMARY KEY(admin_id,passenger_id),
						FOREIGN KEY (admin_id) REFERENCES Admin(admin_id),
						FOREIGN KEY(passenger_id) REFERENCES Passenger(passenger_id));
create table driver_reservation(
driver_id INT NOT NULL,

res_day DATE NOT NULL,

res_time TIME NOT NULL,

FOREIGN KEY (driver_id) REFERENCES taxi_driver(driver_id)

);



