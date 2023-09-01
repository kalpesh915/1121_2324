#include<stdio.h>

/**
    print sum and average of array
*/

#define size 10

void main(){
    int ip[size], i, sum = 0;

    /// get values in array
    for(i=0; i<size; i++){
        printf("\n Enter value for ip[%d] \t",i);
        scanf("%d", &ip[i]);
    }

    for(i=0; i<size; i++){
        sum += ip[i];
    }

    printf("\n Sum of array is %d", sum);
    printf("\n Average of array is %d", sum / size);
}
