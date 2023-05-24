const valueOfFiboNumber = (n) => {
  if (n === 0) return 0;
  if (n === 1 || n === 2) return 1;
  return valueOfFiboNumber(n - 2) + valueOfFiboNumber(n - 1);
};

function nthFibo(n) {
  return valueOfFiboNumber(n - 1);
  // Return the n-th number in the Fibonacci Sequence
}

console.log(nthFibo(4)); // 0, "1-st Fibo"); == 2
console.log(nthFibo(1)); // 0, "1-st Fibo");
console.log(nthFibo(2)); // 1, "2-nd Fibo");
console.log(nthFibo(3)); // 1, "3-rd Fibo");
console.log(nthFibo(4)); // 2, "4-th Fibo");
