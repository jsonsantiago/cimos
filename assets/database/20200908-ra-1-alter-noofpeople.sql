ALTER TABLE `site`
	ADD COLUMN `totalnumofpeople` INT(11) NULL DEFAULT 0 AFTER `sessioncapacity`;

ALTER TABLE `reservation_dtls`
	ADD COLUMN `no_of_people` INT(11) NOT NULL DEFAULT 0 AFTER `no_of_children`;