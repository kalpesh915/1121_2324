#include<stdio.h>

/**
    merge two array in single array
*/

#define size 5

void main(){
    int ip1[size], ip2[size], ans[size], i;

    /// get values in array 1
    printf("\n Enter values for ip1 ");
    for(i=0; i<size; i++){
        printf("\n Enter value for ip1[%d] \t",i);
        scanf("%d", &ip1[i]);
    }

    /// get values in array 2
    printf("\n Enter values for ip2 ");
    for(i=0; i<size; i++){
        printf("\n Enter value for ip2[%d] \t",i);
        scanf("%d", &ip2[i]);
    }

    for(i=0; i<size; i++){
        ans[i] = ip1[i] + ip2[i];
    }

    for(i=0; i<size; i++){
        printf("\n ans[%d] = %d", i, ans[i]);
    }
}
