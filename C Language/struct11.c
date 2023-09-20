#include<stdio.h>

/**
    enumeration
    user defined data type with specific values
*/

enum boolean {false, true};

void main(){
    enum boolean status;
    status = false;

    if(status){
        printf("\n Condition is True");
    }else{
        printf("\n Condition is False");
    }
}
