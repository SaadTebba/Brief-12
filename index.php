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

        <form method="POST">

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

            // for ($x = 0; $x <= 12; $x++) {
            //     $value$x = $_POST["firstScore"];
            // }

            $firstValue = $_POST["firstScore"];
            $secondValue = $_POST["secondScore"];
            $thirdValue = $_POST["thirdScore"];
            $fourthValue = $_POST["fourthScore"];
            $fifthValue = $_POST["fifthScore"];
            $sixthValue = $_POST["sixthScore"];
            $secondValue = $_POST["seventhScore"];
            $secondValue = $_POST["eighthScore"];
            $secondValue = $_POST["ninthScore"];
            $secondValue = $_POST["tenthScore"];
            $secondValue = $_POST["eleventhScore"];
            $secondValue = $_POST["twelvethScore"];

            function createTable()
            {
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
                        <td>5</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th scope='row'>2</th>
                        <td>Croatia</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
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
                        <td>0</td>
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
                        <td>0</td>
                    </tr>
                </tbody>
                </table>";
            }
            createTable();

            ?>

            <input class="btn btn-primary w-50" type="submit" name="submitButton" value="Submit">

            <?php

            $firstValue = $_POST["firstScore"];
            $secondValue = $_POST["secondScore"];

            if ($firstValue == null or $firstValue == "" or $firstValue == " ") $firstValue == 0;
            if ($secondValue == null or $secondValue == "" or $secondValue == " ") $secondValue == 0;

            if ($firstValue > $secondValue) {
                echo "<br>";
                echo "Morocco won";
                echo "<br>";
                echo $firstValue;
                echo " - ";
                echo $secondValue;
            } elseif ($firstValue < $secondValue) {
                echo "<br>";
                echo "Croatia won";
                echo "<br>";
                echo $firstValue;
                echo " - ";
                echo $secondValue;
            } else {
                echo "<br>";
                echo "Draw";
                echo "<br>";
                echo $firstValue;
                echo " - ";
                echo $secondValue;
            }

            ?>
        </form>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>