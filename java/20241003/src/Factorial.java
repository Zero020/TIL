
public class Factorial {
	int num = 3;
	int i = 1;
	
	int result = 1;
	
	Factorial(int num){
		this.num = num;
	}
	void count(int num) {
		while(i <= num) {
			result *= i;
			i++;
		}
	}
		
	

	int getFactorial() {
		return result;
	}
	
	
	
	
}
