DROP DATABASE IF EXISTS security;
CREATE database security;
USE security;
CREATE TABLE users
                (
                id int(3) NOT NULL AUTO_INCREMENT,
                username varchar(20) NOT NULL,
                password varchar(20) NOT NULL,
                PRIMARY KEY (id)
                );
CREATE TABLE emails
                (
                id int(3)NOT NULL AUTO_INCREMENT,
                email_id varchar(30) NOT NULL,
                PRIMARY KEY (id)
                );
CREATE TABLE uagents
                (
                id int(3)NOT NULL AUTO_INCREMENT,
                uagent varchar(256) NOT NULL,
                ip_address varchar(35) NOT NULL,
                username varchar(20) NOT NULL,
                PRIMARY KEY (id)
                );
CREATE TABLE referers
                (
                id int(3)NOT NULL AUTO_INCREMENT,
                referer varchar(256) NOT NULL,
                ip_address varchar(35) NOT NULL,
                PRIMARY KEY (id)
                );

INSERT INTO security.users (id, username, password) VALUES ('1', 'Dumb', 'Dumb'), ('2', 'Angelina', 'I-kill-you'), ('3', 'Dummy', 'p@ssword'), ('4', 'secure', 'crappy'), ('5', 'stupid', 'stupidity'), ('6', 'superman', 'genious'), ('7', 'batman', 'mob!le'), ('8', 'admin', 'admin');

INSERT INTO `security`.`emails` (id, email_id) VALUES ('1', 'Dumb@hackers.com'), ('2', 'Angel@hackers.com'), ('3', 'Dummy@hackers.com'), ('4', 'secure@hackers.com'), ('5', 'stupid@hackers.com'), ('6', 'superman@hackers.com'), ('7', 'batman@hackers.com'), ('8', 'admin@hackers.com');
