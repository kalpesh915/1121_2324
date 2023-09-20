#include<stdio.h>

/**
    enumeration
    user defined data type with specific values
*/

enum days {sunday=1, monday, tuesday, wednesday, thursday, friday, saturday};

void main(){
    enum days d1;
    d1 = friday;
    printf("\n Day 1 is %d", d1);
}
