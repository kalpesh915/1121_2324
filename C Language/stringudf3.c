#include<stdio.h>

/**
    create UDF for convert entered string in lowercase
    a-z = 97-122
    A-Z = 65-90
*/

void stringLowercase(char[]);

void main(){
    char ip[100];

    printf("\n Enter any String \t");
    gets(ip);

    stringLowercase(ip);
}

void stringLowercase(char ip[]){
    int count = 0;

    while(ip[count] != '\0'){
        if(ip[count] >= 65 && ip[count] <= 90){
            ip[count] = ip[count] + 32;
        }
        count++;
    }
    printf("\n New String is %s", ip);
}
