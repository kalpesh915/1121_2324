#include<stdio.h>

/**
    append data in file
*/

void main(){
    FILE *fp;

    fp = fopen("data4.txt", "a");
    fputs("Welcome to world of files with C Language\n", fp);
    fclose(fp);
}
