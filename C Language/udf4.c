#include<stdio.h>

/**
    return_type function_name(parameter list){
        function body
    }

    UDF 3 : no parameter with return value
*/

float pi();

void main(){
    float ans;
    ans = pi();
    printf("\n Answer is %f", ans);
    printf("\n Answer is %f", pi());
}

float pi(){
    return 3.147;
}
