/**
    find average of three numbers
*/

#include<stdio.h>

void main(){
    int ip1, ip2, ip3, total;
    float average;

    printf("\n Enter value for ip1 \t");
    scanf("%d", &ip1);
    printf("\n Enter value for ip2 \t");
    scanf("%d", &ip2);
    printf("\n Enter value for ip3 \t");
    scanf("%d", &ip3);

    total = ip1 + ip2 + ip3;
    average = (float) total / 3;

    printf("\n Average is %f", average);
}
