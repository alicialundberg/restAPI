# RestAPI
### Beskrivning av API:ets uppbyggnad
**config.php** hämtar in alla klasser

**course.php** är en databasklass som kopplar upp mot databasen. Med olika funktioner innehållandes SQL-frågor kan data hämtas och skickas till databasen.

**index.php** hämtar in config.php som i sin tur hämtar in databasklassen. En switch har skapats innehållandes två metoder: 
GET-metoden hämtar data from databasen i JSON-format och POST-metoden skickas data i JSON-format till databasen.

Länk till färdig plats: http://studenter.miun.se/~allu1801/dt173g/moment5/fetchapi/
