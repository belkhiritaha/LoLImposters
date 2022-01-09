#include <stdio.h>
#include <string.h>

int main(int argc, char *argv[]){
	char playerName[20];
	int imposterIndex1 = 0;
	int imposterIndex2 = 0;
	FILE * nameFile = fopen("players.txt", "r+");
	FILE * roleFile = fopen("imposters.txt", "r+");

	int playerIndex = 0;
	if (nameFile && roleFile){
		fscanf(roleFile, "%d", &imposterIndex1);
		fscanf(roleFile, "%d", &imposterIndex2);
		//printf("%d %d\n", &imposterIndex1);
		while (!feof(nameFile)){
			fscanf(nameFile, "%s", playerName);
			playerIndex++;
			if (strcmp(playerName, argv[1]) == 0){
				int output = 0;
				if (playerIndex == imposterIndex1 || playerIndex == imposterIndex2){
					output = 1;
				}
				//printf("%d", output);
			}
		}
	}
}
