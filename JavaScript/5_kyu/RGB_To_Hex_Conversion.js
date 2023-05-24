function rgb(r, g, b) {
  var RGB = [r, g, b];

  RGB = RGB.map((e) => {
    e = Number(e);
    if (e > 255) e = 255;
    if (e < 0) e = 0;
    e = e.toString(16).padStart(2, "0").toUpperCase();
    return e;
  });
  return RGB.join("");
}

console.log(rgb(0, 0, 0), "000000");
console.log(rgb(0, 0, -20), "000000");
console.log(rgb(300, 255, 255), "FFFFFF");
console.log(rgb(173, 255, 47), "ADFF2F");
