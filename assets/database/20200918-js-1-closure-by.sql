ALTER TABLE `close_schedule`
	ADD COLUMN `close_type` VARCHAR(16) NOT NULL DEFAULT 'range' AFTER `description`
	ADD COLUMN `session_id` INT NULL AFTER `close_type`;
