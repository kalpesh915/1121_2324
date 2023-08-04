#include<stdio.h>

/**
    basic arithmatic operation
*/

void main(){
    int ip1, ip2;

    printf("\n Enter value of ip1 \t");
    scanf("%d", &ip1);
    printf("\n Enter value of ip2 \t");
    scanf("%d", &ip2);

    printf("\n sum of ip1 and ip2 is %d", ip1 + ip2);
    printf("\n sub of ip1 and ip2 is %d", ip1 - ip2);
    printf("\n mul of ip1 and ip2 is %d", ip1 * ip2);
    printf("\n div of ip1 and ip2 is %d", ip1 / ip2);
    printf("\n mod of ip1 and ip2 is %d", ip1 % ip2);
}
