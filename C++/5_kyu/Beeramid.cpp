#include <iostream>
#include <cmath>
using namespace std;

int calculateAmountOfCans(int amountOfFloors)
{
    if (amountOfFloors <= 0)
    {
        return 0;
    }
    unsigned int cans = 0;
    for (int i = 1; i <= amountOfFloors; i++)
    {
        cans += pow(i, 2);
    }
    return cans;
}

// Returns number of complete beeramid levels
int beeramid(int bonus, double price)
{
    if (bonus <= 0 || price < 0)
        return 0;
    unsigned int maxFloor = 0;
    while (1)
    {
        if (calculateAmountOfCans(maxFloor + 1) * price <= bonus)
        {
            maxFloor++;
        }
        else
        {
            return maxFloor;
        }
    }
}

int main()
{
    cout << (beeramid(9, 2)) << endl;    // Equals(1));
    cout << (beeramid(10, 2)) << endl;   // Equals(2));
    cout << (beeramid(11, 2)) << endl;   // Equals(2));
    cout << (beeramid(21, 1.5)) << endl; // Equals(3));
    cout << (beeramid(454, 5)) << endl;  // Equals(5));
    cout << (beeramid(455, 5)) << endl;  // Equals(6));
    cout << (beeramid(4, 4)) << endl;    // Equals(1));
    cout << (beeramid(3, 4)) << endl;    // Equals(0));
    cout << (beeramid(0, 4)) << endl;    // Equals(0));
    cout << (beeramid(-1, 4)) << endl;   // Equals(0));

    return 0;
}