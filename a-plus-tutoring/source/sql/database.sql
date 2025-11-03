DROP DATABASE IF EXISTS aplus_tutoring_center;

CREATE DATABASE aplus_tutoring_center;

USE aplus_tutoring_center;

-- TABLE STUDENT
CREATE TABLE student (
    id INT NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email_address VARCHAR(100) NOT NULL,
    password CHAR(64) NOT NULL,
    grade VARCHAR(20) NULL,
    major VARCHAR(50) NULL,
    date_enrolled DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
    phone VARCHAR(20) NULL,
    PRIMARY KEY (id)
);

INSERT INTO student (id, first_name, last_name, email_address, password, grade, major, date_enrolled, phone) VALUES
(1, "Emily", "Carter", "ec3414@rit.edu", "e8e9689deac5bac977b64e85c1105bd1419608f1223bdafb8e5fbdf6cf939879", "Senior", "Computer Science", "2022-08-29", "(585) 341-7721"),
(2, "Jacob", "Nguyen", "jn5161@rit.edu", "c35d6aaf3b3885dfc9f36cddf48a65e93a919e13165fbbcfc0f9de5636279559", "Junior", "Software Engineering", "2023-01-17", "(585) 298-4403"),
(3, "Sophia", "Patel", "sp8961@rit.edu", "fc5a299cd6cd644f40bdcc8f7ae00e89a4ae4fbc44031c4bc27e54dd4bcb9773", "Freshman", "Mechanical Engineering", "2025-09-01", "(585) 555-9281"),
(4, "Liam", "Thompson", "lt3516@rit.edu", "f73137d930c31d188d901d57d78c13c88458d61600d1355d28c8841d590a6d69", "Senior", "Electrical Engineering", "2022-08-30", "(585) 612-7339"),
(5, "Ava", "Ramirez", "ar6923@rit.edu", "bf446ea38129b6f1a1ada774c9130c81a33904db1ee88e5b557d76ef1fb5e22d", "Junior", "Game Design & Development", "2023-09-05", "(585) 470-8812"),
(6, "Noah", "Johnson", "nj9151@rit.edu", "cf3a3bbe331c3950d16a8e9917c5bb8340e7c0ef917da25d4a96f92d074bce05", "Sophomore", "Information Technology", "2024-01-22", "(585) 429-6654"),
(7, "Mia", "Chen", "mc2451@rit.edu", "a6ae07ad556c5f9348cc09c16ed17a437e65acc71e689c1b19f872f1dab3c9c1", "Freshman", "Biomedical Engineering", "2025-08-23", "(585) 351-9917"),
(8, "William", "Scott", "ws8634@rit.edu", "d0784c6b1785dcd474688d46b1fe99792ff66f6b56bebf26dda0c08516bac22e", "Junior", "Cybersecurity", "2023-08-28", "(585) 772-5408"),
(9, "Isabella", "Brooks", "ib5413@rit.edu", "da2da8e71c82b18aaec0e9dcf817ab09481a8b55061066f011b3e38188788f65", "Senior", "Industrial Design", "2022-09-06", "(585) 398-2245"),
(10, "James", "Rivera", "jr4631@rit.edu", "119c9ae6f9ca741bd0a76f87fba0b22cab5413187afb2906aa2875c38e213603", "Sophomore", "Civil Engineering Technology", "2024-08-26", "(585) 645-7093");


-- TABLE TUTOR
CREATE TABLE tutor (
    id INT NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email_address VARCHAR(100) NOT NULL,
    password CHAR(64) NOT NULL,
    status VARCHAR(10) NULL,
    date_hired DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
    phone VARCHAR(20) NULL,
    PRIMARY KEY (id)
);

