ALTER TABLE `will_leaddtls`
	ADD COLUMN `funeral_wish` VARCHAR(15) NULL DEFAULT NULL AFTER `partner_as_executor`,
	ADD COLUMN `partner_funeral_wish` VARCHAR(15) NULL DEFAULT NULL AFTER `funeral_wish`;