#include<stdio.h>

/**
    ternary operator
    ans = (condition ? true value : false value)

    find maximum out of two numbers
*/

void main(){
    int ip1, ip2, ans;

    printf("\n Enter value for ip1 \t");
    scanf("%d", &ip1);
    printf("\n Enter value for ip2 \t");
    scanf("%d", &ip2);

    ans = (ip1 > ip2 ? ip1 : ip2);

    printf("\n Maximum is %d", ans);
}
