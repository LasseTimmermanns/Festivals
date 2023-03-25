CREATE TABLE festivals.festivals (
	id INTEGER PRIMARY KEY auto_increment NOT NULL,
	name varchar(100) NOT NULL,
	ort varchar(100) NOT NULL,
	preis FLOAT NOT NULL,
	`alter` DATE NOT NULL DEFAULT CURRENT_DATE,
	`date` DATE NOT NULL
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_general_ci;
