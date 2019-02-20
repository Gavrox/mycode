<?php 
require "calculator.class.php";

$result = "";
$cal = new calculator();
if(isset($_POST['submit'])){
    if ($_POST['op']=='/' & $_POST['n1']==0 || $_POST['n2']==0){
    echo "Don't use 0 in division!!!";
}else
{   
    $result = $cal->getresult($_POST['n1'],$_POST['n2'],$_POST['op']);
}
}
?>

<form method="post">
<table width="28%" align="center">
    <tr>
        <td colspan="2" align="center" bgcolor="#D2D2D2"><strong><span style="font-size: 24px; color:red"><?php echo $result; ?><strong></span></td>
    </tr>
    <tr>
        <td width="42%">Enter 1st Number</td>
        <td width="58%"><input type="text" name="n1"></td>
    </tr>

    <tr>
        <td>Enter 2nd Number</td>
        <td><input type="text" name="n2"></td>
    </tr>

    <tr>
        <td>Select Operator</td>
        <td><select name="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select></td>
    </tr>

    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="                  =                  "></td>
    </tr>

</table>
</form>