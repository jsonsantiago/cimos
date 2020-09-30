ALTER TABLE `will_leaddtls`
	ADD COLUMN `have_executor` TINYINT NULL DEFAULT '0' AFTER `partner_as_executor`,
	ADD COLUMN `have_gift` TINYINT NULL DEFAULT '0' AFTER `have_executor`,
	ADD COLUMN `have_memo_wish` TINYINT NULL DEFAULT '0' AFTER `have_gift`,
	ADD COLUMN `estate_to_children` TINYINT NULL DEFAULT '1' AFTER `have_memo_wish`,
	ADD COLUMN `estate_to_partner` TINYINT NULL DEFAULT '1' AFTER `estate_to_children`,
	ADD COLUMN `estate_to_children_partner_dies` TINYINT NULL DEFAULT '1' AFTER `estate_to_children`;
