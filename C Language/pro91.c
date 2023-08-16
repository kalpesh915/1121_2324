#include<stdio.h>

/**
    check year is leap year or not
*/

void main(){
    int year;

    printf("\n Enter any year \t");
    scanf("%d", &year);

    if(year %4 == 0){
        printf("\n Leap Year");
    }else{
        printf("\n Non Leap Year");
    }
}
