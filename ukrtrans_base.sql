-- MySQL dump 10.15  Distrib 10.0.38-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: ukrtrans_base
-- ------------------------------------------------------
-- Server version	10.0.38-MariaDB-cll-lve

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `ukrtrans_base`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `ukrtrans_base` /*!40100 DEFAULT CHARACTER SET cp1251 */;

USE `ukrtrans_base`;

--
-- Table structure for table `charact`
--

DROP TABLE IF EXISTS `charact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `charact` (
  `id` int(1) NOT NULL,
  `char1` varchar(12) NOT NULL,
  `char2` varchar(12) NOT NULL,
  `char3` varchar(12) NOT NULL,
  `char4` varchar(12) NOT NULL,
  `char5` varchar(12) NOT NULL,
  `char6` varchar(12) NOT NULL,
  `char7` varchar(12) NOT NULL,
  `char8` varchar(12) NOT NULL,
  `char9` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `charact`
--

LOCK TABLES `charact` WRITE;
/*!40000 ALTER TABLE `charact` DISABLE KEYS */;
INSERT INTO `charact` (`id`, `char1`, `char2`, `char3`, `char4`, `char5`, `char6`, `char7`, `char8`, `char9`) VALUES (1,'1 000 000','48 120','180','25 000','8,00','7 000','4 500','3 000','0,2%');
/*!40000 ALTER TABLE `charact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `docs`
--

DROP TABLE IF EXISTS `docs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `docs` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `num` int(2) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `title_ua` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `descript_ru` text NOT NULL,
  `descript_ua` text NOT NULL,
  `descript_en` text NOT NULL,
  `img` varchar(100) NOT NULL,
  `img_mini` varchar(100) NOT NULL,
  `public` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `docs`
--

LOCK TABLES `docs` WRITE;
/*!40000 ALTER TABLE `docs` DISABLE KEYS */;
INSERT INTO `docs` (`id`, `num`, `title_ru`, `title_ua`, `title_en`, `descript_ru`, `descript_ua`, `descript_en`, `img`, `img_mini`, `public`) VALUES (1,0,'СЕРТИФИКАТ ПОЛНОПРАВНОГО ЧЛЕНА EBA','СЕРТИФІКАТ ПОВНОПРАВНОГО ЧЛЕНА EBA','THE CERTIFICATE OF A FULL MEMBER OF THE EBA','В 2013 году наша компания получила статус полноправного члена EBA - Европейской бизнес-ассоциации. Это очень важный и значимый шаг на пути развития компании. Это стимулирует нас к дальнейшему росту и партнерству со многими крупными европейскими, украинскими и международными компаниями.',' У 2013 році наша компанія отримала статус повноправного члена EBA - Європейської бізнес-асоціації. Це дуже важливий і значущий крок на шляху розвитку компанії. Це стимулює нас до подальшого росту і партнерству з багатьма великими європейськими, українськими та міжнародними компаніями.','Our Company became a full member of the European Business Association (EBA) in 2013.\r\nThis is a very significant step in development of the Company. \r\nIt stimulates us to further growth and partnership with many of the major European, Ukrainian and international Companies','2016-Jan-28-114755.jpg','','yes'),(2,0,'СЕРТИФИКАТ СООТВЕТСТВИЯ УСЛУГ ПО ХРАНЕНИЮ ЗЕРНА И ПРОДУКТОВ ЕГО ПЕРЕРАБОТКИ','','','Данный документ подтверждает, что весь спектр оказываемых нами услуг по перевалке зерновых и масличных соответствует всем стандартам.','','','2016-Jan-28-123823.jpg','','no'),(3,0,'СВИДЕТЕЛЬСТВО ОБ АТТЕСТАЦИИ','','','В 2014 году ООО «УкрТрансАгро» успешно прошло процедуру аттестации производственной лаборатории. Данный документ подтверждает соблюдение нами всех установленных законодательством Украины отраслевых норм и требований по определению качества зерна.','','','2016-Jan-28-115719.jpg','','yes'),(4,0,'ЛИДЕР ОТРАСЛИ 2015','ЛІДЕР ГАЛУЗІ 2015','THE LEADER OF INDUSTRY 2015','Согласно рейтинга Союза Национальных бизнес-рейтингов ООО «УкрТрансАгро» признано лидером отрасли «Складское хозяйство» в Донецкой области в 2015 году за значительный вклад в развитие отрасли и экономики Украины в целом, приверженность высоким стандартам социальной защищенности работников, внедрение передовых технологий и создание имиджа Украины как правового экономически развитого государства.','Згідно рейтингу Союзу Національних бізнес-рейтингів ТОВ «УкрТрансАгро» визнано лідером в галузі «Складське господарство» в Донецькій області в 2015 році за значний внесок у розвиток галузі та економіки України в цілому, прихильність високим стандартам соціальної захищеності працівників, впровадження передових технологій і створення іміджу України як правової, економічно розвиненої держави','In 2015, UkrTransAgro was recognized as a storage facilities leader of Donetsk region by the Union of National Business Ratings mentioning Company’s significant contribution to the industry, its commitment to high standards of social protection of employees, the introduction of advanced technologies, and the promotion of the image of Ukraine as a legal and economically developed country. ','2016-Jan-28-115254.jpg','','yes');
/*!40000 ALTER TABLE `docs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(100) NOT NULL,
  `num` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery`
--

LOCK TABLES `gallery` WRITE;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` (`id`, `img`, `num`) VALUES (9,'1.jpg',3),(10,'2.jpg',4),(11,'3.jpg',1),(12,'4.jpg',6),(13,'5.jpg',5),(14,'6.jpg',7),(15,'7.jpg',2),(16,'8.jpg',10),(17,'9.jpg',11),(18,'10.jpg',8),(19,'11.jpg',12),(20,'12.jpg',9);
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mission`
--

DROP TABLE IF EXISTS `mission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mission` (
  `id` int(1) NOT NULL,
  `mission_ru` varchar(30) NOT NULL,
  `mission_ua` varchar(30) NOT NULL,
  `mission_en` varchar(30) NOT NULL,
  `dmission_ru` varchar(255) NOT NULL,
  `dmission_ua` varchar(255) NOT NULL,
  `dmission_en` varchar(255) NOT NULL,
  `vision_ru` varchar(30) NOT NULL,
  `vision_ua` varchar(30) NOT NULL,
  `vision_en` varchar(30) NOT NULL,
  `dvision_ru` varchar(255) NOT NULL,
  `dvision_ua` varchar(255) NOT NULL,
  `dvision_en` varchar(255) NOT NULL,
  `value_ru` varchar(30) NOT NULL,
  `value_ua` varchar(30) NOT NULL,
  `value_en` varchar(30) NOT NULL,
  `dvalue_ru` varchar(255) NOT NULL,
  `dvalue_ua` varchar(255) NOT NULL,
  `dvalue_en` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mission`
--

