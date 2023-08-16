#include<stdio.h>

/**
    find maximum number out of 3 numbers
    use with ladder if
*/

void main(){
    int ip1, ip2, ip3, ans;

    printf("\n Enter any number for ip1 \t");
    scanf("%d", &ip1);
    printf("\n Enter any number for ip2 \t");
    scanf("%d", &ip2);
    printf("\n Enter any number for ip3 \t");
    scanf("%d", &ip3);


    if(ip1 > ip2 && ip1 > ip3){
        ans = ip1;
    }else if(ip2 > ip1 && ip2 > ip3){
        ans = ip2;
    }else{
        ans = ip3;
    }

    printf("\n Maximum is %d", ans);
}
