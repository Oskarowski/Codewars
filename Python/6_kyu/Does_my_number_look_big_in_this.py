def narcissistic(value):
    value = str(value)
    if not value.isdigit():
        return False
    if int(value) < 0:
        return False

    digits = [int(digit) for digit in value]
    toPower = len(digits)

    sumOfDigitsToPower = 0
    for d in digits:
        sumOfDigitsToPower += d ** toPower
    if sumOfDigitsToPower == int(value):
        print(True)
        return True
    else:
        print(False)
        return False


narcissistic(7)     # True, '7 is narcissistic');
narcissistic(371)   # True, '371 is narcissistic');
narcissistic(122)   # False, '122 is not narcissistic')
narcissistic(4887)  # False, '4887 is not narcissistic')
