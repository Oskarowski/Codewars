function deleteNth(arr, n) {
  if (n === 1) {
    return Array.from(new Set(arr));
  }
  const occurrences = {};
  const output = [];

  for (let i = 0; i < arr.length; i++) {
    const num = arr[i];

    if (!occurrences.hasOwnProperty(num)) {
      occurrences[num] = 1;
    }

    if (occurrences[num] <= n) {
      output.push(num);
      occurrences[num]++;
    }
  }
  return output;
}

console.log(deleteNth([20, 37, 20, 21], 1)); // [20, 37, 21];
console.log(deleteNth([1, 1, 3, 3, 7, 2, 2, 2, 2, 1, 1, 1], 3)); // [1, 1, 3, 3, 7, 2, 2, 2];
console.log(deleteNth([1, 1, 3, 3, 7, 2, 2, 2, 2], 1)); // [1, 3, 7, 2];
console.log(deleteNth([1, 2, 3, 1, 1, 2, 1, 2, 3, 3, 2, 4, 5, 3, 1], 3));
