CREATE SCHEMA IF NOT EXISTS SG;
USE SG;

DROP TABLE IF EXISTS s_user;
CREATE TABLE s_user (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) ,
lastname VARCHAR(30) ,
pass VARCHAR(80) NOT NULL,
email VARCHAR(50) NOT NULL,
hash VARCHAR(50)
);

INSERT INTO s_user (id, firstname, lastname, pass, email, hash) VALUES (NULL, 'Pancho', 'Villa','dadada', 'dadada@dadada.com', '28b8ee388462bad2771436a6cbf901481c2661d9');
INSERT INTO s_user (id, firstname, lastname, pass, email, hash) VALUES (NULL, 'Zedd', 'Zedding','123123','zedd@zedding.com', '28b8ee38');
INSERT INTO s_user (id, firstname, lastname, pass, email, hash) VALUES (NULL, 'Insanity', 'Clarity','eeee','clarity@insanity.com', 'sdajlakjsad');
INSERT INTO s_user (id, firstname, lastname, pass, email, hash) VALUES (NULL, 'Foxes', 'Foxes','tragedy','tragedy@remedy.com', 'duyegdhs76ad');
COMMIT;
