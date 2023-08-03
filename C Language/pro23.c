/// find area of circle
#include<stdio.h>

void main(){
    float pi = 3.14, radius, area;

    printf("\n Enter Radius of circle \t");
    scanf("%f", &radius);

    area = pi * radius * radius;
    printf("\n Area of Circle is %f", area);
}
