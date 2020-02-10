 <?php
	echo "<table width='270px' cellspacing='0px' cellpadding='0px' border='1px'>";   
      for($i=1;$i<=6;$i++)
	  {
        echo "<tr>";
        for($j=1;$j<=5;$j++)
		{
            echo "<td>".$i."*".$j."=".intval($i*$j)."</td>";
        }
          echo "</tr>";
      }
?>