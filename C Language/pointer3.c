#include<stdio.h>

/**
    pointer :
    get address of variable and print it
    access the data of ip with ptr
*/

void main(){
    int ip = 10, *ptr;

    printf("\n value of ip is %d", ip);
    printf("\n address of ip is %d", &ip);

    /// assign address of ip to pointer
    ptr = &ip;

    /// access the data
    printf("\n *ptr is %d", *ptr);

    /// change the value of *ptr
    *ptr = 100;
    printf("\n value of ip is %d", ip);
}
