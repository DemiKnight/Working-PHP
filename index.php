<html>
    <head>
        <script src="global.js"></script>
    </head>
    <body>
        <table border='1'>
            <tr>
                <td>
                    <h2>Rectangle 1</h2>
                    <p>Alex Knight</p>
                    <p>18016816</p>
                    <p>Date: <?php echo date("D:M:Y") ?></p>
                </td>
                <td>
                    <h2>Rectangle 2</h2>
                    <p><?php echo (3+4+5) ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <h2>Rectangle 3</h2>
                    <p> Random Number:
                        <?php
                        srand(3034);
                        echo rand();
                        ?></p>
                </td>
                <td>
                    <h2>Rectangle 4</h2>
                    <p>
                        <?php
                        for ($index = 30;$index !== 40;$index++)
                        {
                            if($index % 2 == 0)echo sprintf("%d,",$index);
                        }
                        ?>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <h2>Rectangle 5</h2>
                    <form name="form" action="" method="get">
                        <input type="text" name="randomN" id="randomN">
                        <button type="submit">Submit</button>
                    </form>
                </td>
                <td>
                    <h2>Rectangle 6</h2>
                    <p><?echo $_GET['randomN'] ?></p>
                    <p>
                        <?php

                        if ( $_GET['randomN'] %2 === 0)
                        {
                            echo "Even";
                        }
                        else
                        {
                            echo "Odd";
                        }

                        ?>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <h2>Rectangle 7</h2>
                    <p>
                        <?php

                        srand($_GET['randomN']);

                        echo sprintf("Random Gen N: %d", rand())

                        ?>
                    </p>
                </td>
                <td>
                    <h2>Rectangle 8</h2>

                    <p>
                        <?php

                        echo sprintf("Rot13 result: %s", str_rot13($_GET['randomN']));

                        ?>
                    </p>
                </td>

            </tr>
            <tr>
                <td>
                    <h2>Rectangle 9</h2>
                    <p id="Rec9">

                    </p>
                </td>
                <td>
                    <h2>Rectangle 10</h2>
                    <p>

                        <?php

                            $testString = "77c12394ef7d4f23a8fa07d87309afd9";

                            for ($index = 0; $index <= 10000 ; $index++)
                            {
                                $generatedMD5 = md5("m" . str_pad($index, 4,"0"));

                                if($generatedMD5 === $testString)
                                {
                                    echo "Password is " . "m" . str_pad($index, 4,"0");
                                }

                            }
                        ?>
                    </p>
                </td>

            </tr>
            <tr>
                <td>
                    <!--
                        See how long it takes to crack a password with 10,000,000 digits,
                    -->
                    <h2>Rectangle 11</h2>
                    <?php

                    $testString = "77c12394ef7d4f23a8fa07d87309afd9";

                    /**
                     * @param int $numOf0
                     * @param string $testString
                     * @return mixed
                     */
                    function passwordTest(int $numOf0, string $testString)
                    {
                        $timeStart = microtime(true);

                        for($index = 0; $index < $numOf0; $index++)
                        {
                            $generatedMD5 = md5("m" . str_pad($index, $numOf0,"0"));

                            if($generatedMD5 === $testString)
                            {
                                break;
                            }
                        }

                        return microtime(true)-$timeStart;
                    }



                    echo "Password m953 takes " . passwordTest(1000, md5("m953")) . "<br>";

                    echo "Password m9532 takes " . passwordTest(10000, md5("m9532")) . "<br>";

//                    echo "Password m95327 takes " . passwordTest(100000, md5("m95327")) . "<br>";

                    ?>
                </td>
                <td>
<!--                    Store MD5 hashes for mXX    XXX, then test how long it will take to look them up compared to manually cracking them.-->
                    <h2>Rectangle 12</h2>
                    <p><?php

                        require_once('Cracker.php');

//                        writeToDB(10000);
                        $startTime = microtime(true);

                        echo printf("%s password hash is %s ","m9532", findInDB("m9532"));

                        echo printf("<h3>Time taken: %f <h3/>", microtime(true)-$startTime);

                    ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <h2>Rectangle 13</h2>
                    <p>
                        <?php

//                        writeToDB(1000000, "Rec13.csv");

                        $startTime = microtime(true);

                        echo printf("%s password hash is %s ","m953235", findInDB("m953235","Rec13.csv"));

                        echo printf("<h3>Time taken: %f <h3/>", microtime(true)-$startTime);


                        ?>
                    </p>
                </td>
                <td>
                    <h2>Rectangle 14</h2>
                    <?php

                        echo printf("%s password, with binary, is %s", "m953235", findInDBBinary("m953235",1000000,"Rec13.csv"))


                    ?>
                </td>
            </tr>
        </table>

    </body>
</html>