#include<stdio.h>
#include<string.h>

/**
    find length of string
*/

void main(){
    char ip[100];
    int ans;

    printf("\n Enter any string \t");
    gets(ip);

    ans = strlen(ip);
    printf("\n Answer is %d", ans);
}
