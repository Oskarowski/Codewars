var Sudoku = function (data) {
  //   Private methods
  // -------------------------

  var isSizeValid = null;
  var isEachNumberInRowInt = null;
  //================================== SIZE
  const sizeOfEachRow = [];
  const isRowFullOfInts = [];
  const verticalSizeOfBoard = data.length;
  data.forEach((row) => {
    sizeOfEachRow.push(row.length);
    isRowFullOfInts.push(row.every((e) => Number.isInteger(e)));
  });
  isSizeValid =
    sizeOfEachRow.every((n) => n === verticalSizeOfBoard && n > 1) &&
    Number.isInteger(Math.sqrt(verticalSizeOfBoard));
  isEachNumberInRowInt = isRowFullOfInts.every((e) => e === true);
  //================================== SIZE
  // console.log(isSizeValid);
  // console.log(isEachNumberInRowInt);

  var areAllRowsValid = null;
  //================================== ROWS
  const areRowsValid = [];
  for (var whichRow = 0; whichRow < data.length; whichRow++) {
    var rowObj = {};

    for (var whichColumn = 0; whichColumn < data[0].length; whichColumn++) {
      const number = data[whichRow][whichColumn];

      if (rowObj[number] === undefined) {
        rowObj[number] = 1;
      } else {
        rowObj[number]++;
      }
    }
    const amountOfEachNumberInRow = Object.values(rowObj);
    areRowsValid.push(amountOfEachNumberInRow.every((e) => e === 1));
  }
  // console.log(areRowsValid);
  areAllRowsValid = areRowsValid.every((e) => e === true);
  //================================== ROWS
  console.log("areAllRowsValid:", areAllRowsValid);

  var areAllColumnsValid = null;
  //================================== COLUMNS
  const areColumnsValid = [];
  for (var i = 0; i < data[0].length; i++) {
    var columnObj = {};
    for (var j = 0; j < data.length; j++) {
      var number = data[j][i];
      if (columnObj[number] === undefined) {
        columnObj[number] = 1;
      } else {
        columnObj[number]++;
      }
    }
    const amountOfEachNumberInColumn = Object.values(columnObj);
    areColumnsValid.push(amountOfEachNumberInColumn.every((e) => e === 1));
  }
  // console.log(areColumnsValid);
  areAllColumnsValid = areColumnsValid.every((e) => e === true);
  //================================== COLUMNS
  console.log("areAllColumnsValid:", areAllColumnsValid);

  //   Public methods
  // -------------------------
  return {
    isValid: function () {
      // YOUR SOLUTION
      return (
        areAllRowsValid &&
        areAllColumnsValid &&
        isSizeValid &&
        isEachNumberInRowInt
      );
    },
  };
};

var goodSudoku1 = new Sudoku([
  [7, 8, 4, 1, 5, 9, 3, 2, 6],
  [5, 3, 9, 6, 7, 2, 8, 4, 1],
  [6, 1, 2, 4, 3, 8, 7, 5, 9],

  [9, 2, 8, 7, 1, 5, 4, 6, 3],
  [3, 5, 7, 8, 4, 6, 1, 9, 2],
  [4, 6, 1, 9, 2, 3, 5, 8, 7],

  [8, 7, 6, 3, 9, 4, 2, 1, 5],
  [2, 4, 3, 5, 6, 1, 9, 7, 8],
  [1, 9, 5, 2, 8, 7, 6, 3, 4],
]);

var goodSudoku2 = new Sudoku([
  [1, 4, 2, 3],
  [3, 2, 4, 1],

  [4, 1, 3, 2],
  [2, 3, 1, 4],
]);

var badSudoku1 = new Sudoku([
  [1, 2, 3, 4, 5, 6, 7, 8, 9],
  [1, 2, 3, 4, 5, 6, 7, 8, 9],
  [1, 2, 3, 4, 5, 6, 7, 8, 9],

  [1, 2, 3, 4, 5, 6, 7, 8, 9],
  [1, 2, 3, 4, 5, 6, 7, 8, 9],
  [1, 2, 3, 4, 5, 6, 7, 8, 9],

  [1, 2, 3, 4, 5, 6, 7, 8, 9],
  [1, 2, 3, 4, 5, 6, 7, 8, 9],
  [1, 2, 3, 4, 5, 6, 7, 8, 9],
]);

var badSudoku2 = new Sudoku([[1, 2, 3, 4, 5], [1, 2, 3, 4], [1, 2, 3, 4], [1]]);

var badSudoku3 = new Sudoku([
  [1, 2, 2, 4, 5, 6, 7, 8, 9],
  [1, 2, 3, 4, 5, 6, 7, 8, 9],
  [1, 2, 3, 4, 5, 6, 7, 8, 9],

  [1, 2, 3, 4, 5, 6, 7, 8, 9],
  [1, 2, 3, 4, 5, 6, 7, 8, 9],
  [1, 2, 3, 4, 5, 6, 7, 8, 9],

  [1, 2, 3, 3, 5, 6, 7, 3, 9],
  [1, 2, 3, 4, 5, 6, 7, 8, 9],
  [1, 2, 3, 4, 5, 5, 7, 8, 9],
]);

var badSudoku4 = new Sudoku([
  [1, 2, 3, 4, 5, 6, 7, 8, 9],
  [2, 2, 3, 4, 5, 6, 7, 8, 9],
  [3, 2, 3, 4, 5, 6, 7, 8, 9],

  [4, 2, 3, 4, 5, 6, 7, 8, 9],
  [5, 2, 3, 4, 5, 6, 7, 8, 9],
  [6, 2, 3, 4, 5, 6, 7, 8, 9],

  [7, 2, 3, 4, 5, 6, 7, 8, 9],
  [8, 2, 3, 4, 5, 6, 7, 8, 9],
  [9, 2, 3, 4, 5, 6, 7, 8, 9],
]);

var badSudoku5 = new Sudoku([
  [7, 8, 4, 1, 5, 9, 3, 2, 6],
  [5, 3, 9, 6, 7, 2, 8, 4, 1],
]);

var badSudoku6 = new Sudoku([
  [7, 8, 4, 1, 5, 9, 3, 2, 6],
  [5, 3, 9, 6, 7, 2, 8, 4, 1],
  [6, 1, 2, 4, 3, 8, 7, 5, 9],

  [9, 2, 8, 7, 1, 5, 4, 6, 3],
  [3, 5, 7, 8, 4, 6, 1, 9, 2],
  [4, 6, 1, 9, 2, 3, 5, 8, 7],

  [8, 7, 6, 3.4, 9, 4, 2, 1, 5],
  [2, 4, 3, 5, 6, 1, 9, 7, 8],
  [1, 9, 5, 2, 8, 7, 6, 3, 4],
]);

console.log(goodSudoku1.isValid());
console.log(goodSudoku2.isValid());

console.log(badSudoku1.isValid());
console.log(badSudoku2.isValid());
console.log(badSudoku3.isValid());
console.log(badSudoku4.isValid());
console.log(badSudoku5.isValid());
console.log(badSudoku6.isValid());
