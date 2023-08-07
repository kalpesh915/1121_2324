/**
    type        :   short unsigned int
    bytes       :   2
    bits        :   16
    use         :   16
    sign bit    :   0 byte
    range       :   2 ^ 16
    format char :   %u
*/

#include<stdio.h>

void main(){
    short unsigned int ip;
    printf("\n size of short unsigned int is %d Bytes", sizeof(ip));
    printf("\n Enter any value for ip \t");
    scanf("%u", &ip);
    printf("\n value of ip is %u", ip);
}
