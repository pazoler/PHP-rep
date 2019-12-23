<?php 
//функция работает, но после перезагрузки страницы пару раз, не понимаю, почему так

function delete($dirname) {
	if (is_dir($dirname)) {
		if ($dh = opendir($dirname))
			var_dump($dh);
		while(($data = readdir($dh)) !== false) {
			
			if (filetype($dirname . '/' . $data) == 'file') {
				unlink($dirname.'/'.$data);
				var_dump($data);
			}
			if(filetype($dirname . '/' . $data) == 'dir' && ($data!=='.') && ($data!=='..')) {
				closedir($dh);	
      			delete($dirname.'/'.$data);
			}
		}
		rmdir($dirname);
	}
}

delete('some_dir');
 ?>
