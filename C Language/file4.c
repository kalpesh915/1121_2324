#include<stdio.h>

/**
    read data from file character by character
*/

void main(){
    FILE *fp;
    char c;

    fp = fopen("data2.txt", "r");
    c = fgetc(fp);
    printf("%c", c);
    c = fgetc(fp);
    printf("%c", c);
    c = fgetc(fp);
    printf("%c", c);
    c = fgetc(fp);
    printf("%c", c);
    fclose(fp);
}
