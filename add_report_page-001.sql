INSERT INTO `leocraft_utanew`.`pages` (`view`, `menu_ru`, `menu_ua`, `menu_en`, `title_ru`, `title_ua`, `title_en`, `headtitle_ru`, `headtitle_ua`, `headtitle_en`, `public`) VALUES ('reports', 'Регламентная отчётность', 'Регламентна звітність', 'Regulatory reporting', 'Регламентная отчётность', 'Регламентна звітність', 'Regulatory reporting', 'Регламентная отчётность', 'Регламентна звітність', 'Regulatory reporting', 'yes');

CREATE TABLE `leocraft_utanew`.`reports` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `num` INT NULL COMMENT 'порядок сортировки',
  `report_name` VARCHAR(255) NOT NULL COMMENT 'Название отчёта',
  `report_file_name` VARCHAR(255) NOT NULL COMMENT 'имя файла отчёта',
  `date_added` TIMESTAMP NOT NULL COMMENT 'Когда добавлен отчёт',
  `published` TINYINT NOT NULL COMMENT 'отображать или нет?',
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;
