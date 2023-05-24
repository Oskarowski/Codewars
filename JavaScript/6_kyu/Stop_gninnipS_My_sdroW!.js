// function spinWords(string) {
//   var words = string.split(/\W+/g);
//   words = words.map((word) => {
//     if (word.length >= 5) return word.split("").reverse().join("");
//     else return word;
//   });
//   return words.join(" ");
// }

const spinWords = (string) =>
  string
    .split(" ")
    .map((word) => {
      return word.length >= 5 ? word.split("").reverse().join("") : word;
    })
    .join(" ");

spinWords("Hey fellow warriors"); //  => returns "Hey wollef sroirraw"
spinWords("This is a test"); //  => returns "This is a test"
spinWords("This is another test"); // => returns "This is rehtona test"
