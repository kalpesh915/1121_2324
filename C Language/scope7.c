#include<stdio.h>

/**
    example without static keyword
*/

void msg();

void main(){
    int i;

    for(i=1; i<=10; i++){
        msg();
    }
}

void msg(){
    int tmp = 1;
    printf("\n tmp is %d", tmp);
    tmp++;
}
