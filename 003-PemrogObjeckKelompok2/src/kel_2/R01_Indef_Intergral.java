package kel_2;


public class R01_Indef_Intergral 
{
	Message msg = new Message();
	public void showmenu()
    {
        System.out.println("--------------------------------");
        System.out.println("     Indefinitive  Integral     ");
        System.out.println("--------------------------------");
        System.out.println("Pilihan Menu:");
        System.out.println("1. Keterangan rumus");
        System.out.println("2. Input rumus");
        System.out.println("3. Keluar");
        System.out.print("Input menu : ");
    }

    public void kete()
    {
    System.out.println("Integral tak tentu adalah suatu bentuk operasi pengintegralan suatu fungsi yang menghasilkan suatu fungsi baru.\n Bila fungsi F adalah integral tak tentu dari suatu fungsi f maka berlaku F'= f.\n");
    System.out.println("Formula basis: \u222Bxdx=x22+C   \u222Badx=ax+C");
    msg.enter(); // initiate enter
    }

    public void integralindef(String inbase) 
    {
                int y = 0, z = 0, i=0, x = 0;
                // temporary


                // temp for copy str //

                String exes = "x";
                
                // end my life i beg of you.
                String[] ex = new String[100];
                String[] oper = new String[100]; // Operation stored here
                String[] baseAS = new String[100];
                String[] baseBS = new String[100];
                String baseAS_temp;
                String baseBS_temp;
                String[] baseAS_2 = new String[100];
                String[] baseCS = new String[100];

                // Array of number to mod and thing
                int[] baseA = new int[100];
                int[] baseB = new int[100];
                //

                // If condition
                int condt_b2 = 0;
                int condt_a2 = 0;
                //

                // try
                // {
                char[] array = inbase.toCharArray(); // split char for each....
                i = array.length ;
                
                //
                for(y = 0;y!=i;y++)
                {
                    baseB[z] = 1;
                    ex[z]  = exes;
                    if(Character.isDigit(array[y]) && condt_a2 == 0 && condt_b2 == 0)
                    {
                        baseAS[z] = Character.toString(array[y]);
                        condt_a2 = 1;
                        condt_b2 = 0;
                        baseA[z] = Integer.parseInt(baseAS[z]);
                    // num ++
                    }
                    else if(Character.isDigit(array[y]) && condt_a2 == 1 && condt_b2 == 0) 
                    {
                        baseAS_temp = Character.toString(array[y]);
                        baseAS[z] = baseAS[z] + baseAS_temp;
                        baseA[z] = Integer.parseInt(baseAS[z]);
                    }
                    if(array[y]  == 'X' || array[y]  == 'x')
                    {
                        ex[z]  = exes;
                        condt_b2 = 1;
                        condt_a2 = 0;
                    }
                    if(Character.isDigit(array[y]) && condt_b2 == 1 && condt_a2 == 0 )
                    {
                        baseBS[z] = Character.toString(array[y]);
                        condt_b2 = 2;

                        baseB[z] = Integer.parseInt(baseBS[z]);
                        if(baseB[z] >= 1)
                        {
                        baseB[z] = baseB[z]+1;
                        }
                        else if(baseB[z] == 0)
                        { 
                         baseB[z] = baseB[z]+1;
                        }
                    }
                    else if(Character.isDigit(array[y]) && condt_b2 == 2 && condt_a2 == 0)
                    {
                        baseBS_temp = Character.toString(array[y]);
                        baseBS[z] = baseBS[z] + baseBS_temp;
                        baseB[z] = Integer.parseInt(baseBS[z]);
                        if(baseB[z] >= 1)
                        {
                        baseB[z] = baseB[z]+1;
                        }
                        else if(baseB[z] == 0)
                        { 
                         baseB[z] = baseB[z]+1;
                        }
                        // if(baseB[z] >= 1)
                        // {
                        // }
                        // else if(baseB[z] == 0)
                        // {
                        // }
                    }
                    else if(array[y]  == '+' || array[y]  == '-')
                    {
                    oper[z] = Character.toString(array[y]);
                    z++;
                    condt_a2 = 0;
                    condt_b2 = 0;
                    }
                } // Ribet, kenapa pakai cara ini? siapa yang bikin ini?
                  // Who made this? wtf
                  i = z;

                System.out.println("Hasil dari indefinitive Integral : ");
                for(x = 0;x<=z;x++)
                {
                    if(baseA[x] % baseB[x] == 0)
                    {
                    baseA[x] = baseA[x] / baseB[x];
                    baseAS_2[x] = String.valueOf(baseA[x]);
                    }
                    else if(baseA[x] % baseB[x] != 0)
                    {
                    baseAS_2[x] = String.valueOf(baseA[x]);
                    baseAS_2[x] = baseAS_2[x] + "/" + baseB[x];  //example base a = 2 and b = 3 so it will be  "2/3"   
                    }
                    if(oper[x] != null)
                    {
                    baseCS[x] = baseAS_2[x] + ex[x] + "^" + baseB[x] + " " + oper[x] + " ";
                    }
                    else
                    {
                    baseCS[x] = baseAS_2[x] + ex[x] + "^" + baseB[x];   
                    }
                    System.out.print(baseCS[x]);
                }
                // we did it capt
                System.out.println("\n \n");
               // }
                // catch(Exception e)
                // {
                // System.out.println("Jangan terburu buru pencet enter. Atau nilai 0 yang anda input?");
                // }
    }

}
