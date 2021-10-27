
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Konversi Berat Warung Sayur Pak Joy</title>
</head>
<style>
    body {
    background-color: #F5F3E7;
    }
    h2 {
        text-align: center;
    }
    table, td, th, tr {  
        text-align: left;
        border: 1px solid black;
    }

    tr:nth-child(even){background-color: #EFEFCA}

    table {
        border-collapse: collapse;
        width: 75%;
        background-color: #89B87C;
        margin-left:auto;
        margin-right: auto;
    }

    th, td {
        padding: 15px;
    }

</style>
<body>
    <h2> Tabel Konversi Bahan Pangan Warung Pak Joy </h2>
    <table>
        <tr>
            <td>No</td>
            <td>Nama Barang</td>
            <td>Berat (Kg)</td>
            <td>Berat (gr)</td>
            <td>Berat (mg)</td>
            <td>Berat (liter)</td>
            <td>Satuan</td>
            <td>Stok Barang</td>
            <td>Total stok (dalam Kg/Liter*)</td>
        </tr>

        <?php
        $nomor = [1,2,3,4,5,6,7,8,9,10];
        $dataBarang = array(
            array("Wortel",250,"gr",8),
            array("Bawang putih", 500, "gr",4),
            array("Tomat", 250, "gr",4),
            array("Seledri", 1, "kg",0),
            array("Kentang", 1, "kg",1),
            array("Jagung Manis Segar", 250, "gr",6),
            array("Beras*", 1, "liter",10),
            array("Tepung Terigu",1,"kg",3),
            array("Telur",1,"kg",5),
            array("Minyak Goreng*", 1, "liter",5)
        );

        $kolom = 0;
        for($i=0; $i<10; $i++){
            echo "<tr> 
                <td> {$nomor[$i]} </td>";
            echo "<td> {$dataBarang[$i][$kolom]} </td>";

            if($dataBarang[$i][$kolom + 2]=="kg"){
                echo "<td> {$dataBarang[$i][$kolom+1]} </td>";
                $gram = $dataBarang[$i][$kolom+1]*1000;
                echo "<td> {$gram} </td>";
                $miligram = $dataBarang[$i][$kolom+1]*1000000;
                echo "<td> {$miligram} </td>";
                echo "<td> - </td>";
                echo "<td> {$dataBarang[$i][$kolom+1]} {$dataBarang[$i][$kolom+2]}</td>";
                if($dataBarang[$i][$kolom + 3]==0){
                    echo "<td style = 'background-color: #BD0000;
                    color: white;'> Kosong </td>";
                }
                else{
                    echo "<td> {$dataBarang[$i][$kolom+3]} </td>";
                }
                $stok = $dataBarang[$i][$kolom+1]*$dataBarang[$i][$kolom+3];
                echo "<td> {$stok} </td>";
            }
            else if($dataBarang[$i][$kolom + 2]=="gr"){
                $kilo = $dataBarang[$i][$kolom+1]/1000;
                echo "<td> {$kilo} </td>";
                echo "<td> {$dataBarang[$i][$kolom+1]} </td>";
                $miligram = $dataBarang[$i][$kolom+1]*1000;
                echo "<td> {$miligram} </td>";
                echo "<td> - </td>";
                echo "<td> {$dataBarang[$i][$kolom+1]} {$dataBarang[$i][$kolom+2]}</td>";
                if($dataBarang[$i][$kolom + 3]==0){
                    echo "<td style = 'background-color: #BD0000;
                    color: white;'> Kosong </td>";
                }
                else{
                    echo "<td> {$dataBarang[$i][$kolom+3]} </td>";
                }
                $stok = $dataBarang[$i][$kolom+1]*$dataBarang[$i][$kolom+3]/1000;
                echo "<td> {$stok} </td>";
            }
            else{
                if($dataBarang[$i][$kolom]=="Minyak Goreng"){
                    $kilo = $dataBarang[$i][$kolom+1]*0.8;
                    echo "<td> {$kilo} </td>";
                    $gram = $kilo*1000;
                    echo "<td> {$gram} </td>";
                    $miligram = $kilo*1000000;
                    echo "<td> {$miligram} </td>";
                    echo "<td> {$dataBarang[$i][$kolom+1]} </td>";
                    echo "<td> {$dataBarang[$i][$kolom+1]} {$dataBarang[$i][$kolom+2]}</td>";
                    if($dataBarang[$i][$kolom + 3]==0){
                        echo "<td style = 'background-color: #BD0000;
                        color: white;'> Kosong </td>";
                    }
                    else{
                        echo "<td> {$dataBarang[$i][$kolom+3]} </td>";
                    }
                    $stok = $dataBarang[$i][$kolom+1]*$dataBarang[$i][$kolom+3];
                    echo "<td> {$stok} </td>";
                }
                else {
                    $kilo = $dataBarang[$i][$kolom+1]*0.753;
                    echo "<td> {$kilo} </td>";
                    $gram = $kilo*1000;
                    echo "<td> {$gram} </td>";
                    $miligram = $kilo*1000000;
                    echo "<td> {$miligram} </td>";
                    echo "<td> {$dataBarang[$i][$kolom+1]} </td>";
                    echo "<td> {$dataBarang[$i][$kolom+1]} {$dataBarang[$i][$kolom+2]}</td>";
                    if($dataBarang[$i][$kolom + 3]==0){
                        echo "<td style = 'background-color: #BD0000;
                         color: white;'> Kosong </td>";
                    }
                    else{
                        echo "<td> {$dataBarang[$i][$kolom+3]} </td>";
                    }
                    $stok = $dataBarang[$i][$kolom+1]*$dataBarang[$i][$kolom+3];
                    echo "<td> {$stok} </td>";
                }
            }
            
                echo "</tr>" ;
        }

        
    
        ?>

    </table>

    <br> Notes :
    <br> 1 liter Beras = 0.753 kg
    <br> 1 liter Minyak Goreng = 0.8 kg
</body>

</html>