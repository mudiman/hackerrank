/* Write your custom functions here */
static int diameterOfTree(Node root) {

    Node left= root.left;
    Node right= root.right;
    int leftDia=0;
    if (left!=null)
    leftDia=diameterLeft(left,1);
    int rightDia=0;
    if (right!=null)
    rightDia=diameterLeft(right,1);
    return leftDia+rightDia+1;
}
static int diameterLeft(Node root,int count) {

    Node left= root.left;
    Node right= root.right;
    int countleft=count;
    int countright=count;
    if (left!=null)
        countleft=diameterLeft(left,count+1);
    if (right!=null)
        countright=diameterLeft(right,count+1);
    if (countright>countleft)
        return countright;
    else
        return countleft;
}