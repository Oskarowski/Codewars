function duplicateCount(text) {
  let charCount = {};
  let duplicateCount = 0;

  text = text.toLowerCase();

  for (let l of text) {
    charCount[l] = (charCount[l] || 0) + 1;

    if (charCount[l] === 2) duplicateCount++;
  }

  return duplicateCount;

  //   let duplicateCount = 0;
  //   text = text.toLowerCase();
  //   text = text.split("");
  //   for (let letter of text) {
  //     let foundIndex = text.indexOf(letter);
  //     let foundLast = text.lastIndexOf(letter);
  //     if (foundIndex !== foundLast) {
  //       duplicateCount++;
  //       text = text.filter((l) => l !== letter);
  //     }
  //   }
  //   return duplicateCount;
}

console.log(duplicateCount("")); // 0);
console.log(duplicateCount("abcde")); // 0);
console.log(duplicateCount("aabbcde")); // 2);
console.log(duplicateCount("aabBcde")); // 2, "should ignore case");
console.log(duplicateCount("Indivisibility")); // 1);
console.log(duplicateCount("Indivisibilities")); // 2, "characters may not be adjacent"
