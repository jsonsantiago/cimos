ALTER TABLE `site`
	DROP COLUMN `children_price`;

ALTER TABLE `site`
	ADD COLUMN `oneyrold` DECIMAL(10,2) NULL DEFAULT 0.00 AFTER `adult_price`,
	ADD COLUMN `twoyrold` DECIMAL(10,2) NULL DEFAULT 0.00 AFTER `oneyrold`,
	ADD COLUMN `threeyrold` DECIMAL(10,2) NULL DEFAULT 0.00 AFTER `twoyrold`,
	ADD COLUMN `fouryrold` DECIMAL(10,2) NULL DEFAULT 0.00 AFTER `threeyrold`,
	ADD COLUMN `fiveyrold` DECIMAL(10,2) NULL DEFAULT 0.00 AFTER `fouryrold`,
	ADD COLUMN `sixyrold` DECIMAL(10,2) NULL DEFAULT 0.00 AFTER `fiveyrold`,
	ADD COLUMN `sevenyrold` DECIMAL(10,2) NULL DEFAULT 0.00 AFTER `sixyrold`,
	ADD COLUMN `eightyrold` DECIMAL(10,2) NULL DEFAULT 0.00 AFTER `sevenyrold`,
	ADD COLUMN `nineyrold` DECIMAL(10,2) NULL DEFAULT 0.00 AFTER `eightyrold`,
	ADD COLUMN `tenyrold` DECIMAL(10,2) NULL DEFAULT 0.00 AFTER `nineyrold`,
	ADD COLUMN `elevenyroldabove` DECIMAL(10,2) NULL DEFAULT 0.00 AFTER `tenyrold`;
