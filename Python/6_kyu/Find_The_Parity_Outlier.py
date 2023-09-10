def find_outlier(integers):
    even = []
    odd = []

    for n in integers:
        if n % 2 == 0:
            even.append(n)
        else:
            odd.append(n)
    if len(even) == 1:
        return even[0]
    else:
        return odd[0]


print(find_outlier([2, 4, 6, 8, 10, 3]))                 # , 3)
print(find_outlier([2, 4, 0, 100, 4, 11, 2602, 36]))     # , 11)
print(find_outlier([160, 3, 1719, 19, 11, 13, -21]))     # , 160)
