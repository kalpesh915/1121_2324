/**
    type        :   long signed int
    bytes       :   4
    bits        :   32
    use         :   31
    sign bit    :   1 byte
    range       :   2 ^ 31
    format char :   %ld
*/

#include<stdio.h>

void main(){
    long signed int ip;
    printf("\n size of short unsigned int is %d Bytes", sizeof(ip));
    printf("\n Enter any value for ip \t");
    scanf("%ld", &ip);
    printf("\n value of ip is %ld", ip);
}
