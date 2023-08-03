/// find simple interest
#include<stdio.h>

void main(){
    float pri, roi, noy, si;

    printf("\n Enter principal amount \t"); /// mudal
    scanf("%f", &pri);
    printf("\n Enter rate of interest \t"); /// vyajdar
    scanf("%f", &roi);
    printf("\n Enter number of years \t"); /// muddat
    scanf("%f", &noy);


    si = (pri * roi * noy ) / 100;

    printf("\n Simple Interest is %f ", si);
}
