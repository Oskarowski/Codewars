function topThreeWords(text) {
    text = text
        .replace(/[$&+,:;=?@#|<>\.\-\^*()%!\/]/g, "")
        .toLowerCase()
        .trim();

    const wordCount = {};

    text.split(" ").forEach((e) => {
        if (wordCount[e]) {
            wordCount[e]++;
        } else {
            wordCount[e] = 1;
        }
    });

    return Object.entries(wordCount)
        .sort((a, b) => b[1] - a[1])
        .map((e) => e[0])
        .filter((e) => e !== "'" && e !== "")
        .slice(0, 3);
}

topThreeWords("a a a  b  c c  d d d d  e e e e e"); // ['e','d','a']
topThreeWords("a a a c b b"); // ["a", "b", "c"]
topThreeWords("e e e e DDD ddd DdD: ddd ddd aa aA Aa, bb cc cC e e e"); // ['e','ddd','aa']
topThreeWords("  //wont won't won't "); //["won't", "wont"]
topThreeWords("  , e   .. "); // ["e"]
topThreeWords("  ...  "); // []
topThreeWords("  '  "); // []
topThreeWords(`In a village of La Mancha, the name of which I have no desire to call to
 mind, there lived not long since one of those gentlemen that keep a lance
 in the lance-rack, an old buckler, a lean hack, and a greyhound for
 coursing. An olla of rather more beef than mutton, a salad on most
 nights, scraps on Saturdays, lentils on Fridays, and a pigeon or so extra
 on Sundays, made away with three-quarters of his income.`); // ['a','of','on']
