package kel_2;

import java.util.Scanner;

public class Mens //menu class
{
	

    
        // F //
        public void menu()
        {
            // Scanner only.. //
            int pil = 0;
            Scanner in = new Scanner(System.in);
            Scanner in2 = new Scanner(System.in);
            Scanner in3 = new Scanner(System.in);
            // end here // 
        	
            // Dont blame me if i dont do anything i warn you. I hate keep chasing member. Been like these the situation since i was in middle school. I gave up//

            // for input //

            int pil2 = 0; // Input for menu only
            int num = 0; // input for anything relate to number
            String numst; // input for anything relate to string

            // end //
            Message msg = new Message(); // bruh they fkin forgot with their own work. i dont care fuck it.
            
            R01_Indef_Intergral integraldef = new R01_Indef_Intergral();
            R02_Fibonacci fibonacideret = new R02_Fibonacci();
            R03_Turunan turunandef = new R03_Turunan();
           // R04_Quad  = new R04_Quad); <- look at this dude that work on this no progress at all
           // R05_Quad  = new R05_Quad); <- and this.
            // whatever u rekt we will get rekt to. No one to be blame.
            
            while (pil != 6)
            {
            System.out.println("----------------------------- ");
            System.out.println("Daftar-Daftar Rumus");
            System.out.println("----------------------------- ");
            System.out.println("1.Indefinitive Integral ");
            System.out.println("2.Bilangan Fibonanci  ");
            System.out.println("3.Turunan  ");
            System.out.println("4.Persamaan Kuadrat  ");
            System.out.println("5.Persamaan Linear  ");
            System.out.println("6.Keluar ");
            System.out.print("Pilihan Menu Tersedia  = ");
            pil = in.nextInt();
                switch (pil) 
                {
                case 1:
                {
                    do
                    {
                    pil2 = 0;
                    integraldef.showmenu();
                    pil2 = in2.nextInt();
                    switch(pil2)
                    {
                        case 1:
                        integraldef.kete();
                        msg.enter();
                        break;
                        case 2:
                        System.out.println("Pastikan dibuat seperti ini (2x^2 + 4x + 1) atau (1x+3) atau (5x^5 - 3) : ");
                        System.out.print("Silahkan masukan nilai konstatanya : ");
                        numst = in3.nextLine();
                        integraldef.integralindef(numst);
                        msg.enter();
                        break;
                    }
                    }while(pil2 != 3);
                    break;
                }

                case 2:
                	pil2 = 0;
                    fibonacideret.showmenu();
                    pil2 = in2.nextInt();
                    switch(pil2)
                    {
                         case 1:
                         {
                         fibonacideret.kete();
                         msg.enter();
                         break;
                         }
                         case 2:
                         System.out.println("Input jumlah sekuensi : ");
                         num = in3.nextInt();
                         fibonacideret.fibonan(num);
                         break;
                    }
                break;
                case 3:
               turunandef.turnu(); // I told him to fix some of this but he still aint get it
                break;

                case 4:
            // quad(); // This dude.. i dont care anymore
                break;

                case 5:
            // linier(); // This dude.. i dont care anymore
                break;
                        
                default:
                System.out.println("Maaf pilihan menu anda tidak terdaftar, coba lagi");
                break;

                case 6:
                break;
                }
            
                }
         in.close();   
         in2.close();  
         in3.close();  
        } // end of while

}