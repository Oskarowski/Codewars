#include <vector>
#include <string>
#include <iostream>

class Kata
{
private:
    void printVectorArray(const std::vector<std::string> &arr)
    {
        std::cout << std::endl;
        for (std::string e : arr)
        {
            std::cout << "'" << e << "' ";
        }
    }

public:
    std::vector<std::string> sortByLength(std::vector<std::string> array)
    {
        for (int i = 0; i < array.size(); i++)
        {
            for (int j = 0; j < array.size() - 1 - i; j++)
            {
                if (array[j].size() > array[j + 1].size())
                {
                    std::string storage = array[j];
                    array[j] = array[j + 1];
                    array[j + 1] = storage;
                }
            }
        }
        this->printVectorArray(array);
        return array;
    }
};

int main()
{
    Kata kataCase1;
    std::vector<std::string> actual1 = kataCase1.sortByLength({"Longer", "Longest", "Short"});
    // expected = { "Short", "Longer", "Longest" };

    Kata kataCase2;
    std::vector<std::string> actual2 = kataCase2.sortByLength({"", "Moderately", "Brains", "Pizza"});
    // expected = { "", "Pizza", "Brains", "Moderately" };

    Kata kataCase3;
    std::vector<std::string> actual3 = kataCase3.sortByLength({"Beg", "Life", "I", "To"});
    // expected = { "I", "To", "Beg", "Life" };
    return 0;
}