import java.util.*;

public class Main {
  public static void main(String[] args) {
  Scanner s = new Scanner(System.in);
  	System.out.println("Enter a number : ");
    int n = s.nextInt();
    int i,j;
    for(i=n; i>0; i--)
    {
    	for(j=n; j>=i; j--)
        {
        	System.out.print(j);
        }
        System.out.println("");
    }
  }
}
