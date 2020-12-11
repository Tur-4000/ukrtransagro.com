ALTER TABLE `leocraft_utanew`.`reports`
CHANGE COLUMN `report_name` `report_name_ru` VARCHAR(255) NOT NULL COMMENT 'Название отчёта' ,
ADD COLUMN `report_name_ua` VARCHAR(255) NOT NULL AFTER `report_name_ru`,
ADD COLUMN `report_name_en` VARCHAR(255) NULL AFTER `report_name_ua`;
