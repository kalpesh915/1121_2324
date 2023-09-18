#include<stdio.h>

/**
    create UDF for convert entered string in uppercase
    a-z = 97-122
    A-Z = 65-90
*/

int stringUppercase(char[]);

void main(){
    char ip[100];

    printf("\n Enter any String \t");
    gets(ip);

    stringUppercase(ip);
}

int stringUppercase(char ip[]){
    int count = 0;

    while(ip[count] != '\0'){
        if(ip[count] >= 97 && ip[count] <= 122){
            ip[count] = ip[count] - 32;
        }
        count++;
    }
    printf("\n New String is %s", ip);
}
