#include<stdio.h>

/**
    print following pattern with use of nested for loop

     *
    * *
   * * *
  * * * *
 * * * * *
*/

void main(){
    int i, j, s;

    /// loop for rows
    for(i=1; i<=5; i++){

        /// loop for space
        for(s=4; s>=i; s--){
            printf(" ");
        }

        for(j=1; j<=i; j++){
            printf(" *");
        }
        printf("\n");
    }

}
