#include<stdio.h>
#include<stdlib.h>
/**
    calloc(size, number of block);
*/

void main(){
    int blocks, i, *ptr;

    printf("\n Enter number of Bytes to allocate memory \t");
    scanf("%d", &blocks);

    ptr = (int*)  calloc(sizeof(int), blocks);

    for(i=0; i<blocks; i++){
        printf("\n Address is %d and value is %d", ptr, *ptr);
        ptr++;
    }

    free(ptr);
}
