#include <string>
#include <iostream>
#include <vector>

std::string removeExclamationMarks(std::string str)
{
    std::vector<char> letters;
    for (char letter : str)
    {
        if (letter != '!')
        {
            letters.push_back(letter);
        }
    }
    std::string result = "";
    for (char letter : letters)
    {
        result += letter;
    }
    return result;
}

int main()
{
    std::string case1 = removeExclamationMarks("Hello World!");   //  Equals("Hello World"));
    std::string case2 = removeExclamationMarks("Hello World!!!"); //  Equals("Hello World"));
    std::string case3 = removeExclamationMarks("Hi! Hello!");     //  Equals("Hi Hello"));
    std::string case4 = removeExclamationMarks("Hi!!! Hello!");   //  Equals("Hi Hello"));
    std::string case5 = removeExclamationMarks("Hi! He!l!lo!");   //  Equals("Hi Hello"));

    std::cout << case1 << std::endl;
    std::cout << case2 << std::endl;
    std::cout << case3 << std::endl;
    std::cout << case4 << std::endl;
    std::cout << case5 << std::endl;

    return 0;
}

/*
#include <string>
#include <regex>

std::string removeExclamationMarks(std::string str){
  return std::regex_replace(str, std::regex ("!"), "");
}
*/