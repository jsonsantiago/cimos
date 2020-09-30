ALTER TABLE `site`
	ADD COLUMN `enable_annual` TINYINT NOT NULL DEFAULT '0' AFTER `exclusive_price`;

ALTER TABLE `reservation_dtls`
	ADD COLUMN `have_annual_pass` TINYINT(4) NULL DEFAULT '0' AFTER `declaration_done`;