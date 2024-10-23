
public class Automobile extends Car {//Car클래스로부터 상속
	int seatNum;
	
	int getSeatNum() {
		return seatNum;
	}
	
	void upSpeed(int value) {
		if (speed + value >= 300)
			speed = 300;
		else
			speed = speed + (int)value;
	}//Car클래스의 upSpeed 함수를 무시하고 오버라이딩 메소드한다.
}
