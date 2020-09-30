CREATE TABLE `campaign` (
	`campaign_id` INT NOT NULL AUTO_INCREMENT,
	`code` VARCHAR(16) NOT NULL,
	`name` VARCHAR(50) NOT NULL,
	`status` TINYINT NOT NULL DEFAULT '1',
	PRIMARY KEY (`campaign_id`)
)
COLLATE='utf8mb4_general_ci';

INSERT INTO `campaign` (`code`, `name`) VALUES ('Other', 'Other Campaigns');
INSERT INTO `campaign` (`code`, `name`) VALUES ('Web', 'Website');