#include<stdio.h>

/**
    print entered number in reverse

    1234 = 4321
*/

void main(){
    int ip, ans = 0;

    printf("\n Enter any number \t");
    scanf("%d", &ip);

    while(ip > 0){
        ans = ans * 10;
        ans += ip % 10;
        ip = ip / 10;
    }

    printf("\n Reverse number is %d", ans);
}
