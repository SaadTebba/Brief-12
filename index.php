<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brief-12</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <div class="container text-center">

        <form method="GET">

            <!-- Table of content -->

            <table class="table table-bordered mt-5">

                <thead>
                    <tr>
                        <th class="col-3">Team A</th>
                        <th class="col-6">Score</th>
                        <th class="col-3">Team B</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Morocco</td>
                        <td>
                            <input type="number" name="firstScore" value="0">
                            <input type="number" name="secondScore" value="0">
                        </td>
                        <td>Croatia</td>
                    </tr>
                    <tr>
                        <td>Belgium</td>
                        <td>
                            <input type="number" name="thirdScore">
                            <input type="number" name="fourthScore">
                        </td>
                        <td>Canada</td>
                    </tr>
                    <tr>
                        <td>Belgium</td>
                        <td>
                            <input type="number" name="fifthScore">
                            <input type="number" name="sixthScore">
                        </td>
                        <td>Morocco</td>
                    </tr>
                    <tr>
                        <td>Croatia</td>
                        <td>
                            <input type="number" name="seventhScore">
                            <input type="number" name="eighthScore">
                        </td>
                        <td>Canada</td>
                    </tr>
                    <tr>
                        <td>Croatia</td>
                        <td>
                            <input type="number" name="ninthScore">
                            <input type="number" name="tenthScore">
                        </td>
                        <td>Belgium</td>
                    </tr>
                    <tr>
                        <td>Canada</td>
                        <td>
                            <input type="number" name="eleventhScore">
                            <input type="number" name="twelvethScore">
                        </td>
                        <td>Morocco</td>
                    </tr>
                </tbody>

            </table>

            <!-- Table of results -->

            <?php


            // array_push($winArray, 1);

            // echo count($winArray);


            // to sort: arsort(); - asort();

            function createTable()
            {
                $matchesArray = array();
                $drawArray = array();
                $winArray = array();
                $loseArray = array();


                $firstValue = $_GET["firstScore"];
                $secondValue = $_GET["secondScore"];

                $thirdValue = $_GET["thirdScore"];
                $fourthValue = $_GET["fourthScore"];

                $fifthValue = $_GET["fifthScore"];
                $sixthValue = $_GET["sixthScore"];

                $seventhScore = $_GET["seventhScore"];
                $eighthScore = $_GET["eighthScore"];

                $ninthScore = $_GET["ninthScore"];
                $tenthScore = $_GET["tenthScore"];

                $eleventhScore = $_GET["eleventhScore"];
                $twelvethScore = $_GET["twelvethScore"];

                switch ($firstValue) {
                    case $firstValue > $secondValue:
                        echo "Morocco won";
                        array_push($winArray, 1);
                        break;
                    case $firstValue < $secondValue:
                        echo "Croatia won";
                        break;
                    default:
                        echo "Draw!";
                }

                echo "<br>";
                echo count($winArray);

                echo "<table class='table table-bordered mt-5'>
                <thead>
                    <tr>
                        <td>#</td>
                        <td>Teams</td>
                        <td>Points</td>
                        <td>Matches</td>
                        <td>Wins</td>
                        <td>Draws</td>
                        <td>Loses</td>
                        <td>Goals for</td>
                        <td>Goals against</td>
                        <td>+/-</td>
                    </tr>
                </thead>";

                echo "<tbody>
                    <tr>
                        <th scope='row'>1</th>
                        <td>Morocco</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>$firstValue</td>
                        <td>$secondValue</td>
                        <td>";
                echo $firstValue - $secondValue;
                echo "</td>
                    </tr>
                    <tr>
                        <th scope='row'>2</th>
                        <td>Croatia</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>$secondValue</td>
                        <td>$firstValue</td>
                        <td>";
                echo $secondValue - $firstValue;
                echo "</td>
                    </tr>
                    <tr>
                        <th scope='row'>3</th>
                        <td>Belgium</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>";
                echo $firstValue - $secondValue;
                echo "</td>
                    </tr>
                    <tr>
                        <th scope='row'>4</th>
                        <td>Canada</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>";
                echo $firstValue - $secondValue;
                echo "</td>
                    </tr>
                </tbody>
                </table>";
            }

            createTable();

            ?>

            <input class="btn btn-primary w-50" type="submit" name="submitButton" value="Submit">

        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>