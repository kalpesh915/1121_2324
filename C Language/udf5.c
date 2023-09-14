#include<stdio.h>

/**
    return_type function_name(parameter list){
        function body
    }

    UDF 4 : with parameter with return value
*/

int cube(int);

void main(){
    int ip, ans;
    printf("\n Enter value for find cube \t");
    scanf("%d", &ip);
    ans = cube(ip);
    printf("\n Cube of %d is %d", ip, ans);
}

int cube(int i){
    return i * i * i;
}

