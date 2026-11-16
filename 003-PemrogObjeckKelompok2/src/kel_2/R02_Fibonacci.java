package kel_2;

public class R02_Fibonacci 
{

	    public void showmenu()
	    {
	        System.out.println("--------------------------------");
	        System.out.println("       Bilangan Fibonacci       ");
	        System.out.println("--------------------------------");
	        System.out.println("Pilihan Menu:");
	        System.out.println("1. Keterangan rumus");
	        System.out.println("2. Input rumus");
	        System.out.println("3. Keluar");
	        System.out.print("Input menu : ");
	    }

	    public void kete()
	    {
	        System.out.println("Dalam matematika, bilangan Fibonacci adalah barisan yang didefinisikan secara rekursif.\n karena itu Fibonacci umumnya akan membentuk sebuah sekuensi dari yang terkecil sampai infinite yang disebut juga sebagai sekuensi fibonacci\n Sekuensi fibonacci dapat kita jumpai pula di kehidupan sekitar kita seperti jumlah petal bunga.\n");
	        System.out.println("Formula basis: F0 = 0, F1 = 1,  Fn = Fn-1 + Fn-2 \n");
	        System.out.println("Contoh deret fibonacci : (biasanya selalu dimulai dari angka 0) \n 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, dst.....");
	    }

	    public void fibonan(int i) 
	    {
	                int n = 0, sum = 0, z = 0;
	                System.out.println("Hasil sequence : ");
	                for(z = 0;z<=i;z++)
	                {
	                    System.out.print(" " + fibonani(n) + " ");
	                    sum += fibonani(n);
	                    n++;
	                }
	                System.out.println("\nJumlah keseluruhan dari sequence = " + sum);   
	    }

	    static int fibonani(int fibo)
	    {
	        if ( fibo == 0 )
	        {
	        return 0;
	        }
	        else if (fibo == 1)
	        {
	        return 1;
	        }
	        else
	        {
	        return (fibonani(fibo-1) + fibonani(fibo-2));
	        }
	    }
}
