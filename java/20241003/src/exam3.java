
public class exam3 {
	public static void main(String[] args) {
		int num = 100, num2 = 0;
		
		try {
			System.out.println(num/num2);
		}
		catch (java.lang.ArithmeticException e) {
			System.out.println("오류발생");
		}
		finally { //무조건 실행
			System.out.println("ㅍ아러ㅏ");
		}
	}
}


