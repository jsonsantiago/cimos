ALTER TABLE `lead`
	ADD COLUMN `campaign_id` INT(11) NOT NULL DEFAULT '1' AFTER `script_id`,
	ADD INDEX `campaign_id` (`campaign_id`);
