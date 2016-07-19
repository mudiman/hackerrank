import java.io.*;
import java.util.*;
import java.text.*;
import java.math.*;
import java.util.regex.*;

public class Solution {

    public static void main(String[] args) {
         Scanner s = new Scanner(System.in);
        int ts = s.nextInt();
        for(int i = 0; i < ts; i++){
            int n = s.nextInt();
            long totalRoutes = s.nextLong();
            for(int j = 0; j < n - 2 ; j++){
                long route = s.nextLong();
                totalRoutes *=route;
                totalRoutes %= 1234567;
            }
            System.out.println(totalRoutes);
        }
        s.close();
}