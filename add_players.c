#include <stdio.h>
#include <string.h>

int main(int argc, char *argv[]){
	char playerName[20];
	int ok = 1;
	FILE * file = fopen("players.txt", "r+");
	if (file){
		while (!feof(file)){
			fscanf(file, "%s", playerName);
			if (strcmp(playerName, argv[1]) == 0){
				ok = 0;
			}
		}
	}
	if (ok){
		fprintf(file,"%s\n", argv[1]);
	}
	printf("%d", ok);
}
