#include<stdio.h>

/**
    separate odd and even values in different arrays
*/

#define size 10

void main(){
    int ip1[size], odd[size], even[size], i, oc=0, ec=0;

    /// get values in array 1
    for(i=0; i<size; i++){
        printf("\n Enter value for ip1[%d] \t",i);
        scanf("%d", &ip1[i]);
    }

    /// separate odd and even values
    for(i=0; i<size; i++){
        if(ip1[i] %2 == 0){
            even[ec] = ip1[i];
            ec++;
        }else{
            odd[oc] = ip1[i];
            oc++;
        }
    }

    printf("\n Even values are \n");
    for(i=0; i<ec; i++){
        printf(" %d", even[i]);
    }

    printf("\n Odd values are \n");
    for(i=0; i<oc; i++){
        printf(" %d", odd[i]);
    }
}
