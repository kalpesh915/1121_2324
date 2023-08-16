#include<stdio.h>

/**
    check entered both values are same or not
*/

void main(){
    int ip1, ip2;

    printf("\n Enter any number for ip1\t");
    scanf("%d", &ip1);
    printf("\n Enter any number for ip2\t");
    scanf("%d", &ip2);

    if(ip1 == ip2){
        printf("\n both values are same");
    }else{
        printf("\n values are not same");
    }

    printf("\n program is over");
}
