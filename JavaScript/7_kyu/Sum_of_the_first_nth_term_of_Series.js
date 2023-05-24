function SeriesSum(n) {
  var sum = 0;
  if (n === 0) return sum.toFixed(2);
  var denominator = 1;

  for (var i = 0; i < n; i++) {
    sum += 1 / denominator;
    denominator += 3;
  }
  return sum.toFixed(2);
}

console.log(SeriesSum(1), "1.00");
console.log(SeriesSum(2), "1.25");
console.log(SeriesSum(3), "1.39");
console.log(SeriesSum(4), "1.49");
console.log(SeriesSum(0), "0.00");
