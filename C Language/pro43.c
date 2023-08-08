#include<stdio.h>

/**
    double data type

    size    :   8 bytes
    char    :   %lf

    used to store values with floating point
*/

void main(){
    double f;

    printf("\n size of double is %d bytes",sizeof(f));

    printf("\n Enter any value \t");
    scanf("%lf", &f);
    printf("\n Entered value is %lf", f);
    printf("\n Entered value is %.3lf", f);
}
