CREATE DATABASE final_project;

CREATE TABLE IF NOT EXISTS final_project.music (
    id int UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name varchar(255) NOT NULL, 
    artist varchar(255) NOT NULL,
    album varchar(255) NOT NULL,
    image LONGBLOB NOT NULL,
    genre varchar(255) NOT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    deleted_at DATETIME NULL
)

