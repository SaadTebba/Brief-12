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
                            <div class="form-outline d-inline-block" style="width: 8rem;">
                                <input type="number" name="firstScore" class="form-control" required>
                            </div>
                            <div class="form-outline d-inline-block" style="width: 8rem;">
                                <input type="number" name="secondScore" class="form-control" required>
                            </div>
                        </td>
                        <td>Croatia</td>
                    </tr>
                    <tr>
                        <td>Belgium</td>
                        <td>
                            <div class="form-outline d-inline-block" style="width: 8rem;">
                                <input type="number" name="thirdScore" class="form-control" required>
                            </div>
                            <div class="form-outline d-inline-block" style="width: 8rem;">
                                <input type="number" name="fourthScore" class="form-control" required>
                            </div>
                        </td>
                        <td>Canada</td>
                    </tr>
                    <tr>
                        <td>Belgium</td>
                        <td>
                            <div class="form-outline d-inline-block" style="width: 8rem;">
                                <input type="number" name="fifthScore" class="form-control" required>
                            </div>
                            <div class="form-outline d-inline-block" style="width: 8rem;">
                                <input type="number" name="sixthScore" class="form-control" required>
                            </div>
                        </td>
                        <td>Morocco</td>
                    </tr>
                    <tr>
                        <td>Croatia</td>
                        <td>
                            <div class="form-outline d-inline-block" style="width: 8rem;">
                                <input type="number" name="seventhScore" class="form-control" required>
                            </div>
                            <div class="form-outline d-inline-block" style="width: 8rem;">
                                <input type="number" name="eighthScore" class="form-control" required>
                            </div>
                        </td>
                        <td>Canada</td>
                    </tr>
                    <tr>
                        <td>Croatia</td>
                        <td>
                            <div class="form-outline d-inline-block" style="width: 8rem;">
                                <input type="number" name="ninthScore" class="form-control" required>
                            </div>
                            <div class="form-outline d-inline-block" style="width: 8rem;">
                                <input type="number" name="tenthScore" class="form-control" required>
                            </div>
                        </td>
                        <td>Belgium</td>
                    </tr>
                    <tr>
                        <td>Canada</td>
                        <td>
                            <div class="form-outline d-inline-block" style="width: 8rem;">
                                <input type="number" name="eleventhScore" class="form-control" required>
                            </div>
                            <div class="form-outline d-inline-block" style="width: 8rem;">
                                <input type="number" name="twelvethScore" class="form-control" required>
                            </div>
                        </td>
                        <td>Morocco</td>
                    </tr>
                </tbody>

            </table>

            <input class="btn btn-primary" type="submit" name="submitButton" value="Submit">

            <!-- Table of results -->

            <?php

            // to sort: arsort(); - asort();

            function createTable()
            {

                $matchesArray = array("Morocco" => 0, "Croatia" => 0, "Belgium" => 0, "Canada" => 0);
                $drawArray = array("Morocco" => 0, "Croatia" => 0, "Belgium" => 0, "Canada" => 0);
                $winArray = array("Morocco" => 0, "Croatia" => 0, "Belgium" => 0, "Canada" => 0);
                $loseArray = array("Morocco" => 0, "Croatia" => 0, "Belgium" => 0, "Canada" => 0);
                $goalsFor = array("Morocco" => 0, "Croatia" => 0, "Belgium" => 0, "Canada" => 0);
                $goalsAgainst = array("Morocco" => 0, "Croatia" => 0, "Belgium" => 0, "Canada" => 0);

                $firstValue = $_POST["firstScore"];
                $secondValue = $_POST["secondScore"];

                $thirdValue = $_POST["thirdScore"];
                $fourthValue = $_POST["fourthScore"];

                $fifthValue = $_POST["fifthScore"];
                $sixthValue = $_POST["sixthScore"];

                $seventhValue = $_POST["seventhScore"];
                $eighthValue = $_POST["eighthScore"];

                $ninthValue = $_POST["ninthScore"];
                $tenthValue = $_POST["tenthScore"];

                $eleventhValue = $_POST["eleventhScore"];
                $twelvethValue = $_POST["twelvethScore"];

                // Covers win & lose & draw cases

                switch ($firstValue) {
                    case $firstValue > $secondValue:
                        $winArray["Morocco"]++;
                        $loseArray["Croatia"]++;
                        $matchesArray["Croatia"]++;
                        $matchesArray["Morocco"]++;
                        break;
                    case $firstValue < $secondValue:
                        $winArray["Croatia"]++;
                        $loseArray["Morocco"]++;
                        $matchesArray["Croatia"]++;
                        $matchesArray["Morocco"]++;
                        break;
                    case $firstValue == $secondValue:
                    default:
                        $drawArray["Morocco"]++;
                        $drawArray["Croatia"]++;
                        $matchesArray["Croatia"]++;
                        $matchesArray["Morocco"]++;
                };

                switch ($thirdValue) {
                    case $thirdValue > $fourthValue:
                        $winArray["Belgium"]++;
                        $loseArray["Canada"]++;
                        $matchesArray["Canada"]++;
                        $matchesArray["Belgium"]++;
                        break;
                    case $thirdValue < $fourthValue:
                        $winArray["Canada"]++;
                        $loseArray["Belgium"]++;
                        $matchesArray["Canada"]++;
                        $matchesArray["Belgium"]++;
                        break;
                    case $thirdValue == $fourthValue:
                    default:
                        $drawArray["Belgium"]++;
                        $drawArray["Canada"]++;
                        $matchesArray["Canada"]++;
                        $matchesArray["Belgium"]++;
                };

                switch ($fifthValue) {
                    case $fifthValue > $sixthValue:
                        $winArray["Belgium"]++;
                        $loseArray["Morocco"]++;
                        $matchesArray["Belgium"]++;
                        $matchesArray["Morocco"]++;
                        break;
                    case $fifthValue < $sixthValue:
                        $winArray["Morocco"]++;
                        $loseArray["Belgium"]++;
                        $matchesArray["Belgium"]++;
                        $matchesArray["Morocco"]++;
                        break;
                    case $fifthValue == $sixthValue:
                    default:
                        $drawArray["Belgium"]++;
                        $drawArray["Morocco"]++;
                        $matchesArray["Belgium"]++;
                        $matchesArray["Morocco"]++;
                };

                switch ($seventhValue) {
                    case $seventhValue > $eighthValue:
                        $winArray["Croatia"]++;
                        $loseArray["Canada"]++;
                        $matchesArray["Canada"]++;
                        $matchesArray["Croatia"]++;
                        break;
                    case $seventhValue < $eighthValue:
                        $winArray["Canada"]++;
                        $loseArray["Croatia"]++;
                        $matchesArray["Canada"]++;
                        $matchesArray["Croatia"]++;
                        break;
                    case $seventhValue == $eighthValue:
                    default:
                        $drawArray["Croatia"]++;
                        $drawArray["Canada"]++;
                        $matchesArray["Canada"]++;
                        $matchesArray["Croatia"]++;
                };

                switch ($ninthValue) {
                    case $ninthValue > $tenthValue:
                        $winArray["Croatia"]++;
                        $loseArray["Belgium"]++;
                        $matchesArray["Belgium"]++;
                        $matchesArray["Croatia"]++;
                        break;
                    case $ninthValue < $tenthValue:
                        $winArray["Belgium"]++;
                        $loseArray["Croatia"]++;
                        $matchesArray["Belgium"]++;
                        $matchesArray["Croatia"]++;
                        break;
                    case $ninthValue == $tenthValue:
                    default:
                        $drawArray["Croatia"]++;
                        $drawArray["Belgium"]++;
                        $matchesArray["Belgium"]++;
                        $matchesArray["Croatia"]++;
                };

                switch ($eleventhValue) {
                    case $eleventhValue > $twelvethValue:
                        $winArray["Canada"]++;
                        $loseArray["Morocco"]++;
                        $matchesArray["Morocco"]++;
                        $matchesArray["Canada"]++;
                        break;
                    case $eleventhValue < $twelvethValue:
                        $winArray["Morocco"]++;
                        $loseArray["Canada"]++;
                        $matchesArray["Morocco"]++;
                        $matchesArray["Canada"]++;
                        break;
                    case $eleventhValue == $twelvethValue:
                    default:
                        $drawArray["Canada"]++;
                        $drawArray["Morocco"]++;
                        $matchesArray["Morocco"]++;
                        $matchesArray["Canada"]++;
                };

                // Goals for & Goals against teams

                $goalsFor["Morocco"] = $firstValue + $sixthValue + $twelvethValue;
                $goalsFor["Croatia"] = $secondValue + $seventhValue + $ninthValue;
                $goalsFor["Belgium"] = $thirdValue + $fifthValue + $tenthValue;
                $goalsFor["Canada"] = $fourthValue + $eighthValue + $eleventhValue;

                $goalsAgainst["Morocco"] = $secondValue + $fifthValue + $eleventhValue;
                $goalsAgainst["Croatia"] = $firstValue + $eighthValue + $tenthValue;
                $goalsAgainst["Belgium"] = $fourthValue + $sixthValue + $ninthValue;
                $goalsAgainst["Canada"] = $thirdValue + $seventhValue + $twelvethValue;

                echo "<br>";

                $cars = array("Volvo", "BMW", "Toyota");
                sort($cars);

                $clength = count($cars);
                for ($x = 0; $x < $clength; $x++) {
                    echo $cars[$x];
                    echo "<br>";
                };

                echo
                "<table class='table table-bordered mt-5'>
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

                echo "<tbody><tr>
                        <th scope='row'>1</th>
                        <td>Morocco</td><td>";
                echo ($winArray["Morocco"] * 3) + $drawArray["Morocco"];
                echo "</td><td>";
                echo $matchesArray["Morocco"];
                echo "</td><td>";
                echo $winArray["Morocco"];
                echo "</td><td>";
                echo $drawArray["Morocco"];
                echo "</td><td>";
                echo $loseArray["Morocco"];
                echo "</td><td>";
                echo $goalsFor["Morocco"];
                echo "</td><td>";
                echo $goalsAgainst["Morocco"];
                echo "</td><td>";
                echo $goalsFor["Morocco"] - $goalsAgainst["Morocco"];
                echo "</td></tr><tr>
                        <th scope='row'>2</th>
                        <td>Croatia</td><td>";
                echo $winArray["Croatia"] * 3 + $drawArray["Croatia"];
                echo "</td><td>";
                echo $matchesArray["Croatia"];
                echo "</td><td>";
                echo $winArray["Croatia"];
                echo "</td><td>";
                echo $drawArray["Croatia"];
                echo "</td><td>";
                echo $loseArray["Croatia"];
                echo "</td><td>";
                echo $goalsFor["Croatia"];
                echo "</td><td>";
                echo $goalsAgainst["Croatia"];
                echo "</td><td>";
                echo $goalsFor["Croatia"] - $goalsAgainst["Croatia"];
                echo "</td></tr><tr>
                        <th scope='row'>3</th>
                        <td>Belgium</td><td>";
                echo $winArray["Belgium"] * 3 + $drawArray["Belgium"];
                echo "</td><td>";
                echo $matchesArray["Belgium"];
                echo "</td><td>";
                echo $winArray["Belgium"];
                echo "</td><td>";
                echo $drawArray["Belgium"];
                echo "</td><td>";
                echo $loseArray["Belgium"];
                echo "</td><td>";
                echo $goalsFor["Belgium"];
                echo "</td><td>";
                echo $goalsAgainst["Belgium"];
                echo "</td><td>";
                echo $goalsFor["Belgium"] - $goalsAgainst["Belgium"];
                echo "</td></tr><tr>
                        <th scope='row'>4</th>
                        <td>Canada</td><td>";
                echo $winArray["Canada"] * 3 + $drawArray["Canada"];
                echo "</td><td>";
                echo $matchesArray["Canada"];
                echo "</td><td>";
                echo $winArray["Canada"];
                echo "</td><td>";
                echo $drawArray["Canada"];
                echo "</td><td>";
                echo $loseArray["Canada"];
                echo "</td><td>";
                echo $goalsFor["Canada"];
                echo "</td><td>";
                echo $goalsAgainst["Canada"];
                echo "</td><td>";
                echo $goalsFor["Canada"] - $goalsAgainst["Canada"];
                echo "</td></tr></tbody></table>";

                // ::::::::::::::::::::::::::::::::::::::::: Sorting array code :::::::::::::::::::::::::::::::::::::::::

                echo "<pre>";
                print_r($goalsFor);
                echo "</pre>";

                sort($goalsFor);

                $clength = count($goalsFor);
                for ($x = 0; $x < $clength; $x++) {
                    echo $goalsFor[$x];
                    echo "<br>";
                };

                // ::::::::::::::::::::::::::::::::::::::::: Sorting array code :::::::::::::::::::::::::::::::::::::::::

            };

            if (isset($_POST['submitButton'])) {
                createTable();
            }

            ?>

        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>