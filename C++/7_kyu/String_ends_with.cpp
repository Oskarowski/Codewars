#include <string>
#include <iostream>
using namespace std;

bool solution(std::string const &str, std::string const &ending)
{
    int eIndex = ending.length() - 1;
    for (int i = str.length() - 1; i >= 0; i--)
    {
        if (eIndex < 0)
        {
            return true;
        }
        char worldChar = str[i];
        char endChar = ending[eIndex];
        if (worldChar != endChar)
        {
            return false;
        }
        eIndex--;
    }
    return true;
}

int main()
{

    cout << solution("abcde", "cde"); // Equals(true));
    cout << solution("abcde", "abc"); // Equals(false));
    cout << solution("abc", "");      // Equals(true));
}