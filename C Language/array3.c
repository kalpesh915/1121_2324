#include<stdio.h>

/**
    create array with 10 elements
*/

void main(){   /// 0   1  2    3   4   5   6  7    8   9
    int ip[10] = {11, 22, 33, 44, 55, 66, 77, 88, 99, 110};

    printf("\n Size of ip is %d bytes", sizeof(ip));

    printf("\n value is %d", ip[3]);
}
