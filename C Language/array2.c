#include<stdio.h>

/**
    create array with 10 elements
*/

void main(){
    int ip[10];

    printf("\n Size of ip is %d bytes", sizeof(ip));

    ip[0] = 11;
    ip[1] = 22;
    ip[2] = 33;
    ip[3] = 44;
    ip[4] = 55;
    ip[5] = 66;
    ip[6] = 77;
    ip[7] = 88;
    ip[8] = 99;
    ip[9] = 110;

    printf("\n value is %d", ip[3]);
}
