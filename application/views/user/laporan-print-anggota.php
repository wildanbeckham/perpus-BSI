<!DOCTYPE html> 
<html> 
<head>  
	<title></title> 
</head> 
<body>  
	<style type="text/css">  
		.table-data{    
			width: 100%;    
			border-collapse: collapse;   
		} 
 
  		.table-data tr th,   
  		.table-data tr td{    
  			border:1px solid black;    
  			font-size: 11pt;    
  			font-family:Verdana;    
  			padding: 10px 10px 10px 10px;   
  		}   
  		.table-data th{       
  			background-color:grey;   
  		}   
  		h3{ 
  			font-family:Verdana;   
  		}  
  	</style> 
 
	<h3><center>LAPORAN DATA ANGGOTA</center></h3>  
	<br/>  
	<table class="table-data">   
		<thead>    
			<tr>     
				<th>No</th>     
				<th>Nama</th>     
				<th>Email</th>
				<th>Role ID</th>     
				<th>Member Sejak</th>      
			</tr>   
		</thead>   
		<tbody> 
		<?php
        $i = 1;
        foreach ($anggota as $a) { ?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $a['nama']; ?></td>
                <td><?= $a['email']; ?></td>
                <td><?= $a['role_id']; ?></td>
                <td><?= date('d F Y', $a['tanggal_input']); ?></td>                                    
				</tr>                     
			<?php } ?>                 
		</tbody> 
	</table> 
	<script type="text/javascript">  
		window.print(); 
	</script> 
	 
</body> 
</html>