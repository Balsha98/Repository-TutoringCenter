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
(10, "James", "Rivera", "jr4631@rit.edu", "119c9ae6f9ca741bd0a76f87fba0b22cab5413187afb2906aa2875c38e213603", "Sophomore", "Civil Engineering Technology", "2024-08-26", "(585) 645-7093"),
(11,'Liam','Turner','lt2481@rit.edu','5526e5f3630e3cf3bcecd63c773c236f3a28772826cc309e364578c9bccf1020','Freshman','Computer Science','2024-08-21','(585) 332-4412'),
(12,'Ava','Sullivan','as7392@rit.edu','8ff6063bc5f8b55392a5f675ee6e8decb94fa4c87ace8a3cc3f020e1b72fa63c','Sophomore','Software Engineering','2023-08-29','(585) 467-9911'),
(13,'Noah','Bennett','nb9201@rit.edu','3a696bb5e722e0e9b0999a38ffdb49c28cba1fa5a0ef32250c3b71f5a6a0f304','Senior','Game Design & Development','2021-09-02','(585) 337-5519'),
(14,'Mia','Reeves','mr3810@rit.edu','f23dbfb8465f6b8d03562e6cf41995648a5bc04c4ef820832803476e896f9b9b','Junior','Cybersecurity','2022-09-04','(585) 812-4482'),
(15,'Elijah','Holt','eh1044@rit.edu','9abffe2b6d6cfa90c9b9169c2938040d5bdac98f30cbe493266bc4abffdbd85a','Freshman','Mechanical Engineering','2024-08-31','(585) 562-7793'),
(16,'Sophia','Brooks','sb7001@rit.edu','9f7e73d26f755a6bcabbb7d061f09079aa900a7ecd77b37b534152c4f81e143b','Junior','Electrical Engineering','2022-09-12','(585) 338-4420'),
(17,'James','Frost','jf8112@rit.edu','709b3f8cc347ba23652efdcf597fbcf462d0b7037b82a1b2e1e7393e8093ff6f','Senior','Business Administration','2021-08-18','(585) 516-7733'),
(18,'Isabella','Griffin','ig1573@rit.edu','f9697e82c8a0311cb578c35d22cc01f52d2f4c75481ab684c66e6258600f3528','Sophomore','Biology','2023-08-28','(585) 741-3305'),
(19,'William','Hayes','wh9014@rit.edu','cb72b8fc310cd3774b437320865cef8496466f37070933e2158749b70e96ab2a','Senior','Psychology','2021-08-22','(585) 660-4023'),
(20,'Harper','Lane','hl4513@rit.edu','2fa1d71ab5a8e93776f19d46e7581a843acf36fbf21e75a76a1b29785cba6d9c','Freshman','Mathematics','2024-08-30','(585) 448-3361'),
(21,'Alexander','Morris','am9823@rit.edu','d73ed14faafe6e5c078969db017faa1c5160af01320ff38e46455f77869d207e','Junior','Computer Science','2022-08-20','(585) 509-7832'),
(22,'Evelyn','Parker','ep2554@rit.edu','df5290bacb92ad4a0528d3241af612673941171a5fee8c067a55d99cb9f54fce','Freshman','Software Engineering','2024-09-09','(585) 747-2282'),
(23,'Henry','Carter','hc7321@rit.edu','e44ef578718e341c79fe22c25152c360316f52e709c4ba44d6b407a6e04cc487','Sophomore','Game Design & Development','2023-09-12','(585) 332-5221'),
(24,'Amelia','Cruz','ac5571@rit.edu','fcf63f583fee28fa06c78fd4236cc3c85223e90c6d53795bbf7794c8ab109090','Sophomore','Cybersecurity','2023-09-10','(585) 401-8820'),
(25,'Lucas','Patel','lp9076@rit.edu','706bb4b16ba260a84d1a94ba2667980a63b4b2633ef7547ddbb7cb8178645a7e','Junior','Mechanical Engineering','2022-09-01','(585) 720-3401'),
(26,'Charlotte','Kim','ck6612@rit.edu','e5163fe14edea7b4cb0a7da81ffa309c7cdf9373d0a13a3e36eaa77ec25e7dac','Senior','Electrical Engineering','2021-09-04','(585) 309-5521'),
(27,'Benjamin','Moore','bm0284@rit.edu','10bcc7b04b661f9b09fabc7e5dacb29d7482e44b7c22627d145265ce5e5d9b7a','Freshman','Business Administration','2024-09-01','(585) 212-6728'),
(28,'Luna','Torres','lt4330@rit.edu','6da22a1af62051fa4be2bb8b1cc0a94971f59ec5149cd1d4dd5034ca04aab428','Sophomore','Biology','2023-08-27','(585) 561-3281'),
(29,'Michael','Young','my8691@rit.edu','e964173ca0b84d8aba937ebe19b3139c7fdc9059bbbe1e6145aade95314aee66','Junior','Psychology','2022-09-07','(585) 491-4033'),
(30,'Ella','Fisher','ef5314@rit.edu','8b3c20b1430e8a49fc733178af34dfb1e8a7dd2ce58eb5c9472331e6f77cb1d1','Senior','Mathematics','2021-08-19','(585) 783-6231'),
(31,'Logan','Diaz','ld5521@rit.edu','eebc0724c65af0c1d41109fc4ba500ef99f4474c71c800b58f2064ccfd3568be','Freshman','Computer Science','2024-08-25','(585) 923-4419'),
(32,'Grace','Watson','gw3192@rit.edu','20d304ee58c2932a7ddcc8028c1f36aa42aea091c6b45b1ac31e91e9816f7bad','Sophomore','Software Engineering','2023-09-05','(585) 502-7742'),
(33,'Jackson','Ross','jr7732@rit.edu','6144dfe765fa67b9702f6d7f87134bba7be7548894197d4c9258b5fa0e4a95fb','Junior','Game Design & Development','2022-09-10','(585) 420-4492'),
(34,'Scarlett','Cole','sc1033@rit.edu','b89f4b0d34cbbad9820e4967dcf0df1e6dc913a08a1136bad8d00c5e7f0bbb39','Senior','Cybersecurity','2021-08-17','(585) 912-2288'),
(35,'Mateo','Jordan','mj9012@rit.edu','c1bf07f9df17b52b6fff0c98543ba7f37461f8b6f1f0d94429b0b8944b78e7ed','Freshman','Mechanical Engineering','2024-08-22','(585) 519-6629'),
(36,'Chloe','Howard','ch5167@rit.edu','a992576f8fa384af9005949b3cc59c7c176844f8dc1d6d13cd375bd24e3bb0f9','Junior','Electrical Engineering','2022-09-14','(585) 538-2212'),
(37,'Daniel','Lopez','dl7900@rit.edu','9223f75e158f3ca8c29ddd470897ba84fa33d60bd70536b5fb906106f66716b5','Senior','Business Administration','2021-08-20','(585) 404-7672'),
(38,'Layla','Gibson','lg4661@rit.edu','3f9b7bc76019d873bfadcb2796f8adaef09367640eb9c19933c2a62450edc65e','Sophomore','Biology','2023-09-02','(585) 672-7791'),
(39,'Leo','Sanders','ls3018@rit.edu','40af2f58e441d7e4e34ac465af3045a1ebed88d6f67282d40f8e2f010a6eb50d','Junior','Psychology','2022-09-04','(585) 518-3302'),
(40,'Victoria','Weiss','vw1127@rit.edu','c3d906f75bda0b770e057978aeb8fbc563de7fd42980ec2f714a378a96caba7c','Senior','Mathematics','2021-08-24','(585) 760-9227'),
(41,'Wyatt','Arnold','wa5823@rit.edu','53776c470d503cadf3122007253fb91d3bc7c069f8a460115c43e3bc491a56ac','Freshman','Computer Science','2024-09-01','(585) 623-5127'),
(42,'Zoe','Keller','zk9371@rit.edu','0a04f9415e2ff315656f3cb0bc295f2d0fd6871fa499db3f2793ba692695bfd4','Sophomore','Software Engineering','2023-09-08','(585) 491-2625'),
(43,'Sebastian','Reed','sr8823@rit.edu','6e0ebcd16a63152430913575b81ca935e6fa610133c5bf0d1572c8a2c91d705b','Junior','Game Design & Development','2022-09-13','(585) 898-2135'),
(44,'Hannah','Wade','hw2209@rit.edu','fe117fedf4b4470ffc66166d541b8f6596e7583872fb9505d40704c1282762e8','Senior','Cybersecurity','2021-08-16','(585) 231-7883'),
(45,'Owen','Bishop','ob4132@rit.edu','6f1b56228e0f5bfe33e41caca6676996a6d9ede6ff0d1655eba1f7f2a1550484','Freshman','Mechanical Engineering','2024-08-28','(585) 377-4477'),
(46,'Sofia','Nguyen','sn9192@rit.edu','aa9ee07e622d2fbf2b54759a71d6953d89fea3a5fd4fef3adccfc978904e394a','Sophomore','Electrical Engineering','2023-09-09','(585) 531-3329'),
(47,'Gabriel','Price','gp2213@rit.edu','5a028ca91a94c0f07259e9644e3a76a4d4f4ee922fb25647539cbd152f3cd4af','Junior','Business Administration','2022-09-04','(585) 410-2211'),
(48,'Aria','Bates','ab2331@rit.edu','bc2a136df87b49d13375ca9643f4af0e660028e3bba4c1669514c8ccb3b57c54','Sophomore','Biology','2023-08-29','(585) 515-7228'),
(49,'Jack','Henderson','jh2333@rit.edu','f83001f61c601161450eb922359c791605dea03694108ddbbe0634b26ef375be','Junior','Psychology','2022-09-05','(585) 440-1923'),
(50,'Penelope','Frank','pf9944@rit.edu','ce0d82bc493bfcd08401adeaa6b1ae87356e89a1328c20769ac3787794412034','Senior','Mathematics','2021-08-14','(585) 591-8420');



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
    id INT NOT NULL AUTO_INCREMENT,
    student_id INT NOT NULL,
    tutor_id INT NOT NULL,
    subject_id INT NOT NULL,
    room_id INT NOT NULL,
    date_scheduled DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
    status VARCHAR(20) NOT NULL DEFAULT "TBA",
    time_start DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    time_end DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
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
(10, 6, 7, 8, 4, "2025-09-26", "Scheduled", "16:00:00", "18:00:00"),
(11,11,3,7,5,'2025-02-01','Scheduled','08:00:00','10:00:00'),
(12,12,2,4,2,'2025-02-02','Completed','10:00:00','12:00:00'),
(13,13,1,9,4,'2025-02-03','Scheduled','14:00:00','16:00:00'),
(14,14,5,6,1,'2025-02-04','Completed','12:00:00','14:00:00'),
(15,15,4,3,6,'2025-02-05','Cancelled','08:00:00','10:00:00'),
(16,16,2,2,3,'2025-02-05','Scheduled','10:00:00','12:00:00'),
(17,17,4,9,2,'2025-02-06','No-Show','16:00:00','18:00:00'),
(18,18,1,4,3,'2025-02-06','Completed','14:00:00','16:00:00'),
(19,19,3,5,2,'2025-02-07','Scheduled','12:00:00','14:00:00'),
(20,20,5,1,1,'2025-02-08','Scheduled','14:00:00','16:00:00'),
(21,21,2,7,5,'2025-02-09','Scheduled','08:00:00','10:00:00'),
(22,22,3,4,6,'2025-02-10','Completed','10:00:00','12:00:00'),
(23,23,3,9,7,'2025-02-10','Completed','12:00:00','14:00:00'),
(24,24,4,2,3,'2025-02-11','Scheduled','14:00:00','16:00:00'),
(25,25,5,8,2,'2025-02-11','Completed','16:00:00','18:00:00'),
(26,26,1,1,4,'2025-02-12','Scheduled','08:00:00','10:00:00'),
(27,27,1,6,3,'2025-02-12','Cancelled','10:00:00','12:00:00'),
(28,28,2,2,6,'2025-02-12','Completed','12:00:00','14:00:00'),
(29,29,4,9,5,'2025-02-13','Completed','14:00:00','16:00:00'),
(30,30,5,8,2,'2025-02-13','No-Show','16:00:00','18:00:00'),
(31,31,2,7,7,'2025-02-14','Scheduled','10:00:00','12:00:00'),
(32,32,1,8,6,'2025-02-15','Completed','12:00:00','14:00:00'),
(33,33,1,6,3,'2025-02-15','Cancelled','14:00:00','16:00:00'),
(34,34,2,5,2,'2025-02-15','Completed','16:00:00','18:00:00'),
(35,35,3,2,1,'2025-02-16','Scheduled','08:00:00','10:00:00'),
(36,36,4,1,4,'2025-02-16','No-Show','10:00:00','12:00:00'),
(37,37,5,4,3,'2025-02-17','Completed','12:00:00','14:00:00'),
(38,38,3,8,7,'2025-02-17','Scheduled','14:00:00','16:00:00'),
(39,39,2,7,6,'2025-02-18','Completed','16:00:00','18:00:00'),
(40,40,4,9,2,'2025-02-19','Scheduled','10:00:00','12:00:00'),
(41,41,1,8,5,'2025-02-19','Completed','12:00:00','14:00:00'),
(42,42,4,2,1,'2025-02-20','Scheduled','14:00:00','16:00:00'),
(43,43,5,6,3,'2025-02-20','Completed','16:00:00','18:00:00'),
(44,44,3,1,6,'2025-02-21','Cancelled','08:00:00','10:00:00'),
(45,45,4,3,6,'2025-02-22','Completed','10:00:00','12:00:00'),
(46,46,2,7,4,'2025-02-22','Scheduled','12:00:00','14:00:00'),
(47,47,2,8,7,'2025-02-23','Cancelled','14:00:00','16:00:00'),
(48,48,5,2,1,'2025-02-23','Completed','16:00:00','18:00:00'),
(49,49,1,9,3,'2025-02-24','Scheduled','14:00:00','16:00:00'),
(50,50,3,5,4,'2025-02-24','Completed','16:00:00','18:00:00');



