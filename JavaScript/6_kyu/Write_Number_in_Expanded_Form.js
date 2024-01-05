function expandedForm(num) {
  return String(num)
    .split("")
    .map((n, i, arr) => n + "0".repeat(arr.length - i - 1))
    .filter((n) => Number(n) !== 0)
    .join(" + ");

  //   let particles = [];
  //   let numLength = num.toString().length;

  //   for (let i = 0; i < numLength; i++) {
  //     let pow = 10 ** (i + 1);
  //     let n = num % pow;

  //     if (n !== 0) {
  //       particles.push(n);
  //       num -= n;
  //     }
  //   }

  //   return particles.reverse().join(" + ");
}

console.log(expandedForm(12)); //"10 + 2");
console.log(expandedForm(42)); // "40 + 2");
console.log(expandedForm(70304)); // "70000 + 300 + 4")
