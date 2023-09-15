#include<stdio.h>
#include<string.h>

/**
    convert string to lowercase
*/

void main(){
    char ip1[100], ip2[100];
    int ans;

    printf("\n Enter any string \t");
    gets(ip1);
    strlwr(ip1);
    printf("\n String 1 is %s", ip1);
}
