DROP TABLE if EXISTS contractor;

CREATE TABLE contractor(userID VARCHAR(10),
 firstName VARCHAR(25), lastName VARCHAR(25),
  organizationName VARCHAR(25),
   interest1 VARCHAR(20), interest2 VARCHAR(20), interest3 VARCHAR(20),
   possibleSalary VARCHAR(10), phone VARCHAR(20), email VARCHAR(50),
   twitter VARCHAR(25), instagram VARCHAR(50), facebook VARCHAR(50),
    linkedIn VARCHAR(50), skill1 VARCHAR(30), skill1Lvl VARCHAR(10),
    skill2 VARCHAR(30), skill2Lvl VARCHAR(10), skill3 VARCHAR(30)
  , skill3Lvl VARCHAR(10), skill4 VARCHAR(30), skill4Lvl VARCHAR(10),
   skill5 VARCHAR(30), skill5Lvl VARCHAR(10), resume VARCHAR(100));
