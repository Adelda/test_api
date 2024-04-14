install:
	symfony composer install
	symfony console d:d:c

rebuild:
	symfony console d:d:d -f
	symfony console d:d:c
	symfony console d:s:u -f
	symfony console d:f:l -n