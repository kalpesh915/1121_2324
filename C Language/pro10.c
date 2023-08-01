/**
    swap two values with use of third variable
*/
#include<stdio.h>

void main(){
    int x, y, tmp;

    x = 10;
    y = 20;

    printf("\n before swap x is %d and y is %d", x, y);

    tmp = x;
    x = y;
    y = tmp;

    printf("\n after swap x is %d and y is %d", x, y);
}
