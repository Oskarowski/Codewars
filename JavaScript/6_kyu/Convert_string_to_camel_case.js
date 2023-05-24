function toCamelCase(str) {
  const strSplit = str.split("");
  console.log(strSplit);
  for (var i = 0; i < strSplit.length; i++) {
    var currentLetter = strSplit[i];

    if (currentLetter === "_" || currentLetter === "-") {
      strSplit[i] = "";
      strSplit[i + 1] = strSplit[i + 1].toUpperCase();
    }
  }
  console.log(strSplit.join(""));
  return strSplit.join("");
}

// console.log(toCamelCase("")); //, '', "An empty string was provided but not returned")
console.log(toCamelCase("the_stealth_warrior")); //, "theStealthWarrior", "toCamelCase('the_stealth_warrior') did not return correct value")
// console.log(toCamelCase("The-Stealth-Warrior")); //"TheStealthWarrior", "toCamelCase('The-Stealth-Warrior') did not return correct value")
// console.log(toCamelCase("A-B-C")); //, "ABC", "toCamelCase('A-B-C') did not return correct value")
