<?php
class BinaryNode
{
    public $value;
    public $left;
    public $right;
    public $parent;
    public $depth;

    public function swapChild()
    {
        $temp= $this->left;
        $this->left = $this->right;
        $this->right= $temp;
    }

    public function swapAtDepth($depth) {
        if (in_array($this->depth,$depth)) {
            $this->swapChild();
        }
        if (is_object($this->left))
            $this->left->swapAtDepth($depth);
        if (is_object($this->right))
            $this->right->swapAtDepth($depth);
    }

    public function printNode(){
        echo $this->value;
        if (is_object($this->left))
            echo " ".$this->left->value;
        else
            echo " -1";
        if (is_object($this->right))
            echo " ".$this->right->value;
        else
            echo " -1";
        echo "\n";
    }

    public function __construct($item,$parent,$depth,$left,$right)
    {
        $this->value = $item;
        $this->depth = $depth;
        $this->parent = $parent;
        $this->left = $left;
        $this->right = $right;
    }

    public function inorder() {
        if ($this->left !== -1) {
            $this->left->inorder();
        }
        echo $this->value." ";
        if ($this->right !== -1) {
            $this->right->inorder();
        }
    }
}
$handle = fopen (dirname(__FILE__)."\input.txt","r");
$tc = (int)fgets($handle);
$root = new BinaryNode(1,-1,1,-1,-1,-1);
$currentNode=$root;
$depth=1;
$readCount=0;
$leafList=[$root];

while ($readCount < $tc) {
    $nodes=[];
    $childNode=count($leafList);
    while ($childNode>0) {
        list($a1,$b1) = explode(" ",fgets($handle));
        $nodes[] = [trim($a1),trim($b1)];
        $readCount++;
        $childNode--;
    }
    $depth ++;
    for($i=0;$i<count($nodes);$i++) {
        $currentNode = array_shift($leafList);
        $node= $nodes[$i];
        //$currentNode->printNode();
        if ($node[0]!=-1){
            $currentNode->left = new BinaryNode($node[0],$currentNode,$depth,-1,-1);
            $leafList[]=$currentNode->left;
        }
        if ($node[1]!=-1) {
            $currentNode->right = new BinaryNode($node[1],$currentNode,$depth,-1,-1);
            $leafList[]=$currentNode->right;
        }
    }
}
//$root->inorder();
//echo "\n";
//swaps
$swaps = (int)fgets($handle);
for($t=0;$t<$swaps;$t++){
    $swapDepth = (int)fgets($handle);
    $kss=[];
    foreach (range(1, $depth-1) as $number) {
        $kss[]= $number*$swapDepth;
    }
    $root->swapAtDepth($kss);
    $root->inorder();
    echo "\n";
}

?>