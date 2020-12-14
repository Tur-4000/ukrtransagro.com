ALTER TABLE `leocraft_utanew`.`reports`
DROP COLUMN `num`,
ADD COLUMN `report_year` INT NOT NULL AFTER `report_file_name`;
