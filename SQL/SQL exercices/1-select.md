#Select

## Ex 1
1.only cities
SELECT ville from Météo;

2.all cities and their maximum temperature
SELECT ville, haut from Météo;

3.all cities and their minimum temperature
SELECT ville, bas from Météo;

4.Where cities whose maximum temperature exceeds 27 degrees
SELECT ville, haut from Météo where haut > 27;

5.Where cities whose minimum temperature will be less than or equal to 15 degrees
SELECT ville, bas from Météo where bas <= 15;

6.Where cities with a minimum temperature of 15 degrees
SELECT ville, bas from Météo where bas <15;

7.Where cities whose minimum temperature will NOT be equal to 15 degrees
SELECT ville from Météo where bas < 15 and bas != 15;

8.Where cities whose name begins with "Br"
SELECT ville from Météo where ville like "Br%";

9.Where cities with a maximum temperature between 26 and 28 degrees
SELECT ville, haut from Météo WHERE haut <= 28 and haut >= 26;

10.Where cities with a minimum temperature of 14 or 16 degrees
SELECT ville, bas from Météo WHERE bas <= 16 and bas >= 14;

11.Where cities with a maximum temperature of 26 or higher and a minimum temperature of less than 14

SELECT ville, haut, bas from Météo WHERE haut >= 26 and bas >= 14

## Ex 2

1.Displays all octocats and their data
SELECT * from octocats;

2.Shows only the first names
select firstname from octocats;


3.Display the first names, names and ages of each octocat
select firstname, lastname, age from octocats;

4.Shows octocats whose name starts with 'N'
select firstname from octocats where firstname like "N%";

5.Display the first and last name of the octocats of promo promo-central
select firstname, lastname from octocats where promo like "promo1-central";


6.Display the first name, last name and year of birth of the octocats of the promo "promo1-anderlecht"
select firstname, lastname, birthdate from octocats where promo like "promo1-anderlecht";

## Ex 3
1.Display the first and last name of all octocats, in ascending alphabetical order of the first name.
select firstname, lastname from octocats order by firstname asc;

2.Display the first and last name of all octocats, in descending alphabetical order of the surname.
select firstname, lastname from octocats order by lastname desc;

3.Display the first name, last name and age of all octocats, from the youngest to the oldest.
select firstname, lastname, age from octocats order by age asc;

4.Display the first name, last name and age of all octocats, from the oldest to the youngest.
select firstname, lastname, age from octocats order by age desc;

5.Display the first name, last name and age of all octocats, from the youngest to the oldest, from the "promo1-central" promo.
select firstname, lastname, age from octocats where promo like "promo1-central" order by age asc;

6.Display the first name, last name and age of all octocats, from the youngest to the oldest, from the "promo1-central" promo, whose age is between 23 and 28.
select firstname, lastname, age from octocats where promo like "promo1-central" and age >=23 and age <=28 order by age asc;

7.Displays the first name, last name, age and gender of all octocats, from the youngest to the oldest, from the "promo1-central" promo and between 25 and 35 years old.
select firstname, lastname, age, gender from octocats where promo like "promo1-central" and age >=25 and age <=35 order by age asc;

8.Displays the first name, last name, age and gender of all octocats, from the youngest to the oldest, from the "promo1-central" promo, which is between 25 and 35 years old and whose gender is masculine.
select firstname, lastname, age, gender from octocats where promo like "promo1-central" and age >=25 and age <=35 and gender like "m" order by age asc;

9.Display the first name, last name, age of the oldest octocate of Becode / Central. So you have to get a table with a single row.
select firstname, lastname, max(age) from octocats;

## Ex 4

1.How many boys are there in Becode?
select count(*) from octocats where gender="m";

2.How many girls are there in Becode / Central?
select count(*) from octocats where gender="f" and promo="promo1-central";

3.How many boys are there in Becode / Central?
select count(*) from octocats where gender="m" and promo="promo1-central";

4.How many octocats are there whose first name is 'Nadia' at becode?
select count(*) from octocats where firstname="Nadia";

5.On this new SQLFiddle, finds the function to display only the year of the "birthdate" column and displays the first name of all octocts and their year of birth. (hint: how do you say "year" in English?)

