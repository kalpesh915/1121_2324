#include<stdio.h>

/**
    write data in file, data must get from keyboard
*/

void main(){
    FILE *fp;
    char ip[100];

    fp = fopen("data1.txt", "w");
    printf("\n Enter any string to write in File \t");
    gets(ip);

    fputs(ip, fp);
    fclose(fp);
}
