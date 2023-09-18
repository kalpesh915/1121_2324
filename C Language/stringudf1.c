#include<stdio.h>

/**
    create UDF for find length of entered string

    0123456
    Rajkot\0

    \0 = null character represent end of string
*/

int stringLength(char[]);

void main(){
    char ip[100];
    int ans;

    printf("\n Enter any String \t");
    gets(ip);

    ans = stringLength(ip);

    printf("\n Length of String is %d", ans);
}

int stringLength(char ip[]){
    int count = 0;

    while(ip[count] != '\0'){
        count++;
    }

    return count;
}
