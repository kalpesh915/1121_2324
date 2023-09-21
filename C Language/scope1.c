#include<stdio.h>

/**
    local scope
*/

void main(){
    int ip = 10;

    printf("\n value of ip is %d", ip);

    {
        int ip = 15;
        printf("\n value of ip is %d", ip);
    }

    {
        int ip = 20;
        printf("\n value of ip is %d", ip);
    }
    printf("\n value of ip is %d", ip);
}
