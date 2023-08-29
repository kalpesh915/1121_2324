#include<stdio.h>

/**
    for loop without any statement
*/

void main(){
    int i = 1; /// init
    for( ; ;){
        printf(" %d", i);

        /// condition
        if(i == 10){
            break;
        }

        i++; /// increment
    }
}
