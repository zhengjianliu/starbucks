CREATE TABLE chaiteas(teaID INT UNSIGNED AUTO_INCREMENT NOT NULL, 
teaName VARCHAR(20) NOT NULL, 
servingSize INT NOT NULL, 
sizeName VARCHAR(20) NOT NULL, 
calories INT NOT NULL, 
caloriesFromFat INT NOT NULL, 
totalFat INT NOT NULL, 
saturatedFat INT NOT NULL, 
transFat INT NOT NULL, 
cholesterol INT NOT NULL, 
sodium INT NOT NULL, 
totalCarbohydrates INT NOT NULL, 
dietaryFiber INT NOT NULL,
sugars INT NOT NULL, 
protein INT NOT NULL, 
caffeine INT NOT NULL, 
dvtotalFat INT NOT NULL, 
dvsaturatedFat INT NOT NULL, 
dvcholesterol INT NOT NULL, 
dvsodium INT NOT NULL, 
dvtotalCarbohydrates INT NOT NULL, 
dvprotein INT NOT NULL, 
PRIMARY KEY(teaID));


INSERT INTO chaiteas VALUES (NULL, 'Chai Latte', '16', 'Grande', 240, 40, 4.5, 2, 0, 20, 115, 45, 0, 42, 8, 95, 6, 10, 7, 5, 16, 16);

INSERT INTO chaiteas VALUES (NULL, 'Chai Latte', '20', 'Venti', 310, 50, 6, 3, 0, 25, 150, 56, 0, 53, 10, 120, 8, 15, 8, 7, 20, 20);

INSERT INTO chaiteas VALUES (NULL, 'Teavana Chai Latte', '16', 'Grande', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 40, 0, 0, 0, 0, 0, 0, 0);

INSERT INTO chaiteas VALUES (NULL, 'Teavana Chai Latte', '20', 'Venti', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 40, 0, 0, 0, 0, 0, 0, 0);

ALTER TABLE chaiteas ADD teaPrice DECIMAL (3,2) NOT NULL;

UPDATE chaiteas SET teaPrice=4.45 WHERE teaID=1;
UPDATE chaiteas SET teaPrice=4.75 WHERE teaID=2;
UPDATE chaiteas SET teaPrice=2.65 WHERE teaID=3;
UPDATE chaiteas SET teaPrice=2.95 WHERE teaID=4;
