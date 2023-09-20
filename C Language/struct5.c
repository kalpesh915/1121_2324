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

#define size 5

void main(){
    struct student std[size];
    int i;


    for(i=0; i<size; i++){
        printf("\n Enter roll Number for %d \t",i);
        scanf("%d", &std[i].roll);
        printf("\n Enter student name for %d \t",i);
        scanf("%s", &std[i].name);
        printf("\n Enter Marks for %d \t",i);
        scanf("%f", &std[i].marks);
    }

    printf("\n Entered Data is ");

    for(i=0; i<size; i++){
        printf("\n Welcome %s Your Roll No. is %d and Marks is %f", std[i].name, std[i].roll, std[i].marks);
    }

}
