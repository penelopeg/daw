<?php
function select_query_assoc($query, $values = array()) {
	global $pdo;
	$stmt = $pdo->prepare($query);
	$stmt->execute($values);
	$res = array();
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$data = array();
		foreach ($row as $key => $r_data) {
			$data[$key] =  $r_data;
		}
		$res[] = $data;
	}
	return $res;
}

function select_query_num($query, $values = array()) {
	global $pdo;
	$stmt = $pdo->prepare($query);
	$stmt->execute($values);
	$res = array();
	while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
		$data = array();
		foreach ($row as $key => $r_data) {
			$data[$key] =  $r_data;
		}
		$res[] = $data;
	}
	return $res;
}

function execute_query($query, $values = array()) {
	global $pdo;
	$stmt = $pdo->prepare($query);
	$stmt->execute($values);
}

function last_insert_id() {
	global $pdo;
	return $pdo->lastInsertId();
}

?>