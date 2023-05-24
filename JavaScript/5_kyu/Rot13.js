const c = (abc) => console.log(abc);

function rot13(message) {
  const mapLover = "abcdefghijklmnopqrstuvwxyz".split("");
  const mapUpper = "NOPQRSTUVWXYZABCDEFGHIJKLM".split("");

  var rot13Split = message.split("");

  var rot13Map = rot13Split.map((char) => {
    var parsedChar = char.charCodeAt(0);
    var isUpper;
    if (parsedChar >= 65 && parsedChar <= 90) isUpper = true;
    else if (parsedChar >= 97 && parsedChar <= 122) isUpper = false;

    charLover = char.toLowerCase();
    var rot13Char = char;
    var index = mapLover.indexOf(charLover);
    if (index !== -1) rot13Char = mapUpper[index];

    // if (isUpper === undefined) return rot13Char;
    // if (isUpper === true) return rot13Char.toUpperCase();
    // if (isUpper === false) return rot13Char.toLowerCase();

    return isUpper === undefined
      ? rot13Char
      : isUpper === true
      ? rot13Char.toUpperCase()
      : rot13Char.toLowerCase();
  });
  var rot13Join = rot13Map.join("");

  return rot13Join;
}

// c(rot13("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz"));
// c("NOPQRSTUVWXYZABCDEFGHIJKLMnopqrstuvwxyzabcdefghijklm");

// c(rot13("test"));
// c("grfg");

c(rot13("Test"));
c("Grfg");
