#include<stdio.h>

/**
    print all of the even numbers between 0 to 100
*/

void main(){
    int i;

    for(i=1; i<100; i++){
        if(i %2 == 0){
            printf(" %d", i);
        }
    }

}
