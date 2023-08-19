#include<stdio.h>

/**
    simple switch case
*/

void main(){
    int ip;

    printf("\n Enter value for ip \t");
    scanf("%d", &ip);

    switch(ip){
        case 1:{
            printf("\n value is One");
            break;
        }
        case 2:{
            printf("\n value is Two");
            break;
        }
        case 3:{
            printf("\n value is Three");
            break;
        }
        case 4:{
            printf("\n value is Four");
            break;
        }
        case 5:{
            printf("\n value is Five");
            break;
        }
        default:{
            printf("\n value is Out of Range");
            break;
        }
    }
}
