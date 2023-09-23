#include<stdio.h>

/**
    read data from file character by character
*/

void main(){
    FILE *fp;
    char c;

    fp = fopen("data2.txt", "r");
    while(!feof(fp)){
        c = fgetc(fp);
        printf(" %c", c);
    }
    fclose(fp);
}
