/**
    example of constants
*/

#include<stdio.h>

void main(){
    const int ip = 20;
    printf("\n value of ip is %d", ip);
    ip = 25; /// ERROR
    printf("\n value of ip is %d", ip);
}
