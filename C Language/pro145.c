#include<stdio.h>

/**
    count how many digits in entered number

    ex. 125454 = 6
*/

void main(){
    int ip, ans = 0;

    printf("\n Enter any number \t");
    scanf("%d", &ip);

    while(ip > 0){
        ans++;
        ip = ip / 10;
    }

    printf("\n Total Digits are %d", ans);
}
