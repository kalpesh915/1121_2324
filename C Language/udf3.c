#include<stdio.h>

/**
    return_type function_name(parameter list){
        function body
    }

    UDF 2 : with parameter no return value
*/

void sum(int, int);

void main(){
    int ip1, ip2;
    printf("\n Enter value for ip1 \t");
    scanf("%d", &ip1);
    printf("\n Enter value for ip2 \t");
    scanf("%d", &ip2);
    sum(ip1, ip2);
}

void sum(int i, int j){
    printf("\n Sum is %d", i + j);
}
