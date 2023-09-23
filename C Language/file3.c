#include<stdio.h>

/**
    write data in file character by character
*/

void main(){
    FILE *fp;
    char c;

    fp = fopen("data2.txt", "w");
    printf("\n Enter data in file press X for exit \t");

    while(c != 'X'){
        c = getche();
        if(c == 'X'){
            break;
        }
        fputc(c, fp);
    }
    printf("\n File Writing Completed");
    fclose(fp);
}
