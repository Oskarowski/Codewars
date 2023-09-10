def calculate_points(army: list[str], unit_strengths: list[int]) -> int:
    points = 0
    for index, units in enumerate(army):
        points += int(units) * unit_strengths[index]
    return points


def good_vs_evil(good: str, evil: str):
    goodArmy = good.split(" ")
    evilArmy = evil.split(" ")

    goodSideUnitsStrength = [1, 2, 3, 3, 4, 10]
    evilSideUnitsStrength = [1, 2, 2, 2, 3, 5, 10]

    goodPoints = calculate_points(goodArmy, goodSideUnitsStrength)
    evilPoints = calculate_points(evilArmy, evilSideUnitsStrength)

    if goodPoints > evilPoints:
        return "Battle Result: Good triumphs over Evil"
    elif evilPoints > goodPoints:
        return "Battle Result: Evil eradicates all trace of Good"
    else:
        return "Battle Result: No victor on this battle field"


# 'Battle Result: Evil eradicates all trace of Good')
good_vs_evil('1 1 1 1 1 1', '1 1 1 1 1 1 1')
# 'Battle Result: Good triumphs over Evil')
good_vs_evil('0 0 0 0 0 10', '0 1 1 1 1 0 0')
# 'Battle Result: No victor on this battle field')
good_vs_evil('1 0 0 0 0 0', '1 0 0 0 0 0 0')
