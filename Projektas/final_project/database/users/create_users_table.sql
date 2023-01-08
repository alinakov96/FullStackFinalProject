CREATE TABLE IF NOT EXISTS final_project.users (
    id int UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name varchar(255) NOT NULL, 
    last_name varchar(255) NOT NULL,
    email varchar(50) NOT NULL,
    password varchar(255) NOT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    deleted_at DATETIME NULL
)
