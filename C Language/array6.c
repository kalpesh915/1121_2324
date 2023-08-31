#include<stdio.h>

/**
    create array and print it with loop
    and make sum of array
*/

#define size 10

void main(){
    int ip[size], i, sum = 0;

    for(i=0; i<size; i++){
        printf("\n Enter value for ip[%d] \t", i);
        scanf("%d", &ip[i]);
    }

    for(i=0; i<size; i++){
        sum = sum + ip[i];
    }

    printf("\n Sum of Array is %d", sum);
}
