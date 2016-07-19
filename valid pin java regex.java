import java.io.*;
import java.util.*;
import java.text.*;
import java.math.*;
import java.util.regex.*;

public class Solution {
   
  
    // Template Credit goes to www.hackerrank.com/kogupta 
    private static boolean isValidPAN(String s) {
        Pattern r = Pattern.compile("[A-Z][A-Z][A-Z][A-Z][A-Z]\\d\\d\\d\\d[A-Z]");
        Matcher m = r.matcher(s);
        return m.find( ) && s.length() == 10;
    }
  
    public static void main(String[] args) {
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
        try {
            int i = Integer.parseInt(br.readLine());
            for (int j = 0; j < i; j++) {
                String s = br.readLine();
                System.out.println(isValidPAN(s) ? "YES" : "NO");
            }
        } catch (IOException e) {
            e.printStackTrace();
        } 
    }
}
