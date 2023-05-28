--your statment goes here--
SELECT yr, CAST( CEIL( (yr-1) / 100) AS INTEGER) + 1 AS century
FROM years;