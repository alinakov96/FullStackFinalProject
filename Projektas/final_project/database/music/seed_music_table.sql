USE final_project;

DELETE FROM music;

ALTER TABLE music AUTO_INCREMENT = 1;

INSERT INTO music (
    name,
    artist,
    album,
    image,
    genre,
    tracks
)
VALUES
('choices', 'Alex Koff', 'Sunset/Dreams', 'alex-koff-sunset-dreams.jpg', 'instrumental', 'alex-koff-choices.mp3'),
('thursday night', 'Bubbly Introvert', 'Sunset/Dreams', 'alex-koff-sunset-dreams.jpg', 'lofi', 'alex-koff-thursday-night.mp3'),
('uncertainty', 'Alex Koff', 'Sunset/Dreams', 'alex-koff-sunset-dreams.jpg', 'ambient', 'alex-koff-uncertainty.mp3');