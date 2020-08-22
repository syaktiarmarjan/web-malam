<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percabangan switch</title>
</head>
<body>
    <center>
    <h1>MENENTUKAN NAMA BULAN</h1>
    <?php
        // $bulan="";
        // switch ($bulan){
        //     case "kamu";
        //     // statement
        //     echo "Anda memilih bulan Januari";
        // break;
        // case "dia":

        //     echo "Anda memilih bulan Februari";
        // break;

        // default:
        //     //statement
        //     echo "anda belum memilih nama bulan";
        // break;
        // }
    ?>

    <?php
        // $username="operator";
        // $password="1111";

        // switch ($username){
        //     case "admin":
        //         echo "Selamat datang admin";
        //     break;

        //     case "operator":
        //         echo "Selamat datang Operator";
        //     break;

        // default:

        //     break;

        // }
    ?>

    <?php
    // menggunakan dua switch
            // $username="operator";
            // $password="1111";

            // switch ($username=="admin" && $password=="1234"){
            //     case "admin" && "1234":
            //         echo "Selamat datang $username";
            //     break;

            // }

            // switch ($username=="operator" && $password=="1111"){
            //     case "operator"&&"1111":

            //         echo "Selamat Datang $username";

            // }
               
        ?>

    <?php
    // menggunakan metode array
            // $username="operator";
            // $password="1111";

            // switch ([$username=="admin" && $password=="1234"]){
            //     case "admin" && "1234":
            //         echo "Selamat datang admin";
            //         break;

            //     case ["operator","1111"]:
            //         //
            //         echo "Selamat datang operator";
            //         break;

            //     deafult:

            //         break;
            // }
               
    ?>

    <?php
    // menggunakan metode TRUE
            $username="operator";
            $password="1111";

            switch (TRUE) {
                case ($username=="admin" && $password=="1234"):
                    echo "Selamat datang Admin";
                    break;

                case ($username=="operator" && $password== "1111"):
                    echo "Selamat datang Operator";
                    break;

                deafult:
                    break;
            }          
    ?>





    </center>
    
</body>
</html>