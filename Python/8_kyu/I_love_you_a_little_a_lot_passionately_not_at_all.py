def how_much_i_love_you(nb_petals):
    nb_petals -= 1
    phrases = {
        0: "I love you",
        1: "a little",
        2: "a lot",
        3: "passionately",
        4: "madly",
        5: "not at all"
    }
    if nb_petals < len(phrases):
        return phrases[nb_petals]
    else:
        return phrases[nb_petals % len(phrases)]
