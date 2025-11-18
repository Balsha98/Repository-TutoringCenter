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
    grade_label ENUM("freshman", "sophomore", "junior", "senior") NULL,
    grade_value ENUM("1", "2", "3", "4") NULL,
    major VARCHAR(50) NULL,
    date_enrolled DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
    image TEXT NULL,
    phone VARCHAR(20) NULL,
    PRIMARY KEY (id)
);

INSERT INTO student (id, first_name, last_name, email_address, password, grade_label, grade_value, major, date_enrolled, image, phone) VALUES
(1, 'Ian', 'Johnson', 'ij3130@rit.edu', 'b54a95127a4b573f41e335fdbd339dcc2208fbfb1ae0b6fab7599d6e2d6ec754', 'senior', 4, 'Business Administration', '2022-02-04', NULL, '(585) 555-8750'),
(2, 'Hannah', 'Brown', 'hb5664@rit.edu', 'fc881aa34d44660e1012dec26ccda0b469d6c8359e91dc674dab4c095b9fe832', 'junior', 3, 'Information Technology', '2021-01-01', NULL, '(585) 555-4180'),
(3, 'George', 'Smith', 'gs6768@rit.edu', '0522a55e2d5f0993a3d66d28864b2862a7218a75ea7968b075333434404485c3', 'junior', 3, 'Software Engineering', '2023-02-16', NULL, '(585) 555-2653'),
(4, 'Alice', 'Garcia', 'ag6688@rit.edu', '2bd806c97f0e00af1a1fc3328fa763a9269723c8db8fac4f93af71db186d6e90', 'sophomore', 2, 'Mechanical Engineering', '2024-07-28', NULL, '(585) 555-7970'),
(5, 'Fiona', 'Smith', 'fs9560@rit.edu', '4c0db82499ca9a6d65c396d1fbb8e77078e315bd8db0e9476a88cd244aa76ca6', 'junior', 3, 'Computer Science', '2023-02-23', NULL, '(585) 555-9780'),
(6, 'Julia', 'Johnson', 'jj4973@rit.edu', 'd277670919a94ba361be1887d39852c3f31d7eed817343cbb70fcd8910841f86', 'junior', 3, 'Business Administration', '2024-09-23', NULL, '(585) 555-8337'),
(7, 'Alice', 'Brown', 'ab5361@rit.edu', '2bd806c97f0e00af1a1fc3328fa763a9269723c8db8fac4f93af71db186d6e90', 'junior', 3, 'Software Engineering', '2021-03-10', NULL, '(585) 555-1429'),
(8, 'George', 'Smith', 'gs1783@rit.edu', '0522a55e2d5f0993a3d66d28864b2862a7218a75ea7968b075333434404485c3', 'senior', 4, 'Business Administration', '2023-01-20', NULL, '(585) 555-6213'),
(9, 'Julia', 'Smith', 'js3363@rit.edu', 'd277670919a94ba361be1887d39852c3f31d7eed817343cbb70fcd8910841f86', 'junior', 3, 'Mechanical Engineering', '2021-07-06', NULL, '(585) 555-3940'),
(10, 'Fiona', 'Martinez', 'fm2623@rit.edu', '4c0db82499ca9a6d65c396d1fbb8e77078e315bd8db0e9476a88cd244aa76ca6', 'freshman', 1, 'Mechanical Engineering', '2024-06-03', NULL, '(585) 555-6501'),
(11, 'Ian', 'Garcia', 'ig6201@rit.edu', 'b54a95127a4b573f41e335fdbd339dcc2208fbfb1ae0b6fab7599d6e2d6ec754', 'senior', 4, 'Mechanical Engineering', '2023-11-20', NULL, '(585) 555-1235'),
(12, 'Alice', 'Martinez', 'am1366@rit.edu', '2bd806c97f0e00af1a1fc3328fa763a9269723c8db8fac4f93af71db186d6e90', 'senior', 4, 'Mechanical Engineering', '2024-12-16', NULL, '(585) 555-1288'),
(13, 'Evan', 'Johnson', 'ej1875@rit.edu', 'ae74f72d212fb9871302a2459aeaf7b20bc2f792e4852be648a7d4e63967d9b1', 'sophomore', 2, 'Software Engineering', '2024-01-17', NULL, '(585) 555-5664'),
(14, 'Alice', 'Johnson', 'aj1084@rit.edu', '2bd806c97f0e00af1a1fc3328fa763a9269723c8db8fac4f93af71db186d6e90', 'sophomore', 2, 'Biomedical Sciences', '2021-01-06', NULL, '(585) 555-8550'),
(15, 'Julia', 'Brown', 'jb9930@rit.edu', 'd277670919a94ba361be1887d39852c3f31d7eed817343cbb70fcd8910841f86', 'freshman', 1, 'Biomedical Sciences', '2021-03-08', NULL, '(585) 555-6268'),
(16, 'Charlie', 'Brown', 'cb5999@rit.edu', 'b9dd960c1753459a78115d3cb845a57d924b6877e805b08bd01086ccdf34433c', 'sophomore', 2, 'Computer Science', '2022-05-17', NULL, '(585) 555-3963'),
(17, 'Alice', 'Garcia', 'ag7083@rit.edu', '2bd806c97f0e00af1a1fc3328fa763a9269723c8db8fac4f93af71db186d6e90', 'sophomore', 2, 'Information Technology', '2022-08-05', NULL, '(585) 555-1828'),
(18, 'Bob', 'Garcia', 'bg3865@rit.edu', '81b637d8fcd2c6da6359e6963113a1170de795e4b725b84d1e0b4cfd9ec58ce9', 'junior', 3, 'Computer Science', '2022-09-05', NULL, '(585) 555-2200'),
(19, 'Diana', 'Smith', 'ds1026@rit.edu', '1b2fc9341a16ae4e30082965d537ae47c21a0f27fd43eab78330ed81751ae6db', 'sophomore', 2, 'Computer Science', '2021-08-12', NULL, '(585) 555-5890'),
(20, 'Julia', 'Garcia', 'jg4342@rit.edu', 'd277670919a94ba361be1887d39852c3f31d7eed817343cbb70fcd8910841f86', 'junior', 3, 'Software Engineering', '2023-10-21', NULL, '(585) 555-6990'),
(21, 'Fiona', 'Brown', 'fb7449@rit.edu', '4c0db82499ca9a6d65c396d1fbb8e77078e315bd8db0e9476a88cd244aa76ca6', 'junior', 3, 'Computer Science', '2022-04-22', NULL, '(585) 555-7482'),
(22, 'Ian', 'Smith', 'is3844@rit.edu', 'b54a95127a4b573f41e335fdbd339dcc2208fbfb1ae0b6fab7599d6e2d6ec754', 'junior', 3, 'Computer Science', '2023-11-18', NULL, '(585) 555-2932'),
(23, 'George', 'Smith', 'gs1133@rit.edu', '0522a55e2d5f0993a3d66d28864b2862a7218a75ea7968b075333434404485c3', 'junior', 3, 'Information Technology', '2024-11-28', NULL, '(585) 555-5488'),
(24, 'Diana', 'Brown', 'db3766@rit.edu', '1b2fc9341a16ae4e30082965d537ae47c21a0f27fd43eab78330ed81751ae6db', 'senior', 4, 'Biomedical Sciences', '2021-07-07', NULL, '(585) 555-9551'),
(25, 'Evan', 'Smith', 'es9735@rit.edu', 'ae74f72d212fb9871302a2459aeaf7b20bc2f792e4852be648a7d4e63967d9b1', 'junior', 3, 'Biomedical Sciences', '2023-12-23', NULL, '(585) 555-6659'),
(26, 'Diana', 'Brown', 'db6242@rit.edu', '1b2fc9341a16ae4e30082965d537ae47c21a0f27fd43eab78330ed81751ae6db', 'junior', 3, 'Business Administration', '2024-05-20', NULL, '(585) 555-1336'),
(27, 'Alice', 'Brown', 'ab1028@rit.edu', '2bd806c97f0e00af1a1fc3328fa763a9269723c8db8fac4f93af71db186d6e90', 'sophomore', 2, 'Business Administration', '2021-10-06', NULL, '(585) 555-1803'),
(28, 'Charlie', 'Martinez', 'cm7956@rit.edu', 'b9dd960c1753459a78115d3cb845a57d924b6877e805b08bd01086ccdf34433c', 'junior', 3, 'Business Administration', '2023-04-04', NULL, '(585) 555-5677'),
(29, 'Charlie', 'Martinez', 'cm3860@rit.edu', 'b9dd960c1753459a78115d3cb845a57d924b6877e805b08bd01086ccdf34433c', 'sophomore', 2, 'Business Administration', '2022-10-11', NULL, '(585) 555-6900'),
(30, 'Evan', 'Johnson', 'ej2575@rit.edu', 'ae74f72d212fb9871302a2459aeaf7b20bc2f792e4852be648a7d4e63967d9b1', 'sophomore', 2, 'Software Engineering', '2022-02-23', NULL, '(585) 555-7114'),
(31, 'Hannah', 'Martinez', 'hm4326@rit.edu', 'fc881aa34d44660e1012dec26ccda0b469d6c8359e91dc674dab4c095b9fe832', 'freshman', 1, 'Information Technology', '2021-03-17', NULL, '(585) 555-6548'),
(32, 'Charlie', 'Garcia', 'cg2188@rit.edu', 'b9dd960c1753459a78115d3cb845a57d924b6877e805b08bd01086ccdf34433c', 'senior', 4, 'Business Administration', '2024-05-23', NULL, '(585) 555-2084'),
(33, 'Alice', 'Johnson', 'aj3201@rit.edu', '2bd806c97f0e00af1a1fc3328fa763a9269723c8db8fac4f93af71db186d6e90', 'senior', 4, 'Mechanical Engineering', '2022-02-14', NULL, '(585) 555-5247'),
(34, 'Julia', 'Smith', 'js2331@rit.edu', 'd277670919a94ba361be1887d39852c3f31d7eed817343cbb70fcd8910841f86', 'freshman', 1, 'Mechanical Engineering', '2021-07-17', NULL, '(585) 555-6870'),
(35, 'Alice', 'Brown', 'ab6515@rit.edu', '2bd806c97f0e00af1a1fc3328fa763a9269723c8db8fac4f93af71db186d6e90', 'sophomore', 2, 'Biomedical Sciences', '2022-05-12', NULL, '(585) 555-6084'),
(36, 'George', 'Garcia', 'gg9627@rit.edu', '0522a55e2d5f0993a3d66d28864b2862a7218a75ea7968b075333434404485c3', 'freshman', 1, 'Biomedical Sciences', '2023-05-15', NULL, '(585) 555-4491'),
(37, 'Julia', 'Smith', 'js5422@rit.edu', 'd277670919a94ba361be1887d39852c3f31d7eed817343cbb70fcd8910841f86', 'sophomore', 2, 'Business Administration', '2022-04-09', NULL, '(585) 555-8700'),
(38, 'George', 'Smith', 'gs2590@rit.edu', '0522a55e2d5f0993a3d66d28864b2862a7218a75ea7968b075333434404485c3', 'senior', 4, 'Software Engineering', '2023-02-18', NULL, '(585) 555-5285'),
(39, 'Hannah', 'Johnson', 'hj1703@rit.edu', 'fc881aa34d44660e1012dec26ccda0b469d6c8359e91dc674dab4c095b9fe832', 'junior', 3, 'Software Engineering', '2023-05-08', NULL, '(585) 555-4098'),
(40, 'Hannah', 'Smith', 'hs6629@rit.edu', 'fc881aa34d44660e1012dec26ccda0b469d6c8359e91dc674dab4c095b9fe832', 'freshman', 1, 'Software Engineering', '2023-04-11', NULL, '(585) 555-8117'),
(41, 'Julia', 'Johnson', 'jj1575@rit.edu', 'd277670919a94ba361be1887d39852c3f31d7eed817343cbb70fcd8910841f86', 'freshman', 1, 'Business Administration', '2021-01-17', NULL, '(585) 555-6088'),
(42, 'George', 'Martinez', 'gm8235@rit.edu', '0522a55e2d5f0993a3d66d28864b2862a7218a75ea7968b075333434404485c3', 'freshman', 1, 'Biomedical Sciences', '2024-12-05', NULL, '(585) 555-7324'),
(43, 'Fiona', 'Garcia', 'fg9792@rit.edu', '4c0db82499ca9a6d65c396d1fbb8e77078e315bd8db0e9476a88cd244aa76ca6', 'freshman', 1, 'Software Engineering', '2024-02-03', NULL, '(585) 555-6773'),
(44, 'Hannah', 'Martinez', 'hm3493@rit.edu', 'fc881aa34d44660e1012dec26ccda0b469d6c8359e91dc674dab4c095b9fe832', 'sophomore', 2, 'Computer Science', '2021-12-03', NULL, '(585) 555-9529'),
(45, 'Charlie', 'Garcia', 'cg6199@rit.edu', 'b9dd960c1753459a78115d3cb845a57d924b6877e805b08bd01086ccdf34433c', 'junior', 3, 'Computer Science', '2023-02-03', NULL, '(585) 555-9186'),
(46, 'Bob', 'Johnson', 'bj4981@rit.edu', '81b637d8fcd2c6da6359e6963113a1170de795e4b725b84d1e0b4cfd9ec58ce9', 'junior', 3, 'Biomedical Sciences', '2024-08-18', NULL, '(585) 555-5295'),
(47, 'George', 'Johnson', 'gj8552@rit.edu', '0522a55e2d5f0993a3d66d28864b2862a7218a75ea7968b075333434404485c3', 'freshman', 1, 'Information Technology', '2023-01-28', NULL, '(585) 555-4166'),
(48, 'Charlie', 'Garcia', 'cg7756@rit.edu', 'b9dd960c1753459a78115d3cb845a57d924b6877e805b08bd01086ccdf34433c', 'senior', 4, 'Biomedical Sciences', '2022-10-21', NULL, '(585) 555-3124'),
(49, 'Charlie', 'Garcia', 'cg2173@rit.edu', 'b9dd960c1753459a78115d3cb845a57d924b6877e805b08bd01086ccdf34433c', 'senior', 4, 'Software Engineering', '2021-10-22', NULL, '(585) 555-3905'),
(50, 'Hannah', 'Garcia', 'hg6564@rit.edu', 'fc881aa34d44660e1012dec26ccda0b469d6c8359e91dc674dab4c095b9fe832', 'sophomore', 2, 'Information Technology', '2022-09-05', NULL, '(585) 555-9988'),
(51, 'Evan', 'Martinez', 'em2688@rit.edu', 'ae74f72d212fb9871302a2459aeaf7b20bc2f792e4852be648a7d4e63967d9b1', 'senior', 4, 'Information Technology', '2021-02-26', NULL, '(585) 555-7561'),
(52, 'Hannah', 'Martinez', 'hm8247@rit.edu', 'fc881aa34d44660e1012dec26ccda0b469d6c8359e91dc674dab4c095b9fe832', 'junior', 3, 'Computer Science', '2021-05-14', NULL, '(585) 555-2922'),
(53, 'Ian', 'Garcia', 'ig7323@rit.edu', 'b54a95127a4b573f41e335fdbd339dcc2208fbfb1ae0b6fab7599d6e2d6ec754', 'senior', 4, 'Software Engineering', '2022-11-08', NULL, '(585) 555-2062'),
(54, 'Hannah', 'Smith', 'hs7664@rit.edu', 'fc881aa34d44660e1012dec26ccda0b469d6c8359e91dc674dab4c095b9fe832', 'freshman', 1, 'Business Administration', '2022-07-10', NULL, '(585) 555-9700'),
(55, 'Bob', 'Brown', 'bb8655@rit.edu', '81b637d8fcd2c6da6359e6963113a1170de795e4b725b84d1e0b4cfd9ec58ce9', 'sophomore', 2, 'Mechanical Engineering', '2024-08-05', NULL, '(585) 555-1422'),
(56, 'Evan', 'Smith', 'es6993@rit.edu', 'ae74f72d212fb9871302a2459aeaf7b20bc2f792e4852be648a7d4e63967d9b1', 'junior', 3, 'Mechanical Engineering', '2022-05-23', NULL, '(585) 555-9846'),
(57, 'Evan', 'Garcia', 'eg7493@rit.edu', 'ae74f72d212fb9871302a2459aeaf7b20bc2f792e4852be648a7d4e63967d9b1', 'freshman', 1, 'Computer Science', '2022-06-20', NULL, '(585) 555-5034'),
(58, 'George', 'Brown', 'gb4053@rit.edu', '0522a55e2d5f0993a3d66d28864b2862a7218a75ea7968b075333434404485c3', 'junior', 3, 'Computer Science', '2021-06-10', NULL, '(585) 555-1793'),
(59, 'Alice', 'Martinez', 'am9562@rit.edu', '2bd806c97f0e00af1a1fc3328fa763a9269723c8db8fac4f93af71db186d6e90', 'senior', 4, 'Business Administration', '2021-09-13', NULL, '(585) 555-1107'),
(60, 'Bob', 'Smith', 'bs2702@rit.edu', '81b637d8fcd2c6da6359e6963113a1170de795e4b725b84d1e0b4cfd9ec58ce9', 'freshman', 1, 'Information Technology', '2022-08-03', NULL, '(585) 555-3412'),
(61, 'Ian', 'Johnson', 'ij5195@rit.edu', 'b54a95127a4b573f41e335fdbd339dcc2208fbfb1ae0b6fab7599d6e2d6ec754', 'junior', 3, 'Computer Science', '2022-01-28', NULL, '(585) 555-4416'),
(62, 'Diana', 'Brown', 'db8416@rit.edu', '1b2fc9341a16ae4e30082965d537ae47c21a0f27fd43eab78330ed81751ae6db', 'sophomore', 2, 'Software Engineering', '2023-05-02', NULL, '(585) 555-4212'),
(63, 'Julia', 'Johnson', 'jj9335@rit.edu', 'd277670919a94ba361be1887d39852c3f31d7eed817343cbb70fcd8910841f86', 'sophomore', 2, 'Software Engineering', '2021-08-04', NULL, '(585) 555-7262'),
(64, 'Hannah', 'Johnson', 'hj2473@rit.edu', 'fc881aa34d44660e1012dec26ccda0b469d6c8359e91dc674dab4c095b9fe832', 'sophomore', 2, 'Business Administration', '2021-07-08', NULL, '(585) 555-9064'),
(65, 'Fiona', 'Smith', 'fs1455@rit.edu', '4c0db82499ca9a6d65c396d1fbb8e77078e315bd8db0e9476a88cd244aa76ca6', 'junior', 3, 'Business Administration', '2024-11-19', NULL, '(585) 555-7544'),
(66, 'Charlie', 'Brown', 'cb8339@rit.edu', 'b9dd960c1753459a78115d3cb845a57d924b6877e805b08bd01086ccdf34433c', 'junior', 3, 'Computer Science', '2021-05-23', NULL, '(585) 555-4269'),
(67, 'George', 'Brown', 'gb8412@rit.edu', '0522a55e2d5f0993a3d66d28864b2862a7218a75ea7968b075333434404485c3', 'junior', 3, 'Software Engineering', '2021-11-14', NULL, '(585) 555-5308'),
(68, 'Julia', 'Johnson', 'jj5748@rit.edu', 'd277670919a94ba361be1887d39852c3f31d7eed817343cbb70fcd8910841f86', 'junior', 3, 'Biomedical Sciences', '2024-05-21', NULL, '(585) 555-2604'),
(69, 'Fiona', 'Martinez', 'fm1850@rit.edu', '4c0db82499ca9a6d65c396d1fbb8e77078e315bd8db0e9476a88cd244aa76ca6', 'senior', 4, 'Business Administration', '2021-11-12', NULL, '(585) 555-4979'),
(70, 'Fiona', 'Martinez', 'fm7046@rit.edu', '4c0db82499ca9a6d65c396d1fbb8e77078e315bd8db0e9476a88cd244aa76ca6', 'junior', 3, 'Information Technology', '2023-01-11', NULL, '(585) 555-2951'),
(71, 'Fiona', 'Garcia', 'fg2828@rit.edu', '4c0db82499ca9a6d65c396d1fbb8e77078e315bd8db0e9476a88cd244aa76ca6', 'senior', 4, 'Information Technology', '2021-08-23', NULL, '(585) 555-4365'),
(72, 'Evan', 'Martinez', 'em1254@rit.edu', 'ae74f72d212fb9871302a2459aeaf7b20bc2f792e4852be648a7d4e63967d9b1', 'sophomore', 2, 'Biomedical Sciences', '2022-07-05', NULL, '(585) 555-8701'),
(73, 'Alice', 'Smith', 'as2928@rit.edu', '2bd806c97f0e00af1a1fc3328fa763a9269723c8db8fac4f93af71db186d6e90', 'freshman', 1, 'Software Engineering', '2023-09-23', NULL, '(585) 555-2539'),
(74, 'George', 'Martinez', 'gm6376@rit.edu', '0522a55e2d5f0993a3d66d28864b2862a7218a75ea7968b075333434404485c3', 'freshman', 1, 'Biomedical Sciences', '2021-04-16', NULL, '(585) 555-8552'),
(75, 'Bob', 'Smith', 'bs1859@rit.edu', '81b637d8fcd2c6da6359e6963113a1170de795e4b725b84d1e0b4cfd9ec58ce9', 'sophomore', 2, 'Information Technology', '2023-04-23', NULL, '(585) 555-6223'),
(76, 'Ian', 'Martinez', 'im4211@rit.edu', 'b54a95127a4b573f41e335fdbd339dcc2208fbfb1ae0b6fab7599d6e2d6ec754', 'junior', 3, 'Information Technology', '2023-12-14', NULL, '(585) 555-3503'),
(77, 'Charlie', 'Johnson', 'cj9510@rit.edu', 'b9dd960c1753459a78115d3cb845a57d924b6877e805b08bd01086ccdf34433c', 'junior', 3, 'Biomedical Sciences', '2024-08-27', NULL, '(585) 555-8265'),
(78, 'Diana', 'Martinez', 'dm6894@rit.edu', '1b2fc9341a16ae4e30082965d537ae47c21a0f27fd43eab78330ed81751ae6db', 'sophomore', 2, 'Software Engineering', '2021-06-09', NULL, '(585) 555-4504'),
(79, 'Charlie', 'Smith', 'cs9175@rit.edu', 'b9dd960c1753459a78115d3cb845a57d924b6877e805b08bd01086ccdf34433c', 'sophomore', 2, 'Computer Science', '2023-05-13', NULL, '(585) 555-6816'),
(80, 'George', 'Johnson', 'gj5872@rit.edu', '0522a55e2d5f0993a3d66d28864b2862a7218a75ea7968b075333434404485c3', 'sophomore', 2, 'Business Administration', '2022-11-28', NULL, '(585) 555-3466'),
(81, 'Diana', 'Johnson', 'dj3152@rit.edu', '1b2fc9341a16ae4e30082965d537ae47c21a0f27fd43eab78330ed81751ae6db', 'sophomore', 2, 'Information Technology', '2023-01-11', NULL, '(585) 555-8661'),
(82, 'Hannah', 'Garcia', 'hg2860@rit.edu', 'fc881aa34d44660e1012dec26ccda0b469d6c8359e91dc674dab4c095b9fe832', 'senior', 4, 'Computer Science', '2024-02-26', NULL, '(585) 555-2229'),
(83, 'Julia', 'Brown', 'jb9797@rit.edu', 'd277670919a94ba361be1887d39852c3f31d7eed817343cbb70fcd8910841f86', 'sophomore', 2, 'Computer Science', '2021-01-15', NULL, '(585) 555-8810'),
(84, 'Hannah', 'Johnson', 'hj3962@rit.edu', 'fc881aa34d44660e1012dec26ccda0b469d6c8359e91dc674dab4c095b9fe832', 'sophomore', 2, 'Software Engineering', '2022-05-02', NULL, '(585) 555-1218'),
(85, 'Evan', 'Johnson', 'ej8754@rit.edu', 'ae74f72d212fb9871302a2459aeaf7b20bc2f792e4852be648a7d4e63967d9b1', 'senior', 4, 'Software Engineering', '2021-04-22', NULL, '(585) 555-6746'),
(86, 'Diana', 'Smith', 'ds6989@rit.edu', '1b2fc9341a16ae4e30082965d537ae47c21a0f27fd43eab78330ed81751ae6db', 'sophomore', 2, 'Biomedical Sciences', '2023-08-07', NULL, '(585) 555-7544'),
(87, 'Evan', 'Garcia', 'eg2276@rit.edu', 'ae74f72d212fb9871302a2459aeaf7b20bc2f792e4852be648a7d4e63967d9b1', 'junior', 3, 'Computer Science', '2023-08-21', NULL, '(585) 555-5921'),
(88, 'Ian', 'Garcia', 'ig8786@rit.edu', 'b54a95127a4b573f41e335fdbd339dcc2208fbfb1ae0b6fab7599d6e2d6ec754', 'sophomore', 2, 'Biomedical Sciences', '2021-01-19', NULL, '(585) 555-1960'),
(89, 'Fiona', 'Brown', 'fb8996@rit.edu', '4c0db82499ca9a6d65c396d1fbb8e77078e315bd8db0e9476a88cd244aa76ca6', 'sophomore', 2, 'Computer Science', '2024-07-09', NULL, '(585) 555-5682'),
(90, 'Hannah', 'Brown', 'hb3231@rit.edu', 'fc881aa34d44660e1012dec26ccda0b469d6c8359e91dc674dab4c095b9fe832', 'freshman', 1, 'Mechanical Engineering', '2023-02-18', NULL, '(585) 555-1050'),
(91, 'Ian', 'Johnson', 'ij8713@rit.edu', 'b54a95127a4b573f41e335fdbd339dcc2208fbfb1ae0b6fab7599d6e2d6ec754', 'sophomore', 2, 'Mechanical Engineering', '2023-10-25', NULL, '(585) 555-1831'),
(92, 'Hannah', 'Smith', 'hs8389@rit.edu', 'fc881aa34d44660e1012dec26ccda0b469d6c8359e91dc674dab4c095b9fe832', 'freshman', 1, 'Mechanical Engineering', '2021-08-23', NULL, '(585) 555-7327'),
(93, 'Evan', 'Brown', 'eb3460@rit.edu', 'ae74f72d212fb9871302a2459aeaf7b20bc2f792e4852be648a7d4e63967d9b1', 'freshman', 1, 'Computer Science', '2023-03-01', NULL, '(585) 555-3698'),
(94, 'Bob', 'Johnson', 'bj7261@rit.edu', '81b637d8fcd2c6da6359e6963113a1170de795e4b725b84d1e0b4cfd9ec58ce9', 'senior', 4, 'Information Technology', '2022-09-05', NULL, '(585) 555-7151'),
(95, 'Fiona', 'Smith', 'fs6205@rit.edu', '4c0db82499ca9a6d65c396d1fbb8e77078e315bd8db0e9476a88cd244aa76ca6', 'freshman', 1, 'Business Administration', '2022-03-14', NULL, '(585) 555-7311'),
(96, 'Diana', 'Martinez', 'dm4293@rit.edu', '1b2fc9341a16ae4e30082965d537ae47c21a0f27fd43eab78330ed81751ae6db', 'junior', 3, 'Software Engineering', '2022-05-25', NULL, '(585) 555-1183'),
(97, 'Hannah', 'Johnson', 'hj7241@rit.edu', 'fc881aa34d44660e1012dec26ccda0b469d6c8359e91dc674dab4c095b9fe832', 'sophomore', 2, 'Business Administration', '2021-04-05', NULL, '(585) 555-1671'),
(98, 'Julia', 'Garcia', 'jg9834@rit.edu', 'd277670919a94ba361be1887d39852c3f31d7eed817343cbb70fcd8910841f86', 'senior', 4, 'Software Engineering', '2023-10-02', NULL, '(585) 555-9602'),
(99, 'George', 'Brown', 'gb4203@rit.edu', '0522a55e2d5f0993a3d66d28864b2862a7218a75ea7968b075333434404485c3', 'senior', 4, 'Computer Science', '2021-06-13', NULL, '(585) 555-5276'),
(100, 'Fiona', 'Martinez', 'fm4320@rit.edu', '4c0db82499ca9a6d65c396d1fbb8e77078e315bd8db0e9476a88cd244aa76ca6', 'junior', 3, 'Mechanical Engineering', '2022-06-23', NULL, '(585) 555-7093');



