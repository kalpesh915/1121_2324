#include<stdio.h>

/**
    find minimum out of two numbers
*/

void main(){
    int ip1, ip2, ans;

    printf("\n Enter any number for ip1\t");
    scanf("%d", &ip1);
    printf("\n Enter any number for ip2\t");
    scanf("%d", &ip2);

    if(ip1 < ip2){
        ans = ip1;
    }else{
        ans = ip2;
    }

    printf("\n Minimum is %d", ans);
}
