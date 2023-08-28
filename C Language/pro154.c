#include<stdio.h>

/**
    print all of the odd numbers between 0 to 100
*/

void main(){
    int i;

    for(i=1; i<100; i++){
        if(i %2 == 1){
            printf(" %d", i);
        }
    }

}
