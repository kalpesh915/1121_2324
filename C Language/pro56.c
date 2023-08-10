#include<stdio.h>

/**
    lvalue error

    ip1 = 10 + 5
*/

void main(){
    int ip1;

    ///ip1 = 10 + 5;
    10 + 5 = ip1; /// Error
    printf("\n value of ip1 is %d", ip1);
}
