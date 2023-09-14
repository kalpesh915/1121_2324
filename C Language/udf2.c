#include<stdio.h>

/**
    return_type function_name(parameter list){
        function body
    }

    UDF 1 : no parameter no return value
*/

void msg(); /// declaration

void main(){
    int i;
    for(i=1; i<=10; i++){
        msg(); /// calling
    }
}

void msg(){ /// definition
    printf("\n Welcome to world of UDF in C Language");
}
