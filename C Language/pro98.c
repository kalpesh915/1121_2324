#include<stdio.h>

/**
    number divisible by 3 or not
*/

void main(){
    int ip1;

    printf("\n Enter value for ip1 \t");
    scanf("%d", &ip1);

    if(ip1 %3 == 0){
        printf("\n Number is divisible by 3");
    }else{
        printf("\n Number is not divisible by 3");
    }

}
