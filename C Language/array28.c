#include<stdio.h>

/**
    character array also known as string
    0123456
    rajkot\0

    \0 is known as string terminator indicate end of string
*/

void main(){
    char city[20];
    int i=0;
    printf("\n Enter city name \t");
    gets(city);

    while(city[i] != '\0'){
        printf(" %c", city[i]);
        i++;
    }
}
