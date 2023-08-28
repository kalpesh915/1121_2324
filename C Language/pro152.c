#include<stdio.h>

/**
    check entered number is prime number or not

    divisible by 1 or itself
    1, 3, 5, 7, 11, 13, 17, 19, 23, 29
*/

void main(){
    int ip, i, flag = 0;

    printf("\n Enter any number \t");
    scanf("%d", &ip);

    for(i=2; i<ip; i++){
        if(ip %i == 0){
            flag = 1;
            break;
        }
    }

    if(flag == 1){
        printf("\n Number is not prime");
    }else{
        printf("\n Number is prime");
    }
}
