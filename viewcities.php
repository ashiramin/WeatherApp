<?php
/**
 * Created by PhpStorm.
 * User: Ashir amin
 * Date: 4/21/15
 * Time: 6:36 PM
 */
?>

<?php
$pagename = 'Viewcity';
include('includes/header.php');
require_once('config/conn.php');

$SQL = $conn->prepare('select * from cities where userid=?');
$SQL->bindValue('1', $_SESSION['userid']);
$SQL->execute();


?>






<div class="container">
    <br/>
    <br/>
    <br/>
    <form method="POST" ACTION="processdelete.php">
    <table class="table table-responsive table-striped">

        <thead>
        <tr>
            <th>#</th>
            <th>Cities</th>
            <th>Delete</th>


        </tr>
        </thead>
        <tbody>

        <?php
        $count = 1;
        while ($cities = $SQL->fetch()) {

            ?>
            <tr>
            <td><?=$count?></td>
            <td><?=str_replace('_',' ',$cities['city'])?></td>
            <td> <label>
                    <input value="<?=$cities['entryid']?>" name="<?=$count?>" type="checkbox">
                    <input type="hidden">
                </label>
            </td>
            <?php
            $count++;
        }
        ?>
            </tr>
        <?php
        if ($SQL->rowCount() ==0) {
            ?>
            <td style="text-align: center;" colspan="3">No cities have been added</td>
            <?php

        }
        ?>

        </tbody>

    </table>

        <input type="submit" value="Submit" >
    </form>
</div> <!-- /container -->

<script>

</script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>