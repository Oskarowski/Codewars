function add(a, b) {
  if (b.length > a.length) {
    const swap = a;
    a = b;
    b = swap;
  }

  const aSplit = a.split("").map((n) => Number(n));
  const bSplit = b.split("").map((n) => Number(n));

  while (bSplit.length < aSplit.length) {
    bSplit.unshift(0);
  }

  var answer = [];

  var inMemory = 0;
  for (var i = aSplit.length - 1; i >= 0; i--) {
    var x = aSplit[i];
    var y = bSplit[i] || 0;

    var addition = x + y + inMemory;

    if (addition <= 9) {
      answer.push(addition);
      inMemory = 0;
    } else {
      answer.push(Number(String(addition)[1]));
      inMemory = 1;
    }
  }
  if (inMemory === 1) answer.push(1);

  answer = answer
    .reverse()
    .map((e) => `${e}`)
    .join("");

  return answer;
}

// add("123", "321"); //      "444"
// add("11", "99"); //        "110"
// add("91", "19"); //        "110"

// add("1", "1"); //          "2"
// add("123", "456"); //      "579"
// add("888", "222") //       "1110"
// add("1372", "69"); //      "1441"
// add("1472", "1209329");
// add("12", "456") //        "468"
// add("101", "100") //       "201"
add("63829983432984289347293874", "90938498237058927340892374089"); //  "91002328220491911630239667963")

/*
the double bitwise NOT operator ~~

It is used as an alternative for calculating floor instead of using Math.floor(), but the condition given number should be positive.
It is used as an alternative for calculating the integer part of a fractional number instead of using Math.trunc(), but the condition is that the given number should be negative.
It is used as an alternative for calculating the ceil instead of using Math.ceil(), but the condition that is given the number should be negative.
It can be used to convert false values like undefined to zero so it becomes useful when we want to create a counter on such values without facing any errors.


*/
