
public class exam2 {
	static int var = 100;
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		 int var = 0;
		 
		 System.out.println(var);
		 
		 int sum = addFunction(10, 20);
		 System.out.println(sum);
	}
	
	static int addFunction (int num1, int num2) {
		int hap;
		hap = num1 + num2; //전역함수
		return hap;
	}

}

//메소드와 전역변수(멤버변수), 지역변수