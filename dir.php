<?php

$name = "images";

if(!is_dir($name)){

	mkdir($name);

	echo "Diretório criado";
}
else{

	echo "Diretório ja existe: $name";
}

