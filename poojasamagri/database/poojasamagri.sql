-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema poojasamagri
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `poojasamagri` ;

-- -----------------------------------------------------
-- Schema poojasamagri
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `poojasamagri` DEFAULT CHARACTER SET utf8 ;
USE `poojasamagri` ;

-- -----------------------------------------------------
-- Table `poojasamagri`.`producttable`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `poojasamagri`.`producttable` ;

CREATE TABLE IF NOT EXISTS `poojasamagri`.`producttable` (
  `product_id` INT(11) NOT NULL AUTO_INCREMENT,
  `product_name` VARCHAR(45) NULL DEFAULT NULL,
  `product_description` VARCHAR(225) NULL DEFAULT NULL,
  `product_discount` VARCHAR(225) NULL DEFAULT NULL,
  `product_quantity` VARCHAR(225) NULL DEFAULT NULL,
  `product_image` VARCHAR(255) NULL DEFAULT NULL,
  `product_color` VARCHAR(255) NULL DEFAULT NULL,
  `product_price` VARCHAR(255) NULL DEFAULT NULL,
  `product_quality` VARCHAR(255) NULL DEFAULT NULL,
  `product_status` ENUM('expired', 'un_expired') NULL DEFAULT NULL,
  `product_category` ENUM('agarbatti', 'batti', 'clothes', 'untensils', 'pujasamagri', 'jwelery', 'statue', 'oils', 'others') NULL DEFAULT NULL,
  `product_for` ENUM('lakhbatti', 'hawan', 'satyanarayanpuja', 'birthdaypuja', 'pitrikarya', 'rudri', 'laxmipuja', 'durgapuja', 'aarati', 'saptaha', 'swayambunathpuja', 'chhath', 'santipuja') NULL DEFAULT NULL,
  `product_code` VARCHAR(255) NULL,
  PRIMARY KEY (`product_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `poojasamagri`.`tbl_userlogin`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `poojasamagri`.`tbl_userlogin` ;

CREATE TABLE IF NOT EXISTS `poojasamagri`.`tbl_userlogin` (
  `user_id` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `user_fname` VARCHAR(225) NOT NULL,
  `user_lname` VARCHAR(225) NOT NULL,
  `user_email` VARCHAR(225) NOT NULL,
  `user_contact` VARCHAR(225) NOT NULL,
  `user_password` VARCHAR(225) NOT NULL,
  `user_status` ENUM('active', 'in_active') NULL DEFAULT NULL,
  `user_address` VARCHAR(225) NOT NULL,
  `user_gender` VARCHAR(255) NULL DEFAULT NULL,
  `user_image` VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `poojasamagri`.`ordertable`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `poojasamagri`.`ordertable` ;

CREATE TABLE IF NOT EXISTS `poojasamagri`.`ordertable` (
  `order_id` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `order_date` TIMESTAMP NULL DEFAULT NULL,
  `order_quantity` VARCHAR(255) NULL DEFAULT NULL,
  `order_status` ENUM('Paid', 'pending', 'approved', 'rejected') NULL DEFAULT NULL,
  `ordered_by` BIGINT(20) NULL DEFAULT NULL,
  `order_remark` TEXT NULL DEFAULT NULL,
  `order_reviewed_date` TIMESTAMP NULL DEFAULT NULL,
  `product_id` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`order_id`),
  INDEX `fk_ordertable_tbl_userlogin_idx` (`ordered_by` ASC) ,
  INDEX `fk_ordertable_producttable1_idx` (`product_id` ASC) ,
  CONSTRAINT `fk_ordertable_producttable1`
    FOREIGN KEY (`product_id`)
    REFERENCES `poojasamagri`.`producttable` (`product_id`)
    ON DELETE SET NULL
    ON UPDATE SET NULL,
  CONSTRAINT `fk_ordertable_tbl_userlogin`
    FOREIGN KEY (`ordered_by`)
    REFERENCES `poojasamagri`.`tbl_userlogin` (`user_id`)
    ON DELETE SET NULL
    ON UPDATE SET NULL)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `poojasamagri`.`tbl_adminlogin`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `poojasamagri`.`tbl_adminlogin` ;

CREATE TABLE IF NOT EXISTS `poojasamagri`.`tbl_adminlogin` (
  `adm_id` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `adm_fname` VARCHAR(225) NULL DEFAULT NULL,
  `adm_lname` VARCHAR(225) NULL DEFAULT NULL,
  `adm_email` VARCHAR(225) NOT NULL,
  `adm_contact` VARCHAR(225) NULL DEFAULT NULL,
  `adm_password` VARCHAR(225) NULL DEFAULT NULL,
  `adm_role` ENUM('superadmin', 'subadmin') NULL DEFAULT NULL,
  `adm_status` ENUM('active', 'in_active') NULL DEFAULT NULL,
  `admin_image` VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (`adm_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
