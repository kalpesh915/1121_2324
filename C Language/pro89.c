#include<stdio.h>

/**
    check age is valid or not
*/

void main(){
    int age;

    printf("\n Enter your age \t");
    scanf("%d", &age);

    if(age >= 18){
        printf("\n Welcome for voting");
    }else{
        printf("\n try in next election");
    }
}
