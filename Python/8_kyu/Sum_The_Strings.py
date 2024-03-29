def sum_str(a, b):
    a = a.strip()
    b = b.strip()

    if a == '':
        a = '0'
    if b == '':
        b = '0'

    return str(int(a) + int(b))


print(sum_str("4", "5"))    # "9")
print(sum_str("34", "5"))   # "39")
print(sum_str("9", ""))     # "9", "x + empty = x")
print(sum_str("", "9"))     # "9", "empty + x = x")
print(sum_str("", ""))      # "0", "empty + empty = 0")
