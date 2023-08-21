#include<stdio.h>

/**
    simple while loop
    find maximum out of 10 numbers
*/

void main(){
    int i = 1, max = 0, tmp;

    while(i<=10){
        printf("\n Enter any number \t");
        scanf("%d", &tmp);

        if(max < tmp){
            max = tmp;
        }

        i++;
    }

    printf("\n Maximum is %d", max);
}
