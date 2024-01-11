

CREATE TABLE `applicants` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `date_of_birth` date NOT NULL,
  `place_of_birth` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `current_address` varchar(255) NOT NULL,
  `marital_status` varchar(255) NOT NULL,
  `number_of_children` int(11) DEFAULT NULL,
  `gender` varchar(255) NOT NULL,
  `educational_background` varchar(255) NOT NULL,
  `graduation_year` int(11) DEFAULT NULL,
  `educational_certificates` text DEFAULT NULL,
  `experience_certificates` text DEFAULT NULL,
  `previous_job` varchar(255) DEFAULT NULL,
  `job_type` varchar(255) DEFAULT NULL,
  `national_id` varchar(255) DEFAULT NULL,
  `work_skills` text NOT NULL,
  `applying_for_job` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `college` varchar(255) DEFAULT NULL,
  `university` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL,
  `institute` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `datatime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`);



ALTER TABLE `applicants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;


