#include <string>
#include <vector>
#include <regex>
#include <map>
#include <iostream>

using namespace std;

class StockList
{
public:
    static std::string stockSummary(std::vector<std::string> &lstOfArt, std::vector<std::string> &categories)
    {
        if (lstOfArt.empty() || categories.empty())
        {
            return "";
        }

        std::map<std::string, int> mappedCategories;
        for (const std::string &value : categories)
        {
            mappedCategories[value] = 0;
        }

        std::regex pattern("([A-Z])\\w+ (\\d+)");

        for (int i = 0; i < lstOfArt.size(); i++)
        {
            const string item = lstOfArt[i];
            std::smatch matches;
            if (std::regex_search(item, matches, pattern))
            {
                const std::string firstLetter = matches[1].str();
                const std::string number = matches[2].str();
                if (mappedCategories.find(firstLetter) != mappedCategories.end())
                {
                    mappedCategories[firstLetter] += std::stoi(number);
                }
            }
        }
        string result = "";
        for (int i = 0; i < categories.size(); i++)
        {
            string letter = categories[i].substr(0, 1);
            const int amount = mappedCategories[letter];
            result += "(" + letter + " : " + to_string(amount) + ")";
            if (categories.size() == 1)
            {
                return result;
            }
            if (i != categories.size() - 1)
            {
                result += " - ";
            }
        }
        return result;
    }
};

int main()
{
    std::vector<std::string> art = {"ABAR 200", "CDXE 500", "BKWR 250", "BTSQ 890", "DRTY 600"};
    std::vector<std::string> cd = {"A", "B"};
    cout << StockList::stockSummary(art, cd) << endl; // "(A : 200) - (B : 1140)"

    art = {"BBAR 150", "CDXE 515", "BKWR 250", "BTSQ 890", "DRTY 600"};
    cd = {"A", "B", "C", "D"};
    cout << StockList::stockSummary(art, cd) << endl; // "(A : 0) - (B : 1290) - (C : 515) - (D : 600)"

    return 0;
}
