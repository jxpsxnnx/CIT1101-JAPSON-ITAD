<!doctype html>
<html>
<head>
	<title></title>
	<meta charset ="utf-8" />
        <title>String Manipulation</title>
        <style>

            body{
                background: #FFFDD0;
            }
            .output{
                border: 9px #31906E ridge;
                background-color: #FFFDD0;
                font-family: garamond; 
                font-weight: bold;
                
            }
            .input{
                border: 9px #31906E ridge;
                background-color: #FFFDD0;
                font-family: garamond; 
                font-weight: bold;
            }
            td{
                border: 2px #00203FFF ridge;

            }
            .submit{
                margin-left: 45px;
                
            }

            legend{
            border: 4px #31906E ridge;
            margin: auto;
            font-family: "georgia";
            font-size: 25px;
            background-color: #FFFDD0;
        }
        fieldset{
            background-color: #FFFDD0;
            border: 6px #31906E ridge;
        }
        </style>


</head>

<body>
<link rel="stylesheet" type="text/css" href="" />
 

<?php
$Input= $_POST['inputString'];

?>
<fieldset> 
    <legend>MANIPULATION OF STRINGS</legend>
<table align="center" class = "input">
<form method="post" id ="form" action="<?php echo $_SERVER["PHP_SELF"];?>">
    
    <tr>
        <td>
            <?php
                echo "Input a String Value";
            ?>
            <td>
                <input type="text" name="inputString" value="<?php ;?>">
                </span>
            </td>
        </td>
    </tr>
    
    <tr>
        <td>
            <?php
                echo "Start of count";
            ?>

            <td>
            <input type="number" name="startCount" value="<?php ;?>">
                </span>
            </td>
        </td>
    </tr>
    <tr>
        <td>
            <?php
                echo "Length of Characters to return";
            ?>
            <td>
            <input type="number" name="LengthCharacter" value="<?php ;?>">
                </span>
            </td>
        </td>
    </tr>
    <tr>
        <td>
            <?php
                echo "String to Search (needle)";
            ?>
            <td>
            <input type="text" name="stringSearch" value="<?php ;?>">
                </span>
            </td>
        </td>
    </tr>
    <tr>
        <td>
        <?php

                echo "String to explode()";
            ?>
        <td>
        <input type="text" name="stringExplode" value="<?php ;?>">
                </span>
            </td>
            </td>
    </tr>
    <tr>
        <td>

        <?php

                echo "Separator for explode()";
            ?>
            <td>
            <input type="text" name="separator" value="<?php ;?>">
                </span>
            </td>
            
        </td>

    </tr>

    <tr>
        <td  colspan="2">
            <?php
            ?>
            <br>
            <input type="submit" name="submit" value="String Manipulation Functions" class="submit">
            
            <input type = "button" value = "Reset data" onClick = "fun()"/>  

        </td>
    </tr>
    <br>
   </table>
   <br>
    </fieldset>

    
<Table align="center" class="output">
    <br><br>
    <tr>
        <td>
            <?php
                echo "Given String:";
            ?>
            <td>
                
            <?php echo ($Input); ?>
            </td>
        </td>
    </tr>
    <tr>
        <td>
            <?php
                echo "Result of strlen:";
            ?>
            <td>
            <?php echo strlen($Input); ?>

        </td>
        </td>
    </tr>
    <tr>
        <td>
            <?php
                echo "Result of strwordCount:";
            ?>
            <td>

            <?php echo str_word_count($Input); ?>
            
        </td>
        </td>
    </tr>
    <tr>
        <td>
            <?php
                echo "Conversion to uppercase";
            ?>
            <td>
            <?php echo strtoupper($Input); ?>


            </td>
        </td>
    </tr>
    <tr>
        <td>
            <?php
                echo "Conversion to lowercase:";
            ?>
            <td>
                
            <?php echo strtolower($Input); ?>

            </td>
        </td>
    </tr>
    <tr>
        <td>
            <?php
                echo "Convert first character to uppercase:";
            ?>
            <td>

            <?php echo ucfirst($Input); ?>
            
            </td>
        </td>
    </tr>
    <tr>
        <td>
            <?php
                echo "Convert first character to lowercase:";
            ?>
            <td>
                
            <?php echo lcfirst($Input); ?>

            </td>
        </td>
    </tr>
    <tr>
        <td>
            <?php
                echo "Convert first character of every word in uppercase:";
            ?>
            <td>

            <?php echo ucwords($Input); ?>
                
            </td>
        </td>
    </tr>
    <tr>
        <td>
            <?php
                echo "Combination of ucwords and strtoupper:";
            ?>
            <td>
                
            <?php echo strtoupper (ucwords($Input)); ?>

            </td>
        </td>
    </tr>
    <tr>
        <td>
            <?php
                echo "Combination of ucwords and strtolower";
            ?>
            <td>

            <?php echo strtolower (ucwords($Input)); ?>
                
            </td>
        </td>
    </tr>
    <tr>
        <td>
            <?php
                echo "Encrypted Value";
            ?>
            <td>
            <?php echo md5($Input); ?>
            </td>

            <tr>
            <td>
            <?php
                echo "Result of Explode";
            ?>
            <td>
            <?php
            $exp = $_POST['stringExplode'];
             $result = explode(" ", $exp);
            print_r ($result);
            ?>
            </td>
            <tr>
            <tr>
            <td>
            <?php
                echo "Result of Implode:";
            ?>
            <td>
            <?php
            $separator = $_POST['separator'];
            echo implode(" $separator ", $result);
             
            ?>
            </td>
            </tr>
            </tr>
        </td>
    </tr>
    <tr>
        <td>
            <?php
        echo "Result of Substr():";
        ?>
        <td>
            <?php
            $count = $_POST['startCount'];
            $return = $_POST['LengthCharacter'];
            echo substr("$Input",$count,$return);

            ?>
        </td>
        </td>
    </tr>
    <tr>
        <td>
            <?php 
            echo "Result of Strpos():"
            ?>
            <td>
                <?php
                $strip = $_POST['stringSearch'];
                    echo strpos("$Input","$strip");
                ?>
            </td>
        </td>
    </tr>

</Table>
    </form>
<script>  
 function fun(){  
   document.getElementById("form").reset();  
 }   
</script>  

</body>
</html>