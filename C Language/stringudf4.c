#include<stdio.h>

/**
    create UDF for compare both strings
    laxicographcaly

    Rajkot
    ======
    Rajkot
*/

int stringCompare(char[], char[]);

void main(){
    char ip1[100], ip2[100];
    int ans;

    printf("\n Enter any String \t");
    gets(ip1);
    printf("\n Enter any String \t");
    gets(ip2);

    ans = stringCompare(ip1, ip2);

    if(ans == 0){
        printf("\n Both Strings are same");
    }else{
        printf("\n Both Strings are not same");
    }
}

int stringCompare(char ip1[], char ip2[]){
    int count = 0, ans = 0;

    while(ip1[count] != '\0' || ip2[count] != '\0'){
        if(ip1[count] != ip2[count]){
            ans = ip1[count] - ip2[count];
            break;
        }
        count++;
    }

    return ans;
}
