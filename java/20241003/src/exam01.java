
public class exam01 {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		int one[] = new int[3]; //***
		
		for (int i = 0; i < one.length; i++) {
			one[i] = 10*i;//0.10.20
		}
		
		String two[] = {"하나", "둘", "셋"};
		for (String str: two) { //two에서 str검색하기-> 가독성
			System.out.println(str);
		}
		int j = 0;
		
		while (j < one.length) {
			System.out.println(one[j]);
			j++;
		}

	}

}
