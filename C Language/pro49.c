#include<stdio.h>

/**
    print ASCII of entered character
*/

void main(){
    char ip;

    printf("\n Enter any character \t");
    ip = getche();
    printf("\n ASCII of %c is %d", ip, ip);
}
