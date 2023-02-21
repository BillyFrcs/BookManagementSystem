CREATE DATABASE BookDataSystemDB;

CREATE TABLE BookData(
	ID INT NOT NULL AUTO_INCREMENT,
    Name VARCHAR(50) NOT NULL,
    Author VARCHAR(100) NOT NULL,
    ISBN NVARCHAR(50) NOT NULL,
    DateOfPublishing DATE NOT NULL,

    PRIMARY KEY(ID)
);

INSERT INTO BookDataSystemDB.BookData(Name, Author, ISBN, DateOfPublishing) 
    VALUES ('C++ Master', 'Sendy', '11891222', '2022-04-19');

UPDATE BookDataSystemDB.BookData SET Name = 'Unity Engine Basic' WHERE ID = 1;    

DROP TABLE BookData;

SELECT * FROM BookDataSystemDB.BookData;

ALTER TABLE BookData RENAME COLUMN YearOfPublication TO DateOfPublishing;
ALTER TABLE BookData DROP CreatedAt;