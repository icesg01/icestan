package firstTen;

public class subStringTest {

	public static void main(String args[]) {

		String price = "$2209090.99";

		System.out.println(convertString(price) + 3);

	}

	public static double convertString(String price) {

		String parseDouble = price.substring(1, price.length());

		double d = Double.parseDouble(parseDouble);

		return d;

	}

}
