ALTER TABLE `will_beneficiary`
	ADD COLUMN `lapseOrIssue` VARCHAR(50) NOT NULL DEFAULT 'issue' AFTER `BenSurName`,
	ADD COLUMN `splitType` VARCHAR(50) NOT NULL DEFAULT 'equal' AFTER `lapseOrIssue`,
	DROP COLUMN `splitequally`,
	DROP COLUMN `ispercenter`,
	DROP COLUMN `benedied_passtosurviving_child`,
	DROP COLUMN `benedied_passtosurviving_bene`,
	DROP COLUMN `ClientId`;