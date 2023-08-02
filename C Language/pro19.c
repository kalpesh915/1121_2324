#include<stdio.h>
/// width of integer
void main(){
    int ip1, ip2, ans;

    printf("\n Enter value for ip1 \t");
    scanf("%d", &ip1);
    printf("\n Enter value for ip2 \t");
    scanf("%d", &ip2);

    ans = ip1 + ip2;

    printf("\n ip1 is %5d", ip1);
    printf("\n ip2 is %5d", ip2);
    printf("\n ans is %5d", ans);
}
