def to_weird_case(words):
    if type(words) != str:
        return False

    words = words.split(" ")
    weirdCase = ""

    for word in words:
        for i in range(len(word)):
            l = word[i]
            if i % 2 == 1:
                weirdCase += l.lower()
            else:
                weirdCase += l.upper()
        weirdCase += " "
    weirdCase = weirdCase.strip()

    return weirdCase


print(to_weird_case('String'))  # => returns 'StRiNg'
print(to_weird_case('Weird string case'))  # => returns 'WeIrD StRiNg CaSe'
