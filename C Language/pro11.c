/**
    swap two values without use of third variable
*/
#include<stdio.h>

void main(){
    int x, y;

    x = 10;
    y = 20;

    printf("\n before swap x is %d and y is %d", x, y);

                        ///     x       y
                        ///     10      20
    x = x + y;          ///     30      20
    y = x - y;          ///     30      10
    x = x - y;          ///     20      10

    printf("\n after swap x is %d and y is %d", x, y);
}
