create schema bobenterprise;
use bobenterprise;

CREATE TABLE buyers (
    id INT(10) NOT NULL AUTO_INCREMENT,
    fname VARCHAR(32) DEFAULT NULL,
    lname VARCHAR(32) DEFAULT NULL,
    email VARCHAR(255) DEFAULT NULL, 
    primary key (id)
);

Create table items(
	itemName varchar(255) default null,
    itemNumber int(32) not null,
	price  REAL(10,2)  default null,
    primary key (itemNumber)
);

CREATE TABLE purchaseItem (
    purchaseId INT(10) NOT NULL AUTO_INCREMENT,
    productId INT(10) NOT NULL,
    buyersId INT(10) NOT NULL,
    numberOfItems INT(10) DEFAULT NULL,
    totalPrice REAL(10,2) DEFAULT NULL,
    PRIMARY KEY (purchaseId , productId),
    FOREIGN KEY (productId)
        REFERENCES items (itemNumber),
    FOREIGN KEY (buyersId)
        REFERENCES buyers(id)
);
