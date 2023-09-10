#include <string>
#include <iostream>
#include <cctype>

using namespace std;

std::string rot13(const std::string &str)
{
    string result = "";
    for (int i = 0; i < str.length(); i++)
    {
        char c = str[i];
        int ascii = (int)c;
        if (std::iswalpha(c))
        {
            if (c >= 'a' && c <= 'z')
            {
                ascii += 13;
                if (ascii > 122)
                    ascii -= 26;
            }
            else if (c >= 'A' && c <= 'Z')
            {
                ascii += 13;
                if (ascii > 90)
                    ascii -= 26;
            }
        }
        result += (char)ascii;
    }
    return result;
}

int main()
{
    rot13("This is my first ROT13 excercise!"); // -> "Guvf vf zl svefg EBG13 rkprepvfr!"
    rot13("s");                                 // -> "f"1
    return 0;
}