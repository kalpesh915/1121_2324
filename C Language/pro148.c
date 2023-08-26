#include<stdio.h>

/**
    check enetered number is palindrome or not
*/

void main(){
    int ip, tmp, ans = 0;

    printf("\n Enter any value for ip \t");
    scanf("%d",&ip);

    tmp = ip;

    while(ip > 0){
        ans = ans * 10;
        ans = ans + ip % 10;
        ip = ip / 10;
    }

    if(tmp == ans){
        printf("\n Number is Palindrome");
    }else{
        printf("\n Try another Number");
    }
}
