#include <iostream>
#include <string>
#include <sstream>

using namespace std;

std::string reverse_words(std::string str)
{
        const char* ws = " \t\n\r\f\v";
        string reversed;
        std::stringstream strStream(str);
        while(strStream){
            string singleWord;
            strStream >> singleWord;
            cout <<endl<< singleWord;
            for(int i = singleWord.length()-1; i >= 0; i--){
                reversed += singleWord[i];          
            }
            reversed += " ";
        }
    reversed.erase(reversed.find_last_not_of(' ')+1);         //suffixing spaces
    reversed.erase(0, reversed.find_first_not_of(' '));       //prefixing spaces
    return reversed;
}

int main(){
    cout<<endl<<(reverse_words("The quick brown fox jumps over the lazy dog."));
    return 0;
}