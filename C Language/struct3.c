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

    printf("\n Enter roll Number \t");
    scanf("%d", &std1.roll);
    printf("\n Enter student name \t");
    scanf("%s", &std1.name);
    printf("\n Enter Marks \t");
    scanf("%f", &std1.marks);

    printf("\n Roll No. is %d", std1.roll);
    printf("\n Name is %s", std1.name);
    printf("\n Marks is %f", std1.marks);
}
