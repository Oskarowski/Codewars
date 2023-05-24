// complete the function
function solution(string) {
  console.log("string:", string);
  const regex = /(?=[A-Z])/g;
  str = string.split(regex);
  console.log(str);
  str = str.join(" ");

  console.log(str);

  return str;
}

console.log(solution("camelCasingTest"));
