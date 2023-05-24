function arrayDiff(a, b) {
  var iteration = 0;
  while (iteration < a.length) {
    var num = a[iteration];
    var found = b.findIndex((e) => e === num);
    iteration++;
    if (found !== -1) {
      var foundIndex = a.findIndex((e) => e === num);
      a.splice(foundIndex, 1);
      iteration = 0;
    }
  }
  return a;
}

console.log(arrayDiff([1, 2], [1])); // [2], "a was [1,2], b was [1]");
console.log(arrayDiff([1, 2, 2], [1])); // [2, 2], "a was [1,2,2], b was [1]");
console.log(arrayDiff([1, 2, 2], [2])); // [1], "a was [1,2,2], b was [2]");
console.log(arrayDiff([1, 2, 2], [])); // [1, 2, 2], "a was [1,2,2], b was []");
console.log(arrayDiff([], [1, 2]), []); // "a was [], b was [1,2]");
console.log(arrayDiff([1, 2, 3], [1, 2])); // [3], "a was [1,2,3], b was [1,2]");
