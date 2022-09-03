

<?php
$con=mysqli_connect("localhost","root","","bookstore");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql ="SELECT `book.BOOK-ID`,`book.TITLE`,`book.PUB-NAME`,
`bookauthor.A_NAME`,
`bookcopy.NO_OF_COPY`,`library.BRANCH_ID`
 FROM `book`,`bookauthor`,`bookcopy`,`library` WHERE `book.BOOK_ID`=`bookauthor.BOOK_ID`
 AND `book.BOOK_ID`=`bookcopy.BOOK_ID` 
 AND `library.BRANCH-ID`=`bookcopy.BRANCH_ID`";
$result = mysqli_query($con,$sql);
echo "<table border='1'>
<tr>
<th>BOOK-ID</th>
<th>TITLE</th>
<th>PUB-NAME</th>
<th>A-NAME</th>
<th>NO-OF-COPY</th>
<th>BRANCH-ID</th>
</tr>";
$rows = mysqli_num_rows($result)

if($rows > 0)
{
    while ($row = mysqli_fetch_array($result)) {
        # code...
        echo "<tr>";
        echo "<td>" . $row['book.BOOK-ID'] . "</td>";
        echo "<td>" . $row['book.TITLE'] . "</td>";
        echo "<td>" . $row['book.PUB-NAME'] . "</td>";
        echo "<td>" . $row['bookauthor.A-NAME'] . "</td>";
        echo "<td>" . $row['bookcopy.NO-OF-COPY'] . "</td>";
        echo "<td>" . $row['library.BRANCH-ID'] . "</td>";
        echo "</tr>";
    }
}
echo "</table>";


mysqli_close($con);
?>
