#include<stdio.h>

/**
    read data from file line by line
    print position of read pointer
*/

void main(){
    FILE *fp;
    char ip[100];

    fp = fopen("data3.txt", "r");
    printf("\n Read Pointer location is %d", ftell(fp));
    fgets(ip, 100, fp);
    printf("\n Read Pointer location is %d", ftell(fp));
    fgets(ip, 100, fp);
    printf("\n Read Pointer location is %d", ftell(fp));
    fclose(fp);
}
