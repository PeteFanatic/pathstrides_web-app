-- Table `pathsrides`.`admin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pathstrides`.`admin` (
  `admin_id` INT NOT NULL,
  `admin_fname` VARCHAR(45) NOT NULL,
  `admin_lname` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`admin_id`))
ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS `pathstrides`.`users` (
  `user_id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `role` INT default '0',
  PRIMARY KEY (`user_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pathsrides`.`departments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pathstrides`.`departments` (
  `dep_id` INT NOT NULL,
  `dep_title` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`dep_id`))
ENGINE = InnoDB;





-- -----------------------------------------------------
-- Table `pathsrides`.`manager`
-- -----------------------------------------------------

    
CREATE TABLE IF NOT EXISTS `pathstrides`.`manager` (
  `man_id` INT NOT NULL,
  `man_fname` VARCHAR(45) NOT NULL,
  `man_lname` VARCHAR(45) NOT NULL,
  `man_email` VARCHAR(45) NOT NULL,
  `man_contanct_num` VARCHAR(45) NOT NULL,
  `man_username` VARCHAR(45) NOT NULL,
  `man_password` VARCHAR(45) NOT NULL,
   `admin_id` INT NOT NULL,
	`dep_id` INT NOT NULL,
  PRIMARY KEY (`man_id`),
  INDEX `fk_manager_admin1_idx` (`admin_id` ASC),
   INDEX `fk_manager_department1_idx` (`dep_id` ASC),
  CONSTRAINT `fk_manager_admin1`
    FOREIGN KEY (`admin_id`)
    REFERENCES `pathstrides`.`admin` (`admin_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
     CONSTRAINT `fk_manager_department1`
    FOREIGN KEY (`dep_id`)
    REFERENCES `pathstrides`.`departments` (`dep_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;
 

-- -----------------------------------------------------
-- Table `pathsrides`.`employee`
-- -----------------------------------------------------

    
CREATE TABLE `pathstrides`.`employee` (
  `emp_id` INT NOT NULL,
  `emp_fname` VARCHAR(45) NOT NULL,
  `emp_lname` VARCHAR(45) NOT NULL,
  `emp_email` VARCHAR(45) NOT NULL,
  `emp_contanct_num` VARCHAR(45) NOT NULL,
   `emp_username` VARCHAR(45) NOT NULL,
  `emp_password` VARCHAR(45) NOT NULL,
  `man_id` INT NOT NULL,
  	`dep_id` INT NOT NULL,
  PRIMARY KEY (`emp_id`),
   INDEX `fk_employee_manager1_idx` (`man_id` ASC),
    INDEX `fk_employee_department1_idx` (`dep_id` ASC),
  CONSTRAINT `fk_employee_manager1`
    FOREIGN KEY (`man_id`)
    REFERENCES `pathstrides`.`manager` (`man_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
	CONSTRAINT `fk_employee_department1`
    FOREIGN KEY (`dep_id`)
    REFERENCES `pathstrides`.`departments` (`dep_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
    ENGINE = InnoDB;
    
    
    -- -----------------------------------------------------
-- Table `pathsrides`.`task`
-- -----------------------------------------------------

    
 CREATE TABLE `pathstrides`.`task` (
  `task_id` INT NOT NULL,
  `task_title` VARCHAR(45) NOT NULL,
  `task_desc` VARCHAR(255) NOT NULL,
  `points` VARCHAR(45) NOT NULL,
`location` VARCHAR(45) NOT NULL,
  `emp_id` INT NOT NULL,
	`man_id` INT NOT NULL,
  PRIMARY KEY (`task_id`),
  INDEX `fk_task_employee1_idx` (`emp_id` ASC),
   INDEX `fk_task_manager1_idx` (`man_id` ASC),
   CONSTRAINT `fk_task_employee1`
    FOREIGN KEY (`emp_id`)
    REFERENCES `pathstrides`.`employee` (`emp_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    CONSTRAINT `fk_task_manager1`
    FOREIGN KEY (`man_id`)
    REFERENCES `pathstrides`.`manager` (`man_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
    ENGINE = InnoDB;


 -- -----------------------------------------------------
-- Table `pathsrides`.`announcement`
-- -----------------------------------------------------
    
CREATE TABLE `pathstrides`.`announcement` (
  `ann_id` INT NOT NULL,
  `ann_title` VARCHAR(45) NOT NULL,
  `ann_desc` VARCHAR(255) NOT NULL,
`location` VARCHAR(45) NOT NULL,
  `man_id` INT NOT NULL,
  PRIMARY KEY (`ann_id`),
  INDEX `fk_announcements_manager1_idx` (`man_id` ASC),
   CONSTRAINT `fk_announcements_manager1`
    FOREIGN KEY (`man_id`)
    REFERENCES `pathstrides`.`manager` (`man_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
    ENGINE = InnoDB;
    
    
    
  
    
    
    -- -----------------------------------------------------
-- Table `pathsrides`.`subtask`
-- -----------------------------------------------------

    
    CREATE TABLE `pathstrides`.`subtask` (
  `task_id` INT NOT NULL,
   `emp_id` INT NOT NULL,
   `man_id` INT NOT NULL,
  `task_desc` VARCHAR(255) NOT NULL,
 INDEX `fk_subtask_employee1_idx` (`emp_id` ASC),
 INDEX `fk_subtask_manager1_idx` (`man_id` ASC),
  INDEX `fk_subtask_task1_idx` (`task_id` ASC),
   CONSTRAINT `fk_subtask_employee1`
    FOREIGN KEY (`emp_id`)
    REFERENCES `pathstrides`.`employee` (`emp_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
     CONSTRAINT `fk_subtask_manager1`
    FOREIGN KEY (`man_id`)
    REFERENCES `pathstrides`.`manager` (`man_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
     CONSTRAINT `fk_subtask_task1`
    FOREIGN KEY (`task_id`)
    REFERENCES `pathstrides`.`task` (`task_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
    ENGINE = InnoDB;
    
    
    

    
    
    
--     -- -----------------------------------------------------
-- -- Table `pathsrides`.`employee_manager_departments`
-- -- -----------------------------------------------------
-- CREATE TABLE IF NOT EXISTS `pathstrides`.`employee_manager_departments` (
--   `dep_id` INT NOT NULL,
--    `man_id` INT NOT NULL,
--   `emp_id` INT NOT NULL,
--   INDEX `fk_employee_manager_departments_department1_idx` (`dep_id` ASC),
--   INDEX `fk_employee_manager_departments_employee1_idx` (`emp_id` ASC),
--   INDEX `fk_employee_manager_departments_manager1_idx` (`man_id` ASC),
--   CONSTRAINT `fk_employee_manager_departments_employee1`
--     FOREIGN KEY (`emp_id`)
--     REFERENCES `pathstrides`.`employee` (`emp_id`)
--     ON DELETE NO ACTION
--     ON UPDATE NO ACTION,
--   CONSTRAINT `fk_employee_manager_departments_manager1`
--     FOREIGN KEY (`man_id`)
--     REFERENCES `pathstrides`.`manager` (`man_id`)
--     ON DELETE NO ACTION
--     ON UPDATE NO ACTION,
-- 	CONSTRAINT `fk_employee_manager_departments_department1`
--     FOREIGN KEY (`dep_id`)
--     REFERENCES `pathstrides`.`departments` (`dep_id`)
--     ON DELETE NO ACTION
--     ON UPDATE NO ACTION)
-- ENGINE = InnoDB;





--    CREATE TABLE `pathstrides`.`freebie` (
--   `free_id` INT NOT NULL,
--   `free_name` VARCHAR(45) NOT NULL,
--   `free_desc` VARCHAR(255) NOT NULL,
--   `task_id` INT NOT NULL,
--   PRIMARY KEY (`free_id`),
--   INDEX `fk_freebie_task1_idx` (`task_id` ASC),
--    CONSTRAINT `fk_freebie_task1`
--     FOREIGN KEY (`task_id`)
--     REFERENCES `pathstrides`.`task` (`task_id`)
--     ON DELETE NO ACTION
--     ON UPDATE NO ACTION)
--     ENGINE = InnoDB;

