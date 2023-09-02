#include<stdio.h>

/**
    2D array

    ip
            C
        0   1   2
    0   11
 R  1
    2       22

    ip[row][column] = value
    ip[2][1] = 22
*/

void main(){
    int ip[3][3];

    printf("\n size of array is %d Bytes ", sizeof(ip));

    ip[0][0] = 11;
    ip[0][1] = 12;
    ip[0][2] = 13;

    ip[1][0] = 14;
    ip[1][1] = 15;
    ip[1][2] = 16;

    ip[2][0] = 17;
    ip[2][1] = 18;
    ip[2][2] = 19;


    printf("\n ip[0][0] is %d", ip[0][0]);
}
