#include <string>

std::string fakeBin(std::string str){
  //your code here
  for(char &digite: str){
    int digiti = digite-48;
    if(digiti < 5) {digite='0';}
    else {digite='1';}
  }
  return str;
}