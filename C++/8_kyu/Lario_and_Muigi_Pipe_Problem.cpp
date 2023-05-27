#include <vector>
#include <algorithm>

std::vector<int> pipe_fix(const std::vector<int> &nums)
{
    int min = *std::min_element(nums.begin(), nums.end());
    int max = *std::max_element(nums.begin(), nums.end());

    std::vector<int> fixedPipe;
    for (int i = min; i <= max; i++)
    {
        fixedPipe.push_back(i);
    };

    return fixedPipe;
}