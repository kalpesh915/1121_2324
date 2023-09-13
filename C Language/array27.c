#include<stdio.h>

/**
    character array also known as string
*/

void main(){
    char city[20];
    int i;
    printf("\n Enter city name \t");
    ///scanf("%s",&city);
    gets(city);

    for(i=0; i<20; i++){
        printf(" %c", city[i]);
    }
}
