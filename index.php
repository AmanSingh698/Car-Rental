<style>
    .card {
        display: flex;
        flex-wrap: wrap;
        margin: 10px;
        gap: 10px;
        flex-direction: row;
        justify-content: space-around;
    }
</style>

<?php
include "header.php";

include "db.php";

echo "Note : If you're viewing this for the first time, then please first signup as agency and add some cars overs there
 to see the data on the home page because data is being fetched from the backend.";

$query = "select * from addcar";

$result = mysqli_query($conn, $query);


while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class=card style=width: 18rem;>";
    echo "<ul class=list-group list-group-flush>";
    echo "<li class=list-group-item>Model Number : $row[model]</li>";
    echo "<li class=list-group-item>Vehicle Number : $row[number]</li>";
    echo "<li class=list-group-item>Caparacity : $row[capacity]</li>";
    echo "<li class=list-group-item>Rent : $row[rent]/perDay</li>";
    echo "<a href=book.php><button type=button class=btn btn-primary btn-sm>Rent Now</button></a>";

    echo "</ul>";
    echo "</div>";
}

?>