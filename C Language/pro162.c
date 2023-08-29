#include<stdio.h>

/**
    create custom loop with use of goto keyword
*/

void main(){
    int ip = 1;

    loop:
        printf(" %d", ip);

        ip++;
        if(ip <= 10){
            goto loop;
        }
}
