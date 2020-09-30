ALTER TABLE `site`
	ADD COLUMN `noofadults` INT NULL DEFAULT NULL AFTER `payment_gateway`,
	ADD COLUMN `noofchild` INT NULL DEFAULT NULL AFTER `noofadults`,
	ADD COLUMN `groupsize` INT NULL DEFAULT '0' AFTER `noofchild`,
	ADD COLUMN `all_reservation_exclusive` INT NULL DEFAULT '0' AFTER `groupsize`,
	ADD COLUMN `bookingprocess` INT NULL DEFAULT '0' AFTER `all_reservation_exclusive`;

UPDATE `site`
  INNER JOIN `play_center_schedule` ON `site`.site_id = `play_center_schedule`.siteid
SET `site`.noofadults = `play_center_schedule`.noofadults,
	`site`.noofchild = `play_center_schedule`.noofchild,
	`site`.groupsize = `play_center_schedule`.groupsize,
	`site`.all_reservation_exclusive = `play_center_schedule`.all_reservation_exclusive,
	`site`.bookingprocess = `play_center_schedule`.bookingprocess;

ALTER TABLE `play_center_schedule`
	DROP COLUMN `monday`,
	DROP COLUMN `tuesday`,
	DROP COLUMN `wednesday`,
	DROP COLUMN `thursday`,
	DROP COLUMN `friday`,
	DROP COLUMN `saturday`,
	DROP COLUMN `sunday`,
	DROP COLUMN `closing_mon`,
	DROP COLUMN `closing_tue`,
	DROP COLUMN `closing_wed`,
	DROP COLUMN `closing_thu`,
	DROP COLUMN `closing_fri`,
	DROP COLUMN `closing_sat`,
	DROP COLUMN `closing_sun`,
	DROP COLUMN `sessionblock`,
	DROP COLUMN `noofadults`,
	DROP COLUMN `noofchild`,
	DROP COLUMN `groupsize`,
	DROP COLUMN `all_reservation_exclusive`,
	DROP COLUMN `bookingprocess`;

ALTER TABLE `play_center_schedule`
	ADD COLUMN `day` TINYINT NULL DEFAULT NULL AFTER `siteid`,
	ADD COLUMN `start_time` TIME NOT NULL AFTER `day`,
	ADD COLUMN `end_time` TIME NOT NULL AFTER `start_time`,
	ADD COLUMN `status` TINYINT NOT NULL DEFAULT '1' AFTER `end_time`;

TRUNCATE `play_center_schedule`;