INSERT INTO tutor (id, first_name, last_name, email_address, password, status, date_hired, phone) VALUES
(1, "Olivia", "Martinez", "om4614@rit.edu", "b2471d941bf888366cf43813752ea2ebfef08254773cf116187cdd6d0463a50a", "Active", "2021-08-15", NULL),
(2, "Ethan", "Walker", "ew6813@rit.edu", "7b8bd6c0abf53d22888beafc48830e1156907dd4ec7e6ea31e55a0dd6dc5a969", "Active", "2022-01-10", NULL),
(3, "Harper", "Davis", "hd7645@rit.edu", "eaef53d9b579688e06f0ffda25b907cf7a2a08dd98d34debf9ad3d1a9e2514ea", "Inactive", "2020-09-07", NULL),
(4, "Mason", "Lewis", "ml3412@rit.edu", "162094c4d87101ff5aca2e655c39a40744052b4e1deb3f100391d45946db0bec", "Active", "2023-02-20", NULL),
(5, "Charlotte", "Kim", "ck4341@rit.edu", "4a2b5e1822ca11588586eb912320817f3cf0c11cd5ec8937e78a8209505f4e84", "Active", "2021-05-30", NULL),
(6, "Benjamin", "Adams", "ba9056@rit.edu", "8ee9938e4b960a50540f1ca9299facc5a5f342d0848b402c322fd14592e4bc32", "Inactive", "2022-08-22", NULL),
(7, "Amelia", "Scott", "as2341@rit.edu", "f0d9991c5e47e0d26a350c1618bd3154cd0f9f2461d3df671a753c393fe7a6a7", "Inactive", "2020-11-16", NULL),
(8, "Lucas", "Perez", "lp5646@rit.edu", "7cadab457ad8d811f134612436daaa5e5914b20dc2502865f714035b0f267680", "Active", "2023-09-01", NULL),
(9, "Evelyn", "Ross", "er8692@rit.edu", "44e5bf55761da5636a92efd9e8cafe3cf3454d9799b09826406cbf7718ed2676", "Active", "2021-03-18", NULL),
(10, "Elijah", "Turner", "et0962@rit.edu", "288aa2a8991efe00897f54273cb879b651ae3dd13a1861feafb21b0ef2a5ca19", "Active", "2024-01-29", NULL);


