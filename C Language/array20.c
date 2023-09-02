#include<stdio.h>

/**
    scan values in 2D array from user
    find max of 2D array
*/

#define size 3

void main(){
    int ip[3][3], i, j, max = 0;

    /// get values in 2D array
    for(i=0; i<size; i++){
        for(j=0; j<size; j++){
            printf("\n Enter value for ip[%d][%d] \t", i, j);
            scanf("%d", &ip[i][j]);
        }
    }

    /// printing array data
    for(i=0; i<size; i++){
        for(j=0; j<size; j++){
            if(max < ip[i][j]){
                max = ip[i][j];
            }
        }
    }

    printf("\n Max of Array is %d", max);
}
