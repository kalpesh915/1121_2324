/**
    type        :   long unsigned int
    bytes       :   4
    bits        :   32
    use         :   32
    sign bit    :   0 byte
    range       :   2 ^ 32
    format char :   %lu
*/

#include<stdio.h>

void main(){
    long unsigned int ip;
    printf("\n size of long unsigned int is %d Bytes", sizeof(ip));
    printf("\n Enter any value for ip \t");
    scanf("%lu", &ip);
    printf("\n value of ip is %lu", ip);
}
