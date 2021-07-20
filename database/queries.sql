SELECT * FROM sample.persons ORDER BY id ASC;

TRUNCATE ONLY sample.persons RESTART IDENTITY;

SHOW search_path;
SET search_path="sample";

COPY sample.persons(id,first_name,last_name,dob,email) 
FROM 'D:\1-github-workspace\1-tailieuweb\1-laravel-8x\database\persons.csv'
WITH CSV ENCODING 'UTF8' ; 