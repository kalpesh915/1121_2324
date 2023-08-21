#include<stdio.h>

/**
    simple while loop
    sum of 1 to 10
*/

void main(){
    int i = 1, sum = 0, tmp;

    while(i<=10){
        printf("\n Enter any number \t");
        scanf("%d", &tmp);
        sum = sum + tmp;
        i++;
    }

    printf("\n sum is %d", sum);
}
