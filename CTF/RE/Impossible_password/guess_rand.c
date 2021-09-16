#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main(int argc, char* argv[])
{
	int i,v1 = time(0);
	char *v3;
	int seed = 0x17DA710;
	srand(20*v1 + ++seed);
	v3 = (char*)malloc(20+1);
	if (!v3) exit(1);
	for(i=0;i<20;i++)
		v3[i] = rand() % 94 + 33;
	v3[20] = 0;
	printf("%s\n", v3);
	return v3;
}
