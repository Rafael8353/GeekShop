

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `products` (`id`, `name`, `price`) VALUES
(1, 'Naruto', 500),
(2, 'Miles Morales', 100),
(3, 'Luke Skywalker', 800),
(4, 'Dragão', 600),
(5, 'Marvel', 50),
(6, 'Star Wars', 30),
(7, 'Harry Potter', 40),
(8, 'Kimetsu', 40),
(9, 'Livro Harry Potter', 120),
(10, 'Percy Jackson', 100),
(11, 'Guerra Civil', 80),
(12, 'One Piece', 120),
(13, 'Varinha Harry Potter', 120),
(14, 'Thor', 120),
(15, 'Senhor dos Aneis', 80),
(16, 'Sabre Star Wars', 200);



CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `registration_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `users` (`id`, `email_id`, `first_name`, `last_name`, `registration_time`, `password`) VALUES
(65, 'sharew5m123@gmail.com', 'reys', 'rudt', '2019-03-18 13:46:33', 'e4f194cba29960e12d8b8f1bfedc972b'),
(66, 'sgah234@gmail.com', 'werty', 'erty', '2019-03-18 13:55:46', 'e10adc3949ba59abbe56e057f20f883e'),
(67, 'sham1234@gmail.com', 'Sham', 'das', '2019-03-19 07:37:46', 'e10adc3949ba59abbe56e057f20f883e');



CREATE TABLE `users_products` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `status` enum('Added To Cart','Confirmed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `users_products` (`id`, `user_id`, `item_id`, `status`) VALUES
(11, 67, 6, 'Confirmed'),
(17, 67, 1, 'Confirmed'),
(18, 67, 5, 'Confirmed'),
(19, 67, 6, 'Confirmed'),
(20, 67, 1, 'Confirmed'),
(23, 67, 1, 'Confirmed'),
(24, 67, 2, 'Confirmed'),
(25, 67, 9, 'Confirmed');


ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `users_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`item_id`);




ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;


ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;


ALTER TABLE `users_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

