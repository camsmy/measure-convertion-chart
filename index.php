<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Length Convertion Chart</title>
    <link rel="stylesheet" href="./style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet" />
</head>

<body>
    <main>
                <div class="container">
                    <div class="row d-flex justify-content p-1">
                        <?php
                        echo "<h2>Measure Conversion Chart</h2>";
                    ?>
                    </div>
                    <div class="row d-flex justify-content p-1 square3">
                        <?php
                        echo "<h3>Metric Conversions<h3>";
                    ?>
                    </div>
                    <div class="container">
                        <?php
                    $num = 1;
                    $equals = '=';
                echo "
                <table style='width: 100%;' border='2'>
                <tbody>
                <tr style='height: 21.8px;'>
                <td style='width: 15%; height: 21.8px;'>&nbsp;$num centimetre</td>
                <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
                <td style='width: 20%; height: 21.8px;'>&nbsp;".($num*10)." millimeters</td>";
        echo "  <td style='width: 15%; height: 21.8px;'>&nbsp;$num cm</td>
                <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
                <td style='width: 20%; height: 21.8px;'>&nbsp;".($num*10)." mm</td></tr>";
                echo " 
                <tr style='height: 21.8px;'>
                <td style='width: 15%; height: 21.8px;'>&nbsp;$num decimetere</td>
                <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
                <td style='width: 20%; height: 21.8px;'>&nbsp;".($num*10)." centimeteres</td>";
        echo "  <td style='width: 15%; height: 21.8px;'>&nbsp;$num dm</td>
                <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
            <td style='width: 20%; height: 21.8px;'>&nbsp;".($num*10)." cm</td></tr>";
            echo " 
            <tr style='height: 21.8px;'>
            <td style='width: 15%; height: 21.8px;'>&nbsp;$num metre</td>
            <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
            <td style='width: 20%; height: 21.8px;'>&nbsp;".($num*100)." centimetres</td>";
        echo "  <td style='width: 15%; height: 21.8px;'>&nbsp;$num m</td>
            <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
            <td style='width: 20%; height: 21.8px;'>&nbsp;".($num*100)." cm</td></tr>";
            echo " 
            <tr style='height: 21.8px;'>
            <td style='width: 15%; height: 21.8px;'>&nbsp;$num kilometre</td>
            <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
            <td style='width: 20%; height: 21.8px;'>&nbsp;".($num*1000)." metres</td>";
        echo "  <td style='width: 15%; height: 21.8px;'>&nbsp;$num km</td>
            <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
        <td style='width: 20%; height: 21.8px;'>&nbsp;".($num*1000)." m</td></tr>
            </tbody>
            </table>";
                ?>
                    </div>

                <div class="row d-flex justify-content p-1 square3">
                    <?php
                        echo "<h3>Imperial Conversions<h3>";
                    ?>
                </div>
                <div class="container">
                    <?php
                    $num = 1;
                    $equals = '=';
                echo "
                <table style='width: 100%;' border='2'>
                <tbody>
                <tr style='height: 21.8px;'>
                <td style='width: 15%; height: 21.8px;'>&nbsp;$num foot</td>
                <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
                <td style='width: 20%; height: 21.8px;'>&nbsp;".($num*12)." inches</td>";
        echo "  <td style='width: 15%; height: 21.8px;'>&nbsp;$num ft</td>
                <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
                <td style='width: 20%; height: 21.8px;'>&nbsp;".($num*12)." inch</td></tr>";
                echo " 
                <tr style='height: 21.8px;'>
                <td style='width: 15%; height: 21.8px;'>&nbsp;$num yard</td>
                <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
                <td style='width: 20%; height: 21.8px;'>&nbsp;".($num*3)." feet</td>";
        echo "  <td style='width: 15%; height: 21.8px;'>&nbsp;$num yd</td>
                <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
            <td style='width: 20%; height: 21.8px;'>&nbsp;".($num*3)." ft</td></tr>";
            echo " 
            <tr style='height: 21.8px;'>
            <td style='width: 15%; height: 21.8px;'>&nbsp;$num chain</td>
            <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
            <td style='width: 20%; height: 21.8px;'>&nbsp;".($num*22)." yards</td>";
        echo "  <td style='width: 15%; height: 21.8px;'>&nbsp;$num ch</td>
            <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
            <td style='width: 20%; height: 21.8px;'>&nbsp;".($num*22)." yd</td></tr>";
            echo " 
            <tr style='height: 21.8px;'>
            <td style='width: 15%; height: 21.8px;'>&nbsp;$num furlong</td>
            <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
            <td style='width: 20%; height: 21.8px;'>&nbsp;".($num*220)." yards (or 10 chains)</td>";
        echo "  <td style='width: 15%; height: 21.8px;'>&nbsp;$num fur</td>
            <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
        <td style='width: 20%; height: 21.8px;'>&nbsp;".($num*220)." yd (or 10ch)</td></tr>";
        echo " 
        <tr style='height: 21.8px;'>
        <td style='width: 15%; height: 21.8px;'>&nbsp;$num mile</td>
        <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
        <td style='width: 20%; height: 21.8px;'>&nbsp;".($num*1760)." yards (or 8 furlongs)</td>";
        echo "  <td style='width: 15%; height: 21.8px;'>&nbsp;$num mi</td>
        <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
        <td style='width: 20%; height: 21.8px;'>&nbsp;".($num*1760)." yd (or 8 fur)</td></tr>
            </tbody>
            </table>";
                ?>
                </div>

                <div class="row d-flex justify-content p-1 square3">
                    <?php
                        echo "<h3>Metric -> Imperial Conversions<h3>";
                    ?>
                </div>
                <div class="container">
                    <?php
                    $num = 1;
                    $equals = '=';
                echo "
                <table style='width: 100%;' border='2'>
                <tbody>
                <tr style='height: 21.8px;'>
                <td style='width: 15%; height: 21.8px;'>&nbsp;$num millimetre</td>
                <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
                <td style='width: 20%; height: 21.8px;'>&nbsp;".($num/25.4)." inches</td>";
        echo "  <td style='width: 15%; height: 21.8px;'>&nbsp;$num mm</td>
                <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
                <td style='width: 20%; height: 21.8px;'>&nbsp;".($num/25.4)." inch</td></tr>";
                echo " 
                <tr style='height: 21.8px;'>
                <td style='width: 15%; height: 21.8px;'>&nbsp;$num centimetre</td>
                <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
                <td style='width: 20%; height: 21.8px;'>&nbsp;".($num/2.54)." inches</td>";
        echo "  <td style='width: 15%; height: 21.8px;'>&nbsp;$num cm</td>
                <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
            <td style='width: 20%; height: 21.8px;'>&nbsp;".($num/2.54)." in</td></tr>";
            echo " 
            <tr style='height: 21.8px;'>
            <td style='width: 15%; height: 21.8px;'>&nbsp;$num metre</td>
            <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
            <td style='width: 20%; height: 21.8px;'>&nbsp;".($num*39.37)." inches</td>";
        echo "  <td style='width: 15%; height: 21.8px;'>&nbsp;$num m</td>
            <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
            <td style='width: 20%; height: 21.8px;'>&nbsp;".($num*39.37)." in</td></tr>";
            echo " 
            <tr style='height: 21.8px;'>
            <td style='width: 15%; height: 21.8px;'>&nbsp;$num metre</td>
            <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
            <td style='width: 20%; height: 21.8px;'>&nbsp;".($num*3.281)." feet</td>";
        echo "  <td style='width: 15%; height: 21.8px;'>&nbsp;$num m</td>
            <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
        <td style='width: 20%; height: 21.8px;'>&nbsp;".($num*3.281)." ft (or 10ch)</td></tr>";
        echo " 
        <tr style='height: 21.8px;'>
        <td style='width: 15%; height: 21.8px;'>&nbsp;$num metre</td>
        <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
        <td style='width: 20%; height: 21.8px;'>&nbsp;".($num*1.094)." yards</td>";
        echo "  <td style='width: 15%; height: 21.8px;'>&nbsp;$num m</td>
        <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
        <td style='width: 20%; height: 21.8px;'>&nbsp;".($num*1.094)." yd</td></tr>";
        echo " 
        <tr style='height: 21.8px;'>
        <td style='width: 15%; height: 21.8px;'>&nbsp;$num kilometre</td>
        <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
        <td style='width: 20%; height: 21.8px;'>&nbsp;".($num*1094)." yards</td>";
        echo "  <td style='width: 15%; height: 21.8px;'>&nbsp;$num km</td>
        <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
        <td style='width: 20%; height: 21.8px;'>&nbsp;".($num*1094)." yt</td></tr>";
        echo " 
        <tr style='height: 21.8px;'>
        <td style='width: 15%; height: 21.8px;'>&nbsp;$num kilometre</td>
        <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
        <td style='width: 20%; height: 21.8px;'>&nbsp;".($num*1.609)." miles</td>";
        echo "  <td style='width: 15%; height: 21.8px;'>&nbsp;$num km</td>
        <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
        <td style='width: 20%; height: 21.8px;'>&nbsp;".($num*1.609)." mi</td></tr>
            </tbody>
            </table>";
                ?>
                </div>


                <div class="row d-flex justify-content p-1 square3">
                    <?php
                        echo "<h3>Imperial -> Metric Conversions<h3>";
                    ?>
                </div>
                <div class="container">
                    <?php
                    $num = 1;
                    $equals = '=';
                echo "
                <table style='width: 100%;' border='2'>
                <tbody>
                <tr style='height: 21.8px;'>
                <td style='width: 15%; height: 21.8px;'>&nbsp;$num inches</td>
                <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
                <td style='width: 20%; height: 21.8px;'>&nbsp;".($num*2.54)." centimetre</td>";
        echo "  <td style='width: 15%; height: 21.8px;'>&nbsp;$num in</td>
                <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
                <td style='width: 20%; height: 21.8px;'>&nbsp;".($num*2.54)." cm</td></tr>";
                echo " 
                <tr style='height: 21.8px;'>
                <td style='width: 15%; height: 21.8px;'>&nbsp;$num foot</td>
                <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
                <td style='width: 20%; height: 21.8px;'>&nbsp;".($num*30.48)." centimetres</td>";
        echo "  <td style='width: 15%; height: 21.8px;'>&nbsp;$num ft</td>
                <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
            <td style='width: 20%; height: 21.8px;'>&nbsp;".($num*30.48)." cm</td></tr>";
            echo " 
            <tr style='height: 21.8px;'>
            <td style='width: 15%; height: 21.8px;'>&nbsp;$num yard</td>
            <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
            <td style='width: 20%; height: 21.8px;'>&nbsp;".($num*91.44)." centimetres</td>";
        echo "  <td style='width: 15%; height: 21.8px;'>&nbsp;$num yd</td>
            <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
            <td style='width: 20%; height: 21.8px;'>&nbsp;".($num*91.44)." cm</td></tr>";
            echo " 
            <tr style='height: 21.8px;'>
            <td style='width: 15%; height: 21.8px;'>&nbsp;$num yard</td>
            <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
            <td style='width: 20%; height: 21.8px;'>&nbsp;".($num/1.094)." metres</td>";
        echo "  <td style='width: 15%; height: 21.8px;'>&nbsp;$num yd</td>
            <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
        <td style='width: 20%; height: 21.8px;'>&nbsp;".($num*1.094)." m</td></tr>";
        echo " 
        <tr style='height: 21.8px;'>
        <td style='width: 15%; height: 21.8px;'>&nbsp;$num mile</td>
        <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
        <td style='width: 20%; height: 21.8px;'>&nbsp;".($num*1609)." metres</td>";
        echo "  <td style='width: 15%; height: 21.8px;'>&nbsp;$num mi</td>
        <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
        <td style='width: 20%; height: 21.8px;'>&nbsp;".($num*1609)." m</td></tr>";
        echo " 
        <tr style='height: 21.8px;'>
        <td style='width: 15%; height: 21.8px;'>&nbsp;$num mile</td>
        <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
        <td style='width: 20%; height: 21.8px;'>&nbsp;".($num/1000)." kilometres</td>";
        echo "  <td style='width: 15%; height: 21.8px;'>&nbsp;$num mi</td>
        <td style='width: 5%; height: 21.8px;'>&nbsp;$equals</td>
        <td style='width: 20%; height: 21.8px;'>&nbsp;".($num*1000)." km</td></tr>
            </tbody>
            </table>";
                ?>
                </div>



                </div>
        
    </main>
</body>

</html>