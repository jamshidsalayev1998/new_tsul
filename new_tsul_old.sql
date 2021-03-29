/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50731
 Source Host           : localhost:3306
 Source Schema         : new_tsul

 Target Server Type    : MySQL
 Target Server Version : 50731
 File Encoding         : 65001

 Date: 28/03/2021 10:55:55
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for about_university
-- ----------------------------
DROP TABLE IF EXISTS `about_university`;
CREATE TABLE `about_university`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `created_by` bigint(20) NULL DEFAULT NULL,
  `updated_by` bigint(20) NULL DEFAULT NULL,
  `name_uz` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `name_ru` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `name_en` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `faks` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `address_uz` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `address_ru` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `address_en` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `twitter` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `telegram` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `youtube` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `instagram` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `facebook` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `location` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `short_description_uz` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `short_description_ru` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `short_description_en` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `full_information_uz` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `full_information_ru` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `full_information_en` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `image` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `status` int(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of about_university
-- ----------------------------
INSERT INTO `about_university` VALUES (1, NULL, '2021-03-27 11:26:57', NULL, NULL, 'Toshkent davlat yuridik universiteti', 'Ташкентском Государственном Юридическом Университет', 'Ташкентском Государственном Юридическом Университет', '+99 871 233-66-36', '+99 871 233-37-48', 'info@tsyl.uz', 'Республика Узбекистан, 100047. г. Ташкент, ул. Сайилгох, 35', 'Республика Узбекистан, 100047. г. Ташкент, ул. Сайилгох, 35', 'Республика Узбекистан, 100047. г. Ташкент, ул. Сайилгох, 35', 'https://twitter.com/tsulofficial', 'https://t.me/tsulofficial', 'https://www.youtube.com/channel/UCTAhGEQDYohjqmDAsD9yRBg', 'https://www.instagram.com/tsulofficial', 'https://www.fb.com/tsulofficial', NULL, 'О Ташкентском Государственном Юридическом Университете Ташкентский государственный юридический университет является базовым высшим образовательным и научно-методическим учреждением по подготовке юридических кадров в Узбекистане', 'О Ташкентском Государственном Юридическом Университете Ташкентский государственный юридический университет является базовым высшим образовательным и научно-методическим учреждением по подготовке юридических кадров в Узбекистане', 'О Ташкентском Государственном Юридическом Университете Ташкентский государственный юридический университет является базовым высшим образовательным и научно-методическим учреждением по подготовке юридических кадров в Узбекистане', '<h3 class=\" card-title text-center\" style=\"margin-bottom: 0.75rem; line-height: 1.1; font-size: 1.75rem; font-family: &quot;Times New Roman&quot;, sans-serif; color: rgb(33, 37, 41);\">UMUMIY MA`LUMOT</h3><div class=\"col-sm-12\" style=\"-webkit-box-flex: 0; width: 898px; min-height: 1px; padding-right: 15px; padding-left: 15px; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Robto, &quot;Helvetica Neue&quot;, Arial, sans-serif;\"><h4 class=\"card-title text-center\" style=\"margin-bottom: 0.75rem; line-height: 1.1; font-size: 1.5rem; font-family: &quot;Times New Roman&quot;, sans-serif;\">О Ташкентском государственном юридическом университете</h4></div><div class=\"card-text\" style=\"font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Robto, &quot;Helvetica Neue&quot;, Arial, sans-serif;\"><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Ташкентский государственный юридический университет (ТГЮУ) является главным высшим учебным и научно-методическим заведением в Узбекистане, осуществляющим подготовку юридических кадров. История университета и развитие национальной юридической школы в нашей стране тесно связаны с именами таких видных отечественных ученых-юристов, как Хадича Сулаймонова, Ходжиакбар Рахмонкулов, Борис Блиндер, Георгий Саркисян, Анвар Агзамходжаев, Шавкат Уразаев, Шоакбар Шоахмедов Икром Зокиров, а также с именами многих других юристов.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">15 августа 1991 года решением Кабинета Министров он был выделен из Ташкентского государственного университета как Ташкентский государственный юридический институт.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Постановлением Президента Республики Узбекистан от 28 июня 2013 года ПП-1990 Ташкентский государственный юридический институт был преобразован в Ташкентский государственный юридический университет.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Университет в качестве независимого учебного и научно-исследовательского заведения активно применяет новые педагогические технологии в учебном процессе, проводит фундаментальные и научные исследования по актуальным вопросам законодательства и его применения, а также правового регулирования в обществе, осуществляет широкий спектр духовно-просветительских мероприятий, направленных на повышение осведомленности и правовой культуры.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\"></p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Ташкентский государственный юридический университет готовит специалистов на уровне бакалавров, магистров, докторантов и независимых исследователей.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">В соответствии с Указом Президента Республики Узбекистан от 29 апреля 2020 года УП-5987 «О дополнительных мерах по коренному совершенствованию юридического образования и науки в Республике Узбекистан» была пересмотрена организационная структура Ташкентского государственного юридического университета и созданы новые факультеты и структурные подразделения.</p><h5 style=\"line-height: 1.1; font-family: &quot;Times New Roman&quot;, sans-serif;\">В настоящее время Ташкентский государственный юридический университет включает 4 факультета:</h5><ol style=\"padding-left: 2rem;\"><li>Публичное право</li><li>Уголовное правосудие.</li><li>Частное право.</li><li>Международное право и сравнительное правоведение.</li></ol><p class=\"text-muted\" style=\"font-family: &quot;Times New Roman&quot;, sans-serif; color: rgb(134, 142, 150) !important;\">На указанных факультетах созданы кафедры Конституционного права, Административного и финансового права, Правоохранительных органов и адвокатуры, Криминалистики и судебной экспертизы, а также Центр изучения японского права, Центр исследования немецкого права и сравнительного правоведения. В университете функционируют 19 кафедр. По состоянию на февраль 2021 года научный потенциал университета составляет 41,2%. Принимаются меры по увеличению научного потенциала как минимум до 70% за счет поддержки исследований в течение следующих 5 лет.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\"><span style=\"font-weight: bolder;\">Для справки:</span>&nbsp;сегодня в университете работают 279 профессоров и преподавателей, из них 33 доктора наук (DSc), 82 кандидата наук (в том числе, 29 докторов философских наук (PhD)), 23 из них имеют степени и звания профессора, 42 – доцента.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Учебный процесс в университете строится по кредитно-модульной системе, которая является новой в нашей стране.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Была внедрена Европейская система перевода и накопления кредитов (ECTS), предоставляющая студентам возможность выбирать предметы.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Начиная с 2020/2021 учебного года в университете осуществляется дистанционный прием на образовательные формы обучения бакалавриата и магистратуры.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">В настоящее время в Ташкентском государственном юридическом университете в бакалавриате обучаются 4 426 студентов, в магистратуре – 269 студентов.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Занятия в ТГЮУ ведутся на узбекском, русском и английском языках.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">В университете реализуются совместные образовательные программы, направленные на присуждение «двойного диплома».</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">В рамках совместных образовательных программ достигнута договоренность с Гродненским государственным университетом имени Янки Купалы (Республика Беларусь) о подготовке бакалавров по международному частному праву и КАЗГУУ имени М.С. Нарикбаева (Республика Казахстан) о подготовке бакалавров по международному экономическому праву.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Также ведутся переговоры с Анкарским университетом Йылдырыма Беязита и Варшавским университетом (Польша) о создании совместных образовательных программ.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">В целях обеспечения прозрачности и удобства для студентов и преподавателей Ташкентский государственный университет запускает платформу «Электронный университет», которая предусматривает оцифровку образовательного процесса, включая формирование расписаний, экзаменов, оценок, рейтингов студентов и переход на электронный обмен документами. Данная платформа позволяет студентам и их родителям, широкой общественности контролировать и напрямую участвовать во всех процессах, связанных с деятельностью университета, а также обеспечивает открытость и прозрачность процессов.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Предупреждение и борьба с коррупцией - одна из основных задач университета. В связи с этим университет принял Антикоррупционную программу. Создана Антикоррупционная комиссия. Также был разработан этический кодекс. Внедряются механизмы для создания системы обратной связи для получения информации о фактах коррупции, для проведения систематических опросов студентов по вопросам коррупции и принятия практических мер на основе их результатов, а также для осуществления общественного контроля над экзаменационным процессом.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Ташкентский государственный университет стал полноправным членом Международной ассоциации университетов (IAU), Международной ассоциации юридических школ (IALS) и Европейской ассоциации юридических факультетов (ELFA). В настоящее время поданы заявки на членство в Большую хартию университетов (Magna Charter) и Европейскую ассоциацию высших учебных заведений (EURASHE).</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Ташкентский государственный юридический университет, осуществляет подготовку кадров по следующим специальностям магистратуры (срок обучения - 1 год):</p><ol style=\"padding-left: 2rem;\"><li>Адвокатская деятельность.</li><li>Международный арбитраж и разрешение споров.</li><li>Спортивное право.</li><li>Право государственного управления.</li><li>Предпринимательское право.</li><li>Трудовое право.</li><li>Теория и практика применения уголовного законодательства.</li><li>Закон об интеллектуальной собственности и информационных технологиях.</li></ol><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Также при университете действует Центр профессиональной подготовки юридических кадров в соответствии с международными стандартами, Специализированный филиал университета по подготовке и переподготовке профилактических инспекторов, академический лицей.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Кроме того, университет координирует деятельность юридических техникумов Министерства юстиции, созданных в каждом регионе страны.</p></div>', '<h3 class=\" card-title text-center\" style=\"margin-bottom: 0.75rem; line-height: 1.1; font-size: 1.75rem; font-family: &quot;Times New Roman&quot;, sans-serif; color: rgb(33, 37, 41);\">ОБЩАЯ ИНФОРМАЦИЯ</h3><div class=\"col-sm-12\" style=\"-webkit-box-flex: 0; width: 898px; min-height: 1px; padding-right: 15px; padding-left: 15px; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Robto, &quot;Helvetica Neue&quot;, Arial, sans-serif;\"><h4 class=\"card-title text-center\" style=\"margin-bottom: 0.75rem; line-height: 1.1; font-size: 1.5rem; font-family: &quot;Times New Roman&quot;, sans-serif;\">О Ташкентском государственном юридическом университете</h4></div><div class=\"card-text\" style=\"font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Robto, &quot;Helvetica Neue&quot;, Arial, sans-serif;\"><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Ташкентский государственный юридический университет (ТГЮУ) является главным высшим учебным и научно-методическим заведением в Узбекистане, осуществляющим подготовку юридических кадров. История университета и развитие национальной юридической школы в нашей стране тесно связаны с именами таких видных отечественных ученых-юристов, как Хадича Сулаймонова, Ходжиакбар Рахмонкулов, Борис Блиндер, Георгий Саркисян, Анвар Агзамходжаев, Шавкат Уразаев, Шоакбар Шоахмедов Икром Зокиров, а также с именами многих других юристов.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">15 августа 1991 года решением Кабинета Министров он был выделен из Ташкентского государственного университета как Ташкентский государственный юридический институт.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Постановлением Президента Республики Узбекистан от 28 июня 2013 года ПП-1990 Ташкентский государственный юридический институт был преобразован в Ташкентский государственный юридический университет.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Университет в качестве независимого учебного и научно-исследовательского заведения активно применяет новые педагогические технологии в учебном процессе, проводит фундаментальные и научные исследования по актуальным вопросам законодательства и его применения, а также правового регулирования в обществе, осуществляет широкий спектр духовно-просветительских мероприятий, направленных на повышение осведомленности и правовой культуры.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\"></p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Ташкентский государственный юридический университет готовит специалистов на уровне бакалавров, магистров, докторантов и независимых исследователей.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">В соответствии с Указом Президента Республики Узбекистан от 29 апреля 2020 года УП-5987 «О дополнительных мерах по коренному совершенствованию юридического образования и науки в Республике Узбекистан» была пересмотрена организационная структура Ташкентского государственного юридического университета и созданы новые факультеты и структурные подразделения.</p><h5 style=\"line-height: 1.1; font-family: &quot;Times New Roman&quot;, sans-serif;\">В настоящее время Ташкентский государственный юридический университет включает 4 факультета:</h5><ol style=\"padding-left: 2rem;\"><li>Публичное право</li><li>Уголовное правосудие.</li><li>Частное право.</li><li>Международное право и сравнительное правоведение.</li></ol><p class=\"text-muted\" style=\"font-family: &quot;Times New Roman&quot;, sans-serif; color: rgb(134, 142, 150) !important;\">На указанных факультетах созданы кафедры Конституционного права, Административного и финансового права, Правоохранительных органов и адвокатуры, Криминалистики и судебной экспертизы, а также Центр изучения японского права, Центр исследования немецкого права и сравнительного правоведения. В университете функционируют 19 кафедр. По состоянию на февраль 2021 года научный потенциал университета составляет 41,2%. Принимаются меры по увеличению научного потенциала как минимум до 70% за счет поддержки исследований в течение следующих 5 лет.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\"><span style=\"font-weight: bolder;\">Для справки:</span>&nbsp;сегодня в университете работают 279 профессоров и преподавателей, из них 33 доктора наук (DSc), 82 кандидата наук (в том числе, 29 докторов философских наук (PhD)), 23 из них имеют степени и звания профессора, 42 – доцента.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Учебный процесс в университете строится по кредитно-модульной системе, которая является новой в нашей стране.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Была внедрена Европейская система перевода и накопления кредитов (ECTS), предоставляющая студентам возможность выбирать предметы.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Начиная с 2020/2021 учебного года в университете осуществляется дистанционный прием на образовательные формы обучения бакалавриата и магистратуры.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">В настоящее время в Ташкентском государственном юридическом университете в бакалавриате обучаются 4 426 студентов, в магистратуре – 269 студентов.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Занятия в ТГЮУ ведутся на узбекском, русском и английском языках.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">В университете реализуются совместные образовательные программы, направленные на присуждение «двойного диплома».</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">В рамках совместных образовательных программ достигнута договоренность с Гродненским государственным университетом имени Янки Купалы (Республика Беларусь) о подготовке бакалавров по международному частному праву и КАЗГУУ имени М.С. Нарикбаева (Республика Казахстан) о подготовке бакалавров по международному экономическому праву.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Также ведутся переговоры с Анкарским университетом Йылдырыма Беязита и Варшавским университетом (Польша) о создании совместных образовательных программ.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">В целях обеспечения прозрачности и удобства для студентов и преподавателей Ташкентский государственный университет запускает платформу «Электронный университет», которая предусматривает оцифровку образовательного процесса, включая формирование расписаний, экзаменов, оценок, рейтингов студентов и переход на электронный обмен документами. Данная платформа позволяет студентам и их родителям, широкой общественности контролировать и напрямую участвовать во всех процессах, связанных с деятельностью университета, а также обеспечивает открытость и прозрачность процессов.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Предупреждение и борьба с коррупцией - одна из основных задач университета. В связи с этим университет принял Антикоррупционную программу. Создана Антикоррупционная комиссия. Также был разработан этический кодекс. Внедряются механизмы для создания системы обратной связи для получения информации о фактах коррупции, для проведения систематических опросов студентов по вопросам коррупции и принятия практических мер на основе их результатов, а также для осуществления общественного контроля над экзаменационным процессом.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Ташкентский государственный университет стал полноправным членом Международной ассоциации университетов (IAU), Международной ассоциации юридических школ (IALS) и Европейской ассоциации юридических факультетов (ELFA). В настоящее время поданы заявки на членство в Большую хартию университетов (Magna Charter) и Европейскую ассоциацию высших учебных заведений (EURASHE).</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Ташкентский государственный юридический университет, осуществляет подготовку кадров по следующим специальностям магистратуры (срок обучения - 1 год):</p><ol style=\"padding-left: 2rem;\"><li>Адвокатская деятельность.</li><li>Международный арбитраж и разрешение споров.</li><li>Спортивное право.</li><li>Право государственного управления.</li><li>Предпринимательское право.</li><li>Трудовое право.</li><li>Теория и практика применения уголовного законодательства.</li><li>Закон об интеллектуальной собственности и информационных технологиях.</li></ol><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Также при университете действует Центр профессиональной подготовки юридических кадров в соответствии с международными стандартами, Специализированный филиал университета по подготовке и переподготовке профилактических инспекторов, академический лицей.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Кроме того, университет координирует деятельность юридических техникумов Министерства юстиции, созданных в каждом регионе страны.</p></div>', '<h3 class=\" card-title text-center\" style=\"margin-bottom: 0.75rem; line-height: 1.1; font-size: 1.75rem; font-family: &quot;Times New Roman&quot;, sans-serif; color: rgb(33, 37, 41);\">ОБЩАЯ ИНФОРМАЦИЯ</h3><div class=\"col-sm-12\" style=\"-webkit-box-flex: 0; width: 898px; min-height: 1px; padding-right: 15px; padding-left: 15px; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Robto, &quot;Helvetica Neue&quot;, Arial, sans-serif;\"><h4 class=\"card-title text-center\" style=\"margin-bottom: 0.75rem; line-height: 1.1; font-size: 1.5rem; font-family: &quot;Times New Roman&quot;, sans-serif;\">О Ташкентском государственном юридическом университете</h4></div><div class=\"card-text\" style=\"font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Robto, &quot;Helvetica Neue&quot;, Arial, sans-serif;\"><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Ташкентский государственный юридический университет (ТГЮУ) является главным высшим учебным и научно-методическим заведением в Узбекистане, осуществляющим подготовку юридических кадров. История университета и развитие национальной юридической школы в нашей стране тесно связаны с именами таких видных отечественных ученых-юристов, как Хадича Сулаймонова, Ходжиакбар Рахмонкулов, Борис Блиндер, Георгий Саркисян, Анвар Агзамходжаев, Шавкат Уразаев, Шоакбар Шоахмедов Икром Зокиров, а также с именами многих других юристов.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">15 августа 1991 года решением Кабинета Министров он был выделен из Ташкентского государственного университета как Ташкентский государственный юридический институт.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Постановлением Президента Республики Узбекистан от 28 июня 2013 года ПП-1990 Ташкентский государственный юридический институт был преобразован в Ташкентский государственный юридический университет.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Университет в качестве независимого учебного и научно-исследовательского заведения активно применяет новые педагогические технологии в учебном процессе, проводит фундаментальные и научные исследования по актуальным вопросам законодательства и его применения, а также правового регулирования в обществе, осуществляет широкий спектр духовно-просветительских мероприятий, направленных на повышение осведомленности и правовой культуры.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\"></p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Ташкентский государственный юридический университет готовит специалистов на уровне бакалавров, магистров, докторантов и независимых исследователей.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">В соответствии с Указом Президента Республики Узбекистан от 29 апреля 2020 года УП-5987 «О дополнительных мерах по коренному совершенствованию юридического образования и науки в Республике Узбекистан» была пересмотрена организационная структура Ташкентского государственного юридического университета и созданы новые факультеты и структурные подразделения.</p><h5 style=\"line-height: 1.1; font-family: &quot;Times New Roman&quot;, sans-serif;\">В настоящее время Ташкентский государственный юридический университет включает 4 факультета:</h5><ol style=\"padding-left: 2rem;\"><li>Публичное право</li><li>Уголовное правосудие.</li><li>Частное право.</li><li>Международное право и сравнительное правоведение.</li></ol><p class=\"text-muted\" style=\"font-family: &quot;Times New Roman&quot;, sans-serif; color: rgb(134, 142, 150) !important;\">На указанных факультетах созданы кафедры Конституционного права, Административного и финансового права, Правоохранительных органов и адвокатуры, Криминалистики и судебной экспертизы, а также Центр изучения японского права, Центр исследования немецкого права и сравнительного правоведения. В университете функционируют 19 кафедр. По состоянию на февраль 2021 года научный потенциал университета составляет 41,2%. Принимаются меры по увеличению научного потенциала как минимум до 70% за счет поддержки исследований в течение следующих 5 лет.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\"><span style=\"font-weight: bolder;\">Для справки:</span>&nbsp;сегодня в университете работают 279 профессоров и преподавателей, из них 33 доктора наук (DSc), 82 кандидата наук (в том числе, 29 докторов философских наук (PhD)), 23 из них имеют степени и звания профессора, 42 – доцента.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Учебный процесс в университете строится по кредитно-модульной системе, которая является новой в нашей стране.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Была внедрена Европейская система перевода и накопления кредитов (ECTS), предоставляющая студентам возможность выбирать предметы.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Начиная с 2020/2021 учебного года в университете осуществляется дистанционный прием на образовательные формы обучения бакалавриата и магистратуры.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">В настоящее время в Ташкентском государственном юридическом университете в бакалавриате обучаются 4 426 студентов, в магистратуре – 269 студентов.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Занятия в ТГЮУ ведутся на узбекском, русском и английском языках.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">В университете реализуются совместные образовательные программы, направленные на присуждение «двойного диплома».</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">В рамках совместных образовательных программ достигнута договоренность с Гродненским государственным университетом имени Янки Купалы (Республика Беларусь) о подготовке бакалавров по международному частному праву и КАЗГУУ имени М.С. Нарикбаева (Республика Казахстан) о подготовке бакалавров по международному экономическому праву.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Также ведутся переговоры с Анкарским университетом Йылдырыма Беязита и Варшавским университетом (Польша) о создании совместных образовательных программ.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">В целях обеспечения прозрачности и удобства для студентов и преподавателей Ташкентский государственный университет запускает платформу «Электронный университет», которая предусматривает оцифровку образовательного процесса, включая формирование расписаний, экзаменов, оценок, рейтингов студентов и переход на электронный обмен документами. Данная платформа позволяет студентам и их родителям, широкой общественности контролировать и напрямую участвовать во всех процессах, связанных с деятельностью университета, а также обеспечивает открытость и прозрачность процессов.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Предупреждение и борьба с коррупцией - одна из основных задач университета. В связи с этим университет принял Антикоррупционную программу. Создана Антикоррупционная комиссия. Также был разработан этический кодекс. Внедряются механизмы для создания системы обратной связи для получения информации о фактах коррупции, для проведения систематических опросов студентов по вопросам коррупции и принятия практических мер на основе их результатов, а также для осуществления общественного контроля над экзаменационным процессом.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Ташкентский государственный университет стал полноправным членом Международной ассоциации университетов (IAU), Международной ассоциации юридических школ (IALS) и Европейской ассоциации юридических факультетов (ELFA). В настоящее время поданы заявки на членство в Большую хартию университетов (Magna Charter) и Европейскую ассоциацию высших учебных заведений (EURASHE).</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Ташкентский государственный юридический университет, осуществляет подготовку кадров по следующим специальностям магистратуры (срок обучения - 1 год):</p><ol style=\"padding-left: 2rem;\"><li>Адвокатская деятельность.</li><li>Международный арбитраж и разрешение споров.</li><li>Спортивное право.</li><li>Право государственного управления.</li><li>Предпринимательское право.</li><li>Трудовое право.</li><li>Теория и практика применения уголовного законодательства.</li><li>Закон об интеллектуальной собственности и информационных технологиях.</li></ol><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Также при университете действует Центр профессиональной подготовки юридических кадров в соответствии с международными стандартами, Специализированный филиал университета по подготовке и переподготовке профилактических инспекторов, академический лицей.</p><p style=\"font-family: &quot;Times New Roman&quot;, sans-serif;\">Кроме того, университет координирует деятельность юридических техникумов Министерства юстиции, созданных в каждом регионе страны.</p></div>', NULL, 1);

-- ----------------------------
-- Table structure for bolimlar
-- ----------------------------
DROP TABLE IF EXISTS `bolimlar`;
CREATE TABLE `bolimlar`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `created_by` bigint(20) NULL DEFAULT NULL,
  `updated_by` bigint(20) NULL DEFAULT NULL,
  `director_full_name_uz` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `director_full_name_ru` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `director_full_name_en` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `phone` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `email` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `bolim_phone` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `bolim_faks` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `bolim_email` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `full_information_uz` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `full_information_ru` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `full_information_en` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for default_table
-- ----------------------------
DROP TABLE IF EXISTS `default_table`;
CREATE TABLE `default_table`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `created_by` bigint(20) NULL DEFAULT NULL,
  `updated_by` bigint(20) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for menus
-- ----------------------------
DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `created_by` bigint(20) NULL DEFAULT NULL,
  `updated_by` bigint(20) NULL DEFAULT NULL,
  `name_uz` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `name_ru` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `name_en` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `parent_id` int(11) NULL DEFAULT NULL,
  `leap` int(11) NULL DEFAULT NULL,
  `dynamik` int(1) NULL DEFAULT NULL,
  `type` int(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 113 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of menus
-- ----------------------------
INSERT INTO `menus` VALUES (1, NULL, NULL, NULL, NULL, NULL, 'Университет', NULL, NULL, NULL, 0, 1, 1);
INSERT INTO `menus` VALUES (2, NULL, NULL, NULL, NULL, NULL, 'Образование', NULL, NULL, NULL, 0, 1, 1);
INSERT INTO `menus` VALUES (3, NULL, '2021-03-27 05:36:03', NULL, NULL, NULL, 'Наука', NULL, '', NULL, 0, 1, 1);
INSERT INTO `menus` VALUES (4, NULL, NULL, NULL, NULL, NULL, 'Международная деятельность', NULL, NULL, NULL, 0, 1, 1);
INSERT INTO `menus` VALUES (5, NULL, NULL, NULL, NULL, NULL, 'Студенческая жизнь', NULL, NULL, NULL, 0, 1, 1);
INSERT INTO `menus` VALUES (6, NULL, NULL, NULL, NULL, NULL, 'Приемная комиссия', NULL, NULL, NULL, 0, 1, 1);
INSERT INTO `menus` VALUES (7, NULL, NULL, NULL, NULL, NULL, 'Об университете', NULL, '/about-university', 1, 1, 1, 1);
INSERT INTO `menus` VALUES (8, NULL, NULL, NULL, NULL, NULL, 'Общая структура университета', NULL, NULL, 1, 1, 1, 1);
INSERT INTO `menus` VALUES (9, NULL, NULL, NULL, NULL, NULL, 'Пресс-служба', NULL, NULL, 1, 1, 1, 1);
INSERT INTO `menus` VALUES (10, NULL, NULL, NULL, NULL, NULL, 'Органы управления', NULL, NULL, 1, 1, 1, 1);
INSERT INTO `menus` VALUES (11, NULL, NULL, NULL, NULL, NULL, 'Официальные документы', NULL, NULL, 1, 1, 1, 1);
INSERT INTO `menus` VALUES (12, NULL, NULL, NULL, NULL, NULL, 'Контакты', NULL, NULL, 1, 1, 1, 1);
INSERT INTO `menus` VALUES (13, NULL, NULL, NULL, NULL, NULL, 'Достижения', NULL, NULL, 1, 1, 1, 1);
INSERT INTO `menus` VALUES (14, NULL, NULL, NULL, NULL, NULL, 'Факультеты бакалавриата', NULL, NULL, 2, 1, 1, 1);
INSERT INTO `menus` VALUES (15, NULL, NULL, NULL, NULL, NULL, 'Направления магистратуры', NULL, NULL, 2, 1, 1, 1);
INSERT INTO `menus` VALUES (16, NULL, NULL, NULL, NULL, NULL, 'Послевузовское образование', NULL, NULL, 2, 1, 1, 1);
INSERT INTO `menus` VALUES (17, NULL, NULL, NULL, NULL, NULL, 'Стипендии и гранты', NULL, NULL, 2, 1, 1, 1);
INSERT INTO `menus` VALUES (19, NULL, NULL, NULL, NULL, NULL, 'Расписание занятий', NULL, NULL, 2, 1, 1, 1);
INSERT INTO `menus` VALUES (18, NULL, '2021-03-27 06:05:15', NULL, NULL, NULL, 'Библиотека', NULL, NULL, 2, 1, 1, 1);
INSERT INTO `menus` VALUES (20, NULL, NULL, NULL, NULL, NULL, 'Расписание сессии', '', NULL, 2, 1, 1, 1);
INSERT INTO `menus` VALUES (21, NULL, NULL, NULL, NULL, NULL, 'Дистанционное обучение', '', NULL, 2, 1, 1, 1);
INSERT INTO `menus` VALUES (22, NULL, NULL, NULL, NULL, NULL, 'Дополнительное профессиональное образование', '', NULL, 2, 1, 1, 1);
INSERT INTO `menus` VALUES (23, NULL, NULL, NULL, NULL, NULL, 'Платные образовательные услуги', '', NULL, 2, 1, 1, 1);
INSERT INTO `menus` VALUES (24, NULL, NULL, NULL, NULL, NULL, 'Государственная итоговая аттестация', '', NULL, 2, 1, 1, 1);
INSERT INTO `menus` VALUES (25, NULL, NULL, NULL, NULL, NULL, 'Конкурс на замещение вакантных должностей ППС', '', NULL, 2, 1, 1, 1);
INSERT INTO `menus` VALUES (26, NULL, NULL, NULL, NULL, NULL, 'Практика и стажировка', '', NULL, 2, 1, 1, 1);
INSERT INTO `menus` VALUES (27, NULL, NULL, NULL, NULL, NULL, 'Направления научных исследований', '', NULL, 3, 1, 1, 1);
INSERT INTO `menus` VALUES (28, NULL, NULL, NULL, NULL, NULL, 'Научная деятельность', NULL, NULL, 3, 1, 1, 1);
INSERT INTO `menus` VALUES (29, NULL, '2021-03-27 05:50:20', NULL, NULL, NULL, 'Публикации', NULL, NULL, 3, 1, 1, 1);
INSERT INTO `menus` VALUES (30, NULL, NULL, NULL, NULL, NULL, 'Совет молодых ученых', '', NULL, 3, 1, 1, 1);
INSERT INTO `menus` VALUES (31, NULL, NULL, NULL, NULL, NULL, 'Научные издания', NULL, NULL, 3, 1, 1, 1);
INSERT INTO `menus` VALUES (32, NULL, NULL, NULL, NULL, NULL, 'Авторефераты', NULL, NULL, 3, 1, 1, 1);
INSERT INTO `menus` VALUES (33, NULL, NULL, NULL, NULL, NULL, 'Фонд академических инноваций', NULL, NULL, 3, 1, 1, 1);
INSERT INTO `menus` VALUES (34, NULL, NULL, NULL, NULL, NULL, 'Лаборатория Legal Tech', '', NULL, 3, 1, 1, 1);
INSERT INTO `menus` VALUES (35, NULL, NULL, NULL, NULL, NULL, 'Международные отношения', NULL, NULL, 4, 1, 1, 1);
INSERT INTO `menus` VALUES (36, NULL, NULL, NULL, NULL, NULL, 'Академическая мобильность', NULL, NULL, 4, 1, 1, 1);
INSERT INTO `menus` VALUES (37, NULL, NULL, NULL, NULL, NULL, 'Исследовательские проекты', NULL, NULL, 4, 1, 1, 1);
INSERT INTO `menus` VALUES (38, NULL, NULL, NULL, NULL, NULL, 'Международные студенты', NULL, NULL, 4, 1, 1, 1);
INSERT INTO `menus` VALUES (39, NULL, NULL, NULL, NULL, NULL, 'Стажировка за рубежом и краткосрочные курсы', NULL, NULL, 4, 1, 1, 1);
INSERT INTO `menus` VALUES (40, NULL, NULL, NULL, NULL, NULL, 'Центрально-азиатский студенческий конгресс', NULL, NULL, 4, 1, 1, 1);
INSERT INTO `menus` VALUES (41, NULL, NULL, NULL, NULL, NULL, 'Поощрение социальной активности', NULL, NULL, 5, 1, 1, 1);
INSERT INTO `menus` VALUES (42, NULL, NULL, NULL, NULL, NULL, 'Студенческие объединения', NULL, NULL, 5, 1, 1, 1);
INSERT INTO `menus` VALUES (43, NULL, NULL, NULL, NULL, NULL, 'Творческие студии и клубы по интересам', NULL, NULL, 5, 1, 1, 1);
INSERT INTO `menus` VALUES (44, NULL, NULL, NULL, NULL, NULL, 'Студенческий спортивный клуб', NULL, NULL, 5, 1, 1, 1);
INSERT INTO `menus` VALUES (45, NULL, NULL, NULL, NULL, NULL, 'Научные школы', NULL, NULL, 5, 1, 1, 1);
INSERT INTO `menus` VALUES (46, NULL, NULL, NULL, NULL, NULL, 'Летний отдых', NULL, NULL, 5, 1, 1, 1);
INSERT INTO `menus` VALUES (47, NULL, NULL, NULL, NULL, NULL, 'Форумы и лагеря', NULL, NULL, 5, 1, 1, 1);
INSERT INTO `menus` VALUES (48, NULL, NULL, NULL, NULL, NULL, 'Студенческие фестивали', NULL, NULL, 5, 1, 1, 1);
INSERT INTO `menus` VALUES (49, NULL, NULL, NULL, NULL, NULL, 'Стипендии', NULL, NULL, 5, 1, 1, 1);
INSERT INTO `menus` VALUES (50, NULL, NULL, NULL, NULL, NULL, ' Деятельность приемной комиссии', NULL, NULL, 6, 1, 1, 1);
INSERT INTO `menus` VALUES (51, NULL, NULL, NULL, NULL, NULL, ' Бакалавриат', NULL, NULL, 6, 1, 1, 1);
INSERT INTO `menus` VALUES (52, NULL, NULL, NULL, NULL, NULL, ' Магистратура', NULL, NULL, 6, 1, 1, 1);
INSERT INTO `menus` VALUES (53, NULL, NULL, NULL, NULL, NULL, ' Заочное обучение и второе высшее образование', NULL, NULL, 6, 1, 1, 1);
INSERT INTO `menus` VALUES (54, NULL, NULL, NULL, NULL, NULL, ' Прием иностранных граждан', NULL, NULL, 6, 1, 1, 1);
INSERT INTO `menus` VALUES (55, NULL, NULL, NULL, NULL, NULL, ' Прием на совместные образовательные программы', NULL, NULL, 6, 1, 1, 1);
INSERT INTO `menus` VALUES (56, NULL, NULL, NULL, NULL, NULL, 'Прием выпускников юридических техникумов и академического лицея', NULL, NULL, 6, 1, 1, 1);
INSERT INTO `menus` VALUES (58, NULL, NULL, NULL, NULL, NULL, ' Приветствие ректора', NULL, NULL, 7, 2, 1, 1);
INSERT INTO `menus` VALUES (59, NULL, NULL, NULL, NULL, NULL, 'Миссия и ценности', NULL, NULL, 7, 2, 1, 1);
INSERT INTO `menus` VALUES (60, NULL, NULL, NULL, NULL, NULL, 'Отчеты и презентации', NULL, NULL, 7, 2, 1, 1);
INSERT INTO `menus` VALUES (61, NULL, '2021-03-27 14:12:05', NULL, NULL, NULL, 'Логотип и фирменный стиль', NULL, '/general-page/logotip-i-firmenniy-stily', 7, 2, 1, 1);
INSERT INTO `menus` VALUES (62, NULL, NULL, NULL, NULL, NULL, 'Музей', NULL, NULL, 7, 2, 1, 1);
INSERT INTO `menus` VALUES (63, NULL, NULL, NULL, NULL, NULL, '  Факультеты', NULL, NULL, 8, 2, 1, 1);
INSERT INTO `menus` VALUES (64, NULL, NULL, NULL, NULL, NULL, 'Управления', NULL, NULL, 8, 2, 1, 1);
INSERT INTO `menus` VALUES (65, NULL, NULL, NULL, NULL, NULL, 'Центры', NULL, NULL, 8, 2, 1, 1);
INSERT INTO `menus` VALUES (66, NULL, NULL, NULL, NULL, NULL, 'Филиалы', NULL, NULL, 8, 2, 1, 1);
INSERT INTO `menus` VALUES (67, NULL, NULL, NULL, NULL, NULL, 'Академический лицей', NULL, NULL, 8, 2, 1, 1);
INSERT INTO `menus` VALUES (68, NULL, NULL, NULL, NULL, NULL, 'Мероприятия', NULL, NULL, 9, 2, 1, 1);
INSERT INTO `menus` VALUES (69, NULL, NULL, NULL, NULL, NULL, 'Публикации в СМИ', NULL, NULL, 9, 2, 1, 1);
INSERT INTO `menus` VALUES (70, NULL, NULL, NULL, NULL, NULL, 'Медиацентр', NULL, NULL, 9, 2, 1, 1);
INSERT INTO `menus` VALUES (76, NULL, NULL, NULL, NULL, NULL, 'Научный совет', NULL, NULL, 10, 2, 1, 1);
INSERT INTO `menus` VALUES (75, NULL, NULL, NULL, NULL, NULL, 'Попечительский совет', NULL, NULL, 10, 2, 1, 1);
INSERT INTO `menus` VALUES (74, NULL, NULL, NULL, NULL, NULL, 'Ректорат', NULL, NULL, 10, 2, 1, 1);
INSERT INTO `menus` VALUES (78, NULL, NULL, NULL, NULL, NULL, 'Сведения об образовательной организации', NULL, NULL, 11, 2, 1, 1);
INSERT INTO `menus` VALUES (79, NULL, NULL, NULL, NULL, NULL, 'Лицензия и аккредитация', NULL, NULL, 11, 2, 1, 1);
INSERT INTO `menus` VALUES (80, NULL, NULL, NULL, NULL, NULL, 'Устав', NULL, NULL, 11, 2, 1, 1);
INSERT INTO `menus` VALUES (81, NULL, NULL, NULL, NULL, NULL, 'Реквизиты', NULL, NULL, 11, 2, 1, 1);
INSERT INTO `menus` VALUES (82, NULL, NULL, NULL, NULL, NULL, 'Противодействие коррупции', NULL, NULL, 11, 2, 1, 1);
INSERT INTO `menus` VALUES (83, NULL, NULL, NULL, NULL, NULL, 'Телефонный справочник', NULL, NULL, 12, 2, 1, 1);
INSERT INTO `menus` VALUES (84, NULL, NULL, NULL, NULL, NULL, 'Карта корпусов', NULL, NULL, 12, 2, 1, 1);
INSERT INTO `menus` VALUES (85, NULL, NULL, NULL, NULL, NULL, 'Виртуальная приёмная', NULL, NULL, 12, 2, 1, 1);
INSERT INTO `menus` VALUES (86, NULL, NULL, NULL, NULL, NULL, 'Цифры и факты', NULL, NULL, 13, 2, 1, 1);
INSERT INTO `menus` VALUES (87, NULL, NULL, NULL, NULL, NULL, 'Позиции в рейтингах', NULL, NULL, 13, 2, 1, 1);
INSERT INTO `menus` VALUES (88, NULL, NULL, NULL, NULL, NULL, ' Зарубежные партнеры – университеты', NULL, NULL, 35, 2, 1, 1);
INSERT INTO `menus` VALUES (89, NULL, NULL, NULL, NULL, NULL, 'Международные организации – партнеры', NULL, NULL, 35, 2, 1, 1);
INSERT INTO `menus` VALUES (90, NULL, NULL, NULL, NULL, NULL, 'Членство в международных ассоциациях', NULL, NULL, 35, 2, 1, 1);
INSERT INTO `menus` VALUES (91, NULL, NULL, NULL, NULL, NULL, 'Международные олимпиады и конкурсы', NULL, NULL, 35, 2, 1, 1);
INSERT INTO `menus` VALUES (92, NULL, NULL, NULL, NULL, NULL, ' Приглашенные профессора', NULL, NULL, 35, 2, 1, 1);
INSERT INTO `menus` VALUES (94, NULL, NULL, NULL, NULL, NULL, ' Совместные образовательные программы', NULL, NULL, 36, 2, NULL, NULL);
INSERT INTO `menus` VALUES (95, NULL, NULL, NULL, NULL, NULL, 'Образовательный курс University Foundation Program', NULL, NULL, 36, 2, NULL, NULL);
INSERT INTO `menus` VALUES (96, NULL, NULL, NULL, NULL, NULL, 'Обмен ППС', NULL, NULL, 36, 2, NULL, NULL);
INSERT INTO `menus` VALUES (97, NULL, NULL, NULL, NULL, NULL, 'Совместные факультеты за рубежом', NULL, NULL, 36, 2, NULL, NULL);
INSERT INTO `menus` VALUES (98, NULL, NULL, NULL, NULL, NULL, 'Студенческий обмен', NULL, NULL, 36, 2, NULL, NULL);
INSERT INTO `menus` VALUES (99, NULL, NULL, NULL, NULL, NULL, 'Международные конференции, семинары и «круглые столы»', NULL, NULL, 37, 2, NULL, NULL);
INSERT INTO `menus` VALUES (100, NULL, NULL, NULL, NULL, NULL, 'Международные научные проекты и гранты', NULL, NULL, 37, 2, NULL, NULL);
INSERT INTO `menus` VALUES (101, NULL, NULL, NULL, NULL, NULL, 'Экспертный совет ТГЮУ (соотечественники)', NULL, NULL, 37, 2, NULL, NULL);
INSERT INTO `menus` VALUES (102, NULL, NULL, NULL, NULL, NULL, 'Международные стипендии', NULL, NULL, 37, 2, NULL, NULL);
INSERT INTO `menus` VALUES (103, NULL, NULL, NULL, NULL, NULL, 'Стипендии партнеров-вузов', NULL, NULL, 37, 2, NULL, NULL);
INSERT INTO `menus` VALUES (104, NULL, NULL, NULL, NULL, NULL, ' Прием иностранных студентов', '', NULL, 38, 2, NULL, NULL);
INSERT INTO `menus` VALUES (105, NULL, NULL, NULL, NULL, NULL, 'Программы академической мобильности', '', NULL, 38, 2, NULL, NULL);
INSERT INTO `menus` VALUES (106, NULL, NULL, NULL, NULL, NULL, 'Бакалавр', '', NULL, 38, 2, NULL, NULL);
INSERT INTO `menus` VALUES (107, NULL, NULL, NULL, NULL, NULL, 'Магистратура', '', NULL, 38, 2, NULL, NULL);
INSERT INTO `menus` VALUES (108, NULL, NULL, NULL, NULL, NULL, 'Контакты', '', NULL, 38, 2, NULL, NULL);
INSERT INTO `menus` VALUES (109, NULL, NULL, NULL, NULL, NULL, 'Стажировка сотрудников и ППС', '', NULL, 39, 2, NULL, NULL);
INSERT INTO `menus` VALUES (110, NULL, NULL, NULL, NULL, NULL, 'Научная стажировка научных соискателей и докторантов', '', NULL, 39, 2, NULL, NULL);
INSERT INTO `menus` VALUES (111, NULL, NULL, NULL, NULL, NULL, 'Летние и зимние школы', '', NULL, 39, 2, NULL, NULL);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- ----------------------------
-- Table structure for pages
-- ----------------------------
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `created_by` bigint(20) NULL DEFAULT NULL,
  `updated_by` bigint(20) NULL DEFAULT NULL,
  `content_uz` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `content_ru` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `content_en` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `slug` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `title` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pages
-- ----------------------------
INSERT INTO `pages` VALUES (10, '2021-03-27 14:12:05', '2021-03-27 14:15:49', NULL, NULL, '<div class=\"articleContHead\" style=\"margin: 0px 0px 18px; color: rgb(0, 0, 0); font-family: Arial; font-size: 14px; outline: none !important;\"><h1 class=\"title-1 without-author\" style=\"font-size: 26px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; font-family: PTSerif-Bold; display: inline-block; vertical-align: middle; width: 690px; outline: none !important;\">Toshkentga xitoy—o‘zbek vaksinasining 1 mln dozasi olib kelindi (foto)</h1></div><div class=\"postContent\" style=\"margin: 0px 0px 40px; color: rgb(0, 0, 0); font-family: Arial; outline: none !important;\"><p style=\"margin-right: 0px; margin-bottom: 18px; margin-left: 0px; line-height: 1.5; outline: none !important;\">27-mart kuni Toshkent xalqaro aeroportiga Xitoydan 1 million dozada Xitoy—O‘zbekiston ZF-UZ-VAC2001 vaksinasi olib kelindi. Bu haqda “Daryo” muxbiri xabar bermoqda.</p><div id=\"attachment_1699077\" class=\"wp-caption aligncenter\" style=\"outline: none !important; margin: 0px auto 20px !important;\"><p style=\"line-height: 1.5; outline: none !important; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 0px !important;\"><img class=\"size-full wp-image-1699077\" src=\"https://s.daryo.uz/wp-content/uploads/2021/03/photo_2021-03-27_17-39-33-2.jpg\" alt=\"\" width=\"1200\" height=\"800\" style=\"border: 0px; max-width: 100%; height: auto; margin-bottom: 5px; outline: none !important;\"></p><p class=\"wp-caption-text\" style=\"line-height: 1.5; color: rgb(119, 119, 119); outline: none !important; margin-right: 0px !important; margin-bottom: 5px !important; margin-left: 0px !important; font-size: 12px !important;\">Foto: “Daryo”</p></div><p style=\"margin-right: 0px; margin-bottom: 18px; margin-left: 0px; line-height: 1.5; outline: none !important;\">ZF-UZ-VAC2001 Xitoy Fanlar akademiyasi Mikrobiologiya instituti olimlari tomonidan yaratilgan, Anhui Zhifei Longcom Biopharmaceutical Co.Ltd farmatsevtika kompaniyasi tomonidan ishlab chiqilgan va o‘zbekistonlik olimlar bilan hamkorlikda klinik tadqiqotlari olib borilgan koronavirusga qarshi yangi rekombinant vaksinadir.&nbsp;Uni yaratishda koronavirus tashqi oqsili biotexnologik usul bilan sintezlanib olingan bo‘lib, organizmga yuborilganda oqsilga nisbatan immun ja</p></div>', '<div class=\"articleContHead\" style=\"margin: 0px 0px 18px; color: rgb(0, 0, 0); font-family: Arial; font-size: 14px; outline: none !important;\"><h1 class=\"title-1 without-author\" style=\"font-size: 26px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; font-family: PTSerif-Bold; display: inline-block; vertical-align: middle; width: 690px; outline: none !important;\">Toshkentga xitoy—o‘zbek vaksinasining 1 mln dozasi olib kelindi (foto)</h1></div><div class=\"postContent\" style=\"margin: 0px 0px 40px; color: rgb(0, 0, 0); font-family: Arial; outline: none !important;\"><p style=\"margin-right: 0px; margin-bottom: 18px; margin-left: 0px; line-height: 1.5; outline: none !important;\">27-mart kuni Toshkent xalqaro aeroportiga Xitoydan 1 million dozada Xitoy—O‘zbekiston ZF-UZ-VAC2001 vaksinasi olib kelindi. Bu haqda “Daryo” muxbiri xabar bermoqda.</p><div id=\"attachment_1699077\" class=\"wp-caption aligncenter\" style=\"outline: none !important; margin: 0px auto 20px !important;\"><p style=\"line-height: 1.5; outline: none !important; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 0px !important;\"><img class=\"size-full wp-image-1699077\" src=\"https://s.daryo.uz/wp-content/uploads/2021/03/photo_2021-03-27_17-39-33-2.jpg\" alt=\"\" width=\"1200\" height=\"800\" style=\"border: 0px; max-width: 100%; height: auto; margin-bottom: 5px; outline: none !important;\"></p><p class=\"wp-caption-text\" style=\"line-height: 1.5; color: rgb(119, 119, 119); outline: none !important; margin-right: 0px !important; margin-bottom: 5px !important; margin-left: 0px !important; font-size: 12px !important;\">Foto: “Daryo”</p></div><p style=\"margin-right: 0px; margin-bottom: 18px; margin-left: 0px; line-height: 1.5; outline: none !important;\">ZF-UZ-VAC2001 Xitoy Fanlar akademiyasi Mikrobiologiya instituti olimlari tomonidan yaratilgan, Anhui Zhifei Longcom Biopharmaceutical Co.Ltd farmatsevtika kompaniyasi tomonidan ishlab chiqilgan va o‘zbekistonlik olimlar bilan hamkorlikda klinik tadqiqotlari olib borilgan koronavirusga qarshi yangi rekombinant vaksinadir.&nbsp;Uni yaratishda koronavirus tashqi oqsili biotexnologik usul bilan sintezlanib olingan bo‘lib, organizmga yuborilganda oqsilga nisbatan immun ja</p></div>', '<div class=\"articleContHead\" style=\"margin: 0px 0px 18px; color: rgb(0, 0, 0); font-family: Arial; font-size: 14px; outline: none !important;\"><h1 class=\"title-1 without-author\" style=\"font-size: 26px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; font-family: PTSerif-Bold; display: inline-block; vertical-align: middle; width: 690px; outline: none !important;\">Toshkentga xitoy—o‘zbek vaksinasining 1 mln dozasi olib kelindi (foto)</h1></div><div class=\"postContent\" style=\"margin: 0px 0px 40px; color: rgb(0, 0, 0); font-family: Arial; outline: none !important;\"><p style=\"margin-right: 0px; margin-bottom: 18px; margin-left: 0px; line-height: 1.5; outline: none !important;\">27-mart kuni Toshkent xalqaro aeroportiga Xitoydan 1 million dozada Xitoy—O‘zbekiston ZF-UZ-VAC2001 vaksinasi olib kelindi. Bu haqda “Daryo” muxbiri xabar bermoqda.</p><div id=\"attachment_1699077\" class=\"wp-caption aligncenter\" style=\"outline: none !important; margin: 0px auto 20px !important;\"><p style=\"line-height: 1.5; outline: none !important; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 0px !important;\"><img class=\"size-full wp-image-1699077\" src=\"https://s.daryo.uz/wp-content/uploads/2021/03/photo_2021-03-27_17-39-33-2.jpg\" alt=\"\" width=\"1200\" height=\"800\" style=\"border: 0px; max-width: 100%; height: auto; margin-bottom: 5px; outline: none !important;\"></p><p class=\"wp-caption-text\" style=\"line-height: 1.5; color: rgb(119, 119, 119); outline: none !important; margin-right: 0px !important; margin-bottom: 5px !important; margin-left: 0px !important; font-size: 12px !important;\">Foto: “Daryo”</p></div><p style=\"margin-right: 0px; margin-bottom: 18px; margin-left: 0px; line-height: 1.5; outline: none !important;\">ZF-UZ-VAC2001 Xitoy Fanlar akademiyasi Mikrobiologiya instituti olimlari tomonidan yaratilgan, Anhui Zhifei Longcom Biopharmaceutical Co.Ltd farmatsevtika kompaniyasi tomonidan ishlab chiqilgan va o‘zbekistonlik olimlar bilan hamkorlikda klinik tadqiqotlari olib borilgan koronavirusga qarshi yangi rekombinant vaksinadir.&nbsp;Uni yaratishda koronavirus tashqi oqsili biotexnologik usul bilan sintezlanib olingan bo‘lib, organizmga yuborilganda oqsilga nisbatan immun ja</p></div>', 'logotip-i-firmenniy-stily', 'logotip page22222');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for rektorat
-- ----------------------------
DROP TABLE IF EXISTS `rektorat`;
CREATE TABLE `rektorat`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `created_by` bigint(20) NULL DEFAULT NULL,
  `updated_by` bigint(20) NULL DEFAULT NULL,
  `type_name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `title` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `full_name_uz` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `full_name_ru` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `full_name_en` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `email` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `phone` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `telegram` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `twitter` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `facebook` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `information_uz` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `information_ru` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `information_en` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for slider_images
-- ----------------------------
DROP TABLE IF EXISTS `slider_images`;
CREATE TABLE `slider_images`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `created_by` bigint(20) NULL DEFAULT NULL,
  `updated_by` bigint(20) NULL DEFAULT NULL,
  `image_uz` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `image_ru` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `image_en` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `status` int(1) NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of slider_images
-- ----------------------------
INSERT INTO `slider_images` VALUES (1, '2021-03-26 13:40:09', '2021-03-26 13:40:12', 1, 1, 'front_assets/assets/img/img1.jpg', 'front_assets/assets/img/img1.jpg', 'front_assets/assets/img/img1.jpg', 1);
INSERT INTO `slider_images` VALUES (2, '2021-03-26 13:40:19', '2021-03-26 13:40:21', 1, 1, 'front_assets/assets/img/img2.jpg', 'front_assets/assets/img/img1.jpg', 'front_assets/assets/img/img1.jpg', 1);
INSERT INTO `slider_images` VALUES (3, '2021-03-26 13:40:33', '2021-03-26 13:40:35', 1, 1, 'front_assets/assets/img/img3.jpg', 'front_assets/assets/img/img1.jpg', 'front_assets/assets/img/img1.jpg', 1);

-- ----------------------------
-- Table structure for slider_texts
-- ----------------------------
DROP TABLE IF EXISTS `slider_texts`;
CREATE TABLE `slider_texts`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `created_by` bigint(20) NULL DEFAULT NULL,
  `updated_by` bigint(20) NULL DEFAULT NULL,
  `text_uz` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `text_ru` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `text_en` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `status` int(1) NULL DEFAULT 1,
  `link` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of slider_texts
-- ----------------------------
INSERT INTO `slider_texts` VALUES (1, NULL, '2021-03-26 09:08:37', NULL, NULL, '<h4 class=\"text-white\" style=\"line-height: 1.1; z-index: 100;\"><font color=\"#000000\" style=\"\"><b style=\"background-color: rgb(255, 255, 255);\">ОБ УНИВЕРСИТЕТЕ</b></font></h4><p style=\"\">Ташкентский государственный юридический университет является базовым высшим образовательным и научно-методическим учреждением по подготовке юридических кадров в Узбекистане..</p><p style=\"\"><br></p><p style=\"\"><font color=\"#000000\"><span style=\"background-color: rgb(255, 0, 0);\">jamshid salayev</span></font></p>', '<h4 class=\"text-white\" style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; line-height: 1.1; z-index: 100;\"><font color=\"#000000\"><span style=\"font-weight: bolder; color=\" white\"=\"\">ОБ УНИВЕРСИТЕТЕ</span></font></h4><p>Ташкентский государственный юридический университет является базовым высшим образовательным и научно-методическим учреждением по подготовке юридических кадров в Узбекистане.</p>', '<h4 class=\"text-white\" style=\"font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; line-height: 1.1; z-index: 100;\"><font color=\"#000000\"><span style=\"font-weight: bolder;\">ОБ УНИВЕРСИТЕТЕ</span></font></h4><p>Ташкентский государственный юридический университет является базовым высшим образовательным и научно-методическим учреждением по подготовке юридических кадров в Узбекистане.</p>', 1, 'https://jmlaravel.uz', 'jmlaravel@gmail.com', '+998994571669');

-- ----------------------------
-- Table structure for structure_rektorat
-- ----------------------------
DROP TABLE IF EXISTS `structure_rektorat`;
CREATE TABLE `structure_rektorat`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `created_by` bigint(20) NULL DEFAULT NULL,
  `updated_by` bigint(20) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Table structure for system_cards
-- ----------------------------
DROP TABLE IF EXISTS `system_cards`;
CREATE TABLE `system_cards`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `created_by` bigint(20) NULL DEFAULT NULL,
  `updated_by` bigint(20) NULL DEFAULT NULL,
  `name_uz` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `icon` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `link` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `name_ru` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `name_en` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of system_cards
-- ----------------------------
INSERT INTO `system_cards` VALUES (1, NULL, NULL, 1, 1, 'SRS', '<i class=\"fas fa-user-cog\"></i>', 'jmlaravel.uz', NULL, NULL);
INSERT INTO `system_cards` VALUES (3, '2021-03-26 10:07:56', '2021-03-26 10:07:56', NULL, NULL, 'uzzzzzzzzz', 'sdsdsd', 'sdsd', 'ruuuuuu', 'ennnnnnnnnnnn');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `role` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_username_unique`(`username`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Jamshid Salayev', 'jamshid1998', 'jmlaravel@gmail.com', NULL, '$2y$10$oAaIk8jKZqSN7L1j/VMRt.cRDMsAEYArt9Sk5QjD.Po4PLZFgNAhi', NULL, '2021-03-26 04:04:37', '2021-03-26 04:04:37', 7);

SET FOREIGN_KEY_CHECKS = 1;
