-- add ins_month number column
ALTER TABLE `energy`.`usetb` ADD COLUMN `ins_month_num` SMALLINT NULL  AFTER `ins_month` ;
-- update ins_month_num
UPDATE `energy`.`usetb` SET ins_month_num = 1 WHERE ins_month = 'มกราคม';
UPDATE `energy`.`usetb` SET ins_month_num = 2 WHERE ins_month = 'กุมภาพันธุ์';
UPDATE `energy`.`usetb` SET ins_month_num = 3 WHERE ins_month = 'มีนาคม';
UPDATE `energy`.`usetb` SET ins_month_num = 4 WHERE ins_month = 'เมษายน';
UPDATE `energy`.`usetb` SET ins_month_num = 5 WHERE ins_month = 'พฤษภาคม';
UPDATE `energy`.`usetb` SET ins_month_num = 6 WHERE ins_month = 'มิถุนายน';
UPDATE `energy`.`usetb` SET ins_month_num = 7 WHERE ins_month = 'กรกฎาคม';
UPDATE `energy`.`usetb` SET ins_month_num = 8 WHERE ins_month = 'สิงหาคม';
UPDATE `energy`.`usetb` SET ins_month_num = 9 WHERE ins_month = 'กันยายน';
UPDATE `energy`.`usetb` SET ins_month_num = 10 WHERE ins_month = 'ตุลาคม';
UPDATE `energy`.`usetb` SET ins_month_num = 11 WHERE ins_month = 'พฤศจิกายน';
UPDATE `energy`.`usetb` SET ins_month_num = 12 WHERE ins_month = 'ธันวาคม';
-- change ins_year type to YEAR
ALTER TABLE `energy`.`usetb` CHANGE COLUMN `ins_year` `ins_year` INT NOT NULL ;
-- add budget year column
ALTER TABLE `energy`.`usetb` ADD COLUMN `budget_year` INT NULL AFTER `ins_year`;
-- update budget year
UPDATE `energy`.`usetb` SET budget_year = ins_year WHERE ins_month_num < 10;
UPDATE `energy`.`usetb` SET budget_year = ins_year+1 WHERE ins_month_num >= 10;