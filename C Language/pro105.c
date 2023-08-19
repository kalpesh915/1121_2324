#include<stdio.h>

/**
    simple switch case
    without break
*/

void main(){
    int ip;

    printf("\n Enter value for ip \t");
    scanf("%d", &ip);

    switch(ip){
        case 1:{
            printf("\n January");
        }
        case 2:{
            printf("\n February");
        }
        case 3:{
            printf("\n March");
        }
        case 4:{
            printf("\n April");
        }
        case 5:{
            printf("\n May");
        }
        case 6:{
            printf("\n June");
        }
        case 7:{
            printf("\n July");
        }
        case 8:{
            printf("\n August");
        }
        case 9:{
            printf("\n September");
        }
        case 10:{
            printf("\n October");
        }
        case 11:{
            printf("\n November");
        }
        case 12:{
            printf("\n December");
        }
        default:{
            printf("\n value is Out of Range");
            break;
        }
    }
}
