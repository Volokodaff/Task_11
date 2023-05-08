<!DOCTYPE html>
<html>
<head>
	<title>Приктическое задание PHP</title>
	<style>
        h2{
            text-align: center;
            
        }
        .table-container {
            position: relative;
            margin-top: 20px;
    }
		table {
			border-collapse: collapse;
			width: 50%;
			font-size: 18px;
			text-align: center;
            margin: auto;
            table-layout: fixed;
		}
        td{
            color: black;
        }
		th, td {
			border: 1px solid black;
			padding: 8px;
		}
		th {
            background-color: #ddd;
        }
        .left-table {
            position: absolute;
            left: 0;
            top: 50%;
            width: 49%;
            margin-right: 20px;
            margin-top: 120px;
         }

    .right-table {
            position: absolute;
            right: 0;
            top: 50%;
            width: 49%;
            margin-left: 20px;
            margin-top: 120px;
        }

    .center-table {
            margin: auto;
            width: 50%;
            margin-top: 0;
        }
        p {
            position: absolute; 
            bottom: 0; 
            width: 100%; 
            text-align: left; 
            margin-bottom: 10px;
            font-size: 16px;
        }    
	</style>
</head> 

<body>
<h2>Таблица истинности PHP и таблицы сравнений<h2>
	<div class="table-container">
      <table class="center-table"> 
        <caption>Таблица истинности PHP</caption>
			<tr>
				<th>A</th>
				<th>B</th>
                <th>!A</th>
                <th>A || B</th>
				<th>A && B</th>
			    <th>A xor B</th>
			</tr>
		<tbody>
        <?php
            echo "<tr>";
            echo "<td>" . ($a = 0) ."</td>";
            echo "<td>" . ($b = 0) ."</td>";
            echo "<td>" . ((int)(! $a)) ."</td>";
            echo "<td>". ((int)($a||$b)) ."</td>";
            echo "<td>". ((int)($a&&$b)) ."</td>";
            echo "<td>". ((int)($a xor $b)) ."</td>";
            echo "</tr>";
            
            
            echo "<tr>";
			echo "<td>" . ($a = 0) ."</td>";
            echo "<td>" . ($b = 1) ."</td>";
            echo "<td>" . ((int)(! $a)) ."</td>";
            echo "<td>". ((int)($a||$b)) ."</td>";
            echo "<td>". ((int)($a&&$b)) ."</td>";
            echo "<td>". ((int)($a xor $b)) ."</td>";
            echo "</tr>";
             
            echo "<tr>";
			echo "<td>" . ($a = 1) ."</td>";
            echo "<td>" . ($b = 0) ."</td>";
            echo "<td>" . ((int)(! $a)) ."</td>";
            echo "<td>". ((int)($a||$b)) ."</td>";
            echo "<td>". ((int)($a&&$b)) ."</td>";
            echo "<td>". ((int)($a xor $b)) ."</td>";
            echo "</tr>";

            echo "<tr>";
			echo "<td>" . ($a = 1) ."</td>";
            echo "<td>" . ($b = 1) ."</td>";
            echo "<td>" . ((int)(! $a)) ."</td>";
            echo "<td>". ((int)($a||$b)) ."</td>";
            echo "<td>". ((int)($a&&$b)) ."</td>";
            echo "<td>". ((int)($a xor $b)) ."</td>";
            echo "</tr>";
            ?>
		</tbody>
	</table>
        
    <table class="left-table">
      <caption>Таблица гибхих сравнений</caption>
            <tr>
				<th></th>
				<th>true</th>
                <th>false</th>
                <th>1</th>
				<th>0</th>
			    <th>-1</th>
                <th>"1"</th>
                <th>null</th>
                <th>"php"</th>
             </tr>
             <tr><th>true</th>
                <?php
                 echo "<td>". ((int)(true == true)). "</td>";
                 echo "<td>". ((int)(false == true)). "</td>";
                 echo "<td>". ((int)( 1 == true)). "</td>";
                 echo "<td>". ((int)( 0 == true)). "</td>";
                 echo "<td>". ((int)( -1 == true)). "</td>";
                 echo "<td>". ((int)( "1" == true)). "</td>";
                 echo "<td>". ((int)( null == true)). "</td>";
                 echo "<td>". ((int)( "php" == true)). "</td>";
                 ?>
            </tr>
             <tr><th>false</th>
             <?php
                 echo "<td>". ((int)(true == false)). "</td>";
                 echo "<td>". ((int)(false == false)). "</td>";
                 echo "<td>". ((int)( 1 == false)). "</td>";
                 echo "<td>". ((int)( 0 == false)). "</td>";
                 echo "<td>". ((int)( -1 == false)). "</td>";
                 echo "<td>". ((int)( "1" == false)). "</td>";
                 echo "<td>". ((int)( null == false)). "</td>";
                 echo "<td>". ((int)( "php" == false)). "</td>";
                 ?>
            </tr>
             <tr><th>1</th>
             <?php
                 echo "<td>". ((int)(true == 1)). "</td>";
                 echo "<td>". ((int)(false == 1)). "</td>";
                 echo "<td>". ((int)( 1 == 1)). "</td>";
                 echo "<td>". ((int)( 0 == 1)). "</td>";
                 echo "<td>". ((int)( -1 == 1)). "</td>";
                 echo "<td>". ((int)( "1" == 1)). "</td>";
                 echo "<td>". ((int)( null == 1)). "</td>";
                 echo "<td>". ((int)( "php" == 1)). "</td>";
                 ?>
            </tr>
             <tr><th>0</th>
             <?php
                 echo "<td>". ((int)(true == 0)). "</td>";
                 echo "<td>". ((int)(false == 0)). "</td>";
                 echo "<td>". ((int)( 1 == 0)). "</td>";
                 echo "<td>". ((int)( 0 == 0)). "</td>";
                 echo "<td>". ((int)( -1 == 0)). "</td>";
                 echo "<td>". ((int)( "1" == 0)). "</td>";
                 echo "<td>". ((int)( null == 0)). "</td>";
                 echo "<td>". ((int)( "php" == 0)). "</td>";
                 ?>
            </tr>
             <tr><th>-1</th>
             <?php
                 echo "<td>". ((int)(true == -1)). "</td>";
                 echo "<td>". ((int)(false == -1)). "</td>";
                 echo "<td>". ((int)( 1 == -1)). "</td>";
                 echo "<td>". ((int)( 0 == -1)). "</td>";
                 echo "<td>". ((int)( -1 == -1)). "</td>";
                 echo "<td>". ((int)( "1" == -1)). "</td>";
                 echo "<td>". ((int)( null == -1)). "</td>";
                 echo "<td>". ((int)( "php" == -1)). "</td>";
                 ?>
            </tr>
             <tr><th>"1"</th>
             <?php
                 echo "<td>". ((int)(true == "1")). "</td>";
                 echo "<td>". ((int)(false == "1")). "</td>";
                 echo "<td>". ((int)( 1 == "1")). "</td>";
                 echo "<td>". ((int)( 0 == "1")). "</td>";
                 echo "<td>". ((int)( -1 == "1")). "</td>";
                 echo "<td>". ((int)( "1" == "1")). "</td>";
                 echo "<td>". ((int)( null == "1")). "</td>";
                 echo "<td>". ((int)( "php" == "1")). "</td>";
                 ?>
            </tr>
             <tr><th>null</th>
             <?php
                 echo "<td>". ((int)(true == null)). "</td>";
                 echo "<td>". ((int)(false == null)). "</td>";
                 echo "<td>". ((int)( 1 == null)). "</td>";
                 echo "<td>". ((int)( 0 == null)). "</td>";
                 echo "<td>". ((int)( -1 == null)). "</td>";
                 echo "<td>". ((int)( "1" == null)). "</td>";
                 echo "<td>". ((int)( null == null)). "</td>";
                 echo "<td>". ((int)( "php" == null)). "</td>";
                 ?>
            </tr>
             <tr><th>"php"</th>
             <?php
                 echo "<td>". ((int)(true == "php")). "</td>";
                 echo "<td>". ((int)(false == "php")). "</td>";
                 echo "<td>". ((int)( 1 == "php")). "</td>";
                 echo "<td>". ((int)( 0 == "php")). "</td>";
                 echo "<td>". ((int)( -1 == "php")). "</td>";
                 echo "<td>". ((int)( "1" == "php")). "</td>";
                 echo "<td>". ((int)( null == "php")). "</td>";
                 echo "<td>". ((int)( "php" == "php")). "</td>";
                 ?>
            </tr>
        </table>
        
        <table class="right-table">
          <caption>Таблица жёстких сравнений</caption>
            <tr>
				<th></th>
				<th>true</th>
                <th>false</th>
                <th>1</th>
				<th>0</th>
			    <th>-1</th>
                <th>"1"</th>
                <th>null</th>
                <th>"php"</th>
             </tr>
             <tr><th>true</th>
                <?php
                 echo "<td>". ((int)(true === true)). "</td>";
                 echo "<td>". ((int)(false === true)). "</td>";
                 echo "<td>". ((int)( 1 === true)). "</td>";
                 echo "<td>". ((int)( 0 === true)). "</td>";
                 echo "<td>". ((int)( -1 === true)). "</td>";
                 echo "<td>". ((int)( "1" === true)). "</td>";
                 echo "<td>". ((int)( null === true)). "</td>";
                 echo "<td>". ((int)( "php" === true)). "</td>";
                 ?>
            </tr>
             <tr><th>false</th>
             <?php
                 echo "<td>". ((int)(true === false)). "</td>";
                 echo "<td>". ((int)(false === false)). "</td>";
                 echo "<td>". ((int)( 1 === false)). "</td>";
                 echo "<td>". ((int)( 0 === false)). "</td>";
                 echo "<td>". ((int)( -1 === false)). "</td>";
                 echo "<td>". ((int)( "1" === false)). "</td>";
                 echo "<td>". ((int)( null === false)). "</td>";
                 echo "<td>". ((int)( "php" === false)). "</td>";
                 ?>
            </tr>
             <tr><th>1</th>
             <?php
                 echo "<td>". ((int)(true === 1)). "</td>";
                 echo "<td>". ((int)(false === 1)). "</td>";
                 echo "<td>". ((int)( 1 === 1)). "</td>";
                 echo "<td>". ((int)( 0 === 1)). "</td>";
                 echo "<td>". ((int)( -1 === 1)). "</td>";
                 echo "<td>". ((int)( "1" === 1)). "</td>";
                 echo "<td>". ((int)( null === 1)). "</td>";
                 echo "<td>". ((int)( "php" === 1)). "</td>";
                 ?>
            </tr>
             <tr><th>0</th>
             <?php
                 echo "<td>". ((int)(true === 0)). "</td>";
                 echo "<td>". ((int)(false === 0)). "</td>";
                 echo "<td>". ((int)( 1 === 0)). "</td>";
                 echo "<td>". ((int)( 0 === 0)). "</td>";
                 echo "<td>". ((int)( -1 === 0)). "</td>";
                 echo "<td>". ((int)( "1" === 0)). "</td>";
                 echo "<td>". ((int)( null === 0)). "</td>";
                 echo "<td>". ((int)( "php" === 0)). "</td>";
                 ?>
            </tr>
             <tr><th>-1</th>
             <?php
                 echo "<td>". ((int)(true === -1)). "</td>";
                 echo "<td>". ((int)(false === -1)). "</td>";
                 echo "<td>". ((int)( 1 === -1)). "</td>";
                 echo "<td>". ((int)( 0 === -1)). "</td>";
                 echo "<td>". ((int)( -1 === -1)). "</td>";
                 echo "<td>". ((int)( "1" === -1)). "</td>";
                 echo "<td>". ((int)( null === -1)). "</td>";
                 echo "<td>". ((int)( "php" === -1)). "</td>";
                 ?>
            </tr>
             <tr><th>"1"</th>
             <?php
                 echo "<td>". ((int)(true === "1")). "</td>";
                 echo "<td>". ((int)(false === "1")). "</td>";
                 echo "<td>". ((int)( 1 === "1")). "</td>";
                 echo "<td>". ((int)( 0 === "1")). "</td>";
                 echo "<td>". ((int)( -1 === "1")). "</td>";
                 echo "<td>". ((int)( "1" === "1")). "</td>";
                 echo "<td>". ((int)( null === "1")). "</td>";
                 echo "<td>". ((int)( "php" === "1")). "</td>";
                 ?>
            </tr>
             <tr><th>null</th>
             <?php
                 echo "<td>". ((int)(true === null)). "</td>";
                 echo "<td>". ((int)(false === null)). "</td>";
                 echo "<td>". ((int)( 1 === null)). "</td>";
                 echo "<td>". ((int)( 0 === null)). "</td>";
                 echo "<td>". ((int)( -1 === null)). "</td>";
                 echo "<td>". ((int)( "1" === null)). "</td>";
                 echo "<td>". ((int)( null === null)). "</td>";
                 echo "<td>". ((int)( "php" === null)). "</td>";
                 ?>
            </tr>
             <tr><th>"php"</th>
             <?php
                 echo "<td>". ((int)(true === "php")). "</td>";
                 echo "<td>". ((int)(false === "php")). "</td>";
                 echo "<td>". ((int)( 1 === "php")). "</td>";
                 echo "<td>". ((int)( 0 === "php")). "</td>";
                 echo "<td>". ((int)( -1 === "php")). "</td>";
                 echo "<td>". ((int)( "1" === "php")). "</td>";
                 echo "<td>". ((int)( null === "php")). "</td>";
                 echo "<td>". ((int)( "php" === "php")). "</td>";
                 ?>
            </tr>
        </table>
      </div>    
      <p>Вывод: В PHP оператор == выполняет гибкое сравнение (нестрогое сравнение) между двумя переменными и 
        проверяет, равны ли они по значению, не обращая внимания на их тип данных.
        Оператор ===, с другой стороны, выполняет жесткое сравнение (строгое сравнение) между двумя переменными 
        и проверяет, равны ли они по значению и типу данных. Таким образом, использование == или === зависит от 
        требований конкретной задачи. Если нужно проверить только значения переменных, не обращая внимания на тип 
        данных, то следует использовать ==. Если же требуется проверить и значения, и типы данных переменных, то 
        нужно использовать ===.</p>
    </body>
</html>
