<!DOCTYPE html>
<html>
    <head>
        <title>WeatherApp</title>
        <style>
            th{
                background: red;
            }
            td{
                background: yellow;
            }
            #wrapper{
                display: flex;
                flex-flow: column wrap;
                justify-content: center;
                align-items: center;
                background: #A5A5A5;
                width: 200px;
            }
        </style>
    </head>
    <body>
    <?php
    require 'dbh.php';
    ?>
        <div id="wrapper">
            <h1>WeatherApp</h1>
            <table>
                <thead>
                    <tr>
                        <th>City</th>
                        <th>High</th>
                        <th>Low</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $q->fetch()): ?>
                        <tr>
                            <td><?php echo $row['city']; ?></td>
                            <td><?php echo $row['high']; ?></td>
                            <td><?php echo $row['low']; ?></td>
                            <!--<td><input type="checkbox" name="delrow[]" id="delrow[]" value="<? echo $city; ?>"></td>-->
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <form method="post" action="">
                <input type="text" name="city" placeholder="City name">
                <input type="number" name="high" placeholder="Maximum temperature">
                <input type="number" name="low" placeholder="Minumum temperature"><br>
                <input type="submit" name="insert" value="Submit">
                <!--<input type="submit" name="delbtn" value="delete selected">-->
            </form>
        </div>
    </body>
</html>

