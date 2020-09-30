ALTER TABLE `will_leaddtls`
	ADD COLUMN `children_as_executor` TINYINT NULL DEFAULT NULL AFTER `over18yrs`,
	ADD COLUMN `partner_as_executor` TINYINT NULL DEFAULT NULL AFTER `children_as_executor`;

ALTER TABLE `will_executors`
	DROP COLUMN `ClientId`;
