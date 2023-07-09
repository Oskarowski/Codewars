function sortArray(array) {
  let odd = [];
  let even = [];
  let result = [];
  array.forEach((element) => {
    if (element % 2 === 0) {
      even.push(element);
    } else {
      odd.push(element);
    }
  });
  odd.sort((a, b) => a - b);
  array.forEach((element) => {
    if (element % 2 === 0) {
      result.push(even.shift());
    } else {
      result.push(odd.shift());
    }
  });
  return result;
}

sortArray([9, 8, 7, 6, 5, 4, 3, 2, 1, 0]); // [9, 8, 7, 6, 5, 4, 3, 2, 1, 0]  =>  [1, 8, 3, 6, 5, 4, 7, 2, 9, 0]
sortArray([5, 3, 2, 8, 1, 4]); // , [1, 3, 2, 8, 5, 4]);
sortArray([5, 3, 1, 8, 0]); // , [1, 3, 5, 8, 0]);
sortArray([]); // ,[]);
