<?php
/**
 * Created by PhpStorm.
 * User: Ashir amin
 * Date: 4/21/15
 * Time: 6:31 PM
 */
?>

<?php
$pagename = 'Home';
include ('includes/header.php');
require_once('config/conn.php');

$SQL = $conn->prepare('select * from cities where userid=?');
$SQL->bindValue('1', $_SESSION['userid']);
$SQL->execute();



?>

<style>
    figure {
        display: block;
        position: relative;

    }

    figcaption {

        background: rgba(0,0,0,0.55);
        color: white;
        padding: 10px 20px;
    }
    ul {
        margin: 0px;
        padding: 0px;
        list-style: none;
    }
    li{
        margin: 0 0 10px 0;
    }

</style>


<br/>
<div class="container">

    <div class="page-header">
        <h1>Weather Information</h1>

    </div>


    <div class="row">
        <?php
        while ($info = $SQL->fetch()) {
            $url = "http://api.wunderground.com/api/7a91b5cddca2fd90/conditions/q/" . $info['state'] . "/" . $info['cityname'] . ".json";

            //$json_string = file_get_contents('d.php'); ///testing purposes
            $json_string = file_get_contents($url);

            $parsed_json = json_decode($json_string);

            $temp_f = $parsed_json->{'current_observation'}->{'temp_f'};

            $imgurl = $parsed_json->{'current_observation'}->{'icon_url'};
            $City = $parsed_json->{'current_observation'}->{'display_location'}->{'full'};

            $wind = $parsed_json->{'current_observation'}->{'wind_mph'};
            $humidity = $parsed_json->{'current_observation'}->{'relative_humidity'};
            $feelslike = $parsed_json->{'current_observation'}->{'feelslike_f'};
            $weather = $parsed_json->{'current_observation'}->{'weather'};
            $imgurl = $parsed_json->{'current_observation'}->{'icon_url'};
            $localtime = $parsed_json->{'current_observation'}->{'local_time_rfc822'};
            $Date = new DateTime($localtime);
            $time = $Date->format('l h:i A');
           ?>

        <div class="col-md-4">
            <figure style="  text-align: center;">
                <h2><?=$City?></h2>
                <h5><?=$weather?></h5>
                <img src="<?=$imgurl?>" alt="<?=$weather?>">
                <h2 style="display: inline"><?=$temp_f?><sup>°F</sup></h2><br/><span>Feels Like <?=$feelslike?>°</span>

                <figcaption>
                    <ul>
                        <li>Local Time: <?=$time?></li>
                        <li>Humidity <?=$humidity?></li>
                        <li>Wind <?=$wind?> MPH</li>
                    </ul>

                </figcaption>
            </figure>
        </div>
        <?php
        }

        ?>
    </div>

    <?php
    If ($SQL->rowCount() == 0) {
        ?>
        <p class="lead"><a href="addcity.php">Click here to add locations</a></p>
    <?php
    }
    ?>



</div> <!-- /container -->

<script src="js/bootstrap.min.js"></script>
</body>
</html>