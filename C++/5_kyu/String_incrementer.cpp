#include <string>
#include <iostream>
#include <regex>
#include <vector>

std::string incrementString(const std::string &str)
{
    std::regex numberRegex(R"(\d+$)"); // Regex pattern to match a number at the end of the string
    std::smatch matchNumber;           // Match object to store the captured match

    if (std::regex_search(str, matchNumber, numberRegex))
    {
        std::string capturedNumberStr = matchNumber.str();
        std::vector<int> digits;

        for (char c : capturedNumberStr)
        {
            int digit = c - '0'; // Convert character to integer
            digits.push_back(digit);
        }

        int carry = 0;

        for (int i = digits.size() - 1; i >= 0; i--)
        {
            int digit = digits[i] + carry;
            carry = 0;
            if (i == digits.size() - 1)
            {
                digit++;
            }
            if (digit < 10)
            {
                digits[i] = digit;
            }
            else
            {
                digit = digit % 10;
                digits[i] = digit;
                carry = 1;
            }
            // std::cout << "digit: " << digit << " carry: " << carry << std::endl;
        }
        if (carry == 1)
        {
            digits.insert(digits.begin(), 1);
        }

        // std::regex wordRegex("[a-zA-Z]+"); // Regex pattern to match the word at the beginning of the string (excluding digits)
        // std::smatch matchWord;             // Match object to store the captured match

        // if (std::regex_search(str, matchWord, wordRegex))
        // {
        //     std::string capturedWord = matchWord.str(); // Get the captured word as a string (excluding the capturing group)
        //     for (int digit : digits)
        //     {
        //         capturedWord += std::to_string(digit);
        //     }
        //     return capturedWord;
        // }
        // std::string toReturn = "";
        // for (int digit : digits)
        // {
        //     toReturn += std::to_string(digit);
        // }
        // return toReturn;

        int howLongIsNumberAtTheEnd = capturedNumberStr.length();
        std::string stringToReturn = "";
        for (int i = 0; i < str.length() - howLongIsNumberAtTheEnd; i++)
        {
            stringToReturn += str[i];
        }
        for (int digit : digits)
        {
            stringToReturn += std::to_string(digit);
        }
        return stringToReturn;
    }
    else
    {
        return str + "1";
    }
    return "Error";
}

int main()
{
    std::cout << "String incrementer" << std::endl;

    std::string after1 = incrementString("foobar000");  // "foobar001");
    std::string after2 = incrementString("foo");        // "foo1");
    std::string after3 = incrementString("foobar001");  // "foobar002");
    std::string after4 = incrementString("foobar99");   // "foobar100");
    std::string after5 = incrementString("foobar099");  // "foobar100");
    std::string after6 = incrementString("");           // "1");
    std::string after7 = incrementString("foo12");      // "foo13");
    std::string after8 = incrementString("1");          // "2");
    std::string after9 = incrementString("fo99obar99"); // "fo99obar100");

    // std::cout << after1 << std::endl;
    // std::cout << after2 << std::endl;
    // std::cout << after3 << std::endl;
    // std::cout << after4 << std::endl;
    // std::cout << after5 << std::endl;
    // std::cout << after6 << std::endl;
    // std::cout << after7 << std::endl;
    std::cout << after8 << std::endl;
    std::cout << after9 << std::endl;

    return 0;
}