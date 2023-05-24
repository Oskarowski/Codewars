function duplicateEncode(word) {
  const data = word.toLowerCase().split("");
  const dataObj = {};
  data.forEach((e) => {
    if (dataObj[e] === undefined) {
      dataObj[e] = 1;
    } else dataObj[e]++;
  });
  const result = [];
  for (var i = 0; i < data.length; i++) {
    const letter = data[i];
    const e = dataObj[letter];
    if (e === 1) {
      result.push("(");
    } else result.push(")");
  }
  return result.join("");
}

duplicateEncode("din"); //       "(((");
duplicateEncode("recede"); //    "()()()");
duplicateEncode("Success"); //   ")())())","should ignore case");
duplicateEncode("(( @"); //      "))((");

/*

function duplicateEncode(word){
  return word
    .toLowerCase()
    .split('')
    .map( function (a, i, w) {
      return w.indexOf(a) == w.lastIndexOf(a) ? '(' : ')'
    })
    .join('');
}

*/
