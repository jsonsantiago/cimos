ALTER TABLE `site`
	ADD COLUMN `exclusive_price` DECIMAL(10,2) NULL DEFAULT '0' AFTER `children_price`,
	ADD COLUMN `allow_exclusive` TINYINT NULL DEFAULT '0' AFTER `all_reservation_exclusive`,
	CHANGE COLUMN `adult_price` `adult_price` DECIMAL(10,2) NULL DEFAULT '0' AFTER `postdeclaration`,
	CHANGE COLUMN `children_price` `children_price` DECIMAL(10,2) NULL DEFAULT '0' AFTER `adult_price`;