#include<stdio.h>
void enter(char s[7][4]){
   printf(" _____ _____ _____ _____\n");
   printf("|  %c  |  %c  |  %c  |  %c  |\n",s[0][0],s[0][1],s[0][2],s[0][3]);
   printf("|_____|_____|_____|_____|\n");
   printf("|  %c  |  %c  |  %c  |  %c  |\n",s[1][0],s[1][1],s[1][2],s[1][3]);
   printf("|_____|_____|_____|_____|\n");
   printf("|  %c  |  %c  |  %c  |  %c  |\n",s[2][0],s[2][1],s[2][2],s[2][3]);
   printf("|_____|_____|_____|_____|\n");
   printf("|  %c  |  %c  |  %c  |  %c  |\n",s[3][0],s[3][1],s[3][2],s[3][3]);
   printf("|_____|_____|_____|_____|\n");
   printf("|  %c  |  %c  |  %c  |  %c  |\n",s[4][0],s[4][1],s[4][2],s[4][3]);
   printf("|_____|_____|_____|_____|\n");
   printf("|  %c  |  %c  |  %c  |  %c  |\n",s[5][0],s[5][1],s[5][2],s[5][3]);
   printf("|_____|_____|_____|_____|\n");
   printf("|  %c  |  %c  |  %c  |  %c  |\n",s[6][0],s[6][1],s[6][2],s[6][3]);
   printf("|_____|_____|_____|_____|\n");
}

void main(){
    char S[7][4] = {
        {' ','*','*','*' },
		{'*',' ',' ',' ' },
		{'*',' ',' ',' ' },
		{' ','*','*',' ' },
		{' ',' ',' ','*' },
		{' ',' ',' ','*' },
		{'*','*','*',' ' },
			};

    char letter_S[7][4]={
   	    {'0','1','1','1' },
		{'1','0','0','0' },
		{'1','0','0','0' },
		{'0','1','1','0' },
		{'0','0','0','1' },
		{'0','0','0','1' },
		{'1','1','1','0' }
    };

    char ans[7][4];

    int i,j;
    for(i = 0; i < 7; i++){
        for(j = 0; j < 4; j++){
            printf(" %c", S[i][j]);
        }
        printf("\n");
    }
    for(i = 0; i < 7; ++i){
        for(j = 0; j < 4; j++){
            printf("Enter 0 or 1 at position ans[%d][%d];",i,j);
            scanf("%s", &ans[i][j]);
        }
    }
    enter(ans);

    int score = 0;
    for(i = 0; i < 7; i++){
        for(j = 0;j < 4; j++){
            if(ans[i][j] == letter_S[i][j])
                score++;
            
        }
    }
	printf("The final score of the student is: %d", score);		
    }
