<table  style="border:1px solid red">  <!--kjo vendoset dikun afer paragrafave -->
	<tr>
	<td >
	<?php
	 $filename = "tmp.txt";//ky duhet te ruhet afer fajlli punues 
	 $file = fopen( $filename, "r" );
	 
	 if( $file == false ) {
		echo ( "Error ne leximin e file" );
		exit();
	 }
	 
	 $filesize = filesize( $filename );
	 $filetext = fread( $file, $filesize );
	 fclose( $file );
	 
	 echo ( "Madhesia e fajllit : $filesize bytes" );
	 echo ( "<p>$filetext</p>" );
	?>
	</td>
	</tr>
	</table>