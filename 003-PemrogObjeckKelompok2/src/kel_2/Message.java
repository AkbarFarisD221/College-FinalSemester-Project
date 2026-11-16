package kel_2;

import java.util.Scanner;

public class Message
{
	    public void enter()
	    {
	    Scanner in = new Scanner(System.in);
	    System.out.println("- Tekan enter untuk melanjuti -");
		    try
		    {
		    System.in.read();
		    }  
		    catch(Exception e)
		    {
		        in.close();
		    }  
	    }
}
