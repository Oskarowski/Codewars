function DNAStrand(dna) {
  return dna
    .split("")
    .map((e) => {
      switch (e) {
        case "A":
          return "T";
        case "T":
          return "A";
        case "G":
          return "C";
        case "C":
          return "G";
      }
    })
    .join("");
}

function DNAStrand(dna) {
  const MAP = { A: "T", G: "C", C: "G", T: "A" };
  return dna
    .split("")
    .map((e) => {
      return MAP[e];
    })
    .join("");
}

console.log(DNAStrand("ATTGC"));
