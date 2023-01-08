USE final_project;

ALTER TABLE music 
ADD COLUMN tracks LONGBLOB NULL AFTER genre;