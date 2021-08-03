ALTER TABLE `news`
	ADD COLUMN `thumbnail` VARCHAR(200) NULL DEFAULT 'image-not-found.png' AFTER `body`;