function divisors(integer) {
  var allDivisors = [];
  for (let i = integer; i > 0; i--) {
    if (integer % i == 0) allDivisors.push(i);
  }
  var isPrime = null;
  if (allDivisors.length === 2) {
    isPrime = allDivisors.every((n) => n === integer || n === 1);
  }
  if (isPrime) return `${integer} is prime`;
  allDivisors.shift();
  allDivisors.pop();
  return allDivisors.reverse();
}

console.log(divisors(15)); // [3, 5]);
console.log(divisors(12)); // [2, 3, 4, 6]);
console.log(divisors(13)); // "13 is prime");
