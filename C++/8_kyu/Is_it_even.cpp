#include <cmath>
bool is_even(double n)
{
    n = abs(n);

    if (std::fmod(n, 1.0) != 0.0)
    {
        return false; // Floats with non-zero decimal part are considered uneven
    }
    int integerPart = static_cast<int>(n);
    if (integerPart % 2 == 0)
    {
        return true;
    }
    return false;
}