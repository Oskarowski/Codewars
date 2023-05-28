SELECT distance_to_pump, mpg, fuel_left, 
    CASE WHEN (fuel_left * mpg) >= distance_to_pump THEN true ELSE false END AS res
FROM zerofuel;