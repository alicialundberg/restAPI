# RestAPI
### Beskrivning av API:ets uppbyggnad
**config.php** hämtar in alla klasser

**course.php** är en databasklass som kopplar upp mot databasen. Med olika funktioner innehållandes SQL-frågor kan data hämtas och skickas till databasen.

**index.php** hämtar in config.php som i sin tur hämtar in databasklassen. En switch har skapats innehållandes fyra metoder: 

GET-metoden hämtar data from databasen i JSON-format 

POST-metoden skickas data i JSON-format till databasen.

PUT-metoden skickar med parametrar och sedan uppdaterar befintlig data i databasen.
Exempel på hur URI-länken ser ut: HTTP PUT http://studenter.miun.se/~allu1801/dt173g/moment5/restapi/index.php?id=3&code=DT163G&name=CMS-system&progression=A&course_syllabus=www.test.se

DELETE-metoden skickar med ett ID och raderar det objektet från databasen.
Exempel på hur URI-länken ser ut: HTTP DELETE http://studenter.miun.se/~allu1801/dt173g/moment5/restapi/index.php?id=3

Länk till färdig plats: http://studenter.miun.se/~allu1801/dt173g/moment5/fetchapi/
