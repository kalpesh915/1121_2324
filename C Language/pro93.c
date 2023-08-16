#include<stdio.h>

/**
    number is positive negative
    use with ladder if
*/

void main(){
    int ip1;

    printf("\n Enter any number \t");
    scanf("%d", &ip1);

    if(ip1 > 0){
        printf("\n Positive");
    }else if(ip1 < 0){
        printf("\n Negative");
    }else{
        printf("\n Zero");
    }
}
