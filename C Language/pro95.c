#include<stdio.h>

/**
    check entered number between 0 to 100
*/

void main(){
    int ip;

    printf("\n Enter value for ip \t");
    scanf("%d", &ip);

    if(ip >= 0 && ip <= 100){
        printf("\n value between range");
    }else{
        printf("\n value out if range");
    }
}
