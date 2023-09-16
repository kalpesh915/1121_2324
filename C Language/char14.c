#include<stdio.h>

/**
    create own character functions

    isUppercase()
    A-Z = 65-90
*/

int isUppercase(char);

void main(){
    char c;

    printf("\n Enter any character \t");
    c = getche();

    if(isUppercase(c)){
        printf("\n True");
    }else{
        printf("\n False");
    }
}

int isUppercase(char c){
    if((c >= 65 && c <= 90)){
        return 1;
    }else{
        return 0;
    }
}
