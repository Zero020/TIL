
public class examCarAutomobile {
	public static void main(String args[]) {
		Automobile auto = new Automobile();
		
		auto.upSpeed(250);
		
		System.out.println(auto.getSpeed());
		
		
		Car a = new Car();
		a.upSpeed(230);
		System.out.println(a.getSpeed());
	}
}
