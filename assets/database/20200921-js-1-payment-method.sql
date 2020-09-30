ALTER TABLE `payment`
	ADD COLUMN `method` VARCHAR(10) NULL DEFAULT NULL AFTER `reference_no`;

UPDATE `payment` 
	SET `method`= "stripe"
	WHERE SUBSTRING(`reference_no`, 3, 1) = '_' 
	AND `transaction_datetime` < '2020-09-21 00:00:00';

UPDATE `payment` 
	SET `method`= "paypal" 
	WHERE SUBSTRING(`reference_no`, 3, 1) != '_' 
	AND `transaction_datetime` < '2020-09-21 00:00:00';

