/**
    simple light bill
*/

#include<stdio.h>

void main(){
    int startunit, endunit, diff, rate, bill;

    printf("\n Enter starting units \t");
    scanf("%d", &startunit);
    printf("\n Enter Ending units \t");
    scanf("%d", &endunit);

    diff = endunit - startunit;
    printf("\n Total Consumpted units is %d", diff);
    printf("\n Enter rate / unit \t");
    scanf("%d", &rate);

    bill = rate * diff;
    printf("\n Payable bill is %d", bill);
}
