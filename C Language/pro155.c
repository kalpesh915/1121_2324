#include<stdio.h>

/**
    print numbers as per range given by user
*/

void main(){
    int i, start, stop;

    printf("\n Enter start of Loop \t");
    scanf("%d", &start);
    printf("\n Enter end of loop \t");
    scanf("%d", &stop);

    for(i=start; i<=stop; i++){
        printf(" %d", i);
    }
}
