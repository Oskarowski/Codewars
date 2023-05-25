#include <cmath>
int twice_as_old(int dad, int son)
{
    return abs(dad - 2 * son);
}

int main()
{
    twice_as_old(36, 7);  //  Equals(22));
    twice_as_old(55, 30); //  Equals(5));
    twice_as_old(42, 21); //  Equals(0));
    twice_as_old(22, 1);  //  Equals(20));
    twice_as_old(29, 0);  //  Equals(29));
}