-- TABLE SUBJECT
CREATE TABLE subject (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    department VARCHAR(100) NOT NULL,
    professor VARCHAR(100) NOT NULL,
    credits INT NOT NULL,
    term VARCHAR(10) NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO subject VALUES
(1, "Introduction to Computer Science", "Computer Science", "Dr. Laura Chen", 4, "Fall"),
(2, "Software Engineering Principles", "Software Engineering", "Prof. Michael Reynolds", 3, "Spring"),
(3, "Circuits & Electronics I", "Electrical Engineering", "Dr. Anita Gupta", 4, "Fall"),
(4, "Game Design Fundamentals", "School of Interactive Games & Media", "Prof. Sarah Johnson", 3, "Spring"),
(5, "Data Structures & Algorithms", "Computer Science", "Dr. Robert Lee", 4, "Fall"),
(6, "Human-Computer Interaction", "Information Technology", "Dr. Kevin Patel", 3, "Spring"),
(7, "Biomedical Systems", "Biomedical Engineering", "Dr. Emily Foster", 4, "Fall"),
(8, "Cybersecurity Fundamentals", "Computing Security", "Prof. Daniel Wright", 3, "Spring"),
(9, "Industrial Design Studio I", "School of Design", "Prof. Rachel Adams", 4, "Fall"),
(10, "Structural Analysis", "Civil Engineering Technology", "Dr. Thomas Walker", 3, "Spring");


-- TABLE ASSIGNED
CREATE TABLE assigned (
    tutor_id INT NOT NULL,
    subject_id INT NOT NULL,
    proficiency VARCHAR(20) NOT NULL,
    PRIMARY KEY (tutor_id, subject_id),
    FOREIGN KEY (tutor_id) REFERENCES tutor (id)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    FOREIGN KEY (subject_id) REFERENCES subject (id)
        ON UPDATE CASCADE
        ON DELETE CASCADE
);

INSERT INTO assigned VALUES
(1, 3, "Expert"),
(2, 5, "Intermediate"),
(3, 2, "Beginner"),
(4, 1, "Expert"),
(5, 4, "Intermediate"),
(6, 6, "Beginner"),
(7, 8, "Expert"),
(8, 7, "Intermediate"),
(9, 9, "Beginner"),
(10, 10, "Expert");


-- TABLE ROOM
CREATE TABLE room (
    id INT NOT NULL AUTO_INCREMENT,
    room_number CHAR(7) NOT NULL,
    building VARCHAR(50) NOT NULL,
    capacity INT NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO room VALUES
(1, "70-1400", "Golisano Hall (GOL) - Computer Science", 45),
(2, "74-1120", "Institute Hall (INS) - Chemical Engineering", 35),
(3, "09-2425", "James E. Gleason Hall (GLE) - Mechanical Engineering", 50),
(4, "17-1250", "Carlson Center for Imaging Science (CAR) - Imaging Science", 40),
(5, "07-1555", "Louise Slaughter Hall (SLA) - Biomedical Engineering", 30),
(6, "03-1250", "Engineering Hall (ENG) - Electrical Engineering", 60),
(7, "78-2130", "MAGIC Center (MAG) - Game Design & Development", 25),
(8, "10-1010", "Gannett Hall (GAN) - Design & Fine Arts", 20),
(9, "08-2175", "Gosnell Hall (GOS) - Physics", 45),
(10, "13-1350", "Max Lowenthal Hall (LOW) - Saunders College of Business", 55);


-- TABLE SESSION
CREATE TABLE session (
    session_id INT NOT NULL AUTO_INCREMENT,
    student_id INT NOT NULL,
    tutor_id INT NOT NULL,
    subject_id INT NOT NULL,
    room_id INT NOT NULL,
    date_scheduled DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
    status VARCHAR(20) NOT NULL DEFAULT "TBA",
    time_start DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    time_end DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (session_id),
    FOREIGN KEY (student_id) REFERENCES student (id)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    FOREIGN KEY (tutor_id) REFERENCES tutor (id)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    FOREIGN KEY (subject_id) REFERENCES subject (id)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    FOREIGN KEY (room_id) REFERENCES room (id)
        ON UPDATE CASCADE
        ON DELETE CASCADE
);

INSERT INTO session VALUES
(1, 3, 1, 1, 1, "2025-09-09", "Completed", "08:00:00", "10:00:00"),
(2, 5, 2, 5, 9, "2025-09-11", "Scheduled", "10:00:00", "12:00:00"),
(3, 1, 4, 3, 3, "2025-09-12", "Cancelled", "12:00:00", "14:00:00"),
(4, 8, 5, 4, 7, "2025-09-15", "Completed", "14:00:00", "16:00:00"),
(5, 4, 6, 6, 6, "2025-09-17", "No-Show", "16:00:00", "18:00:00"),
(6, 9, 3, 2, 2, "2025-09-19", "Scheduled", "08:00:00", "10:00:00"),
(7, 2, 8, 7, 5, "2025-09-22", "Completed", "10:00:00", "12:00:00"),
(8, 7, 10, 10, 10, "2025-09-23", "TBA", "12:00:00", "14:00:00"),
(9, 10, 9, 9, 8, "2025-09-25", "Completed", "14:00:00", "16:00:00"),
(10, 6, 7, 8, 4, "2025-09-26", "Scheduled", "16:00:00", "18:00:00");


-- TABLE RATING
CREATE TABLE rating (
    id INT NOT NULL AUTO_INCREMENT,
    session_id INT NOT NULL,
    score_name VARCHAR(10) NOT NULL,
    score_value INT NOT NULL,
    comment VARCHAR(250) NULL,
    date_rated DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (session_id) REFERENCES session (session_id)
        ON UPDATE CASCADE
        ON DELETE CASCADE
);

INSERT INTO rating VALUES
(1, 1, "Great", 5, "Excellent session — tutor explained concepts clearly and was very patient.", "2025-09-09"),
(2, 2, "Great", 5, "Helpful review before the midterm. Learned a lot about data structures.", "2025-09-11"),
(3, 3, "Needs Work", 3, NULL, "2025-09-12"),
(4, 4, "Great", 5, "Very interactive and hands-on, especially for game design exercises.", "2025-09-15"),
(5, 5, "Sub-Par", 1, NULL, "2025-09-17"),
(6, 6, "Great", 5, "Solid session on algorithms — clear explanations and good examples.", "2025-09-19"),
(7, 7, "Great", 5, "Tutor demonstrated strong understanding of biomedical systems.", "2025-09-22"),
(8, 8, "Needs Work", 3, "Session details were unclear; next time, more prep would help.", "2025-09-23"),
(9, 9, "Great", 5, NULL, "2025-09-25"),
(10, 10, "Needs Work", 3, "Session ended early; tutor seemed unprepared for cybersecurity material.", "2025-09-26");

