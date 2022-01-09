#include <stdlib.h>
#include <stdio.h>
#include <time.h>

int main(){
    srand(time(NULL));
    FILE * file = fopen("imposters.txt", "w");
    int rand_int1 = rand() % 5;
    fprintf(file,"%d",rand_int1);
    
    fprintf(file,"%s","\n");

    int rand_int2 = rand() % 5;
    while (rand_int2 == rand_int1){
        rand_int2 = rand() % 5;
    }
    fprintf(file,"%d",rand_int2);
    FILE * file2 = fopen("players.txt", "w");
    FILE * file3 = fopen("votes.txt", "w");
    if (file3){
        for (int i = 0; i < 5; i++){
            fprintf(file3, "%d\n", 0);
        }
    }
    FILE * file4 = fopen("isGameDone.txt", "w");
    fprintf(file4, "%d", 0);

    FILE * file5 = fopen("switch.txt", "w");
    fprintf(file5, "%d", rand()%5);

    FILE * file6 = fopen("voteList.txt", "w");
    for (int i = 0; i < 5; i++){
        fprintf(file6, "%d\n", 0);
    }
}
