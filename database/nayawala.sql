





--
-- Table structure for table `tbl_bookings`
--

CREATE TABLE IF NOT EXISTS `tbl_bookings` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'For Admin Refrence',
  `ticket_id` varchar(30) NOT NULL COMMENT 'For print on tix',
  --`t_id` int(11) NOT NULL COMMENT 'concert id',
  `user_id` int(11) NOT NULL COMMENT 'From User Login',
  --`show_id` int(11) NOT NULL,
  --`screen_id` int(11) NOT NULL,
  `no_seats` int(3) NOT NULL COMMENT 'number of seats',
  `amount` int(5) NOT NULL COMMENT 'cost of tix',
  `ticket_date` date NOT NULL COMMENT 'date of show',
 -- `date` date NOT NULL,
 -- `status` int(1) NOT NULL,--(can be used for soldout shows)
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_bookings`--original uthaya hua
--

INSERT INTO `tbl_bookings` (`book_id`, `ticket_id`, `t_id`, `user_id`, `show_id`, `screen_id`, `no_seats`, `amount`, `ticket_date`, `date`, `status`) VALUES
(3, '', 4, 4, 3, 3, 200, 75, '2019-12-21', '2019-12-21', 1),
(4, '', 4, 4, 1, 3, 2, 150, '2019-12-22', '2019-12-22', 1),
(5, '', 3, 3, 6, 1, 200, 70, '2019-12-25', '2019-12-22', 1),
(6, '', 3, 3, 6, 1, 100, 70, '2019-12-22', '2019-12-22', 1),
(7, '', 3, 3, 5, 1, 1, 70, '2019-12-22', '2019-12-22', 1),
(11, 'BKID5258816', 4, 2, 3, 3, 1, 75, '2019-12-22', '2019-12-22', 1);



--new trial--tbl_booking
INSERT INTO `tbl_bookings` (`book_id`, `ticket_id`, `user_id`, `no_seats`, `amount`, `ticket_date` ) VALUES
(1, ABC123, 123, 500,1500,'19-12-2021',),
(2, DEF123, 456, 300,2500,'25-12-2021',);
-- --------------------------------------------------------
--
-- Table structure for table `tbl_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(11) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
-- final edits ke saath hai

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL COMMENT 'email',
  `password` varchar(50) NOT NULL,
  `user_type` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tbl_login`--final edits
--

INSERT INTO `tbl_login` (`id`, `user_id`, `username`, `password`, `user_type`) VALUES
(1, 0, 'admin', 'password', 0),
(1, 123, 'sharma@speed.com', 'sharmabhai', 1),
(1, 456, 'kartik@speed.com', 'kartikbhai', 1),

-- --------------------------------------------------------
-- --------------------------------------------------------

--
-- Table structure for table was`tbl_movie` now is `tbl_concerts`
--

CREATE TABLE IF NOT EXISTS `tbl_concerts` (
  `concert_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'shows ka id',
  --`t_id` int(11) NOT NULL COMMENT 'theatre id',
  `Show_name` varchar(100) NOT NULL COMMENT 'name show ka',
  `lineup` varchar(500) NOT NULL COMMENT 'performers artists ka naam',
  `genre` varchar(1000) NOT NULL COMMENT 'genres various',
  `show_date` date NOT NULL COMMENT 'show ka date',--same as upar kaa 19 andn 25 dec
  `image` varchar(200) NOT NULL,
  `video_url` varchar(200) NOT NULL,
  --`status` int(1) NOT NULL COMMENT '0 means active ',
 -- PRIMARY KEY (`movie_id`)
  PRIMARY KEY (`concert_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_concerts`
--image change karne hai

INSERT INTO `tbl_concerts` (`concert_id`, `show_name`, `lineup`, `genre`, `show_date`, `image`, `video_url`) VALUES
(1,'Sunburn', 'Martin Afrojack DV&LM SanHolo Ritviz', 'EDM Trap BigHouse', '19-12-2021', 'images/maxresdefault.jpg', 'https://www.youtube.com/watch?v=BqsG59O1w5Q'),
(2,'Tommorowland', 'Skrillex DaftPunk DavidGuetta SwedishHouseMafia', 'Dubstep BigRoom Electronic Progressive', '25-12-2021', 'images/cia-new-poster-759.jpeg', 'https://www.youtube.com/watch?v=uILXl6BCYJ4',);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`




-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE IF NOT EXISTS `tbl_registration` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `age` int(2) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`user_id`, `name`, `email`, `phone`, `age`, `gender`) VALUES
(123, 'sharma', '', '9037500119', 23, 'gender'),
(345, 'kartik', 'rahulreghunath11@gmail.com', '9037500119', 23, 'gender');
(
