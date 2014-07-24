 <html> 
 	<body> 
 	<?php 
 	$month_Names = Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"); 

 	if (!isset($_REQUEST["month"])) $_REQUEST["month"] = date("n"); 
 	if (!isset($_REQUEST["year"])) $_REQUEST["year"] = date("Y"); 
 	$Current_Month = $_REQUEST["month"]; $Current_Year = $_REQUEST["year"]; 
 	$prev_year = $Current_Year; $next_year = $Current_Year; $prev_month = $Current_Month-1; $next_month = $Current_Month+1; 
 	if ($prev_month == 0 ) { $prev_month = 12; $prev_year = $Current_Year - 1; } if ($next_month == 13 ) { $next_month = 1; 
 		$ext_year = $Current_Year + 1; } 
 	?> 
 	<table width="200"> 
 		<tr align="center"> 
 			<td bgcolor="#999999" style="color:#FFFFFF"> 
 				<table width="100%" border="0" cellspacing="0" cellpadding="0"> 
 					<tr> 
 						<td width="50%" align="left"> 
 							<a href="<?php echo $_SERVER["PHP_SELF"] . "?month=". $prev_month . "&year=" . $prev_year; ?>" style="color:#FFFFFF">Previous</a>
 						</td> 
 						<td width="50%" align="right">
 							<a href="<?php echo $_SERVER["PHP_SELF"] . "?month=". $next_month . "&year=" . $next_year; ?>" style="color:#FFFFFF">Next</a>
 						</td> 
 					</tr> 
 				</table> 
 			</td> 
 		</tr> 
 		<tr> 
 			<td align="center"> 
 				<table width="100%" border="0" cellpadding="2" cellspacing="2"> 
 					<tr align="center"> 
 						<td colspan="7" bgcolor="#999999" style="color:#FFFFFF">
 							<strong><?php echo $month_Names[$Current_Month-1].' '.$Current_Year; ?></strong>
 						</td> 
 					</tr> 
 					<tr> 
 						<td align="center" bgcolor="#999999" style="color:#FFFFFF">
 							<strong>Sun</strong>
 						</td> 
 						<td align="center" bgcolor="#999999" style="color:#FFFFFF">
 							<strong>Mon</strong>
 						</td> 
 						<td align="center" bgcolor="#999999" style="color:#FFFFFF">
 							<strong>Tue</strong>
 						</td> 
 						<td align="center" bgcolor="#999999" style="color:#FFFFFF">
 							<strong>Wed</strong>
 						</td> 
 						<td align="center" bgcolor="#999999" style="color:#FFFFFF">
 							<strong>Thu</strong>
 						</td> 
 						<td align="center" bgcolor="#999999" style="color:#FFFFFF">
 							<strong>Fri</strong>
 						</td> 
 						<td align="center" bgcolor="#999999" style="color:#FFFFFF">
 							<strong>Sat</strong>
 						</td> 
 					</tr> 
 					<?php $timestamp = mktime(0,0,0,$Current_Month,1,$Current_Year); $maxday = date("t",$timestamp); 
 					$thismonth = getdate ($timestamp); $startday = $thismonth['wday']; 
 					for ($i=0; $i<($maxday+$startday); $i++) { if(($i % 7) == 0 ) 
 						echo "<tr>\n"; if($i < $startday) echo "<td></td>\n"; 
 						else echo "<td align='center' valign='middle' height='20px'>". ($i - $startday + 1) . "</td>\n"; 
 						if(($i % 7) == 6 ) echo "</tr>\n"; } ?> 
 					</table> 
 				</td> 
 			</tr> 
 		</table> 
 	</body> 
 </html>