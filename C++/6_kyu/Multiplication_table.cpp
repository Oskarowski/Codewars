#include <vector>
#include <iostream>
// using namespace std;

void printMatrix(std::vector<std::vector<int>> matrix)
{
    for (auto &&row : matrix)
    {
        for (auto &&number : row)
        {
            std::cout << number << " ";
        }
        std::cout << std::endl;
    }
}

std::vector<std::vector<int>> multiplication_table(int n)
{
    std::vector<std::vector<int>> result;
    std::vector<int> multi;

    int currentValueOfn = 1;
    for (int k = 0; k < n; k++)
    {
        for (int i = 0; i < n; i++)
        {

            if (currentValueOfn == 1)
            {
                multi.push_back(i + 1);
            }
            else
            {
                multi.push_back(result[0][i] * currentValueOfn);
            }
        }
        result.push_back(multi);
        multi.clear();
        currentValueOfn++;
    }
    return result;
}

int main()
{
    std::vector<std::vector<int>> table = multiplication_table(3);

    return 0;
}