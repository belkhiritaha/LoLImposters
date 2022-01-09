#include <stdio.h>
#include <string.h>

int main(int argc, char * argv[]){
    char playerName[20];
    int playerVote;
    if (argc == 2){
        FILE * nameFile = fopen("players.txt", "r");
        FILE * voteFile = fopen("voteList.txt", "r");

        FILE * destFile = fopen("destFilevotes.txt", "w");

        if (nameFile && voteFile && destFile){
            while (!feof(nameFile)){
                fscanf(nameFile, "%s", playerName);
                fscanf(voteFile, "%d", &playerVote);
                if (strcmp(playerName, argv[1]) == 0){
                    playerVote++;
                }
                fprintf(destFile, "%d\n", playerVote);
            }
        }
        fclose(destFile);
        fclose(voteFile);

        FILE * tmpFile = fopen("destFilevotes.txt", "r");
        FILE * newFile = fopen("voteList.txt", "w");

        if (newFile && tmpFile){
            while (!feof(tmpFile))
            {
                fscanf(tmpFile, "%d", &playerVote);
                fprintf(newFile, "%d\n", playerVote);
            }
            
        }
    }
}