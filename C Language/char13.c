#include<stdio.h>

/**
    create own character functions

    isAlphabet()
    A-Z = 65-90
    a-z = 97-122
*/

int isAplhabet(char);

void main(){
    char c;

    printf("\n Enter any character \t");
    c = getche();

    if(isAplhabet(c)){
        printf("\n True");
    }else{
        printf("\n False");
    }
}

int isAplhabet(char c){
    if((c >= 65 && c <= 90) || (c >= 97 && c <= 122)){
        return 1;
    }else{
        return 0;
    }
}
