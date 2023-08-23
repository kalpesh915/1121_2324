#include<stdio.h>

/**
    print following pattern with use of nested for loop
    A
    BB
    CCC
    DDDD
    EEEEE
*/

void main(){
    char i, j;

    for(i='A'; i<='E'; i++){
        for(j='A'; j<=i; j++){
            printf("%c", i);
        }
        printf("\n");
    }

}
