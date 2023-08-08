#include<stdio.h>

/**
    float data type

    size    :   4 bytes
    char    :   %f

    used to store values with floating point
*/

void main(){
    float f;

    printf("\n size of float is %d bytes",sizeof(f));

    printf("\n Enter any value \t");
    scanf("%f", &f);
    printf("\n Entered value is %f", f);
    printf("\n Entered value is %.3f", f);
}
