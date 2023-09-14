#include<stdio.h>

/**
    return_type function_name(parameter list){
        function body
    }

    UDF 4 : with parameter with return value
*/

int cube(int);

void main(){
    int ip;
    for(ip=1; ip <= 10; ip++){
        printf("\n Cube of %d is %d", ip, cube(ip));
    }
}

int cube(int i){
    return i * i * i;
}

