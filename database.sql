CREATE TABLE `login` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `nama_lengkap` VARCHAR(100) NOT NULL,
    `username` VARCHAR(50) NOT NULL,
    `password` VARCHAR(100) NOT NULL,
    PRIMARY KEY (`id`)
);

INSERT INTO `login` (`nama_lengkap`, `username`, `password`) VALUES
('Muhammad Wahyu Rosyid', 'rosyid', MD5('password')),
('Rosyid Wahyu Muhamamad', 'wahyu', MD5('password'));
