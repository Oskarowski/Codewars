#include <vector>
#include <iostream>

using namespace std;

vector<unsigned> afterErased(vector<unsigned> toBeSifted, unsigned indexToBeErased)
{
    // Erase all multiples of the number at the index specified
    for (unsigned i = indexToBeErased + 1; i < toBeSifted.size(); i++)
    {
        if (toBeSifted[i] % toBeSifted[indexToBeErased] == 0)
        {
            toBeSifted.erase(toBeSifted.begin() + i);
            i--;
        }
    }
    return toBeSifted;
}

std::vector<unsigned> prime(unsigned n)
{
    if (n == 0 || n == 1)
    {
        return {};
    }
    std::vector<unsigned> toBeSifted;
    // populate the vector with numbers from 2 to n
    for (unsigned i = 2; i <= n; i++)
    {
        {
            toBeSifted.push_back(i);
        }
    }
    // specify the index of the number to be sifted, prevent deletion of already found primes
    unsigned whichOne = 0;
    unsigned currentNumber = toBeSifted[whichOne];

    while (currentNumber != toBeSifted[toBeSifted.size() - 1])
    {
        toBeSifted = afterErased(toBeSifted, whichOne);
        currentNumber = toBeSifted[++whichOne];
    }
    return toBeSifted;
}

unsigned main()
{
    prime(11); // => [2, 3, 5, 7, 11]
    cout << endl;
    prime(23); // => {2,3,5,7,11,13,17,19,23}
    return 0;
}