-- TABLE TUTOR
CREATE TABLE tutor (
    id INT NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email_address VARCHAR(100) NOT NULL,
    password CHAR(64) NOT NULL,
    status ENUM("inactive", "active") NULL,
    date_hired DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
    image TEXT NULL,
    phone VARCHAR(20) NULL,
    PRIMARY KEY (id)
);

INSERT INTO tutor (id, first_name, last_name, email_address, password, status, date_hired, image, phone) VALUES
(1, 'Alice', 'Johnson', 'aj4823@rit.edu', '2bd806c97f0e00af1a1fc3328fa763a9269723c8db8fac4f93af71db186d6e90', 'active', '2023-01-10', NULL, '(585) 555-1010'),
(2, 'Bob', 'Smith', 'bs2369@rit.edu', '81b637d8fcd2c6da6359e6963113a1170de795e4b725b84d1e0b4cfd9ec58ce9', 'active', '2023-02-15', NULL, '(585) 555-2020'),
(3, 'Charlie', 'Nguyen', 'cn5930@rit.edu', 'b9dd960c1753459a78115d3cb845a57d924b6877e805b08bd01086ccdf34433c', 'inactive', '2022-11-03', NULL, '(585) 555-3030'),
(4, 'Diana', 'Lopez', 'dl2942@rit.edu', '1b2fc9341a16ae4e30082965d537ae47c21a0f27fd43eab78330ed81751ae6db', 'active', '2024-03-12', NULL, '(585) 555-4040'),
(5, 'Evan', 'Martinez', 'em2130@rit.edu', 'ae74f72d212fb9871302a2459aeaf7b20bc2f792e4852be648a7d4e63967d9b1', 'active', '2023-07-18', NULL, '(585) 555-5050'),
(6, 'Fiona', 'Garcia', 'fg8894@rit.edu', '4c0db82499ca9a6d65c396d1fbb8e77078e315bd8db0e9476a88cd244aa76ca6', 'inactive', '2022-09-27', NULL, '(585) 555-6060'),
(7, 'George', 'Brown', 'gb2888@rit.edu', '0522a55e2d5f0993a3d66d28864b2862a7218a75ea7968b075333434404485c3', 'active', '2023-05-22', NULL, '(585) 555-7070'),
(8, 'Hannah', 'Davis', 'hd7924@rit.edu', 'fc881aa34d44660e1012dec26ccda0b469d6c8359e91dc674dab4c095b9fe832', 'active', '2024-01-08', NULL, '(585) 555-8080'),
(9, 'Ian', 'Miller', 'im2874@rit.edu', 'b54a95127a4b573f41e335fdbd339dcc2208fbfb1ae0b6fab7599d6e2d6ec754', 'inactive', '2021-12-19', NULL, '(585) 555-9090'),
(10, 'Julia', 'Wilson', 'jw1050@rit.edu', 'd277670919a94ba361be1887d39852c3f31d7eed817343cbb70fcd8910841f86', 'active', '2023-04-05', NULL, '(585) 555-0001');



