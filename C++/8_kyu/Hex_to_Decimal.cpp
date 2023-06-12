#include <iostream>
#include <sstream>
#include <string>
using namespace std;

int hexToDec(const std::string &hexString)
{
    int decimal = 0;
    int power = 1;
    int start = 0;

    // Check if the number is negative
    if (hexString[0] == '-')
    {
        start = 1;
    }

    // Iterate through the string from right to left
    for (int i = hexString.length() - 1; i >= start; i--)
    {
        // Get the decimal value of the current hex digit
        int digit;
        if (hexString[i] >= '0' && hexString[i] <= '9')
        {
            digit = hexString[i] - '0';
        }
        else if (hexString[i] >= 'A' && hexString[i] <= 'F')
        {
            digit = hexString[i] - 'A' + 10;
        }
        else if (hexString[i] >= 'a' && hexString[i] <= 'f')
        {
            digit = hexString[i] - 'a' + 10;
        }
        else
        {
            // Invalid character
            std::cout << "Invalid hexadecimal number!" << std::endl;
            return 0;
        }

        // Update the decimal value
        decimal += digit * power;
        power *= 16;
    }

    // Handle negative number
    if (start == 1)
    {
        decimal *= -1;
    }

    return decimal;
}

int hexToDec(const std::string &hexString)
{
    return std::stoi(hexString, nullptr, 16);
}