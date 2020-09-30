ALTER TABLE `special_events`
	CHANGE COLUMN `price` `price` DECIMAL(10,2) NOT NULL DEFAULT 0 AFTER `site_id`;
