CREATE DATABASE Post3;
use Post3;
CREATE TABLE blogg
(
   `post_id`      INT NOT NULL AUTO_INCREMENT,
   `title`        VARCHAR(255) NOT NULL,
   `subtitle`     VARCHAR(255) NOT NULL,
   `publish_date` TIMESTAMP,
   `featured` TINYINT,
   PRIMARY KEY (`post_id`)
) ENGINE = InnoDB
CHARACTER SET = utf8mb4
COLLATE utf8mb4_unicode_ci
;
