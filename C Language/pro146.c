#include<stdio.h>

/**
    sum of all digits in entered number

    ex. 125454 = 21
*/

void main(){
    int ip, ans = 0;

    printf("\n Enter any number \t");
    scanf("%d", &ip);

    while(ip > 0){
        ans += ip % 10;
        ip = ip / 10;
    }

    printf("\n Total of Digits is %d", ans);
}
