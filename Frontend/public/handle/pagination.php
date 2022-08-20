<?php
// connect to database
$conn = mysqli_connect('localhost', 'root', '', 'fashion');

// define how many results you want per page
$results_per_page = 6;

// find out the number of results stored in database
$sql = 'SELECT * FROM products';
$count = mysqli_query($conn, $sql);
$number_of_results = mysqli_num_rows($count);

// determine number of total pages available
$number_of_pages = ceil($number_of_results / $results_per_page);

// determine which page number visitor is currently on
if (!isset($_GET['pg'])) {
  $page = 1;
} else {
  $page = $_GET['pg'];
}

// determine the sql LIMIT starting number for the results on the displaying page
$this_page_first_result = ($page - 1) * $results_per_page;

// retrieve selected results from database and display them on page


// display the links to the pages
?>
