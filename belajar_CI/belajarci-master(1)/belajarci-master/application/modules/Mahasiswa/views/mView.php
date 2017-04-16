<div>
	<table>
	<tr>
		<th>id</th>
		<th>nama</th>
		<th>Tempat lahir</th>
		<th>tanggal lahir</th>
		<th>alamat</th>
		<th>email</th>
		<th>telepon</th>
		
		</tr>
		
		<?php foreach($list_mahasiswa as $kmahasiswa=>$vmahasiswa) { ?> 
		<tr>
		
			<td><?php echo $vmahasiswa['id'];?></td>
			<td><?php echo $vmahasiswa['nama'];?></td>
			<td><?php echo $vmahasiswa['tempat_lahir'];?></td>
			<td><?php echo $vmahasiswa['tanggal_lahir'];?></td>
			<td><?php echo $vmahasiswa['alamat'];?></td>
			<td><?php echo $vmahasiswa['email'];?></td>
			<td><?php echo $vmahasiswa['telepon'];?></td>
		</tr>
		<?php } ?>
	</table>
</div>
			