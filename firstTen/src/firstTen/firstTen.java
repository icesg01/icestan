package firstTen;

import java.util.Scanner;

public class firstTen {

	public static void main(String args[]){
		Scanner keyboard = new Scanner(System.in);
		double[] newArray = new double[11];
		System.out.println("the first ten divided by the 11th is " + populateArray(newArray,keyboard));
		System.out.println("test 2");
		System.out.println("hi");

		
		
	}
	
	public static double populateArray(double[] numbers,Scanner scan){
		double sum = 0;
		for(int x = 0; x < numbers.length -1;x++){
			numbers[x] = readDouble("please enter the next number",scan);
			sum += numbers[x];
		}
		numbers[numbers.length - 1] = readDouble("please input last number",scan);
		
		return divideByLast(sum,numbers[numbers.length - 1]);
	}
	
	public static double readDouble(String prompt,Scanner scan){
		System.out.println(prompt);
		double newDouble = scan.nextDouble();
		return newDouble;
	}
	
	public static double divideByLast(double sum,double lastNumber){
		return sum / lastNumber;
	}
	
	
}
