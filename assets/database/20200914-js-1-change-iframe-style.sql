UPDATE `softplay_db`.`site` 
SET `embedcode`= CONCAT("<iframe src=\'http://localhost/bookings/book-now/",`site`.site_id,"/1\' style=\'border:0; position: absolute;top: 0;left: 0;bottom: 0;right: 0;width: 100%;height: 100%;\'></iframe>")
WHERE `embedcode` != '';