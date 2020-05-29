-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.29-0ubuntu0.18.04.1 - (Ubuntu)
-- Server OS:                    Linux
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping data for table employees_db.departments: ~0 rows (approximately)
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` (`employee_id`, `name`, `from_date`, `to_date`) VALUES
	(1, 'Administration', '2020-04-29', '2020-05-29'),
	(2, 'Finance', '2019-05-29', '2018-05-29'),
	(3, 'HR', '2020-02-29', '2020-04-29'),
	(4, 'IT', '2019-05-20', '2018-06-01'),
	(5, 'Marketing', '2019-11-15', '2018-11-15');
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;

-- Dumping data for table employees_db.employees: ~0 rows (approximately)
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` (`id`, `firstname`, `lastname`, `birthdate`, `gender`, `hire_date`) VALUES
	(1, 'John', 'Doe', '1990-05-20', 1, '2015-05-20'),
	(2, 'Rob', 'Robson', '1995-05-20', 1, '2018-03-25'),
	(3, 'Mark', 'Johnson', '1988-06-20', 1, '2017-08-25'),
	(4, 'David', 'Hadson', '1980-07-22', 1, '2003-09-01'),
	(5, 'Mary', 'Roberts', '2000-10-29', 1, '2010-11-26');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;

-- Dumping data for table employees_db.salaries: ~0 rows (approximately)
/*!40000 ALTER TABLE `salaries` DISABLE KEYS */;
INSERT INTO `salaries` (`employee_id`, `salary`, `from_date`, `to_date`) VALUES
	(1, 30000, '2018-06-01', '2020-05-29'),
	(2, 35000, '2016-05-24', '2017-05-24'),
	(3, 32000, '2014-03-04', '2016-03-04'),
	(4, 55000, '2018-06-01', '2020-06-01'),
	(5, 28000, '2015-05-24', '2018-05-24');
/*!40000 ALTER TABLE `salaries` ENABLE KEYS */;

-- Dumping data for table employees_db.titles: ~0 rows (approximately)
/*!40000 ALTER TABLE `titles` DISABLE KEYS */;
INSERT INTO `titles` (`employee_id`, `title`, `from_date`, `to_date`) VALUES
	(1, 'Brand Manager', '2016-09-29', '2017-04-01'),
	(2, 'Product Manager', '2015-02-01', '2020-05-29'),
	(3, 'Marketing Consultant', '2014-06-05', '2018-06-01'),
	(4, 'SEO Manager', '2017-06-15', '2019-10-01'),
	(5, 'Program Manager', '2015-05-25', '2020-05-25');
/*!40000 ALTER TABLE `titles` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
