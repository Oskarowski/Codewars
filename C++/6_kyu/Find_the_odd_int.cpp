#include <vector>
#include <iostream>
#include <map>
using namespace std;

int findOdd(const std::vector<int> &numbers)
{
    map<int, int> occurring;
    for (int n : numbers)
    {
        if (occurring.find(n) == occurring.end())
        {
            occurring.insert(make_pair(n, 1));
        }
        else
        {
            occurring[n]++;
        }
    }
    for (const auto &pair : occurring)
    {
        // There will always be only one integer that appears an odd number of times.
        if (pair.second % 2 == 1)
        {
            return pair.first;
        }
    }

    return -1;
}

using V = std::vector<int>;

int main()
{
    cout << findOdd(V{20, 1, -1, 2, -2, 3, 3, 5, 5, 1, 2, 4, 20, 4, -1, -2, 5});
    return 0;
}