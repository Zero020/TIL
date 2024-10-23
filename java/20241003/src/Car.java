
public class Car {
	String color;
	int speed;
	static int carCount = 0;
	final static int MAXSPEED = 200;
	final static int MINSPEED = 0;
	
	static int currentCarCount() {
		return carCount;
	}
	
	
	Car(String color, int speed){
		this.color = color;
		this.speed = speed;
		carCount++;
	}
	
	Car(int speed){
		this.speed = speed;
	}
	
	Car(){
		//파라메타 변수를 변경하여 생성자 3개 생성= 오버로딩(변수의 개수로 함수 작동)
	}
	
	void upSpeed(double value) {
		if (speed >= 200)
			speed = 200;
		else
			speed = speed + (int) value;
	}
	
	int getSpeed() {
		return speed;
	}
	
	void upSpeed(int value) {
		if (speed >= 200) {
			speed = 200;
		}
		else {
			speed = speed - value;
		}
	}
	
	String getColor() {
		return color;
	}
}


