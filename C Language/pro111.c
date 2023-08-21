#include<stdio.h>

/**
    simple while loop
    sum of 1 to 10
*/

void main(){
    int i = 1, sum = 0;

    while(i<=10){
        sum = sum+ i;
        i++;
    }

    printf("\n sum is %d", sum);
}
