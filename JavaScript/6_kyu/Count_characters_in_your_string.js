function count(string) {
  if (string.length === 0) return {};
  var result = {};
  string.split("").forEach(function (char) {
    result[char] = result[char] ? result[char] + 1 : 1;
  });
  return result;
}

count(""); // {});
count("a"); // { a: 1 });
count("ab"); // { a: 1, b: 1 });
count("aba"); // { a: 2, b: 1 });
count("ABC"); // { A: 1, B: 1, C: 1 });
