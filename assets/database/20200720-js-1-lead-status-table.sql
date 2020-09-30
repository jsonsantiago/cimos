CREATE TABLE `lead_status` (
	`lead_status_id` INT NOT NULL,
	`status_name` VARCHAR(50) NOT NULL,
	PRIMARY KEY (`lead_status_id`)
)
COLLATE='latin1_swedish_ci';
​
INSERT INTO `lead_status` (`lead_status_id`, `status_name`) VALUES ('0', 'Rejected');
INSERT INTO `lead_status` (`lead_status_id`, `status_name`) VALUES ('1', 'New');
INSERT INTO `lead_status` (`lead_status_id`, `status_name`) VALUES ('2', 'Assigned to Appointment Setter');
INSERT INTO `lead_status` (`lead_status_id`, `status_name`) VALUES ('3', 'Assigned to Senior Will Adviser');
INSERT INTO `lead_status` (`lead_status_id`, `status_name`) VALUES ('4', 'Assigned to Management');
INSERT INTO `lead_status` (`lead_status_id`, `status_name`) VALUES ('5', 'Assigned to Drafter');
INSERT INTO `lead_status` (`lead_status_id`, `status_name`) VALUES ('6', 'Documents Produced from WWP');
INSERT INTO `lead_status` (`lead_status_id`, `status_name`) VALUES ('7', 'Documents Sent to Client');