-- TABLE RATING
CREATE TABLE rating (
    id INT NOT NULL AUTO_INCREMENT,
    session_id INT NOT NULL,
    score_name VARCHAR(10) NOT NULL,
    score_value INT NOT NULL,
    comment VARCHAR(250) NULL,
    date_rated DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (session_id) REFERENCES session (id)
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
(10, 10, "Needs Work", 3, "Session ended early; tutor seemed unprepared for cybersecurity material.", "2025-09-26"),
(11, 11, 'Great', 5, 'Tutor provided clear explanations and interactive examples; student understood the material well.', '2025-10-01'),
(12, 12, 'Needs-Work', 3, 'Session was okay, but more guidance on complex topics would have helped.', '2025-10-02'),
(13, 13, 'Sub-Par', 1, 'Tutor seemed unprepared, and the session did not meet expectations.', '2025-10-03'),
(14, 14, 'Great', 5, 'Very productive session; student gained confidence and clarity on difficult concepts.', '2025-10-04'),
(15, 15, 'Great', 5, 'Tutor was patient and explained concepts thoroughly with good examples.', '2025-10-05'),
(16, 16, 'Needs-Work', 3, 'Tutor answered questions but explanations could have been more structured.', '2025-10-06'),
(17, 17, 'Sub-Par', 1, 'Session lacked engagement; key topics were missed.', '2025-10-07'),
(18, 18, 'Great', 5, 'Excellent session with well-organized teaching and clear examples.', '2025-10-08'),
(19, 19, 'Needs-Work', 3, 'Tutor covered topics but did not provide enough hands-on guidance.', '2025-10-09'),
(20, 20, 'Great', 5, 'Student expressed high satisfaction; tutor clarified all doubts.', '2025-10-10'),
(21, 21, 'Needs-Work', 3, 'Some points were unclear; more examples would improve the session.', '2025-10-11'),
(22, 22, 'Great', 5, 'Tutor used visual aids and practical examples, enhancing understanding.', '2025-10-12'),
(23, 23, 'Sub-Par', 1, 'Student left session confused; session lacked focus.', '2025-10-13'),
(24, 24, 'Needs-Work', 3, 'Tutor explained basics but did not address advanced questions.', '2025-10-14'),
(25, 25, 'Great', 5, 'Session was highly effective; student actively participated and learned well.', '2025-10-15'),
(26, 26, 'Great', 5, 'Tutor maintained a clear structure and delivered all topics effectively.', '2025-10-16'),
(27, 27, 'Needs-Work', 3, 'Session needed better pacing; tutor rushed some parts.', '2025-10-17'),
(28, 28, 'Great', 5, 'Excellent explanations with examples that made difficult topics simple.', '2025-10-18'),
(29, 29, 'Sub-Par', 1, 'Tutor did not address the student’s main concerns; session ineffective.', '2025-10-19'),
(30, 30, 'Great', 5, 'Very productive session; tutor answered all questions and reinforced learning.', '2025-10-20'),
(31, 31, 'Needs-Work', 3, 'Some topics were unclear; would benefit from more practice exercises.', '2025-10-21'),
(32, 32, 'Great', 5, 'Tutor was well-prepared and used engaging examples to teach.', '2025-10-22'),
(33, 33, 'Sub-Par', 1, 'Session lacked focus; many questions went unanswered.', '2025-10-23'),
(34, 34, 'Needs-Work', 3, 'Tutor explained basics but advanced material was skipped.', '2025-10-24'),
(35, 35, 'Great', 5, 'Very informative session; student confidence increased significantly.', '2025-10-25'),
(36, 36, 'Great', 5, 'Tutor demonstrated excellent knowledge and explained clearly.', '2025-10-26'),
(37, 37, 'Needs-Work', 3, 'Session covered key points but tutor did not check understanding consistently.', '2025-10-27'),
(38, 38, 'Great', 5, 'Tutor used real-world examples that enhanced comprehension.', '2025-10-28'),
(39, 39, 'Sub-Par', 1, 'Tutor was distracted; session lacked proper guidance.', '2025-10-29'),
(40, 40, 'Great', 5, 'Student found the session extremely helpful; tutor clarified all questions.', '2025-10-30'),
(41, 41, 'Great', 5, 'Session was well-organized, explanations were clear and concise.', '2025-10-31'),
(42, 42, 'Needs-Work', 3, 'Tutor addressed some questions but not all; session could be improved.', '2025-11-01'),
(43, 43, 'Great', 5, 'Tutor delivered session effectively and engaged the student throughout.', '2025-11-02'),
(44, 44, 'Sub-Par', 1, 'Student did not understand main topics; session ineffective.', '2025-11-03'),
(45, 45, 'Great', 5, 'Tutor gave clear instructions and examples; student left confident.', '2025-11-04'),
(46, 46, 'Great', 5, 'Excellent session with interactive learning and thorough explanations.', '2025-11-05'),
(47, 47, 'Needs-Work', 3, 'Tutor explained basics but skipped some important questions.', '2025-11-06'),
(48, 48, 'Great', 5, 'Session was informative, tutor explained concepts clearly and patiently.', '2025-11-07'),
(49, 49, 'Great', 5, 'Tutor was attentive, answered questions well, and provided examples.', '2025-11-08'),
(50, 50, 'Needs-Work', 3, 'Session covered essentials but lacked depth in advanced topics.', '2025-11-09');



