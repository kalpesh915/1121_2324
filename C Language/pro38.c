/**
    type        :   short signed int
    bytes       :   2
    bits        :   16
    use         :   15
    sign bit    :   1 byte
    range       :   2 ^ 15
    format char :   %d
*/

#include<stdio.h>

void main(){
    short signed int ip;
    printf("\n size of short signed int is %d Bytes", sizeof(ip));
    printf("\n Enter any value for ip \t");
    scanf("%d", &ip);
    printf("\n value of ip is %d", ip);
}
