SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


--
-- TABLES
--

--
-- TABLE 'BOOKS'
--

CREATE TABLE `book` (
    `id` int NOT NULL,
    `name` varchar(256) NOT NULL,
    `author` varchar(256) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- DUMP BOOKS
--

INSERT INTO `book` (`id`, `name`, `author`) VALUES
(1, '451° по Фаренгейту', 'Рэй Брэдбери'),
(2, '1984', 'Джордж Оруэлл'),
(3, 'Мастер и Маргарита', 'Михаил Булгаков'),
(4, 'Шантарам', 'Грегори Дэвид Робертс'),
(5, 'Три товарища', 'Эрих Мария Ремарк');

--
-- TABLE USER 
--

CREATE TABLE `user` (
    `id` int NOT NULL,
    `login` varchar(256) NOT NULL,
    `password` varchar(256) NOT NULL,
    `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- DUMP USER
--

INSERT INTO `user` (`id`, `login`, `password`, `name`) VALUES
(1, 'admin', 'AAAAA', 'admin');

--
-- TABLE LIBRARIES
--

CREATE TABLE `library` (
    `id` int NOT NULL,
    `name` varchar(256) NOT NULL,
    `address` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- DUMP LIBRARIES
--

INSERT INTO `library` (`id`, `name`, `address`) VALUES
(1, 'Library №1', 'Some Street, 1'),
(2, 'Library №2', 'Another Street, 2'),
(3, 'Library №3', 'OneMo Street, 3');

--
-- INDECES
--

--
-- TABLE INDEX `book`
--

ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- TABLE INDEX `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- TABLE INDEX `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT FOR TABLES
--

--
-- AUTO_INCREMENT FOR `books`
--

ALTER TABLE `book`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT FOR `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT FOR `library`
--
ALTER TABLE `library`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;