
public class examCar {
	public static void main(String args[]) {
		Car myCar1 = new Car();
		myCar1.color = "빨강";
		myCar1.speed = 0;
		
		Car myCar2 = new Car();
		myCar2.color = "파랑";
		myCar2.speed = 0;
		
		
		myCar1.upSpeed(100);
		System.out.println(myCar1.getColor());
		
		
	}
}
