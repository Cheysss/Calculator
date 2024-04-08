<?php
    $cookie_name1="num";
    $cookie_value1="";
    $cookie_name2="op";
    $cookie_value2="";

    if(isset($_POST['num']))
    {
     $num=$_POST['input'].$_POST['num'] ;
    }
    else{
        $num="";
    }
    if(isset($_POST['op']))
    {
        $cookie_value1=$_POST['input'];
        setcookie($cookie_name1, $cookie_value1, time()+(86400*30), "/");

        $cookie_value2=$_POST['op'];
        setcookie($cookie_name2, $cookie_value2, time()+(86400*30), "/");
        $num="";
    }
    if(isset($_POST['equal']))
    {
        $num=$_POST['input'];
        switch($_COOKIE['op'])
        {
            case "+":
                $result=$_COOKIE['num']+$num;
                break;
                case "-":
                    $result=$_COOKIE['num']-$num;
                    break;
                    case "*":
                        $result=$_COOKIE['num']*$num;
                        break;
                        case "/":
                            $result=$_COOKIE['num']/$num;
                            break;
        }
        $num=$result;
    }
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <title>Calculator</title>
</head>

<body>
  
  <div class="container">
    <div class="calculator">   
      
      <form method="POST">
        <h2>Casio</h2>
        <div class="display">
          <input type="text" name="display" readonly placeholder="0">
        </div>
        
        <div>
          <input type="button" value="AC" onclick="display.value = '' ">
          <input type="button" value="{X]" onclick="display.value = display.value.toString().slice(0,-1)">
          <input type="button" value="." onclick="display.value += '.' ">
          <input type="button" value="/" onclick="display.value += '/' ">
        </div>
        
        <div>
          <input type="button" value="7" onclick="display.value += '7' ">
          <input type="button" value="8" onclick="display.value += '8' ">
          <input type="button" value="9" onclick="display.value += '9' ">
          <input type="button" value="*" onclick="display.value += '*' ">
        </div>
        
        <div>
          <input type="button" value="4" onclick="display.value += '4' ">
          <input type="button" value="5" onclick="display.value += '5' ">
          <input type="button" value="6" onclick="display.value += '6' ">
          <input type="button" value="-" onclick="display.value += '-' ">
        </div>
        
        <div>
          <input type="button" value="1" onclick="display.value += '1' ">
          <input type="button" value="2" onclick="display.value += '2' ">
          <input type="button" value="3" onclick="display.value += '3' ">
          <input type="button" value="+" onclick="display.value += '+' ">
        </div>
        
        <div>
          <input type="button" value="%" onclick="display.value += '%' ">
          <input type="button" value="0" onclick="display.value += '0' ">
          <input type="button" value="=" class="equal" onclick="display.value = eval(display.value)" name="equal">
        </div>
        
      </form>
        
      </div>
    </div>
    
  </div>

</body>

</html>

