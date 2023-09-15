#include<stdio.h>
#include<string.h>

/**
    reverse the string
*/

void main(){
    char ip[100];
    int ans;

    printf("\n Enter any string \t");
    gets(ip);

    strrev(ip);
    printf("\n New String is %s", ip);
}
