ALTER TABLE `leocraft_utanew`.`pages`
    CHANGE COLUMN `cat` `cat` VARCHAR(30) NULL ,
    CHANGE COLUMN `podcat` `podcat` VARCHAR(30) NULL ,
    CHANGE COLUMN `descript_ru` `descript_ru` VARCHAR(500) NULL ,
    CHANGE COLUMN `descript_ua` `descript_ua` VARCHAR(500) NULL ,
    CHANGE COLUMN `descript_en` `descript_en` VARCHAR(500) NULL ,
    CHANGE COLUMN `headdecript_ru` `headdecript_ru` VARCHAR(500) NULL ,
    CHANGE COLUMN `headdecript_ua` `headdecript_ua` VARCHAR(500) NULL ,
    CHANGE COLUMN `headdecript_en` `headdecript_en` VARCHAR(500) NULL ,
    CHANGE COLUMN `intro_ru` `intro_ru` TEXT NULL ,
    CHANGE COLUMN `intro_ua` `intro_ua` TEXT NULL ,
    CHANGE COLUMN `intro_en` `intro_en` TEXT NULL ,
    CHANGE COLUMN `text_ru` `text_ru` TEXT NULL ,
    CHANGE COLUMN `text_ua` `text_ua` TEXT NULL ,
    CHANGE COLUMN `text_en` `text_en` TEXT NULL ,
    CHANGE COLUMN `page` `page` VARCHAR(30) NULL ;

INSERT INTO `leocraft_utanew`.`pages` (`view`, `menu_ru`, `menu_ua`, `menu_en`, `title_ru`, `title_ua`, `title_en`, `headtitle_ru`, `headtitle_ua`, `headtitle_en`, `public`) VALUES ('newsarchives', 'Архив новостей', 'Архив новин', 'News archives', 'Архив новостей', 'Архив новин', 'News archives', 'Архив новостей', 'Архив новин', 'News archives', 'yes');