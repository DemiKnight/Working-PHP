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
        <td>Rectangle 8</td>
    </tr>
    <tr>
        <td>Rectangle 9</td>
        <td>Rectangle 10</td>
    </tr>
</table> 
