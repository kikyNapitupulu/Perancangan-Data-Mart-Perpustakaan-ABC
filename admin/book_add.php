<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$book_id = $_POST['book_id'];
		$isbn = $_POST['isbn'];
		$title = $_POST['title'];
		$category = $_POST['category'];
		$author = $_POST['author'];
		$publisher = $_POST['publisher'];
		$pub_year = $_POST['pub_year'];

		$sql = "INSERT INTO books (book_id,isbn, category_id, title, author, publisher, publish_year) VALUES ('$book_id', '$isbn', '$category', '$title', '$author', '$publisher', '$pub_year')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Book added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: book.php');

?>