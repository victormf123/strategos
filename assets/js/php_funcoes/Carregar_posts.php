<?php

MaisPosts();

function MaisPosts(){
/**/
	$conn = new mysqli('127.0.0.1:3306', 'root', 'root', 'obarbeiro');
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 
	$result = $conn->query("select * from wp_obarbeiroposts where post_status like 'publish' and ping_status like 'open'ORDER BY post_date DESC");
	$array= array();
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $novoArray = array('titulo'=> $row['post_title'], 'link'=> $row['guid'],'conteudo'=> $row['post_content'] ,'categoria' => the_category(), 'img_url'=>the_post_thumbnail_url());
				 array_push($array, $novoArray);
    }

    
    echo json_encode($array);
	}
}