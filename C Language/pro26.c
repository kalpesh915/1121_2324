/// convert temprature from fahrenheit to celsius
#include<stdio.h>

void main(){
    float celsius, fahrenheit;

    printf("\n Enter Temrature in Fahrenheit \t");
    scanf("%f", &fahrenheit);

    celsius = (fahrenheit - 32) * 5 / 9;

    printf("Temprature in Celsius is %f",celsius);
}
