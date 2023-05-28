using namespace std;

#include <iostream>

class Bouncingball
{
public:
    static int bouncingBall(double h, double bounce, double window)
    {
        if (h <= 0 || bounce <= 0 || bounce >= 1 || window >= h)
        {
            return -1;
        }
        unsigned int amountOfbounces = 0;
        while (true)
        {
            h *= bounce;
            if (h <= window)
            {
                break;
            }
            amountOfbounces++;
        }
        return amountOfbounces * 2 + 1;
    };
};

int main()
{
    Bouncingball *bounce = new Bouncingball();

    cout << bounce->bouncingBall(3, 0.66, 1.5) << endl;  // 3);
    cout << bounce->bouncingBall(30, 0.66, 1.5) << endl; // 15);
    cout << bounce->bouncingBall(3, 1, 1.5) << endl;     // -1);

    delete bounce;

    return 0;
}