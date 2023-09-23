#include<stdio.h>

/**
    read data from file line by line
*/

void main(){
    FILE *fp;
    char ip[100];

    fp = fopen("data2.txt", "r");
    fgets(ip, 100, fp);
    printf("\n Data From file is %s", ip);
    fclose(fp);
}
