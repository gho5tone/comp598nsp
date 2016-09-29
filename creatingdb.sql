create schema bobenterprise;
use bobenterprise;

CREATE TABLE buyers (
    id INT(10) NOT NULL,
    fname VARCHAR(32) DEFAULT NULL,
    lname VARCHAR(32) DEFAULT NULL,
    email VARCHAR(255) DEFAULT NULL, 
    primary key (id)
);

Create table items(
	itemName varchar(255) default null,
    itemNumber int(32) not null,
	price int(10) default null,
    primary key (itemNumber)
);

create table purchase(
	id int(10) not null,
    userId int(10) not null,
    primary key(id),
    foreign key (userId) references buyers(id)
    );

CREATE TABLE purchaseItem (
    purchaseId INT(10) NOT NULL,
    productId INT(10) NOT NULL,
    numberOfItems INT(10) DEFAULT NULL,
    totalPrice INT(32) DEFAULT NULL,
    PRIMARY KEY (purchaseId , productId),
    FOREIGN KEY (purchaseId)
        REFERENCES purchase (id),
    FOREIGN KEY (productId)
        REFERENCES items (itemNumber)
);
