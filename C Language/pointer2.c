#include<stdio.h>

/**
    pointer :
    get address of variable and print it
*/

void main(){
    int ip = 10, *ptr;

    printf("\n value of ip is %d", ip);
    printf("\n address of ip is %d", &ip);

    /// assign address of ip to pointer
    ptr = &ip;
    printf("\n value of ptr is %d", ptr);
    printf("\n address of ptr is %d", &ptr);
}
