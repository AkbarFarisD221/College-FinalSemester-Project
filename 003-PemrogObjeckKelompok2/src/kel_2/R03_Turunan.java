package kel_2;
import java.util.Scanner;

public class R03_Turunan 
{
	 public void turnu() 
	    // Who wrote this comment section? dont even ask.
	    {
	        Scanner in = new Scanner(System.in);
	        int pil2 = 0;
	        do
	        {
	            System.out.println("--------------------------------");
	            System.out.println("            Turunan             ");
	            System.out.println("--------------------------------");
	            System.out.println("Pilihan Menu:");
	            System.out.println("1. Keterangan rumus");
	            System.out.println("2. Input rumus");
	            System.out.println("3. Keluar");
	            System.out.print("Input menu : ");
	            pil2 = in.nextInt();
	            switch(pil2)
	                    {
	                                case 1:
	                                {
	                                System.out.println("Turunan berfungsi untuk menghitung nilai minimun dan maksimum dalam sebuah keuangan. \n");
	                                System.out.println("Turunan juga dapat berfungsi untuk menghitung setiap waktu dan percepatan seperti bandul\n");
	                                System.out.println("Contoh : Rumus y= sinx -> y'=cosx");
	                                System.out.println("Formula basis: y`= n.x^n-1 ");
	                                //enterto();
	                                break;
	                                }
	                                case 2:
	                                {
	                                System.out.print("Masukkan Fungsi konstanta(x) :");
	                                int x=in.nextInt();
	                                System.out.print("Masukkan pangkat(y) :");
	                                int y=in.nextInt();
	                                int A= y-1;
	                                x= x*y;
	                                System.out.println(x +"X^"+ A);
	                                //enterto();
	                                break;
	                                }
	                            }
	        }while(pil2 != 3);
	    }
}
