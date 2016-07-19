import java.io.*;
import java.util.*;
import java.text.*;
import java.math.*;
import java.util.regex.*;

public class Solution {

    public static void main(String[] args) {
        Scanner s = new Scanner(System.in);
        int tc = s.nextInt();
        for(int i = 0; i < tc; i++){
            int num = s.nextInt();
            int a = s.nextInt();
            int b = s.nextInt();
            if( b == a){
            	System.out.println((num -1) * b);
            }else{
            if( b < a){
                int temp = b;
                b = a;
                a = temp;
            } 
            for(int j = 0; j < num; j++){
                long out = ((num - 1) * a) + ((b * j) - (a * j));
                System.out.print(out + " ");
            }
            System.out.println();
            }
        }
        s.close();
    }
}