#include <stdio.h>
int main() {
	char v4[21] = "A]Kr=9k0=0o0;k1?k81t";
	int v1,v3=0;
	while (*v4!=0)
	{
		v1=v3++;
		if (v1>19)
			break;
		putchar((char)(v4[v1] ^ 9));
	}
	return putchar(0);
}
