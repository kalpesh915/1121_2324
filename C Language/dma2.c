#include<stdio.h>
#include<stdlib.h>
/**
    malloc(number of bytes) + realloc(pointer, new size)

*/

void main(){
    int bytes, blocks, i,*ptr;

    printf("\n Enter number of Bytes to allocate memory \t");
    scanf("%d", &bytes);

    ptr = (int*) malloc(bytes);

    blocks = bytes / sizeof(int);

    for(i=0; i<blocks; i++){
        printf("\n Address is %d and value is %d", ptr, *ptr);
        ptr++;
    }

    printf("\n Enter new size of bytes to allocate memory \t");
    scanf("%d", &bytes);
    realloc(ptr, bytes);

    blocks = bytes / sizeof(int);

    for(i=0; i<blocks; i++){
        printf("\n Address is %d and value is %d", ptr, *ptr);
        ptr++;
    }

    free(ptr);
}
