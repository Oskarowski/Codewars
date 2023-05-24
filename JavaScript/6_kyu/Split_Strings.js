function solution(str) {
  isOdd = str.length % 2 === 1 ? true : false;
  const splitArr = [];
  for (var i = 0; i < str.length; i += 2) {
    splitArr.push(str.slice(i, i + 2));
  }
  if (!isOdd) {
    return splitArr;
  }
  indexOflast = splitArr.indexOf(splitArr.at(-1));
  splitArr[indexOflast] = `${splitArr.at(-1)}_`;
  return splitArr;
}

console.log(solution("cabdef")); //["ab", "cd", "ef"]
console.log(solution("abcdefg")); //["ab", "cd", "ef", "g_"]);
