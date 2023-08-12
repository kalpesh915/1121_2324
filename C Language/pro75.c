#include<stdio.h>

/**
    logical or operator

    cond1   cond2   ans
    T       F       T
    F       T       T
    F       F       F
    T       T       T
*/

void main(){
    printf("\n Answer is %d", (10 > 5 || 10 > 18));
    printf("\n Answer is %d", (10 > 15 || 10 > 8));
    printf("\n Answer is %d", (10 > 15 || 10 > 18));
    printf("\n Answer is %d", (10 > 5 || 10 > 8));
}
