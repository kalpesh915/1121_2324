#include<stdio.h>

/**
    character array also known as string
*/

void main(){
    char city[20];
    printf("\n Enter city name \t");
    ///scanf("%s",&city);
    gets(city);
    printf("\n Welcome to %s", city);
}
