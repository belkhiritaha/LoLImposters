#include <stdio.h>

int main(){
    FILE * file = fopen("isGameDone.txt","w");
    fprintf(file,"%d",1);
}