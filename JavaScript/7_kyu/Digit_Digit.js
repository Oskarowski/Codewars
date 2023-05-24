function squareDigits(num) {
  var digits = num.toString().split("");
  digits = digits.map((e) => Math.pow(e, 2));
  return Number(digits.join(""));
}

console.log(squareDigits(3212)); //, 9414));
console.log(squareDigits(2112)); //, 4114));
console.log(squareDigits(0)); //, 0));
