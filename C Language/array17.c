#include<stdio.h>

/**
    initialize 2D array
    multi array
*/

void main(){
    int ip[3][3] = {{11,22,33},{44,55,66},{77,88,99}};

    printf("\n size of array is %d Bytes ", sizeof(ip));

    printf("\n ip[0][0] is %d", ip[0][0]);
    printf("\n ip[2][0] is %d", ip[2][0]);
}
