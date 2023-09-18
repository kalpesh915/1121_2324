#include<stdio.h>

/**
    create UDF for concat both strings

    rajkot
    city

    ans = rajkotcity
*/

void stringConcat(char[], char[]);

void main(){
    char ip1[100], ip2[100];

    printf("\n Enter any String \t");
    gets(ip1);
    printf("\n Enter any String \t");
    gets(ip2);

    stringConcat(ip1, ip2);
}

void stringConcat(char ip1[], char ip2[]){
    char ans[200];
    int count = 0, ip = 0;

    while(ip1[count] != '\0'){
        ans[count] = ip1[count];
        count++;
    }

    ip = count;
    count = 0;
    while(ip2[count] != '\0'){
        ans[ip] = ip2[count];
        count++;
        ip++;
    }
    printf("\n New String is %s", ans);
}
