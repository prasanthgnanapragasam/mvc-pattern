<?php

class UserModel {

	public function getUserList($conn) {
		$sql = "SELECT id, firstname, lastname FROM user limit 10";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc())
		{
		    $rows[] = $row;
		}
		return $rows;
	}

	public function create($conn) {
		$stmt = $conn->prepare("INSERT INTO user (firstname, lastname) VALUES (?, ?)");
		$stmt->bind_param("ss", $firstname, $lastname);
		$firstname = "John";
		$lastname = "Doe";
		return $stmt->execute();
	}

	public function update($conn) {
		$sql = "UPDATE user SET lastname='Doe' WHERE id=3717";
	    $stmt = $conn->prepare($sql);
	    return $stmt->execute();
	}
}

