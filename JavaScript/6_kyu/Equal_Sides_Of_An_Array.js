function findEvenIndex(arr) {
  if (arr.length === 0) return 0;
  if (arr.length === 1) return 0;

  function sumFromRange(start, end) {
    var total = 0;
    for (var i = start; i < end; i++) {
      total += arr[i];
    }
    return total;
  }

  for (var i = 0; i < arr.length; i++) {
    var sumOnLeft = sumFromRange(0, i);
    var sumOnRight = sumFromRange(i + 1, arr.length);
    if (sumOnLeft === sumOnRight) return i;
  }
  return -1;
}

console.log(findEvenIndex([1, 2, 3, 4, 3, 2, 1])); //,3, "The array was: [1,2,3,4,3,2,1] \n";
console.log(findEvenIndex([1, 100, 50, -51, 1, 1])); //,1, "The array was: [1,100,50,-51,1,1] \n";
console.log(findEvenIndex([1, 2, 3, 4, 5, 6])); //,-1, "The array was: [1,2,3,4,5,6] \n";
console.log(findEvenIndex([20, 10, 30, 10, 10, 15, 35])); //,3, "The array was: [20,10,30,10,10,15,35] \n";
console.log(findEvenIndex([20, 10, -80, 10, 10, 15, 35])); // expected +0
console.log(findEvenIndex([10, -80, 10, 10, 15, 35, 20])); // expected 6