-- TABLE SUBJECT
CREATE TABLE subject (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    department VARCHAR(100) NOT NULL,
    professor VARCHAR(100) NOT NULL,
    credits INT NOT NULL,
    term ENUM("fall", "spring") NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO subject (id, name, department, professor, credits, term) VALUES
(1, 'Intro to Computer Science', 'Computer Science', 'Dr. Alice Johnson', 4, 'fall'),
(2, 'Data Structures', 'Computer Science', 'Dr. Bob Smith', 4, 'spring'),
(3, 'Software Engineering Principles', 'Software Engineering', 'Dr. Charlie Nguyen', 3, 'fall'),
(4, 'Database Systems', 'Information Technology', 'Dr. Diana Lopez', 3, 'spring'),
(5, 'Networking Fundamentals', 'Information Technology', 'Dr. Evan Martinez', 3, 'fall'),
(6, 'Mechanical Design', 'Mechanical Engineering', 'Dr. Fiona Garcia', 4, 'spring'),
(7, 'Thermodynamics', 'Mechanical Engineering', 'Dr. George Brown', 3, 'fall'),
(8, 'Business Management', 'Business Administration', 'Dr. Hannah Davis', 3, 'spring'),
(9, 'Marketing Principles', 'Business Administration', 'Dr. Ian Miller', 3, 'fall'),
(10, 'Finance and Accounting', 'Business Administration', 'Dr. Julia Wilson', 3, 'spring'),
(11, 'Biomedical Lab Techniques', 'Biomedical Sciences', 'Dr. Kevin Lee', 3, 'fall'),
(12, 'Human Anatomy', 'Biomedical Sciences', 'Dr. Laura Smith', 4, 'spring'),
(13, 'Operating Systems', 'Computer Science', 'Dr. Michael Johnson', 4, 'fall'),
(14, 'Algorithms', 'Computer Science', 'Dr. Nicole Martinez', 4, 'spring'),
(15, 'Software Testing', 'Software Engineering', 'Dr. Oliver Brown', 3, 'fall'),
(16, 'Web Development', 'Information Technology', 'Dr. Patricia Davis', 3, 'spring'),
(17, 'Manufacturing Processes', 'Mechanical Engineering', 'Dr. Quentin Lee', 3, 'fall'),
(18, 'Engineering Materials', 'Mechanical Engineering', 'Dr. Rachel Miller', 3, 'spring'),
(19, 'Entrepreneurship', 'Business Administration', 'Dr. Steven White', 3, 'fall'),
(20, 'Organizational Behavior', 'Business Administration', 'Dr. Teresa Wilson', 3, 'spring'),
(21, 'Genetics', 'Biomedical Sciences', 'Dr. Alice Nguyen', 4, 'fall'),
(22, 'Biochemistry', 'Biomedical Sciences', 'Dr. Bob Martinez', 4, 'spring'),
(23, 'Mobile App Development', 'Software Engineering', 'Dr. Charlie Lopez', 3, 'fall'),
(24, 'Cybersecurity', 'Information Technology', 'Dr. Diana Johnson', 3, 'spring'),
(25, 'Capstone Design Project', 'Mechanical Engineering', 'Dr. Evan Brown', 4, 'fall');



-- TABLE ASSIGNED
CREATE TABLE assigned (
    tutor_id INT NOT NULL,
    subject_id INT NOT NULL,
    proficiency ENUM("beginner", "intermediate", "expert") NOT NULL,
    PRIMARY KEY (tutor_id, subject_id),
    FOREIGN KEY (tutor_id) REFERENCES tutor (id)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    FOREIGN KEY (subject_id) REFERENCES subject (id)
        ON UPDATE CASCADE
        ON DELETE CASCADE
);

INSERT INTO assigned (tutor_id, subject_id, proficiency) VALUES
(1, 1, 'expert'),
(2, 2, 'intermediate'),
(3, 3, 'beginner'),
(4, 4, 'expert'),
(5, 5, 'intermediate'),
(6, 6, 'beginner'),
(7, 7, 'expert'),
(8, 8, 'intermediate'),
(9, 9, 'beginner'),
(10, 10, 'expert'),
(1, 11, 'intermediate'),
(2, 12, 'beginner'),
(3, 13, 'expert'),
(4, 14, 'intermediate'),
(5, 15, 'beginner'),
(6, 16, 'expert'),
(7, 17, 'intermediate'),
(8, 18, 'beginner'),
(9, 19, 'expert'),
(10, 20, 'intermediate'),
(1, 21, 'beginner'),
(2, 22, 'expert'),
(3, 23, 'intermediate'),
(4, 24, 'beginner'),
(5, 25, 'expert'),
(6, 1, 'intermediate'),
(7, 2, 'beginner'),
(8, 3, 'expert'),
(9, 4, 'intermediate'),
(10, 5, 'beginner'),
(1, 6, 'expert'),
(2, 7, 'intermediate'),
(3, 8, 'beginner'),
(4, 9, 'expert'),
(5, 10, 'intermediate'),
(6, 11, 'beginner'),
(7, 12, 'expert'),
(8, 13, 'intermediate'),
(9, 14, 'beginner'),
(10, 15, 'expert'),
(1, 16, 'intermediate'),
(2, 17, 'beginner'),
(3, 18, 'expert'),
(4, 19, 'intermediate'),
(5, 20, 'beginner'),
(6, 21, 'expert'),
(7, 22, 'intermediate'),
(8, 23, 'beginner'),
(9, 24, 'expert'),
(10, 25, 'intermediate');



-- TABLE ROOM
CREATE TABLE room (
    id INT NOT NULL AUTO_INCREMENT,
    room_number CHAR(7) NOT NULL,
    building VARCHAR(50) NOT NULL,
    capacity INT NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO room (id, room_number, building, capacity) VALUES
(1, '101', 'Gleason Hall', 30),
(2, '102', 'Gleason Hall', 35),
(3, '201', 'Bausch & Lomb Center', 25),
(4, '202', 'Bausch & Lomb Center', 40),
(5, '301', 'Gleason Hall', 50),
(6, '302', 'Gleason Hall', 45),
(7, '103', 'James E. Booth Hall', 30),
(8, '104', 'James E. Booth Hall', 35),
(9, '205', 'Naegele Hall', 40),
(10, '206', 'Naegele Hall', 30),
(11, '107', 'Gleason Hall', 25),
(12, '108', 'Bausch & Lomb Center', 30),
(13, '207', 'James E. Booth Hall', 40),
(14, '208', 'James E. Booth Hall', 35),
(15, '109', 'Naegele Hall', 30),
(16, '110', 'Naegele Hall', 25),
(17, '309', 'Gleason Hall', 50),
(18, '310', 'Gleason Hall', 45),
(19, '111', 'Bausch & Lomb Center', 30),
(20, '112', 'Bausch & Lomb Center', 35),
(21, '211', 'James E. Booth Hall', 40),
(22, '212', 'James E. Booth Hall', 30),
(23, '113', 'Naegele Hall', 25),
(24, '114', 'Gleason Hall', 30),
(25, '315', 'Bausch & Lomb Center', 40);



-- TABLE SESSION
CREATE TABLE session (
    id INT NOT NULL AUTO_INCREMENT,
    student_id INT NOT NULL,
    tutor_id INT NOT NULL,
    subject_id INT NOT NULL,
    room_id INT NOT NULL,
    date_scheduled DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
    status ENUM("tba", "no-show", "cancelled", "scheduled", "completed") NULL DEFAULT "tba",
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



-- TABLE RATING
CREATE TABLE rating (
    id INT NOT NULL AUTO_INCREMENT,
    session_id INT NOT NULL,
    score_label ENUM("subpar", "needs work", "great") NOT NULL,
    score_value ENUM("1", "3", "5") NOT NULL,
    comment VARCHAR(250) NULL,
    date_rated DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (session_id) REFERENCES session (id)
        ON UPDATE CASCADE
        ON DELETE CASCADE
);
