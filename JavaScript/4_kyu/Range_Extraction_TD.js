function solution(list) {
  const toReturn = [];
  var trainStart = 0;
  var trainEnd = 0;
  var train = [];
  for (var i = 0; i < list.length; i++) {
    const difference = Math.abs(Math.abs(list[i]) - Math.abs(list[i + 1]));
    console.log(
      `${Math.abs(list[i])} - ${Math.abs(list[i + 1])} = ${difference}`
    );
    console.log(difference);
    if (difference === 1) {
      train.push(list[i]);
      train.push(list[i + 1]);
    } else {
      if (train.length >= 3) {
        trainStart = train[0];
        trainEnd = train[train.length - 1];
        toReturn.push(`${trainStart}-${trainEnd}`);
        train = [];
      } else if (train.length === 2) {
        toReturn.push(train[0]);
        toReturn.push(train[1]);
        train = [];
      } else if (train.length === 1) {
        toReturn.push(train[0]);
        train = [];
      } else {
        toReturn.push(`${list[i]}`);
        train = [];
      }
    }
  }
  var retString = "";
  toReturn.forEach((e) => {
    retString += e += ",";
  });
  console.log(toReturn);
  retString = retString.slice(0, retString.length - 1);
  console.log(retString);
  return retString.toString();
}

// solution([-6, -3, -2, -1, 0, 1, 3, 4, 5, 8], "-6,-3-1,3-5,8");
// expected '-3-2,10,15,16,18-20' to deeply equal '-3--1,2,10,15,16,18-20'

console.log(
  solution([
    -10, -9, -8, -6, -3, -2, -1, 0, 1, 3, 4, 5, 7, 8, 9, 10, 11, 14, 15, 17, 18,
    19, 20,
  ])
);
// returns "-10--8,-6,-3-1,3-5,7-11,14,15,17-20"

// expected '-3-2,10,15,16,18-20'
// ly equal '-3--1,2,10,15,16,18-20'
