CREATE DEFINER=`root`@`localhost` TRIGGER `payment_after_insert` AFTER INSERT ON `payment` FOR EACH ROW UPDATE reservation_dtls SET payment_status = if((SELECT sum(paid_amount) FROM payment WHERE reserver_id = reservation_dtls.id)>=0,'1','0')