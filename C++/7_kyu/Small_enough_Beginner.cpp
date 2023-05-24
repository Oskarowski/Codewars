#include <iostream>
#include <vector>

bool small_enough(std::vector<int> arr, int limit)
{
    bool *isNumberGreaterThanLimit = nullptr;
    for (int number : arr)
    {
        isNumberGreaterThanLimit = new bool((number > limit) ? true : false);
        if (*isNumberGreaterThanLimit)
        {
            delete isNumberGreaterThanLimit; // Deallocate memory
            return false;
        }
    }
    return true;
}

int main()
{
    bool case1 = small_enough(std::vector<int>{66, 101}, 200);                                       // Equals(true));
    bool case2 = small_enough(std::vector<int>{78, 117, 110, 99, 104, 117, 107, 115}, 100);          // Equals(false));
    bool case3 = small_enough(std::vector<int>{101, 45, 75, 105, 99, 107}, 107);                     // Equals(true));
    bool case4 = small_enough(std::vector<int>{80, 117, 115, 104, 45, 85, 112, 115}, 120);           // Equals(true));
    bool case5 = small_enough(std::vector<int>{1, 1, 1, 1, 1, 2}, 1);                                // Equals(false));
    bool case6 = small_enough(std::vector<int>{78, 33, 22, 44, 88, 9, 6}, 87);                       // Equals(false));
    bool case7 = small_enough(std::vector<int>{1, 2, 3, 4, 5, 6, 7, 8, 9}, 10);                      // Equals(true));
    bool case8 = small_enough(std::vector<int>{12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12}, 12); // Equals(true));

    std::cout << case1 << std::endl;
    std::cout << case2 << std::endl;
    std::cout << case3 << std::endl;
    std::cout << case4 << std::endl;
    std::cout << case5 << std::endl;
    std::cout << case6 << std::endl;
    std::cout << case7 << std::endl;
    std::cout << case8 << std::endl;

    return 0;
}