import java.io.*;
import java.util.*;
import java.text.*;
import java.math.*;
import java.util.regex.*;

public class Solution {
    public static class Node{
        int value;
        boolean isLeaf;
        Node parent;
        ArrayList<Node> children;
        public Node(){
            children = new ArrayList<Node>();
        }
    }
  
    static int removedT = 0;
    public static int removed(Node node){
        int  removedV = 0;
        for(int i = 0; i < node.children.size(); i++){
            Node child = node.children.get(i);
            removedV += removed(child);
        }
        for(int i = node.children.size() - 1; i >= 0; i--){
            Node child = node.children.get(i);
            if(child.parent == null)
                node.children.remove(child);
        }
        removedV += node.children.size();
        if(removedV % 2 == 1){
            if(node.parent != null){
                removedT++;
                node.parent = null;
            }
            return 0;
        }
        return removedV;
    }
    
    public static void main(String[] args) {
        Scanner s = new Scanner(System.in);
        int m  = s.nextInt();
        int n  = s.nextInt();       
        ArrayList<Node> nodes = new ArrayList<Node>();
        for(int i = 0; i < n; i++){
            int u = s.nextInt();
            int v = s.nextInt();
            int p = (u > v)?v:u;
            int c = (u > v)?u:v;
            Node node, child = null;
            
            if(nodes.size() >= p){
                node = nodes.get(p-1);
                if(node == null){
                    node = new Node();
                    node.value = p;
                    node.isLeaf = true;
                    nodes.add(node);
                }
            }else{
                node = new Node();
                node.value = p;
                node.isLeaf = true;                
                nodes.add(node);
            }
            child = new Node();
            child.value = c;
            child.isLeaf = false;
            child.parent = node;
            node.children.add(child);
            nodes.add(child);
        }
        removedT = 0;
        removed(nodes.get(0));
        System.out.println(removedT);
        s.close();
    }
}