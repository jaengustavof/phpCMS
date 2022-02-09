-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-02-2022 a las 10:44:10
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hollingo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `about_url` text COLLATE utf8_unicode_ci NOT NULL,
  `about_alt` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `about`
--

INSERT INTO `about` (`id`, `about_url`, `about_alt`) VALUES
(1, 'assets/rsc/img/about-logo1.png', 'Brown University Logo'),
(2, 'assets/rsc/img/about-logo2.png', 'McDonalds Logo'),
(3, 'assets/rsc/img/about-logo3.png', 'Beye Logo'),
(4, 'assets/rsc/img/about-logo4.png', 'Diamond LightHouse Logo'),
(5, 'assets/rsc/img/about-logo5.png', 'Saucony Logo'),
(6, 'assets/rsc/img/about-logo6.png', 'Metro Wide Format Logo'),
(7, 'assets/rsc/img/about-logo7.png', 'Australia Logo'),
(8, 'assets/rsc/img/about-logo8.png', 'Broadway Basketeers Logo'),
(9, 'assets/rsc/img/about-logo9.png', 'B&B Manufacturing Logo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicio`
--

CREATE TABLE `inicio` (
  `id` int(11) NOT NULL,
  `seccion` text COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `texto` text COLLATE utf8_unicode_ci NOT NULL,
  `footer` text COLLATE utf8_unicode_ci NOT NULL,
  `imagen` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `inicio`
--

INSERT INTO `inicio` (`id`, `seccion`, `title`, `texto`, `footer`, `imagen`) VALUES
(1, 'home', ' NOT ALL WEBSITES ARE BUILT EQUALL', 'A unique firm focused on helping clients maximize value from their digital marketing.', 'scroll down	', ''),
(2, 'about', 'Our approach is simple.', 'We learn about your business, before building a custom website, to ensure your brand growth.', 'We are problem solvers.', ''),
(3, 'projects', 'Architecting the digital.', 'Loud <em>websites</em>. Ballsy <em>applications</em>.<br>Voluptuous <em>brands</em>.', 'We create words and images to make your customers fall in <br>love with your business.', ''),
(4, 'contact', 'READY FOR RESULTS?', 'We’re here to help! Tell us more about your project and our specialist will contact you shortly.', 'Drop us a line.', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicio_mobile`
--

CREATE TABLE `inicio_mobile` (
  `id` int(11) NOT NULL,
  `inicio_mobile_id` text COLLATE utf8_unicode_ci NOT NULL,
  `inicio_mobile_indexno` text COLLATE utf8_unicode_ci NOT NULL,
  `inicio_mobile_sectiontext` text COLLATE utf8_unicode_ci NOT NULL,
  `inicio_mobile_introtext` text COLLATE utf8_unicode_ci NOT NULL,
  `inicio_mobile_h2first` text COLLATE utf8_unicode_ci NOT NULL,
  `inicio_mobile_h2second` text COLLATE utf8_unicode_ci NOT NULL,
  `inicio_mobile_textp` text COLLATE utf8_unicode_ci NOT NULL,
  `inicio_mobile_scroll` text COLLATE utf8_unicode_ci NOT NULL,
  `inicio_mobile_bgimg` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `inicio_mobile`
--

INSERT INTO `inicio_mobile` (`id`, `inicio_mobile_id`, `inicio_mobile_indexno`, `inicio_mobile_sectiontext`, `inicio_mobile_introtext`, `inicio_mobile_h2first`, `inicio_mobile_h2second`, `inicio_mobile_textp`, `inicio_mobile_scroll`, `inicio_mobile_bgimg`) VALUES
(1, 'sectionOneMobile', '01', 'sectionTextLeftMobile', 'Right design elevates your brand.', 'WEB DESIGN &', 'BRAND IDENTITY', 'You understand your customers better than anyone. We know that, and we can help you turn that knowledge into results. We’ll help you refine an online brand experience that showcases the power of your business.', 'Read More', 'backOne'),
(2, 'sectionTwoMobile', '02', 'sectionTextRightMobile', 'We make digital beautiful.', 'DIGITAL', 'MARKETING', 'We create and execute digital marketing campaigns that drive leads and boost sales. We are seasoned online marketers. We help design and implement digital marketing campaigns that generate leads that convert to sales.', 'Read More', 'backTwo'),
(3, 'sectionThreeMobile', '03', 'sectionTextLeftMobile', 'TAILOR-MADE SOFTWARE SOLUTIONS.', 'CUSTOM', 'DEVELOPMENT', 'Give your business the edge that it needs by choosing custom development. The wrong software can seriously kneecap your company’s chances to succeed, so it’s paramount to use a custom-made program that fits like a glove.', 'Read More', 'backThree');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_img` text COLLATE utf8_unicode_ci NOT NULL,
  `project_alt` text COLLATE utf8_unicode_ci NOT NULL,
  `project_type` text COLLATE utf8_unicode_ci NOT NULL,
  `project_type_class` text COLLATE utf8_unicode_ci NOT NULL,
  `project_name` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `projects`
--

INSERT INTO `projects` (`id`, `project_img`, `project_alt`, `project_type`, `project_type_class`, `project_name`) VALUES
(1, 'assets/rsc/img/project1.webp', 'Project McDonalds', 'Web Redesign', 'redisign', 'McDonald\'s'),
(2, 'assets/rsc/img/project2.webp', 'Project DDC', 'Design & Development', 'webDevelopment', 'DDC'),
(3, 'assets/rsc/img/project3.webp', 'Project PEC Logistics', 'Design & Development', 'webDevelopment', 'PEC Logistics'),
(4, 'assets/rsc/img/project4.webp', 'Project ShopWorn', 'Design & Development', 'webDevelopment', 'ShopWorn'),
(5, 'assets/rsc/img/project5.webp', 'Project Brown University', 'UI/UX Reinvisioned', 'uiDevelopment', 'Brown University'),
(6, 'assets/rsc/img/project6.webp', 'Project Reashape', 'UI/UX Reinvisioned', 'uiDevelopment', 'Reashape'),
(7, 'assets/rsc/img/project1.webp', 'Project McDonalds2', 'Web Redesign', 'redisign', 'McDonald\'s2'),
(8, 'assets/rsc/img/project2.webp', 'Project DDC2', 'Design & Development', 'webDevelopment', 'DDC2'),
(9, 'assets/rsc/img/project3.webp', 'Project PEC Logistics2', 'Design & Development', 'webDevelopment', 'PEC Logistics2'),
(10, 'assets/rsc/img/project4.webp', 'Project ShopWorn2', 'Design & Development', 'webDevelopment', 'ShopWorn2'),
(11, 'assets/rsc/img/project5.webp', 'Project Brown University2', 'UI/UX Reinvisioned', 'uiDevelopment', 'Brown University2'),
(12, 'assets/rsc/img/project6.webp', 'Project Reashape2', 'UI/UX Reinvisioned', 'uiDevelopment', 'Reashape2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'editor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sectioninicio`
--

CREATE TABLE `sectioninicio` (
  `id` int(11) NOT NULL,
  `section_id` text COLLATE utf8_unicode_ci NOT NULL,
  `index_no` text COLLATE utf8_unicode_ci NOT NULL,
  `index_no_attr` text COLLATE utf8_unicode_ci NOT NULL,
  `section_text` text COLLATE utf8_unicode_ci NOT NULL,
  `intro_first_text` text COLLATE utf8_unicode_ci NOT NULL,
  `section_h2_first` text COLLATE utf8_unicode_ci NOT NULL,
  `section_h2_second` text COLLATE utf8_unicode_ci NOT NULL,
  `section_text_p` text COLLATE utf8_unicode_ci NOT NULL,
  `intro_content_scroll` text COLLATE utf8_unicode_ci NOT NULL,
  `bg_image` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `sectioninicio`
--

INSERT INTO `sectioninicio` (`id`, `section_id`, `index_no`, `index_no_attr`, `section_text`, `intro_first_text`, `section_h2_first`, `section_h2_second`, `section_text_p`, `intro_content_scroll`, `bg_image`) VALUES
(1, 'sectionOne', '01', '', 'sectionTextLeft', 'Right design elevates your brand.', 'WEB DESIGN &', 'BRAND IDENTITY', 'You understand your customers better than anyone. We know that, and we can help you turn that knowledge into results. We’ll help you refine an online brand experience that showcases the power of your business.', 'Read More', 'backOne'),
(2, 'sectionTwo', '02', 'indexRight', 'sectionTextRight', 'WE MAKE DIGITAL BEAUTIFUL.', 'DIGITAL', 'MARKETING', 'A one-size-fits-all approach is the wrong approach. We’ll leverage our marketing-savvy skills to provide you with a winning strategy. Do you want to scale up your business? Need more leads and more customers? We can help with that.\r\n\r\n', 'Read More', 'backTwo'),
(3, 'sectionThree', '03', '', 'sectionTextLeft', ' TAILOR-MADE SOFTWARE SOLUTIONS', 'CUSTOM', 'DEVELOPMENT', 'We’re a different kind of web agency. We offer a team of veteran developers, technical experts, and strategists who know the right questions to ask to get you on track with the right features, the perfect platform and the capacity to scale up your business.', 'Read More', 'backThree');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_lastname` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_email` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_password` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_lastname`, `user_email`, `user_password`, `user_role`) VALUES
(1, 'Gustavo', 'Jaen', 'jaengustavof@gmail.com', '$2y$10$PR4npvKiwnMOxuVv2ZB5veSGPRTRYQyeotDmzYJ6jzc55KTl.zlzm', 1),
(2, 'Tito', 'Rodriguez', 'pgonzalez@gmail.com', '$2y$10$WG7kAeUkAjDOYap.VouXHOZQ6pVP7.UqJ9ugreHaprYRlfTSMIIT6', 1),
(4, 'Marta', 'Rodriguez', 'mrodriguez@gmail.com', '$2y$10$4A8czGJnE3bgy0NCaCLBoOpOqOTGw.hXT7409rHF7s9/rZawk2dDC', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inicio`
--
ALTER TABLE `inicio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inicio_mobile`
--
ALTER TABLE `inicio_mobile`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indices de la tabla `sectioninicio`
--
ALTER TABLE `sectioninicio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`,`user_role`),
  ADD KEY `fk_user_role_idx` (`user_role`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `inicio`
--
ALTER TABLE `inicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `inicio_mobile`
--
ALTER TABLE `inicio_mobile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sectioninicio`
--
ALTER TABLE `sectioninicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_role` FOREIGN KEY (`user_role`) REFERENCES `role` (`role_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
