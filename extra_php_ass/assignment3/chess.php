<html> 
  <head> 
    <title>The chess page</title>
  </head>
  <body>
   <table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
    <?php
      for($row=1;$row<=8;$row++)
	    {
        echo "<tr>";
         for($column=1;$column<=8;$column++)
		      {
            $total=$row+$column;
            if($total%2==0)
		        {
                echo "<td height=30px width=30px bgcolor=black></td>";
            }
		        else
		        {
                echo "<td height=30px width=30px bgcolor=white></td>";
            }
          }
          echo "</tr>";
      }
    ?>
  </table>
</body>
</html>
