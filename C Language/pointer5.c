#include<stdio.h>

/**
    array to pointer
*/

void main(){
    int ip[] = {11, 22, 33, 44, 55, 66, 77, 88, 99, 111}, *ptr, i;

    ptr = &ip;
    for(i=0; i<10; i++){
        printf("\n ptr is %d and value is %d", ptr, *ptr);
        ptr++;
    }
}
