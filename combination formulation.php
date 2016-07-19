import java.io.*;
import java.util.*;
import java.text.*;
import java.math.*;
import java.util.regex.*;

public class Solution {

    public static void main(String[] args) {
        Scanner s = new Scanner(System.in);
        int count = s.nextInt();
        for( int i =0 ; i < count; i ++){
        int members = s.nextInt();
        int handshakes = 0;
        while(members > 0){
            members--;
            handshakes += members;
        }
        System.out.println(handshakes);
        }
        s.close();
            
    }
}