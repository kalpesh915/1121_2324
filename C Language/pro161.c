#include<stdio.h>

/**
    goto
*/

void main(){
    int ip;

    /// question is known as label
    question:
    printf("\n 10 * 10 = ? \t");
    scanf("%d", &ip);

    if(ip == 100){
        printf("\n Correct answer ");
    }else{
        goto question;
    }
}
