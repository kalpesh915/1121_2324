#include<stdio.h>

/**
    print All ASCII values
*/

void main(){
    int i;

    for(i=0; i<=255; i++){
        printf(" %3d %c", i, i);
    }
}
