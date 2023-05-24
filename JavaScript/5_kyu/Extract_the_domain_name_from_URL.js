function domainName(url) {
  const domainPattern = /^(?:https?:\/\/)?(?:www\.)?([^\.]+)/;
  let result = url.match(domainPattern);
  return result[1];
  //   const regexp2 = /^www.?(\w+)/;
  //   result = url.match(regexp2);
  //   return result[1];
}

console.log(domainName("http://google.com")); // "google");
console.log(domainName("http://google.co.jp")); //, "google");
console.log(domainName("www.xakep.ru")); //, "xakep");
console.log(domainName("https://youtube.com")); //, "youtube");
