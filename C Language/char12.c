#include<stdio.h>
#include<ctype.h>

void main(){
    char c;

    printf("\n Enter any character \t");
    c = getche();

    printf("\n Character in lower is %c", tolower(c));
    printf("\n Character in upper is %c", toupper(c));
}
