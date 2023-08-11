#include<stdio.h>

/**
    bitwise xor operator
    return 0 if both bits are same
*/

void main(){
    int ip1, ip2, ans;

    ip1 = 10;           ///     1010
    ip2 = 12;           ///     1100

    ans = ip1 ^ ip2;    ///     0110

    printf("\n Answer is %d ", ans);
}
