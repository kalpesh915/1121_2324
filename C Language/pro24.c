/// find square and cube of entered number
#include<stdio.h>

void main(){
    int ip;

    printf("\n Enter value for ip \t");
    scanf("%d", &ip);

    printf("\n square of %d is %d", ip, ip * ip);
    printf("\n cube of %d is %d", ip, ip * ip * ip);
}
