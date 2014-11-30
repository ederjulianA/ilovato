-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-11-2014 a las 01:02:33
-- Versión del servidor: 5.5.40-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `slug` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `img` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `teaser` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `content` text COLLATE utf8_spanish2_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `meta_description` varchar(160) COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `articles`
--

INSERT INTO `articles` (`id`, `user_id`, `title`, `slug`, `img`, `teaser`, `content`, `category_id`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 1, 'speech of true 1st Part OF 2nd Part', 'speech-of-true-1st-Part-OF-2nd-Part', 'img/articles/post1.jpg', 'This is the 2nd part of the first part', 'The best things of life, take time. I''ve listened it many times, and in a way, made me feel hope. Because I knew that at some point, the creator of the universe will allow me to feel it. The true feeling. After a couple of months from the beginning, I was almost finishing another important moment in my life, my professional career. People will call me engineer or that''s I thought. But first, I had to do something else. A requirement, a certificate, that proved that I could handle English stuff. The problems, two. First, I only could do that at my university, and two, I hated my university, well, no the whole university. But, the English Department, they suck. They refused to do a placement test, and I was asking for it, I was screaming for my test, like a crazy one direction fan. Well, no that crazy, but, almost. So I did, but this time, no due to my impulses or my hope to find it , the true feeling. I was at that moment with hopeless, but wishing to finish it quickly. Because I supposed to be graduate on march and I said “at least, I''m gonna do this”. \r\n<br><br>\r\nAnd one more time, my karma appeared. Ouh, right, I said that I don''t believe in such a thing. So, my ghosts, relativity or math were back in the game. Something went wrong with my certificate from praxis, what was it? As I said, they suck. Finally, when my problem with the certificate were fix it, classes had started 3 days ago. And they DID NOT allow me to join the god damn group. I don''t know, maybe personal pronouns or the verb BE, was TOOO much to handle for me, ummm no, better, maybe their British accent will be something impossible for me, and I will not have another option than cry because I couldn''t understand them, puffff. So, what ever the reason was, I couldn''t join them, and I didn''t have other option, than wait for the next group of brilliant, international and future British group. But, what I didn''t realize at that moment, is that in fact, that group would be special to me, and even craziest, there was a British soul.\r\n<br><br>\r\nI was there, June 2nd 2014, wishing to kill the English department. But, I wouldn''t do that, ''cause, come on. After all, they are humans too, a very special type of humans, really, I''m not kidding. That week, before classes started, I was thinking about, why I had to do, whatever they wanna that i do. And considered the option to just drop out. But I didn''t. Why, the relativity, math, destiny or the British soul (British soul, is the name that I''m gonna use to refer to the British soul). I don''t know, I just know that I was there, waiting for “the big day”, for learn again about the verb BE and his friends, with people that just wanted to learn English, NOT, to love the English, which I think, it is the most important part of learning English or whatever you wanna learn. However, I had to go. \r\n<br><br>\r\nSo, June 10th of 2014. The day that I never gonna forget, why, lets say, that, it was a mix of emotions, like a roller coaster, I was working on a company, that we are still trying to keep alive, by the way, and It was a long day, too much work and best of all (*Irony injection), the past was calling me . God , you must be kidding me, I thought. \r\n<br><br>\r\n6:00 pm. I watched the clock. (Classes were from 6:30 pm to 9:30 pm. ). Sitting At Udi''s cafeteria, next to my BF and telling him that I really did NOT want to go, I decided to go. But, I took my time to go. I went into the the classroom, my first impression. The teacher, what a creepy guy. I didn''t even know what to think about him. Made me feel like, if we were in Halloween. I just thought, far from him, better I will. But then I remember that, we shouldn''t judge a book by its cover. Really if we do this, judge books, we can change the whole history. The 2nd thing that I could notice was that, there were a lot of people, I mean, we were a big group. It looked like a 1st semester engineering class room; kids dreaming with create the next facebook. So, I thought: “brand new chusma, lets shine and have fun with this kids”. But this chusma, was kind of different. Why, we get there, I promise. For now, it was time for the personal presentation and I knew that I would enjoy it a LOT. Because there were two friends of mine, and lets say that English, hate them. And best of all, remember the asshole who let me in the middle of a storm. Well, that son of A BITCH was there, and I was anxious to hear what the bastard was going to say, because my soul, will laugh for a while. Indeed, it happened what I said. When purunga(Creepy teacher) ask him to introduce himself, the magic just came out. I''m actually sure that with every single “word” that he was telling, Mr. William Shakespeare wanted to return from the land of deaths and kill him. God, how happy I was in that moment. \r\n<br><br>\r\nWe listened to few of the new people (I was one of them, we were like 8) and others form the old class. And after that, listening the little Shakespeares, I thought “Scholarship, here we go again” and I said: “It''s time to shine and show these boys, what''s English”. I did, I introduce myself with my own style, which means that nobody could “handle me”, including purunga. Well, that''s what I thought at that moment. But, writing this, I''m sure that, there was someone who actually could “handle me”. Yes, the British soul, and I bet that in that moment, the British soul wanted to stand up and correct me. She always does. But,she didn''t. I don''t know why, maybe because the British soul was a new one too. However, I think it was a big mistake form her. Because form that moment until the end of that course, I always was, one point up to her. \r\n<br><br>\r\nSitting there, thinking that I was in my kingdom, it was the time to realize the 3rd thing of that night, time to realize my British soul,ok ok, I hadn''t noticed yet, we were too many, remember? And she did. What she did, she defeated me, and I was playing local or that''s what I thought. I''m not good at remember things, specially with clothes. But, I can remember how she looked that day, wearing a violet blouse and her typical blue jeans with an interesting boots. I liked, simple, but different at the same time. But she looked pretty young, no id and like the others. So, I did NOT trust, even when I was feeling, that, she had something different, something that I would like to know. But the fact of no id, scared me a lot. Don''t ask me why, lets say, ghosts problems. But then, she spoke and for a while, I have to say that I thought that I was in a dream or nightmare, because I saw my kingdom threatened. Actually, I saw many things threatened. And it was just the first day, the beginning of the class, the firsts words. My impulses just woke up, and started talking to me and I told them “shut the fuck up, and let me listen to her”. And that''s what I did, my eyes were deeper on her with every single word, ''cause, damn, she did really well. And when she stopped talking, I had something very very clear in my mind and it was... ', 1, 'The first part of the second part', '2014-11-23', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'iWrite', 'iwrite', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `remember_pass` varchar(200) COLLATE utf8_spanish2_ci NOT NULL DEFAULT '1',
  `rol` int(11) NOT NULL,
  `img` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `remember_pass`, `rol`, `img`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ederjulianA', 'ederalvarez2091057@gmail.com', '$2y$10$uCnEDM58u6R8QSjWGlZdVudQCZFXaJUhC8kbRcgBCKWZcyHvDicn.', '', 2, 'img/users/eder.jpg', '', '0000-00-00', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
