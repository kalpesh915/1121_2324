#include<stdio.h>

/**
    structure allow us to combine variable of multiple data types
*/

struct student{
    int roll;       /// 04
    char name[20];  /// 20
    float marks;    /// 04
                    /// 28
};

void main(){
    struct student std1;
    printf("\n Size of Structure is %d Bytes", sizeof(std1));
}
