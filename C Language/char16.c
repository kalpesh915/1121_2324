#include<stdio.h>
#include<ctype.h>
/**
    count how many character, alphabets, uppercase, lowercase,
    digits, special characters, words in entered string
*/

void main(){
    char ip[100], c;
    int count=0, ac=0, uc=0, lc=0, scc=0, dc=0, wc=1;

    printf("\n Enter any string \t");
    gets(ip);

    while(ip[count] != '\0'){
        c = ip[count];

        if(isalpha(c)){
            ac++;
            if(isupper(c)){
                uc++;
            }else{
                lc++;
            }
        }else if(isdigit(c)){
            dc++;
        }else if(ispunct(c)){
            scc++;
        }else if(isspace(c)){
            wc++;
        }
        count++;
    }

    printf("\n Total Character is %d",count);
    printf("\n Total Alphabets are %d", ac);
    printf("\n Total Uppercase Alphabets are %d", uc);
    printf("\n Total Lowercase Alphabets are %d", lc);
    printf("\n Total Digits are %d", dc);
    printf("\n Total Special Character are %d", scc);
    printf("\n Total Word are %d", wc);
}

