ALTER TABLE `audit_log`
	CHANGE COLUMN `transaction_datetime` `log_timestamp` TIMESTAMP NOT NULL DEFAULT current_timestamp() AFTER `log_id`,
	CHANGE COLUMN `user_action` `action` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci' AFTER `log_timestamp`,
	CHANGE COLUMN `transaction_ref` `description` TEXT NOT NULL DEFAULT '' COLLATE 'latin1_swedish_ci' AFTER `action`;