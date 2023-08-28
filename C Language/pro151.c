#include<stdio.h>

/**
    check entered number is armstronmg number or not

    371

    3   =   027
    7   =   343
    1   =   001
            371

    153, 370, 371, 407
*/

void main(){
    int ip, tmp, num, cube, ans = 0;

    printf("\nEnter value for ip \t");
    scanf("%d", &ip);

    tmp = ip;

    while(tmp > 0){
        num = tmp % 10;
        cube = num * num * num;
        ans += cube;
        tmp = tmp / 10;
    }

    if(ip == ans){
        printf("\n Number is Armstrong");
    }else{
        printf("\n Try Another Number");
    }
}
