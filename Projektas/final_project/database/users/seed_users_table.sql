USE final_project;

DELETE FROM users;

ALTER TABLE users AUTO_INCREMENT = 1;

INSERT INTO users (
                   first_name,
                   last_name,
                   email,
                   password
                   )
VALUES
    ('John', 'Smith', 'john@smith.com', '$2a$12$24b47po1DctpuDXCpcrzQ.I7/wX2HwQIV1CBN7LximlfNjM0L7Ley'),
    ('Petras', 'Petrauskas', 'petras@petrulis.lt', '$2a$12$cAaa/IG/.yvUv3mlztS83OHCoiC0ngAkH9zKyncZfB74SLL1wQ9wa'),
    ('Monika', 'Marija', 'monika@marija.lt', '$2a$12$m4qkiwlnp4hUc167XT0fkOJ172wUoW/MrS336Tu52sktGZOZKrDae');