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
        </table>

    </body>
</html>