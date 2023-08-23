#include<stdio.h>

/**
    print following pattern with use of nested for loop
    A
    AB
    ABC
    ABCD
    ABCDE
*/

void main(){
    char i, j;

    for(i='A'; i<='E'; i++){
        for(j='A'; j<=i; j++){
            printf("%c", j);
        }
        printf("\n");
    }

}