LOCK TABLES `mission` WRITE;
/*!40000 ALTER TABLE `mission` DISABLE KEYS */;
INSERT INTO `mission` (`id`, `mission_ru`, `mission_ua`, `mission_en`, `dmission_ru`, `dmission_ua`, `dmission_en`, `vision_ru`, `vision_ua`, `vision_en`, `dvision_ru`, `dvision_ua`, `dvision_en`, `value_ru`, `value_ua`, `value_en`, `dvalue_ru`, `dvalue_ua`, `dvalue_en`) VALUES (1,'Миссия','МІСІЯ','Mission','Мы способствуем расширению влияния Украины на мировую аграрную политику.','Ми сприяємо розширенню впливу України на світову аграрну політику','We facilitate the influence expansion of Ukraine upon the world’s agricultural policy.','Видение','БАЧЕННЯ','Vision','Стать лидером по объемам экспортируемой агропродукции с Азовского моря к 2018 году за счет построения взаимовыгодных партнерских отношений со всеми участниками логистической цепочки.','Стати лідером за обсягами експортованої агропродукції з Азовського моря до 2018 року за рахунок побудови взаємовигідних партнерських відносин з усіма учасниками логістичного ланцюга.','We are eager to become the leader in exporting of agricultural products from the Sea of Azov by the year 2018 through building mutually beneficial partnerships with all members of the logistics chain.','Ценности','ЦІННОСТІ','Core Values','Ценить каждого клиента!<br>\r\nДорожить каждым зернышком!<br>\r\nЭкономить каждую минуту!<br>\r\nСовершенствоваться с каждым днем!','Цінувати кожного клієнта! <br>\r\nДорожити кожним зернятком!<br>\r\nЕкономити кожну хвилину! <br>\r\nВдосконалюватися з кожним днем!<br>\r\n','Appreciate every Client!<br>\r\nValue every kernel!<br>\r\nSave every minute! <br>\r\nImprove every day!<br>');
/*!40000 ALTER TABLE `mission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `title_ru` varchar(150) NOT NULL,
  `title_ua` varchar(150) NOT NULL,
  `title_en` varchar(150) NOT NULL,
  `descript_ru` varchar(255) NOT NULL,
  `descript_ua` varchar(255) NOT NULL,
  `descript_en` varchar(255) NOT NULL,
  `text_ru` text NOT NULL,
  `text_ua` text NOT NULL,
  `text_en` text NOT NULL,
  `img` varchar(50) NOT NULL,
  `video` varchar(255) NOT NULL,
  `source` varchar(50) NOT NULL,
  `source_url` varchar(255) NOT NULL,
  `url` varchar(150) NOT NULL,
  `public` varchar(3) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`id`, `type`, `date`, `title_ru`, `title_ua`, `title_en`, `descript_ru`, `descript_ua`, `descript_en`, `text_ru`, `text_ua`, `text_en`, `img`, `video`, `source`, `source_url`, `url`, `public`) VALUES (9,'press','2016-01-14','Имея четкую стратегию, можно и в непростых условиях реализовывать свой потенциал ','','','В начале 2015 года правительство анонсировало внедрение политики дерегуляции, в частности и для АПК Украины. Были отменены различные разрешительные документы, упрощены процедуры оформления грузов на экспорт и пр., особое внимание уделялось работе портов.','','','<p style=\"text-align:justify\"><em>В начале 2015 года правительство анонсировало внедрение политики дерегуляции, в частности и для АПК Украины. Были отменены различные разрешительные документы, упрощены процедуры оформления грузов на экспорт и пр., особое внимание уделялось работе портов. Но если тому, как работают порты Большой Одессы, и притоку инвестиций в них уделялось много внимания не только чиновниками, но и СМИ, то о портах Азовского моря поступало не так много информации. Тем не менее, жизнь в этом регионе не остановилась. Несмотря на близость к территории конфликта, работа здесь кипит. В частности, на терминале ООО &laquo;УКРТРАНСАГРО&raquo;, расположенном на территории Мариупольского МТП. Подвести итоги 2015 года и поделиться планами на 2016 год согласился исполнительный директор ООО &laquo;УКРТРАНСАГРО&raquo;</em>&nbsp;<em><strong>Артем Мазный</strong></em><em>.</em></p>\r\n\r\n<p style=\"text-align:justify\"><em>ООО &laquo;УКРТРАНСАГРО&raquo; &ndash; оператор зернового рынка, предоставляющий комплекс услуг сертифицированного зернового терминала по приемке, накоплению, хранению и отгрузке на морские суда, ж/д и автотранспорт зерновых и масличных культур. Также предоставляет услуги логистической и экспедиторской компании (через ООО &laquo;УТА Логистик&raquo;). Находится под управлением ООО &laquo;Управляющая компания &laquo;Мариупольская инвестиционная группа&raquo;. Более подробную информацию о предприятии можно найти на сайте http://ukrtransagro.com.</em></p>\r\n\r\n<p><em>.</em></p>\r\n','','','11.jpg','https://www.youtube.com/embed/vT_VDYn1H-4','АПК-Информ : ИТОГИ №1 (19)','http://www.apk-inform.com/ru/exclusive/opinion/1062652#.VqnyKiqLSUn','imeya-chetkuyu-strategiyu-mojno','yes'),(10,'news','2016-01-13','Cовершенствуются технологии, а государство частенько преподносит сюрпризы, «переписывая» правила игры','','','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ipsum sem, dignissim at mi non, elementum fermentum enim. Etiam ex lorem, accumsan vitae ullamcorper sed, lobortis ac sapien. Cras finibus, orci vitae hendrerit eleifend, velit urna finibus elit','','','<p style=\"text-align:justify\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ipsum sem, dignissim at mi non, elementum fermentum enim. Etiam ex lorem, accumsan vitae ullamcorper sed, lobortis ac sapien. Cras finibus, orci vitae hendrerit eleifend, velit urna finibus elit, id interdum est dui in felis. Donec lorem metus, imperdiet eget imperdiet sed, convallis ac ligula. Fusce sed diam eget leo aliquam rutrum. Nunc id dignissim ex. Donec consequat venenatis augue, nec ultrices lorem. Maecenas urna sem, eleifend non ante eget, consequat lacinia arcu. Suspendisse non sagittis lorem.</p>\r\n\r\n<p style=\"text-align:justify\">Proin dictum tortor enim, at eleifend libero rhoncus eu. Suspendisse vitae blandit sem. Ut egestas magna nibh, ac rutrum ipsum interdum non. Duis ac augue elementum, dapibus risus et, varius purus. Fusce a elit pulvinar, fringilla neque quis, malesuada massa. Sed ornare urna vel augue blandit aliquam. Morbi vel felis risus. In quis ex tortor. Nulla tellus est, rutrum a neque ut, fringilla efficitur magna. Nulla eget tortor convallis justo convallis ullamcorper. Vestibulum sagittis ac turpis et varius. Donec nec vulputate urna, eget vulputate metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas ullamcorper, sem id varius sodales, massa lectus sollicitudin enim, ut mollis est sapien vitae ex. Proin quis justo bibendum, consectetur massa sit amet, hendrerit lorem.</p>\r\n\r\n<p style=\"text-align:justify\">Mauris mattis at metus blandit mollis. Duis blandit quam vel semper eleifend. Duis sit amet pellentesque elit. Maecenas at condimentum eros. Fusce vel mollis nibh, vitae porta turpis. Mauris orci dui, fermentum ut arcu at, tristique dignissim odio. Fusce commodo ante eget aliquet tincidunt. Aliquam ut commodo metus. In hac habitasse platea dictumst. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at lorem ex. Proin et est pulvinar nisi elementum dapibus nec laoreet odio. Cras tristique turpis neque, vitae auctor elit vulputate eu. Vivamus sit amet mollis dui, sit amet pulvinar augue. Nam congue ante eget magna vulputate mollis. Integer non ante et turpis interdum mollis nec quis turpis.</p>\r\n\r\n<p style=\"text-align:justify\">Quisque lacinia, mauris vel tempor aliquam, sapien eros mollis lorem, imperdiet ornare lacus ex lacinia ipsum. Pellentesque quis nulla ac tortor porttitor vehicula sit amet et orci. Aenean facilisis ut ligula a ultrices. Integer feugiat enim diam, sed ullamcorper tortor malesuada vel. Nulla rhoncus neque a augue varius pellentesque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce egestas lectus vel libero maximus, eu ullamcorper sapien feugiat. Nulla sed lacus at nulla ornare congue euismod sit amet metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam laoreet, turpis et dictum cursus, diam odio euismod sem, vel dapibus neque lorem pharetra eros. Phasellus augue augue, viverra vitae ante quis, mollis posuere urna.</p>\r\n\r\n<p style=\"text-align:justify\">Donec accumsan felis sit amet nisl elementum, vitae ultricies quam laoreet. Mauris vitae nisi commodo, porttitor justo eget, sollicitudin diam. Nulla facilisi. Mauris nec massa sem. Quisque id gravida odio, vestibulum condimentum justo. Donec sit amet tempor orci, vel facilisis massa. Mauris facilisis leo id augue laoreet, ut facilisis urna bibendum. Donec ornare ex eu sodales tincidunt. Pellentesque tempor ante vel luctus placerat. Vestibulum elementum posuere arcu, iaculis lobortis diam imperdiet vulputate. Sed in viverra elit. Vivamus enim eros, tempor ac convallis id, porta sed dui. Curabitur id convallis nisl, id feugiat risus. Donec id ligula sed lacus porta tincidunt non et libero.</p>\r\n','','','2016-Jan-26-233215.jpg','','','','covershenstvuyutsya-texnologii-a-gosudarstvo-chastenko-prepodnosit','no'),(11,'press','2016-01-05','Мир бизнеса находится в постоянном движении: меняются потребности клиентов, появляются новые конкуренты','','','','','','','','','2016-Jan-26-233359.jpg','','','0','mir-biznesa-nahoditsya-v-postoyannom-dvijenii-menyayutsya-potrebnosti-klientov-poyavlyayutsya-novie-konkurenti','no'),(12,'press','2016-01-11','Как повысить эффективность зерноперевалочного комплекса через автоматизацию процессов – опыт Укртрансагро','','','','','','<p>Качество и скорость процессов обработки зерновых культур на морских терминалах является важной составляющей логистической цепочки: время обработки авто и ж/д транспорта, погрузки на суда, время проведения лабораторного анализа влияют на прибыль трейдера и стоимость зерновых.</p>\r\n\r\n<p>Самый современный на Азовском море зерновой терминал&nbsp;<a href=\"http://elevatorist.com/kompanii/86-ukrtransagro\" target=\"_blank\">&laquo;Укртрансагро&raquo;</a>&nbsp;был построен в 2008 году. После перехода терминала под управление компании &laquo;Мариупольская инвестиционная группа&raquo; в 2010 году начался анализ работы предприятия и разработка стратегии его развития.</p>\r\n\r\n<p>Результаты работы терминала и анализ процессов показали, что необходимо повышать эффективность работы предприятия, разрабатывать и внедрять решения по автоматизации и информатизации. Так, имея современное оборудование, до 2013 года на &laquo;Укртрансагро&raquo; не использовались системы автоматизации: в различных подразделениях либо использовались не связанные между собой модули &mdash; &laquo;1С: Бухгалтерия 7&raquo;; &laquo;M.E.Doc IS&raquo;; система учета зерна &laquo;Сакура&raquo;, работающие на разных СУБД, либо вся &laquo;автоматизация&raquo; заключалась в оперировании данными хранящимися в MicrosoftExcel. Управляющей компанией было принято решение планомерно объединять все процессы в единую систему и пользоваться современными системами автоматизации бизнес-процессов, которые позволят получить конкурентные преимущества перед другими игроками рынка.</p>\r\n\r\n<p>Поэтому с сезона 2013/14 года на &laquo;Укртрансагро&raquo; началось внедрение систем автоматизации бизнес-процессов. Одним из первых направлений стали поиски возможностей увеличить скорость обработки транспорта и достигнуть высоких объёмов перегрузки и отгрузки зерновых.</p>\r\n\r\n<p>Первым шагом к решению этой задачи стала ликвидация очередей на погрузку &ndash; внедрение электронной очереди на базе модуля &laquo;1С: Управления очередью&raquo;. Раньше очередь машин перед терминалом формировалась просто по принципу обычной общей очереди: машины стояли по всему городу в направлении терминала и перед терминалом, создавали тем самым пробки и неудобства. Водители могли простоять в очереди день-два, а трейдер этот простой вынужден оплачивать. Более того загрузка приемников терминала была непредсказуемой и неравномерной.</p>\r\n\r\n<p>Было принято решение применить практику управления очередью &ndash; предприятие арендовало накопительную площадку для большегрузных автомашин с диспетчеризацией, регистрацией и оформлением ряда документов. Она организована таким образом, чтобы после заезда и оформления первичной регистрации по команде терминала машины выезжали в определенном порядке для выгрузки. Так появилась возможность формировать машины группами по классам, хозяйствам, что позволило ускорить обработку машин на терминале. Например, лаборатория получала сразу несколько машин определенного класса либо одного хозяйства, что ускоряло процесс проведения необходимых исследований.</p>\r\n\r\n<p>Это дало понимание загрузки терминала. В электронную очередь можно предварительно записываться, и благодаря этому стало понятно, сколько машин планируется на текущий день и как этот поток равномерно распределить на разные приемники. Это позволило планировать действия, координировать деятельность комплекса, рассчитывать поступление и распределять потоки машин в течение дня. Один из перевозчиков даже подключил нашу систему к своей GPS-навигации, и мы можем отслеживать, где его машины сейчас находятся, и понимать время их прибытия на терминал.</p>\r\n\r\n<p>Благодаря системе электронной очереди мы имеем возможность увидеть, сколько всего машин ожидает на площадке, сколько машин заехало на терминал, сколько находится в режиме лабораторного анализа и т.д. Таким образом, расстановка-фиксация точек позволяет отслеживать движение транспорта. Внедрение системы управления очередью позволило оптимизировать процессы учета, диспетчеризации и подачи под разгрузку автотранспорта с зерном. Перевозчики получили более высокую скорость оборачиваемости машин, трейдер не платит за простой транспорта &ndash; ни машин, ни, соответственно, судов, а терминал получает множество данных для анализа и усовершенствования бизнес-процессов.</p>\r\n\r\n<p>Как раз благодаря полученным данным с осени 2015/2016 МГ на предприятии внедрена система мотивации и премирования сотрудников, основанная на показателях эффективности, которая охватила 2/3 персонала. Эта система позволяет оценивать эффективность деятельности каждого работника и вознаграждать его за личные достижения. Внедрение KPI стало возможным благодаря тому, что теперь известна длительность каждого процесса на терминале и есть возможность объективно оценить работу сотрудников и мотивировать их показывать еще лучший результат. После запуска KPI за первые три месяца увеличилась скорость обработки автомобилей на терминале на 30%, скорость погрузки зерновых на судно увеличилась на 1700 т в сутки.</p>\r\n\r\n<p>Кроме электронной очереди на &laquo;Укртрансагро&raquo; внедрены модули &laquo;1С: Бухгалтерия 8&raquo; и &laquo;1С: Элеватор&raquo;, которые объединяют во взаимодополняющую систему ведение бухгалтерского учета, налоговый учет, учет персонала компании, учет заработной платы, количественно-качественный учет зерна и его обработку.</p>\r\n\r\n<p>Во внедрение всех указанных решений было инвестировано около 120 тыс. грн.Главные ожидания от внедрения систем автоматизации &ndash; добиться возможности в полной мере управлять, контролировать исполнение, оценивать эффективность и совершенствовать бизнес-процессы, а также свести к минимуму влияние человеческого фактора, максимально освободить сотрудников от &laquo;рутинной&raquo; работы, уменьшить количество ошибок.</p>\r\n\r\n<p>Если оценивать общие показатели работы предприятия, то результаты внедрения решений ощутимы. Терминал способен принимать более 90 тысяч тонн зерновых в месяц, в то время как раньше мы могли принимать около 50-60 тыс. т (до 2013 года). Удалось достигнуть рекордных для &laquo;Укртрансагро&raquo; объёмов отгрузки зерновых на морские суда &ndash; более 70 тыс. т в месяц. За последние два сезона количество обрабатываемых автомобилей увеличилось с 70 до 120 единиц в сутки, а скорость обработки транспорта увеличилась на 70%.</p>\r\n\r\n<p>В рамках внедрения электронной очереди следующим этапом будет внедрение &laquo;Личного кабинета&raquo; для клиентов на сайте. Там клиент сможет сам онлайн не только отслеживать контрольные точки прохождения транспорта, но и через камеры на предприятии в режиме реального времени наблюдать за процессами отгрузки/загрузки/хранения зерна. Уже сейчас идет разработка этого решения.Дальше мы планируем автоматизировать учет и управление ремонтом и обслуживанием оборудования (на базе модуля 1С: Предприятие &laquo;ТОИР&raquo;). Сейчас идут переговоры с поставщиком программного продукта, формируется проектная команда, обсуждается поэтапный план работ. Запустить этот модуль планируем во втором квартале следующего года.</p>\r\n\r\n<p><a href=\"http://elevatorist.com/dosye/maznyiy-artem\" target=\"_blank\">Артем Мазный</a>, исполнительный директор ООО &laquo;Укртрансагро&raquo;</p>\r\n','','','2016-Jan-28-120445.jpg','','Блоги на Elevatorist.com','http://elevatorist.com/blog/read/175-kak-povyisit-effektivnost-zernoperevalochnogo-kompleksa-cherez-avtomatizatsiyu-protsessov','kak-povysit-effektivnost','yes'),(13,'news','2015-12-22','Компания \"УкрТрансАгро\" получила больше 40 млн грн. дохода в 2015 году','','','Суммарный доход компании \"УкрТрансАгро\" по итогам первой половины текущего маркетингового года составил 41 млн 875 тыс. грн, из которых 8,5 млн грн компания уплатила в государственный бюджет и фонды.','','','<p style=\"text-align:justify\">Суммарный доход компании &quot;УкрТрансАгро&quot; по итогам первой половины текущего маркетингового года составил 41 млн 875 тыс. грн, из которых 8,5 млн грн компания уплатила в государственный бюджет и фонды.</p>\r\n\r\n<p style=\"text-align:justify\">Об этом сообщает пресс-служба компании.</p>\r\n\r\n<p style=\"text-align:justify\">Всего за два квартала 2015/2016 маркетингового года &quot;УкрТрансАгро&quot; осуществила перевалку 158 тыс. тонн зерновых для клиентов из 7 стран. Объем перевалки пшеницы составил 152,7 тыс. тонн, кукурузы - 6 тыс. тонн.</p>\r\n\r\n<p style=\"text-align:justify\">Среди стран-импортёров по объёму отгруженной продукции лидируют Израиль (52 тыс. тонн) и Ливан (33 тыс. тонн). Также существенно выросли объёмы перевалки для Италии (30 тыс. тонн за отчетный период по сравнению с 10 тыс. тонн за аналогичный период 2014/2015 МГ).</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;Кроме того, компания расширила географию импортеров и подписала контракты с новыми клиентами из Алжира и ОАЭ.</p>\r\n\r\n<p style=\"text-align:justify\">&quot;Первый квартал 2015/2016 года был непростым. На конъюнктуру рынка перевалки зерновых в Мариуполе влияет напряженная ситуация на востоке страны, в результате чего основной поток зерновых перенаправлен в сторону Бердянска, Николаева, Одессы. Кроме того, неблагоприятные погодные условия и слабопрогнозируемая динамика мировых цен на зерновые и масличные культуры также оказывают негативное влияние на деятельность компании. Тем не менее, несмотря на сложную экономическую ситуацию, мы продолжаем работу по перевалке грузов, в полной мере выполняем социальные и налоговые обязательства, планируем дальнейшее совершенствование бизнес-процессов и увеличение объёмов перевалки&quot;, - рассказал исполнительный директор &quot;УкрТрансАгро&quot; Артем Мазный.</p>\r\n\r\n<p style=\"text-align:justify\">В компании отмечают, что поскольку зимний период является не сезонным для многих культур, в частности для пшеницы, в ближайший период терминал &quot;УкрТрансАгро&quot; будет максимально загружен перевалкой шрота.</p>\r\n\r\n<p style=\"text-align:justify\"><em>Справка. ООО &quot;Укртрансагро&quot; &ndash; оператор зернового рынка, предоставляющий комплекс услуг по приемке, накоплению, хранению и отгрузке на морские суда, ж/д и автотранспорт зерновых и масличных культур и услуг сертифицированного зернового терминала. Также предоставляет услуги логистической и экспедиторской компании (через ООО &quot;УТА Логистик&quot;). Находится под управлением ООО &quot;Управляющая компания &quot;Мариупольская Инвестиционная Группа&quot;.</em></p>\r\n','','','2016-Jan-28-120157.jpg','','','','kompaniya-ukrtransagro-poluchila-boljshe-40-mln-grn-dohoda','yes'),(14,'news','2016-01-28','Lorem ipsum dolor sit amet, consectetur adipiscing elit.','','','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ipsum sem, dignissim at mi non, elementum fermentum enim. Etiam ex lorem, accumsan vitae ullamcorper sed, lobortis ac sapien. Cras finibus, orci vitae hendrerit eleifend, velit urna finibus elit','','','<p style=\"text-align:justify\"><span style=\"font-size:20px\"><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ipsum sem, dignissim at mi non, elementum fermentum enim. Etiam ex lorem, accumsan vitae ullamcorper sed, lobortis ac sapien. Cras finibus, orci vitae hendrerit eleifend, velit urna finibus elit, id interdum est dui in felis. Donec lorem metus, imperdiet eget imperdiet sed, convallis ac ligula. Fusce sed diam eget leo aliquam rutrum. Nunc id dignissim ex. Donec consequat venenatis augue, nec ultrices lorem. Maecenas urna sem, eleifend non ante eget, consequat lacinia arcu. Suspendisse non sagittis lorem.</strong></span></p>\r\n\r\n<p style=\"text-align:justify\">Proin dictum tortor enim, at eleifend libero rhoncus eu. Suspendisse vitae blandit sem. Ut egestas magna nibh, ac rutrum ipsum interdum non. Duis ac augue elementum, dapibus risus et, varius purus. Fusce a elit pulvinar, fringilla neque quis, malesuada massa. Sed ornare urna vel augue blandit aliquam. Morbi vel felis risus. In quis ex tortor. Nulla tellus est, rutrum a neque ut, fringilla efficitur magna. Nulla eget tortor convallis justo convallis ullamcorper. Vestibulum sagittis ac turpis et varius. Donec nec vulputate urna, eget vulputate metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas ullamcorper, sem id varius sodales, massa lectus sollicitudin enim, ut mollis est sapien vitae ex. Proin quis justo bibendum, consectetur massa sit amet, hendrerit lorem.</p>\r\n\r\n<p style=\"text-align:justify\">Mauris mattis at metus blandit mollis. Duis blandit quam vel semper eleifend. Duis sit amet pellentesque elit. Maecenas at condimentum eros. Fusce vel mollis nibh, vitae porta turpis. Mauris orci dui, fermentum ut arcu at, tristique dignissim odio. Fusce commodo ante eget aliquet tincidunt. Aliquam ut commodo metus. In hac habitasse platea dictumst. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at lorem ex. Proin et est pulvinar nisi elementum dapibus nec laoreet odio. Cras tristique turpis neque, vitae auctor elit vulputate eu. Vivamus sit amet mollis dui, sit amet pulvinar augue. Nam congue ante eget magna vulputate mollis. Integer non ante et turpis interdum mollis nec quis turpis.</p>\r\n\r\n<p style=\"text-align:justify\">Quisque lacinia, mauris vel tempor aliquam, sapien eros mollis lorem, imperdiet ornare lacus ex lacinia ipsum. Pellentesque quis nulla ac tortor porttitor vehicula sit amet et orci. Aenean facilisis ut ligula a ultrices. Integer feugiat enim diam, sed ullamcorper tortor malesuada vel. Nulla rhoncus neque a augue varius pellentesque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce egestas lectus vel libero maximus, eu ullamcorper sapien feugiat. Nulla sed lacus at nulla ornare congue euismod sit amet metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam laoreet, turpis et dictum cursus, diam odio euismod sem, vel dapibus neque lorem pharetra eros. Phasellus augue augue, viverra vitae ante quis, mollis posuere urna.</p>\r\n\r\n<p style=\"text-align:justify\">Donec accumsan felis sit amet nisl elementum, vitae ultricies quam laoreet. Mauris vitae nisi commodo, porttitor justo eget, sollicitudin diam. Nulla facilisi. Mauris nec massa sem. Quisque id gravida odio, vestibulum condimentum justo. Donec sit amet tempor orci, vel facilisis massa. Mauris facilisis leo id augue laoreet, ut facilisis urna bibendum. Donec ornare ex eu sodales tincidunt. Pellentesque tempor ante vel luctus placerat. Vestibulum elementum posuere arcu, iaculis lobortis diam imperdiet vulputate. Sed in viverra elit. Vivamus enim eros, tempor ac convallis id, porta sed dui. Curabitur id convallis nisl, id feugiat risus. Donec id ligula sed lacus porta tincidunt non et libero.</p>\r\n','','','2016-Jan-28-003146.jpg','','','','Lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit','no'),(15,'press','2015-12-23','УкрТрансАгро осуществила перевалку 158 тыс. т зерновых','','','','','','<p>За два квартала 2015/2016 маркетингового года компания &laquo;УкрТрансАгро&raquo; осуществила перевалку 158 тыс. т зерновых для клиентов из 7 стран. Объем перевалки пшеницы составил 152,7 тыс. т, кукурузы &mdash; 6 тыс. т. Суммарный доход &laquo;УкрТрансАгро&raquo; составил 41 млн 875 тыс. грн. В государственный бюджет и фонды за отчетный период уплатили 8,5 млн грн, сообщает пресс-служба компании.</p>\r\n\r\n<p>Среди стран-импортёров по объёму отгруженной продукции лидируют Израиль (52 тыс. т) и Ливан (33 тыс. т).Компания нарастила объёмы перевалки для Италии (30 тыс. т за отчетный период по сравнению с 10 тыс. т за аналогичный период 2014/2015 маркетингового года). Кроме того, была расширена география импортеров и заключены контракты с новыми клиентами из Алжира и ОАЭ.</p>\r\n\r\n<div style=\"background:#eee;border:1px solid #ccc;padding:5px 10px;\">&laquo;Первый квартал 2015/2016 года был непростым. На конъюнктуру рынка перевалки зерновых в Мариуполе влияет напряженная ситуация на востоке страны, в результате чего основной поток зерновых перенаправлен в сторону Бердянска, Николаева, Одессы. Кроме того, неблагоприятные погодные условия и слабопрогнозируемая динамика мировых цен на зерновые и масличные культуры также оказывают негативное влияние на деятельность компании. Тем не менее, несмотря на сложную экономическую ситуацию, мы продолжаем работу по перевалке грузов, в полной мере выполняем социальные и налоговые обязательства, планируем дальнейшее совершенствование бизнес-процессов и увеличение объёмов перевалки&raquo;, &mdash; говорит исполнительный директор &laquo;УкрТрансАгро&raquo; Артем Мазный.</div>\r\n','','','2016-Jan-28-125941.jpg','','Новости на Elevatorist.com','http://elevatorist.com/novosti/2380-ukrtransagro-osuschestvila-perevalku-158-tyis-t-zernovyih','ukrtransagro-osushhestvila','yes'),(16,'press','2015-11-25','УкрТрансАгро расширяет номенклатурный ряд новыми позициями','','','','','','<p>Оператор зернового терминала &laquo;УкрТрансАгро&raquo; расширяет свой номенклатурный ряд новыми позициями &ndash; начинает приемку, хранение и перевалку зерна кукурузы и подсолнечного гранулированного шрота, сообщает пресс-служба компании.</p>\r\n\r\n<p>Обеспечивать зерновой терминал необходимыми объёмами будет логистическая и экспедиторская компания &laquo;УТА-Логистик&raquo;. Это позволит компании занять дополнительные ниши на рынке зерновых, масличных культур и продуктов их переработки.</p>\r\n\r\n<p>&laquo;Отгрузка первой партии кукурузы запланирована на конец ноября 2015 г. в Италию, после завершения накопления судовой партии. В случае удачной конъюнктуры рынка компания планирует увеличивать объемы перевалки кукурузы. Перевалка шрота производится с автотранспорта и железнодорожных вагонов c начала ноября 2015 г.&raquo;, &mdash; говорится в сообщении.</p>\r\n\r\n<p>Для перевалки кукурузы и шрота, который прибывает ж/д транспортом, будет использоваться железнодорожный приемник, который, в отличие от распространенной на предприятиях в Мариуполе выгрузки зернопродуктов из вагонов в специальные завальные ямы, позволяет существенно ускорить процесс.</p>\r\n\r\n<div style=\"background:#eee;border:1px solid #ccc;padding:5px 10px;\">&laquo;Расширение номенклатурного ряда &laquo;УкрТрансАгро&raquo; является частью стратегии компании. Перевалка шрота и кукурузы позволит загрузить производственные мощности терминала на фоне сезонного снижения объемов перевалки пшеницы. Кроме того, по итогам сезона 2014/15 маркетингового года Украина экспортировала около 19 млн т кукурузы. Поэтому мы считаем, что перед компанией появляется отличная возможность занять еще одну нишу на достаточно перспективном участке рынка перевалки зерновых&raquo;, &ndash; рассказал Артём Мазный, исполнительный директор &laquo;УкрТрансАгро&raquo;.</div>\r\n\r\n<p>Компания планирует достичь объемов перевалки продуктов переработки зерновых и масличных грузовна уровне 15 тыс. т в месяц, а также организовать перевалку соевого шрота, который сейчас в Мариуполе не представлен.</p>\r\n\r\n<div style=\"background:#eee;border:1px solid #ccc;padding:5px 10px;\">&laquo;Мы справедливо считаем, что будущее спотовых портов как раз в продуктах переработки. &laquo;УТА-Логистик&raquo; полностью берет на себя решение организационные вопросов наших клиентов, в том числе доставку груза &laquo;с поля&raquo; или линейного элеватора на терминал&raquo;, &ndash; сообщил Павел Плотников, директор &laquo;УТА-Логистик&raquo;.</div>\r\n\r\n<p>&nbsp;</p>\r\n','','','2016-Jan-28-132352.jpg','','Новости на Elevatorist.com','http://elevatorist.com/novosti/2307-ukrtransagro-rasshiryaet-nomenklaturnyiy-ryad-novyimi-pozitsiyami','ukrtransagro-rasshiryaet-nomenklaturniy-ryad-novimi-pozitsiyami','yes'),(19,'news','2015-07-10','ООО «УкрТрансАгро» - лидер отрасли «Складское хозяйство» в Донецкой области 2015 года','','','10 июля 2015 года, согласно рейтинга «Союза Национальных бизнес-рейтингов», ООО «УкрТрансАгро» признано лидером отрасли «Складское хозяйство» в Донецкой области 2015 года с вручением национального сертификата и настенной медали \"ЛИДЕР ОТРАСЛИ 2015\"','','','<p>Таким образом, компания отмечена как предприятие, которое не только заботится о прибыльности собственного бизнеса, но и вносит значительный вклад в будущее нашего государства -&nbsp;честно платит налоги и отчисления в социальные&nbsp;и пенсионные фонды, заботится о своих сотрудниках, создает рабочие места, внедряет новые технологии и формирует новый тип экономики, который основывается не на природных ресурсах, а на профессионализме.<br />\r\nЛидеры рейтинга НБР - это сильные предприятия и компании новой формации, которые задают новые стандарты ведения бизнеса, открытые для новых идей и готовые их воплощать в жизнь.</p>\r\n','','','','','','','ooo-ukrtransagro-lider-otrasli-skladskoe-hozyaystvo-v-donetskoy-oblasti-2015','yes'),(20,'news','2016-02-02','Некоторые показатели хозяйственной деятельности зернового терминала <br> ООО \"Укртрансагро\" за 6 месяцев 2015/16 маркетингового года','Деякі показники господарської діяльності зернового терміналу ТОВ \"Укртрансагро\" за 6 місяців 2015/16 маркетингового року','Some indicators of business activities of UkrTransAgro grain terminal for six months of 2015/16 marketing year.','','','','<p>- было принято и выгружено более 5 тысяч автомобилей и более 200 ж/д вагонов с различными агрокультурами;</p>\r\n\r\n<p>- было отгружено 26 морских судов с зерновыми культурами общим объемом более 150 тысяч тонн;</p>\r\n\r\n<p>- в общем объеме зерновых культур отгруженных с терминала, доля фуражной пшеницы составила около 60%, продовольственной пшеницы около 35%, кукурузы около 5%.</p>\r\n\r\n<p>- было перечислено около 8 млн. грн. различных налогов, сборов, других обязательных платежей в городской, областной и государственный бюджеты Украины.</p>\r\n\r\n<p>&nbsp;</p>\r\n','<p>- Було прийнято і вивантажено понад 5 тисяч автомобілів і більше 200 залізничних вагонів різноманітних агрокультур;</p>\r\n\r\n<p>- Було відвантажено 26 морських судів з зерновими культурами загальним обсягом понад 150 тисяч тонн;</p>\r\n\r\n<p>- у загальному обсязі зернових культур відвантажених з терміналу, частка фуражної пшениці склала близько 60%, продовольчої пшениці близько 35%, кукурудзи близько 5%.</p>\r\n\r\n<p>- Було перераховано близько 8 млн. грн. різноманітних податків, зборів та інших обов`язкових платежів до міського, обласного та державного бюджетів України.</p>\r\n','<p>- UkrTransAgro was accepted and unloaded the 5 thousand trucks and 204 railcars with various agricultural crops;</p>\r\n\r\n<p>- The Company was shipped 26 marine vessels with total volume of more than 150 thousand tons;</p>\r\n\r\n<p>total amount of shipped crops by terminal:</p>\r\n\r\n<p>- about 60% of fodder wheat;</p>\r\n\r\n<p>- about 35% of wheat;</p>\r\n\r\n<p>- about 5% of corn.</p>\r\n\r\n<p>- about UAH 8 million taxes, duties and other binding payments were transferred to the local and regional government budgets.</p>\r\n','2016-Feb-05-151713.jpg','','','','nekotorie-pokazateli-hozyaystvennoy-deyateljnosti-zernovogo-terminala-ooo-ukrtransagro','yes'),(21,'press','2016-01-29','Как наладить работу в привоенной зоне - опыт «УкрТрансАгро»','Як налагодити роботу в привоєнній зоні — досвід «Укртрансагро»','','','Як діяти, якщо ваш регіон постійно згадують у військових новинах, а треба зберегти показники роботи і розвивати бізнес, розповідає Артем Мазний, виконавчий директор ТОВ «Укртрансагро».','','','<p>У цьому маркетинговому році, як і в минулому, на діяльність компаній в Маріуполі впливає напружена ситуація на сході країни. Через невизначену ситуацію на Донбасі клієнти з обережністю ставляться до компаній, що працюють поблизу зони конфлікту. Тому тенденція перенаправлення потоків зернових з Маріуполя на Бердянськ, Миколаїв, Одесу все ще зберігається. Наприклад, якщо порівнювати Маріуполь і Бердянськ, то за липень-грудень 2015 обсяги перевалки по Маріуполю в порівнянні з Бердянськом зменшилися майже в 2,5 рази &mdash; 328 961 тонна вантажів в Маріуполі і 809 370 тонн в Бердянську.</p>\r\n\r\n<p>На наш погляд, для того, щоб успішно працювати в непростих умовах, необхідно мати чітку стратегію діяльності та реалізовувати її, враховуючи поточну ситуацію. Так, в 2015 році ми зосередилися на кількох важливих для нас напрямках роботи:</p>\r\n\r\n<p>&bull; впровадження автоматизації на терміналі, щоб оптимізувати виробничі процеси;</p>\r\n\r\n<p>&bull; розширення номенклатури культур, щоб зберегти завантаження терміналу на тлі сезонності обробки пшениці;</p>\r\n\r\n<p>&bull; експедиторська і трейдерська діяльність на аграрному ринку, створення логістичного центру, щоб залучити клієнтів, яким потрібна комплексна послуга з логістики зерна, а не тільки його перевалка.</p>\r\n\r\n<p>Традиційно наша компанія забезпечує експорт зернових та олійних культур зі східного, частини центрального і північного регіонів України. Це Донецька, Луганська, Харківська, Запорізька, Дніпропетровська області. На терміналі здійснюється авто і з/д приймання зернових, накопичення суднових партій, при необхідності ці суднові партії відвантажуються на судна дедвейтом від 3-5 до 15 тис. тонн. За перше півріччя поточного маркетингового року обсяги перевалки на &laquo;Укртрансагро&raquo; досягли 158 тис. тонн зернових, тобто більше половини всіх переміщених зернових в Маріуполі пройшли через наш термінал. Клієнтами &laquo;Укртрансагро&raquo; за цей період стали компанії з Ізраїлю (52,33 тис. тонн), Лівану (33,13 тис. тонн), Італії (30,68 тис. тонн), Іспанії (8 тис. тонн) і Туреччини (5 тис. тонн), почали працювати з клієнтами з Алжиру (18,58 тис. тонн) і ОАЕ (11,00 тис. тонн).</p>\r\n\r\n<p>І багато в чому зберегти завантаження потужностей терміналу нам вдалося за рахунок перевалки не характерних для минулих періодів агрокультур. Такими культурами стали кукурудза і шрот (соняшниковий та соєвий). За підсумками сезону 2014/15 маркетингового року Україна експортувала близько 19 млн&nbsp;тонн кукурудзи, тому ми вважаємо, що ця ніша досить перспективна і плануємо надалі збільшувати обсяги перевалки цієї культури.</p>\r\n\r\n<p>Вивчаючи ринок і спілкуючись з клієнтами, ми зіткнулися з потребою, на яку є попит, але немає достатньої пропозиції &mdash; комплексна послуга для трейдерів щодо оптимальної організації логістичного ланцюжка перевалки зерна. Тому в рамках стратегії розвитку &laquo;Укртрансагро&raquo;&nbsp;на початку 2015 року заснована логістична компанія &laquo;УТА-Логістик&raquo;. Це дозволило реалізувати модель надання комплексної послуги, яка враховує&nbsp;увесь логістичний ланцюжок&nbsp;&mdash; від поля до покупця/споживача &mdash; максимально виключає посередників, які не створюють додаткової вартості, але дуже впливають на вартість зерна.</p>\r\n\r\n<p>&laquo;УТА-Логістик&raquo; займається усіма проблемами трейдерів і вибудовує &laquo;шлях зерна&raquo; від поля до судна за оптимальною схемою. За 6 місяців &laquo;УТА-Логістик&raquo; організувала перевалку 74,3 тис. тонн вантажів, що в два з половиною рази більше плану, який спочатку ставили перед компанією на маркетинговий рік. Послуга &laquo;єдиного вікна&raquo; виявилася дійсно дуже затребуваною на ринку. Планові показники на рік збільшили до 350 тис. вантажів. Якщо ситуація на сході України буде зберігатися відносно спокійною, то ці плани виглядають цілком реалістичними. Ми очікуємо пожвавлення ринку, так як зараз ситуація в місті спокійна, а в довколишніх районах бойові дії не ведуться. Ми постійно працюємо над тим, щоб роз&#39;яснювати і розповідати клієнтам, партнерам про реальну ситуацію в місті. Так як у ЗМІ все ще можна зустріти публікації, де ситуація в Маріуполі зображена нестабільною. Тому ми запрошуємо і клієнтів, і партнерів на термінал, щоб вони могли самі переконатися в тому, що робота йде, а контракти виконуються в повному обсязі.</p>\r\n\r\n<p>&nbsp;</p>\r\n','','2016-Feb-02-110728.jpg','','Agravery —  аграрне інформаційне агентство','http://agravery.com/uk/posts/show/ak-nalagoditi-robotu-v-privoennij-zoni-dosvid-ukrtransagro','kak-naladit-rabotu-v-privoennoj-zone-UkrTransAgro','yes');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newsfoto`
--

DROP TABLE IF EXISTS `newsfoto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `newsfoto` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `news_id` int(5) NOT NULL,
  `img` varchar(50) NOT NULL,
  `num` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newsfoto`
--

LOCK TABLES `newsfoto` WRITE;
/*!40000 ALTER TABLE `newsfoto` DISABLE KEYS */;
INSERT INTO `newsfoto` (`id`, `news_id`, `img`, `num`) VALUES (6,9,'9_2016-Jan-26_235244_1.jpg',2),(7,9,'9_2016-Jan-26_235244_2.jpg',3),(8,9,'9_2016-Jan-26_235244_3.jpg',1),(9,9,'9_2016-Jan-26_235245_4.jpg',4),(15,21,'21_2016-Feb-02_110719_1.png',0),(12,19,'19_2016-Jan-28_135151_1.jpg',1),(13,19,'19_2016-Jan-28_135151_2.jpg',2),(16,21,'21_2016-Feb-02_110719_2.jpg',0),(20,20,'20_2016-Feb-05_151959_1.jpg',1),(21,20,'20_2016-Feb-05_151959_2.jpg',2),(22,20,'20_2016-Feb-11_095845_1.jpg',0),(23,20,'20_2016-Feb-11_095846_2.jpg',0);
/*!40000 ALTER TABLE `newsfoto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `view` varchar(30) NOT NULL,
  `cat` varchar(30) NOT NULL,
  `podcat` varchar(30) NOT NULL,
  `menu_ru` varchar(25) NOT NULL,
  `menu_ua` varchar(25) NOT NULL,
  `menu_en` varchar(25) NOT NULL,
  `title_ru` varchar(100) NOT NULL,
  `title_ua` varchar(100) NOT NULL,
  `title_en` varchar(100) NOT NULL,
  `descript_ru` varchar(500) NOT NULL,
  `descript_ua` varchar(500) NOT NULL,
  `descript_en` varchar(500) NOT NULL,
  `headtitle_ru` varchar(50) NOT NULL,
  `headtitle_ua` varchar(50) NOT NULL,
  `headtitle_en` varchar(50) NOT NULL,
  `headdecript_ru` varchar(500) NOT NULL,
  `headdecript_ua` varchar(500) NOT NULL,
  `headdecript_en` varchar(500) NOT NULL,
  `intro_ru` text NOT NULL,
  `intro_ua` text NOT NULL,
  `intro_en` text NOT NULL,
  `text_ru` text NOT NULL,
  `text_ua` text NOT NULL,
  `text_en` text NOT NULL,
  `page` varchar(30) NOT NULL,
  `public` varchar(3) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` (`id`, `view`, `cat`, `podcat`, `menu_ru`, `menu_ua`, `menu_en`, `title_ru`, `title_ua`, `title_en`, `descript_ru`, `descript_ua`, `descript_en`, `headtitle_ru`, `headtitle_ua`, `headtitle_en`, `headdecript_ru`, `headdecript_ua`, `headdecript_en`, `intro_ru`, `intro_ua`, `intro_en`, `text_ru`, `text_ua`, `text_en`, `page`, `public`) VALUES (8,'main','','','Главная','Головна','Home','Зерновой Терминал','Зерновий Термінал','Grain Terminal','«УкрТрансАгро» - это современнейший в Азовской акватории Украины производственный комплекс. С 2008 года мы оказываем полный спектр услуг сертифицированного зернового терминала: приемка, накопление, хранение, сопровождение и отгрузка на морские суда зерновых и масличных культур, и другие услуги сертифицированного зернового терминала.','нет','UkrTransAgro, LLC is a modern grain transshipment complex in Ukrainian water area of the Sea of Azov. The Company offers a range of services for acceptance, accumulation, storage and loading of sea vessels with grains and oil-bearing crops, and provides other services as a grain terminal.','Зерновой Терминал','Зерновий Термінал','Grain Terminal','ООО \"УкрТрансАгро\" – зерноперевалочный комплекс в акватории Азовского моря (г. Мариуполь, Украина). ','ТОВ «УкрТрансАгро» - зерноперевалочний комплекс в акваторії  Азовського моря (м.Маріуполь, Україна). ','UkrTransAgro, LLC grain transfer complex in the Sea of Azov (Mariupol, Ukraine). ','«УкрТрансАгро»  - это современнейший в украинской акватории Азовского моря зерноперевалочный комплекс. Мы предоставляем услуги по приемке, накоплению, хранению и отгрузке на морские суда зерновых и масличных культур, а также другие услуги  зернового терминала.','ТОВ «Укртрансагро» - це найсучасніший в українській акваторії Азовського моря зерно перевалочний комплекс. Ми надаємо послуги з приймання, накопичення, зберігання і відвантаження на морські судна зернових і олійних культур, та інші послуги зернового терміналу.','UkrTransAgro, LLC is a modern grain transshipment complex in Ukrainian water area of the Sea of Azov. The Company offers a range of services for acceptance, accumulation, storage and loading of sea vessels with grains and oil-bearing crops, and provides other services as a grain terminal.','','','','','yes'),(9,'about','','','О нас','Про нас','About us','О компании','Про компанiю','About us','нет','нет','none','Компания','Компанiя','About company','Мы оказываем комплекс услуг по перевалке, накоплению, хранению и отгрузке на морские суда зерновых и масличных культур, а также полный спектр услуг зернового терминала.','Ми надаємо комплекс послуг з перевалки, накопиченню, зберіганню і відвантаженню на морські судна зернових і олійних культур, а також повний спектр послуг зернового терміналу.','We provide a range of services on transfer, accumulation, storage and shipment to seagoing vessels of grains and oilseeds, as well as full-service grain terminal.','«УкрТрансАгро»  - это современнейший в украинской акватории Азовского моря зерноперевалочный комплекс. Мы предоставляем услуги по приемке, накоплению, хранению и отгрузке на морские суда зерновых и масличных культур, а также другие услуги  зернового терминала.','ТОВ «УкрТрансАгро» - це найсучасніший в українській акваторії Азовського моря зерно перевалочний комплекс. Ми надаємо послуги з приймання, накопичення, зберігання і відвантаження на морські судна зернових і олійних культур, та інші послуги зернового терміналу.','UkrTransAgro, LLC is a modern grain transshipment complex in Ukrainian water area of the Sea of Azov. The Company offers a range of services for acceptance, accumulation, storage and loading of sea vessels with grains and oil-bearing crops, and provides other services as a grain terminal.','<p>Компания была основана в 2004 году для предоставления услуг по перевалке зерновых культур. В 2008 году было завершено строительство современного зернового терминала и уже осенью 2008 года было отгружено первое судно.</p>\r\n\r\n<p>С 2010 года компания находится под управлением  <a href=\"http://ukmig.com.ua\" target=\"_blank\">Управляющей компании «Мариупольская инвестиционная группа»</a>.</p>\r\n\r\n<p>В 2013 году наша компания получила статус полноправного члена EBA - Европейской бизнес-ассоциации.</p>\r\n\r\n<p>С целью минимизации затрат, приходящихся на логистику грузов клиентов, на базе «УкрТрансАгро» в январе 2015 года была основана логистическая компания <a href=\"http://uta-logistic.com\" target=\"blank\">«УТА Логистик»</a>.</p>\r\n\r\n<p>В 2015 году ООО «УкрТрансАгро» признано лидером отрасли «Складское хозяйство» в Донецкой области согласно рейтинга Союза Национальных бизнес-рейтингов за значительный вклад в развитие отрасли и экономики Украины в целом, приверженность высоким стандартам социальной защищенности работников, внедрение передовых технологий и создание имиджа Украины как правового экономически развитого государства.</p>\r\n','<p>Компанія заснована в 2004 році з метою надання послуг з перевалки зернових культур. У 2008 році завершено будівництво сучасного зернового терміналу і вже восени 2008 року відвантажено перше судно.</p>\r\n\r\n<p>З 2010 року компанія знаходиться під управлінням  <a href=\"http://ukmig.com.ua/ua\" target=\"blank\">Керуюча компанія «Маріупольська інвестиційна група»</a>. </p>\r\n\r\n<p>У 2013 році наша компанія отримала статус повноправного члена EBA - Європейської бізнес-асоціації.</p>\r\n\r\n<p>З метою мінімізації витрат, що пов’язані з логістикою  вантажів клієнтів, на базі «Укртрансагро» в січні 2015 року була заснована логістична компанія <a href=\"http://uta-logistic.com\" target=\"blank\">«УТА Логістик»</a>.</p>\r\n\r\n<p>У 2015 році ТОВ «Укртрансагро» визнано лідером галузі «Складське господарство» в Донецькій області відповідно до рейтингу Союзу Національних бізнес-рейтингів за значний внесок у розвиток галузі та економіки України в цілому, прихильність високим стандартам соціальної захищеності працівників, впровадження передових технологій і створення іміджу України як правової, економічно розвиненої держави.</p>\r\n\r\n\r\n','<p>UkrTransAgro was founded in 2004 to provide services of grain crops transshipment. In 2008, the construction of modern grain terminal was completed, and in autumn 2008 the first sea vessel was shipped out there. </p>\r\n\r\n<p>The Company has been managed by  <a href=\"http://ukmig.com.ua/en\" target=\"_blank\">Management Company Mariupol Investment Group (MC MIG) </a> since 2010.</p>\r\n\r\n<p>Our Company became a full member of the European Business Association (EBA) in 2013. </p>\r\n\r\n<p>In January 2015 the logistic company <a href=\"http://uta-logistic.com\" target=\"blank\">UTA Logistic </a> was established on the basis of UkrTransAgro with purpose to minimize the clients’ costs relating to the cargoes logistics.</p>\r\n\r\n<p>In 2015, UkrTransAgro was recognized as a storage facilities leader of Donetsk region by the Union of National Business Ratings for Company’s significant contribution to the industry, its commitment to high standards of social protection of employees, the introduction of advanced technologies, and the promotion of the image of Ukraine as a legal and economically developed country</p>','','yes'),(10,'partners','','','Партнеры','Партнери','Partners','Партнеры','Партнери','Partners','','','','Партнеры','Партнери','Partners','За 10 лет успешной работы, мы зарекомендовали себя как надежного оператора на зерновом рынке и установили прочные партнерские отношения с ведущими украинскими и транснациональными компаниями.','За 10 років успішної роботи, компанія «Укртрансагро» зарекомендувала себе як надійний оператор на зерновому ринку і встановила міцні партнерські відносини з провідними українськими та транснаціональними компаніями.','Over the course of 10 years of successful operation UkrTransAgro proved itself to be a reliable operator in the grain market, and established steady partnership relations with leading Ukrainian and international Companies.','','','','Мы дорожим каждым из наших партнеров, и уделяем каждому из них особое внимание. Мы умеем слышать каждого, слушая всех! Соблюдение взятых на себя обязательств на основании заключенных договоров, высокое качество предоставляемых услуг и профессионализм позволяют нам ежегодно сотрудничать с действующими партнерами и привлекать новых!\r\n                <br> <br>Мы постоянно стремимся к совершенству и открыты для сотрудничества. Мы понимаем, что добиться успеха можно, лишь объединив усилия. Поэтому уверенно заявляем: наши партнеры – наша опора! <br><strong>Присоединяйтесь к числу наших партнеров и открывайте для себя новые перспективы! </strong><br> \r\n<intro>\r\n<block>Наши партнеры:</block><br> \r\n\r\n<li><span>МИГ</span></li>\r\n<li><span>Нобл</span></li>\r\n<li><span>Каргилл</span></li>\r\n</intro>','Ми дорожимо кожним з наших партнерів, і приділяємо кожному з них особливу увагу. Ми вміємо чути кожного, слухаючи всіх! Дотримання взятих на себе зобов`язань, на підставі укладених договорів, висока якість наданих послуг і професіоналізм дозволяють нам щорічно співпрацювати з діючими партнерами і залучати нових!\r\nМи постійно прагнемо до досконалості і відкриті для співпраці. Ми розуміємо, що домогтися успіху можна, лише об`єднавши зусилля. Тому впевнено заявляємо: наші партнери - наша опора! Приєднуйтеся до наших партнерів і відкривайте для себе нові перспективи!','We value our partners, and pay special attention to each of them. \r\nListening to all of our partners, we can hear each of them! The compliance with Contract commitments, the high quality of services and the professionalism allow us to cooperate with the existing partners and attract new ones!\r\n<br>We always strive for excellence and we are open for cooperation. We comprehend that success is possible only by joint efforts. Therefore we confidently declare that our partners are our support! Please become one of our partners and you’ll discover new prospects for your business!\r\n','','yes'),(11,'strategy','','','Стратегия','Стратегія','Strategy','Стратегия','Стратегія','Strategy','','','','Стратегия','Стратегія','Strategy','Мир бизнеса находится в постоянном движении: меняются потребности клиентов, появляются новые конкуренты, совершенствуются технологии, а государство частенько преподносит сюрпризы, «переписывая» правила игры.','Світ бізнесу знаходиться в постійному русі: змінюються потреби клієнтів, з\'являються нові конкуренти, вдосконалюються технології, а держава частенько підносить сюрпризи, «переписуючи» правила гри.','The business world is in constant motion: changing customer needs, new competitors, improved technology, and the state often surprises, \"rewriting the\" rules of the game.','ООО «УкрТрансАгро» непрерывно развивается: меняются потребности Клиентов, появляются новые конкуренты, улучшаются технологии. Все это заставляет нас постоянно совершенствоваться и не стоять на месте. За последние два года, чтобы укрепить свои преимущества  и в полной мере воспользоваться новыми возможностями для усиления наших позиций на рынке, была скорректирована стратегия. Для привлечения внимания к новой стратегии компании, был проведен комплексный ребрендинг: от изменения логотипа и дизайна корпоративного сайта  до изменения философии компании в целом. Изменения философии компании коснулись многих моментов, в частности, сместился фокус нашей работы: произошел отказ от индивидуального характера и личных выгод в пользу консолидации усилий и знаний различных участников рынка. Такая интеграция и сотрудничество расширит возможности компании и позволит выйти на новый уровень развития.','ТОВ «Укртрансагро» безперервно розвивається. Змінюються потреби Клієнтів, з`являються нові конкуренти, поліпшуються технології. Все це змушує нас постійно вдосконалюватися і не стояти на місці. За останні два роки, щоб зміцнити свої переваги і повною мірою скористатися новими можливостями для посилення наших позицій на ринку, була скоригована стратегія. Для звернення уваги до нової стратегії компанії, був проведений комплексний ребрендинг від зміни логотипу та дизайну корпоративного сайту до зміни філософії компанії в цілому. Зміни філософії компанії торкнулися багатьох моментів, зокрема, змістився фокус нашої роботи - відбулася відмова від індивідуального характеру та особистих вигод на користь консолідації зусиль і знань різних учасників ринку. Така інтеграція та співпраця розширить можливості компанії та дозволить вийти на новий рівень розвитку.','UkrTransAgro, LLC is evolving constantly. We  react to the new customers’ needs,  to the rise of new competitors and to the advances in technologies. All these changes make us improve incessantly and not to stand still.\r\nOver the past two years the Company’s Strategy has been adjusted to strengthen our advantages and benefit from new opportunities  in full to solidify our positions in the market.\r\nThe Company went through a comprehensive rebranding to call attention to its new strategy. We’ve changed everything starting with the design of the logo and the corporate website up to rethinking of the Company’s philosophy. Changes in Company’s philosophy affected many aspects, and in particular, shifted the focus of our activity. We’ve rejected individual ambitions and personal benefits in favor of consolidating the efforts and knowledge of different market players. We believe such integration and collaboration will enhance our Company’s business opportunities and enable a new level of development.','<block>Стратегическое видение компании выделяется в три ключевые цели:</block>\r\n                <ul class=\"strategy\">\r\n                    <li><span>ПОВЫШЕНИЕ ЭФФЕКТИВНОСТИ УПРАВЛЕНИЯ</span><p>Стратегия компании по повышению эффективности управления имеет целью дальнейшую автоматизацию внутренних бизнес-процессов компании. Мы продолжаем переход на современную систему управления   производством  и технологическими процессами и активно работаем в данном направлении, внедряя автоматизированные системы 1С 8 «Управление производственным предприятием», 1С 8 «Элеватор», 1С 8 «Управление очередью». Поддерживаем культуру непрерывных улучшений. Наша команда стремится к достижению высокого уровня эффективности на всех уровнях организации. Эта задача подразумевает фундаментальное развитие культуры организации в направлении внедрения культуры непрерывных улучшений, основанной на философии постоянного совершенствования.</p></li>\r\n                    <li><span>ОСВОЕНИЕ НОВЫХ НАПРАВЛЕНИЙ ДЕЯТЕЛЬНОСТИ</span><p>Мы стремимся повысить свою ценность для наших Клиентов. В ближайшее время мы планируем расширить спектр предоставляемых услуг, чтобы охватить еще большую часть рынка.\r\n                            <br>Такими услугами являются:\r\n                            <br> - экспедиторская деятельность, <br> - трейдерская деятельность, <br> - логистическая  деятельность\r\n                            <br>На текущий момент по всем  направлениям нашей командой:\r\n                            <br> - разработана стратегия выхода на рынок экспедиторских и логистических услуг;\r\n                            <br> - создана логистическая компания  ООО «УТА Логистик»;\r\n                            <br> - разработана модель функционирования накопительной площадки автотранспорта для управления очередью, что позволило увеличить количество принимаемых автомобилей.</p>\r\n                    </li>\r\n                    <li><span>СТРОИТЕЛЬСТВО НОВЫХ МОЩНОСТЕЙ</span><p>Мы продолжаем инвестировать в современные производственные мощности и оборудование, чтобы поддержать статус передового игрока. Стратегия направлена на обеспечение необходимых мощностей для диверсификации перевалки, обеспечение надежной бесперебойной работы.</p></li>\r\n                </ul>\r\n                <intro>Внедрение каждой из этих стратегических задач и сильная корпоративная культура позволяют успешно воплощать наше видение в реальность!</intro>','<block>Стратегічне бачення компанії виділяється в три ключові стратегічні цілі:</block>\r\n                <ul class=\"strategy\">\r\n                    <li><span>ПІДВИЩЕННЯ ЕФЕКТИВНОСТІ УПРАВЛІННЯ</span><p>Стратегія компанії щодо підвищення ефективності управління має на меті подальшу автоматизацію внутрішніх бізнес-процесів компанії. Ми продовжуємо перехід на сучасну систему управління виробництвом і технологічними процесами, активно працюємо в даному напрямку, впроваджуючи автоматизовані системи 1С 8 «Управління виробничим підприємством», 1С 8 «Елеватор», 1С 8 «Управління чергою», 1С 8 «ТОиР». Підтримуємо культуру безперервних вдосконалень. Наша команда прагне до досягнення високого рівня ефективності на всіх рівнях організації. Це завдання передбачає фундаментальний розвиток культури організації в напрямку впровадження культури безперервних поліпшень, заснованої на філософії постійного вдосконалення.</p></li>\r\n                    <li><span>ОСВОЄННЯ НОВИХ НАПРЯМКІВ ДІЯЛЬНОСТІ</span><p>ММи прагнемо підвищити свою цінність для наших Клієнтів. Найближчим часом ми плануємо розширити спектр наданих послуг, щоб охопити ще більшу частину ринку.\r\n                            <br>Такими послугами є:\r\n                            <br> - експедиторська діяльність, <br> - трейдерська діяльність, <br> - логістична діяльність\r\n                            <br>На даний час по всім  напрямках зроблено наступну роботу:\r\n                            <br> - розроблено стратегію виходу на ринок експедиторських послуг;\r\n                            <br> - створено логістичну компанія ТОВ «УТА Логістик»;\r\n                            <br> - розроблено модель функціонування накопичувального майданчика автотранспорту для управління чергою, що дозволило збільшити кількість прийнятих автомобілів.</p>\r\n                    </li>\r\n                    <li><span>БУДІВНИЦТВО НОВИХ ПОТУЖНОСТЕЙ</span><p>Ми продовжуємо інвестувати в сучасні виробничі потужності та обладнання, щоб підтримати статус передового гравця. Стратегія спрямована на забезпечення необхідних потужностей для диверсифікації перевалки, забезпечення надійної безперебійної роботи.</p></li>\r\n                </ul>\r\n                <intro>Внедрение каждой из этих стратегических задач и сильная корпоративная культура позволяют успешно воплощать наше видение в реальность!</intro>','<block>Our strategic vision is directed towards three key targets:</block>\r\n                <ul class=\"strategy\">\r\n                    <li><span>IMPROVEMENT OF MANAGEMENT EFFECTIVENESS</span><p>The Company’s strategy on improvement of management effectiveness is targeted at further automation of internal business processes. We continue the transition to the modern system of management and technological processes by introducing new software 1C 8: Manufacturing Enterprise Management, 1C 8: Grain Elevator, and 1C 8: Queue management, 1C 8: Maintenance and repair. We support the continuous improvement culture. Our team seeks to achieve a high level of efficiency at all levels of the organization. This task implies the fundamental development of Company’s corporate standards in direction of implementation of continuous improvement culture based on the philosophy of constant improvement process.</p></li>\r\n                    <li><span>DEVELOPMENT OF NEW DIRECTIONS FOR BUSINESS</span><p>UkrTransAgro seeks to increase its advantages for Clients. The Company plans to enlarge the range of services that will help to capture the major part of the market.\r\n<br>These services are:\r\n               <br>- forwarding activity\r\n               <br>- trading activity\r\n               <br>- logistic activity\r\nTo date, the Company has performed the following work in forwarding and trading directions:\r\n<br>- the Strategy for forwarding services market entrance was prepared;\r\n<br>- the logistics company UTA Logistic, LLC was incorporated;\r\n<br>- the new model of the vehicles accumulation area for queue management was elaborated and implemented  that allowed to increase the number of accepted vehicles </p>\r\n                   </li>\r\n                    <li><span>CONSTRUCTION OF NEW FACILITIES</span><p>      We continue investing in modern production facilities and equipment to maintain the status of leading player. The Strategy is aimed at providing the necessary facilities for the diversification of the transshipment and maintenance of reliable trouble-free operation.</p></li>\r\n                </ul>\r\n                <intro>.</intro>','','yes'),(12,'team','','','Команда','Команда','Team','Команда','Команда','Team','','','','Команда','Команда','Team','Наши сотрудники - наша гордость! Профессионализм наших сотрудников гарантирует высокое качество наших услуг и внимательное отношение к каждому клиенту.','Наші співробітники - наша гордість! Професіоналізм наших співробітників гарантує високу якість наших послуг і дбайливе ставлення до кожного клієнта','We take pride in our staff members! Professionality of our employees is a guarantee of high quality services  and advertency to every client','Мы – команда профессионалов, влюбленных в свое дело. Мы строим большие планы и объединяемся для их достижения. Мы поддерживаем каждого члена коллектива, помогая раскрыть его индивидуальность и талант. Мы постоянно развиваемся!','Ми - команда професіоналів, що закохані у свою справу. У нас великі плани на майбутнє та ми об`єднуємося для їх досягнення. Ми підтримуємо кожного члена колективу, допомагаючи розкрити його індивідуальність і талант. Ми постійно розвиваємося!','We are a team of experts  who are fond of our work. We make great plans and join together  for their achievement. We support every member of the staff assisting to reveal their personality and talent. We are constantly evolving.','','','','','yes'),(13,'docs','','','Сертификаты и дипломы','Сертифікати та дипломи','Certificates and diplomas','Сертификаты и дипломы','Сертифікати та дипломи','Certificates and diplomas','','','','Сертификаты и дипломы','СЕРТИФІКАТИ ТА ДИПЛОМИ ','Certificates and diplomas ','Расширяя сегодня границы своей деятельности, мы, как и прежде, непреклонны в требованиях к качеству. Это один из главных принципов в работе нашей компании.','Розширюючи сьогодні межі своєї діяльності, ми, як і колись, непохитні у вимогах до якості. Це один з головних принципів у роботі нашої компанії.','Expanding the boundaries of our activity today, as before, we are uncompromising in requirements to quality. This is one of the main principles of our Company.','Все нижеперечисленные знаки качества, которые были нам присуждены, еще раз подтверждают, что компания «УкрТрансАгро» уделяет огромное внимание вопросам качества обслуживания. Мы не перестаем делать все для того, чтобы оставаться лучшими!','Всі перелічені нижче знаки якості, які були нам присуджені, ще раз підтверджують, що компанія «Укртрансагро» приділяє величезну увагу питанням якості обслуговування. Ми не перестаємо робити все для того, щоб залишатися кращими!','All of the following quality marks that were awarded to us, once again confirmed that the company \"Ukrtransagro\" pays great attention to the quality of service. We continue to do everything in order to be the best!','','','','','yes'),(14,'services','','','Услуги','Послуги','Services','Услуги','Послуги','Services','','','','Услуги','Послуги','Services','Комплекс услуг зернового терминала ООО «УкрТрансАгро» включает в себя широкий спектр опций, позволяющих получить комплекc качественных услуг.','Комплекс послуг зернового терміналу ТОВ «Укртрансагро» включає в себе широкий спектр опцій, що дозволяють отримати комплекc якісних послуг.','The scope of services of the grain terminal Ltd. \"Ukrtransagro\" includes a wide range of options to get a complex of high-quality services.','Мы оказываем комплекс услуг по приемке, накоплению, хранению и отгрузке на морские суда зерновых и масличных культур, а также полный спектр услуг зернового терминала.','Ми надаємо комплекс послуг з прийому, накопиченню, зберіганню та відвантаженню на морські судна зернових і олійних культур, а також повний спектр послуг  зернового терміналу.','We offer a range of services for acceptance, accumulation, storage and loading to the sea vessels of grain and oil-bearing crops, and also provide a full range of services of grain terminal.','<p>Терминал полностью автоматизирован, оснащен оборудованием компании CHIEF (США), на терминале предусмотрена система очистки, сушки, активной вентиляции зерна и масличных культур, что обеспечивает полное сохранение качества.</p>\r\n                <p>Терминал имеет всю необходимую транспортную инфраструктуру и развязки. Железнодорожная станция «Мариуполь-порт» имеет достаточную пропускную способность до 300-400 вагонов в сутки. Терминал оборудован автомобильным приемом на два автомобиля, что позволяет одновременно осуществлять приемку различных культур разного качества. Приемник для железнодорожных вагонов способен осуществлять одновременную выгрузку 3-х вагонов.</p>\r\n                <p>Отгрузка зерновых и масличных культур может осуществляться как на морские суда, так и на автомобильный и железнодорожный транспорт. Возможны также различные прямые варианты погрузки судна: автомобиль-судно, ж/д вагон-судно.</p>\r\n\r\n\r\n','<p>Термінал повністю автоматизований, оснащений обладнанням компанії CHIEF (США), на терміналі передбачена система очищення, сушки, активного вентилювання зерна і олійних культур, що забезпечує повне збереження якості.</p>\r\n                <p>Термінал має усю необхідну транспортну інфраструктуру і розв`язки. Залізнична станція «Маріуполь-порт» має достатню пропускну здатність до 300-400 вагонів на добу. Термінал обладнаний автомобільним прийомом на два автомобіля, що дозволяє одночасно здійснювати приймання різних культур різної якості. Приймач для залізничних вагонів здатний здійснювати одночасне вивантаження 3-х вагонів.</p>\r\n                <p>Відвантаження зернових і олійних культур може здійснюватися як на морські судна, так і на автомобільний та залізничний транспорт. Можливі також різні прямі варіанти навантаження судна: автомобіль-судно, ж/д вагон-судно .</p>\r\n','<p>The grain terminal is fully automated and equipped with facilities delivered by CHIEF company (USA).</p>\r\n<p>The terminal provides cleaning, drying, active ventilation of grains and oil-bearing crops, ensuring the quality preservation of the received grain. The terminal has all the necessary transport infrastructure and traffic intersections.  Mariupol-Port railway station has a sufficient capacity up to 300-400 railcars per day. The grain terminal is equipped with receivers for two cargo vehicles, allowing simultaneous acceptance of different types of grains of a different quality. Receiver for railcars is capable of simultaneous unloading of 3 railcars.</p>\r\n<p>The shipment of grains and oil-bearing crops can be carried out to sea vessels, motor and railway transport. There are also various options for direct loading of the vessel: from truck to vessel, from railcar to vessel etc.</p>\r\n','','yes'),(15,'charact','','','Характеристики терминала','Характеристики терміналу','Specifications terminal','Характеристики терминала','Характеристики терміналу','Technical specifications and capabilities of the grain terminal','','','','Характеристики терминала','Характеристики терміналу','Technical specifications','ООО «УкрТрансАгро» - зерновой терминал в Мариупольском морском торговом порту (Мариуполь, Украина). Емкость единовременного хранения 48,120 тыс. тонн, мощность по перевалке до 1,0 млн. тонн в год. Введён в эксплуатацию в 2008 году.','ТОВ «УкрТрансАгро » - зерновий термінал вакваторії Азовського моря (Маріуполь, Україна) ємністю одноразового зберігання 48,120 тис. тонн і потужністю з перевалки до 1,0 млн. тонн на рік, введений в експлуатацію в 2008 році.','UkrTransAgro is a grain terminal with a capacity of 48.120 ths. tons for simultaneous storage and handling capacity up to 1.0 mln. tons per year situated in the Sea of Azov (Mariupol, Ukraine). Terminal was put into operation in 2008.','УкрТрансАгро обеспечивает полную количественную и качественную сохранность зерна, списание убыли в весе в соответствии с ГОСТами и другими нормативными актами и техническими регламентами, утвержденными в Украине.','УкрТрансАгро забезпечує повне кількісне і якісне збереження зерна, списання убутку у вазі у відповідності ДСТУ та іншими нормативними актами і технічними регламентами, затвердженими в Україні.','Full quantitative and qualitative safety of grain and weight loss write-offs in accordance with GOST and other statutory acts and technical regulations adopted in Ukraine are guaranteed.','','','','','yes'),(16,'client','','','Клиентам','Клієнтам','Client','Клиентам','Клієнтам','For Clients ','','','','Клиентам','Клієнтам','Dear Customer!','ООО «УкрТрансАгро» постоянно предпринимает активные шаги для поддержания позиции максимально ориентированной на потребности клиентов.','ТОВ «УкрТрансАгро» постійно робить активні кроки для підтримки позиції, максимально орієнтованої на потреби клієнтів.','UkrTransAgro, LLC is constantly taking active steps to maintain the position of the entirely customer oriented company. ','Cпециалистами компании разработана версия личного кабинета клиента. Использование данного сервиса позволяет Вам, удаленно, через наш сайт:','З цією метою фахівцями компанії розробляється версія особистого кабінету клієнта. Використання даного сервісу в майбутньому дозволить Вам, віддалено, через наш сайт:','For this purpose our specialists develop a new service of Online Client‘s Account. In the future, you’ll be able to carry out the following actions via our website:','<ul>\r\n                    <li>Отслеживать в разрезе культур и классов оперативную информацию о наличии груза (приход, отгрузка);</li>\r\n                    <li>Получить доступ к реестру на поступивший груз за любую дату (с указанием не только веса транспортной единицы, но и качественных показателей);</li>\r\n                    <li>Увидеть данные о заполнении емкостей;</li>\r\n                    <li>Получить справочную информацию о предлагаемых ООО «Укртрансагро» услугах и их стоимости;</li>\r\n                </ul>\r\n                <p><strong>И это еще далеко не весь перечень возможностей!</strong> Напишите нам о своих потребностях и мы примем их во внимание!</p>','<ul>\r\n                    <li>Відстежувати в розрізі культур і класів оперативну інформацію про наявність вантажу (прихід, відвантаження);</li>\r\n                    <li>Отримати доступ до реєстру на вантаж, який надійшов, за будь-яку дату (із зазначенням не тільки ваги транспортної одиниці, а й якісних показників);</li>\r\n                    <li>Побачити дані про заповнення ємностей;</li>\r\n                    <li>Отримати довідкову інформацію про пропоновані ТОВ «Укртрансагро» послуги та їх вартість;</li>\r\n                </ul>\r\n                <p><strong>І це ще далеко не весь перелік можливостей! </strong> Напишіть нам про свої потреби і ми приймемо їх до уваги!</p>\r\n\r\n','<ul>\r\n<li> To track online status information on your cargo (acceptance, shipment etc.);</li>\r\n<li>To access the registry of incoming cargo on any date (with indication of transport unit weight and quality indicators);</li>\r\n<li>To get the data on filling of capacities;</li>\r\n<li> To receive reference information about services offered by UkrTransAgro and the price list.</li>\r\n</ul>\r\n<p><strong>More options to come! I</strong> nform  us of  your needs and we shall take care of this!! </p>','','yes'),(17,'news','','','Новости компании','Новини компании','Company news','Новости компании','Новини компанiї','Company news','','','','Новости компании','Новини компанiї','Company news','Будьте в курсе последних новостей нашего терминала! ','Будьте в курсі останніх новин нашого терміналу!','Do keep up-to-date of our terminal‘s latest news.','Мы всегда открыты для общения. Если Вы хотите узнать больше о ООО \"УкрТрансАгро\" обратитесь в нашу пресс-службу <a href=\"mailto:press@ukrtransagro.com\">press@ukrtransagro.com</a>  или посетите <a href=\"https://www.facebook.com/UkrTransAgro\" target=\"_blank\"> нашу страницу в сети Facebook </a>.','Ми завжди відкриті для спілкування. Якщо Ви хочете дізнатися більше про ТОВ \"Укртрансагро\" зверніться до нашої прес-служби <a href=\"mailto:press@ukrtransagro.com\">press@ukrtransagro.com</a>  або  відвідайте <a href=\"https://www.facebook.com/UkrTransAgro\" target=\"_blank\"> нашу сторінку у мережі Facebook </a>.','We are always open for communication. If you like to know more about “UkrTransAgro” please contact our press-service:  <a href=\"mailto:press@ukrtransagro.com\">press@ukrtransagro.com</a>  or visit <a href=\"https://www.facebook.com/UkrTransAgro\" target=\"_blank\">  our page in  Facebook</a>  .','','','','','yes'),(18,'gallery','','','Галерея','Галерея','Gallery','Галерея','Галерея','Gallery','','','','Галерея','Галерея','Gallery','','','','','','','','','','','yes'),(19,'contacts','','','Контакты','Контакти','Contacts','Контакты','Контакти','Contacts','','','','Контакты','Контакти','Contacts','','','','','','','','','','','yes');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `press`
--

DROP TABLE IF EXISTS `press`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `press` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `title_ru` varchar(100) NOT NULL,
  `title_ua` varchar(100) NOT NULL,
  `title_en` varchar(100) NOT NULL,
  `descript_ru` varchar(500) NOT NULL,
  `descript_ua` varchar(500) NOT NULL,
  `descript_en` varchar(500) NOT NULL,
  `text_ru` text NOT NULL,
  `text_ua` text NOT NULL,
  `text_en` text NOT NULL,
  `cover` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `public` varchar(3) NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `press`
--

LOCK TABLES `press` WRITE;
/*!40000 ALTER TABLE `press` DISABLE KEYS */;
/*!40000 ALTER TABLE `press` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `requisites`
--

DROP TABLE IF EXISTS `requisites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `requisites` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `name_ru` varchar(150) NOT NULL,
  `name_ua` varchar(150) NOT NULL,
  `name_en` varchar(150) NOT NULL,
  `descript_ru` varchar(300) NOT NULL,
  `descript_ua` varchar(300) NOT NULL,
  `descript_en` varchar(300) NOT NULL,
  `addr_ru` varchar(200) NOT NULL,
  `addr_ua` varchar(200) NOT NULL,
  `addr_en` varchar(200) NOT NULL,
  `tel1` varchar(15) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `g` varchar(100) NOT NULL,
  `in` varchar(100) NOT NULL,
  `tw` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requisites`
--

LOCK TABLES `requisites` WRITE;
/*!40000 ALTER TABLE `requisites` DISABLE KEYS */;
INSERT INTO `requisites` (`id`, `name_ru`, `name_ua`, `name_en`, `descript_ru`, `descript_ua`, `descript_en`, `addr_ru`, `addr_ua`, `addr_en`, `tel1`, `mail`, `fb`, `g`, `in`, `tw`) VALUES (1,'ООО \"УкрТрансАгро\"','ТОВ \"УкрТрансАгро\"','UkrTransAgro, LLC','«УкрТрансАгро»  - это современнейший в Азовской акватории Украины производственный комплекс. Мы предоставляем услуги по приемке, накоплению, хранению и отгрузке на морские суда зерновых и масличных культур, и другие услуги сертифицированного зернового терминала','','','87510, Украина, г. Мариуполь, пр-т Адмирала Лунина, 2','87510, Україна, м. Маріуполь, пр-т Адмірала Луніна, 2','Admiral Lunin 2 Ave., Mariupol, Ukraine, 87510','+380629595820','uta@uta.dn.ua','https://www.facebook.com/UkrTransAgro/','','','');
/*!40000 ALTER TABLE `requisites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `title_ru` varchar(255) NOT NULL,
  `title_ua` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `item_1_ru` varchar(500) NOT NULL,
  `item_2_ru` varchar(500) NOT NULL,
  `item_3_ru` varchar(500) NOT NULL,
  `item_4_ru` varchar(500) NOT NULL,
  `item_5_ru` varchar(500) NOT NULL,
  `item_6_ru` varchar(500) NOT NULL,
  `item_7_ru` varchar(500) NOT NULL,
  `item_8_ru` varchar(500) NOT NULL,
  `item_1_ua` varchar(500) NOT NULL,
  `item_2_ua` varchar(500) NOT NULL,
  `item_3_ua` varchar(500) NOT NULL,
  `item_4_ua` varchar(500) NOT NULL,
  `item_5_ua` varchar(500) NOT NULL,
  `item_6_ua` varchar(500) NOT NULL,
  `item_7_ua` varchar(500) NOT NULL,
  `item_8_ua` varchar(500) NOT NULL,
  `item_1_en` varchar(500) NOT NULL,
  `item_2_en` varchar(500) NOT NULL,
  `item_3_en` varchar(500) NOT NULL,
  `item_4_en` varchar(500) NOT NULL,
  `item_5_en` varchar(500) NOT NULL,
  `item_6_en` varchar(500) NOT NULL,
  `item_7_en` varchar(500) NOT NULL,
  `item_8_en` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` (`id`, `title_ru`, `title_ua`, `title_en`, `item_1_ru`, `item_2_ru`, `item_3_ru`, `item_4_ru`, `item_5_ru`, `item_6_ru`, `item_7_ru`, `item_8_ru`, `item_1_ua`, `item_2_ua`, `item_3_ua`, `item_4_ua`, `item_5_ua`, `item_6_ua`, `item_7_ua`, `item_8_ua`, `item_1_en`, `item_2_en`, `item_3_en`, `item_4_en`, `item_5_en`, `item_6_en`, `item_7_en`, `item_8_en`) VALUES (1,'Комплекс услуг зернового терминала ООО «УкрТрансАгро»:','','','приемку зерновых и масличных культур и размещение в емкостях терминала;','лабораторный анализ;','выгрузку с ж/д и автотранспорта;','взвешивание (определение брутто, тары, нетто);','размещение и бесплатное хранение в емкостях исполнителя до 25 календарных дней;','отгрузка на судно;','перегрузка из ж/д вагонов в автотранспорт и обратно;','оказание в комплексе экспедиторских услуг и работ портового агента с привлечением компаний, имеющих большой опыт экспедирования данных грузов и хорошую репутацию в нашем регионе.','','','','','','','','','','','','','','','','');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `num` int(2) NOT NULL,
  `url` varchar(50) NOT NULL,
  `status` varchar(5) NOT NULL,
  `title_ru` varchar(50) NOT NULL,
  `title_ua` varchar(50) NOT NULL,
  `title_en` varchar(50) NOT NULL,
  `position_ru` varchar(100) NOT NULL,
  `position_ua` varchar(100) NOT NULL,
  `position_en` varchar(100) NOT NULL,
  `bigposition_ru` varchar(350) NOT NULL,
  `bigposition_ua` varchar(350) NOT NULL,
  `bigposition_en` varchar(350) NOT NULL,
  `descript_ru` varchar(300) NOT NULL,
  `descript_ua` varchar(300) NOT NULL,
  `descript_en` varchar(300) NOT NULL,
  `text_ru` text NOT NULL,
  `text_ua` text NOT NULL,
  `text_en` text NOT NULL,
  `fin_ru` varchar(650) NOT NULL,
  `fin_ua` varchar(650) NOT NULL,
  `fin_en` varchar(650) NOT NULL,
  `img` varchar(50) NOT NULL,
  `public` varchar(3) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team`
--

LOCK TABLES `team` WRITE;
/*!40000 ALTER TABLE `team` DISABLE KEYS */;
INSERT INTO `team` (`id`, `num`, `url`, `status`, `title_ru`, `title_ua`, `title_en`, `position_ru`, `position_ua`, `position_en`, `bigposition_ru`, `bigposition_ua`, `bigposition_en`, `descript_ru`, `descript_ua`, `descript_en`, `text_ru`, `text_ua`, `text_en`, `fin_ru`, `fin_ua`, `fin_en`, `img`, `public`) VALUES (5,1,'artem-mazniy','head','Артем Мазный','Артем Мазний ','Artem Mazny ','исполнительный директор','виконавчий директор','Executive Director','исполнительный директор ООО \"УкрТрансАгро\"','Виконавчий директор ТОВ «УкрТрансАгро»','Executive Director of UkrTransAgro','','','','','','','','','','','yes'),(6,2,'vasiliy-maltabar','team','Дмитрий Гобелев ','Дмитро Гобелев','Dmitriy Gobelev ','заместитель исполнительного  директора по производству','заступник виконавчого директора з виробництва','Deputy Executive Director in Operations','заместитель исполнительного  директора по производству','заступник виконавчого директора з виробництва','Deputy Executive Director in Operations','','','','','','','','','','','yes'),(7,3,'tatjyana-svetlichnaya','team','Татьяна Светличная','Тетяна Світлична ','Tatyana Svetlichnaya ','заместитель исполнительного директора по качеству','заступник виконавчого директора з якості','Deputy Executive Director in Quality Control','заместитель исполнительного директора по качеству','заступник виконавчого директора з якості','Deputy Executive Director in Quality Control','','','','','','','','','','','yes'),(8,4,'elena-kostyuk','team','Ирина Агафонова ','Ірина Агафонова ','Irina Agafonova ','главный бухгалтер','головний бухгалтер','Chief Accountant','главный бухгалтер','головний бухгалтер','Chief Accountant','','','','','','','','','','','yes'),(9,5,'vladimir-tryakin','team','Владимир Трякин','Володимир Трякін ','Vladimir Tryakin ','главный инженер','головний інженер','Chief Engineer','главный инженер','головний інженер','Chief Engineer','','','','','','','','','','','yes'),(10,8,'mihail-krinitskiy','team','Сергей Богушев ','Сергій Богушев','Sergey Bogushev','начальник отдела управления проектами','начальник відділу управління проектами','Head of Project Management Department','начальник отдела управления проектами','начальник відділу управління проектами','Head of Project Management Department','','','','','','','','','','','yes'),(11,6,'nelya-maylis','team','Неля Майлис','Неля Майліс ','Nelya Maylis ','инженер по компьютерным системам','інженер комп`ютерних систем','Engineer of Computer Systems','инженер по компьютерным системам','інженер комп`ютерних систем','Engineer of Computer Systems','','','','','','','','','','','yes'),(12,7,'nataljya-bondarenko-','team','Наталья Бондаренко ','Наталя Бондаренко','Natalya Bondarenko ','юрисконсульт','юрисконсульт','Legal Counsel','юрисконсульт','юрисконсульт','Legal Counsel','','','','','','','','','','','yes'),(13,9,'lyubovj-svyatoduh','team','Любовь Святодух','Любов Святодух ','Lyubov Svyatoduch ','организатор по персоналу','організатор з персоналу','Staff Organizer','организатор по персоналу','організатор з персоналу','Staff Organizer','','','','','','','','','','','yes');
/*!40000 ALTER TABLE `team` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(10) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(16) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `img` varchar(25) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `img`, `status`) VALUES (21,'','','AdminMig','','fe703d258c7ef5f50b71e06565a65aa07194907f','','admin'),(16,'Дмитрий','Черепанов','TreeMind','info@leocraft.com','7363072c088fa2c13f96fe7872f493a02203b911','2015-Jun-13-233306.jpg','admin');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'ukrtrans_base'
--

--
-- Dumping routines for database 'ukrtrans_base'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-09-16 10:00:14
