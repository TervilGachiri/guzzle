
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- contact
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `contact`;

CREATE TABLE `contact`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(200),
    `email` VARCHAR(200),
    `country` VARCHAR(100),
    `contact_date` DATETIME,
    `message` TEXT,
    `phone` VARCHAR(20),
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- staff
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `staff`;

CREATE TABLE `staff`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `lname` VARCHAR(100),
    `fname` VARCHAR(100),
    `short_bio` TEXT,
    `user_image` TEXT,
    `linkedin` TEXT,
    `email_address` VARCHAR(100),
    `role` VARCHAR(10),
    `employment_date` INTEGER(4),
    `status` TINYINT(1) DEFAULT 1 NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
