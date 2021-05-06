CREATE TABLE `request` (
  `f_name`  varchar(50) DEFAULT NULL,
  `l_name` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT null,
  `phone_number` varchar(12) DEFAULT NULL,
  `location` varchar(20) DEFAULT NULL,
  `start_date` varchar(20) DEFAULT NULL,
  `end_date` varchar(20) DEFAULT NULL,
  `group` int(8) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `request` (`f_name`, `l_name`, `email`, `phone_Number`, `location`, `start_date`, `end_date`, `group`, `message` ) VALUES
('Alexis', 'Lappe', 'alexislappe04@gmail.com', '715-867-5309', 'Africa', '2023-06-23', '2023-06-30', '3', 'This is a test');;