
public class examAnimal {
	public static void main(String args[]) {
		Tiger tiger1 = new Tiger();
		Eagle eangle1 = new Eagle();
		
		tiger1.move();
		eangle1.move();
		
		Animal animal;
		
		animal = new Tiger();
		animal.move();
		
		animal = new Eagle();
		animal.move();
	}
}
