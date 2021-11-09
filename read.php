<?php
    $koneksi =mysqli_connect("localhost","root","","form");
    $statisik = query(" SELECT * FROM register ");


    function query($data){
        global $koneksi;


    $hasil = mysqli_query($koneksi,$data);
    $rows = [];
    while ($row = mysqli_fetch_assoc($hasil)){
        $rows[] = $row;

    }
    return $rows;
    }
    
?>

<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>KUMPULAN DATA </title>
     <style>
         .navbar{
            background-color: transparent !important;
        }
          h1{
            font-family : cursive;
            color:#302e2e;
            font-size:40px;
            text-align:center;
            margin:5px;
        }
        h4{
            font-family: cursive;
            color:#302e2e;
            font-size:30px;
            text-align:center;
            margin:12px;

            }
        body{
 
            background-image: url(image.jpg);
            margin-top:40px;
            background-position:center;
            background-size:cover;
            font-family:sans-serif;
            }
         
         
        td{
            text-align:center;
            width:200px;
            font-size:13px;
            font-style:courier;
            padding:5px  ;
        } 
        td a{
            text-align:center;
            font-size:15px;
            font-style:courier;
            padding:5px ;
            text-decoration :none;
            color: black;
            font-weight:bold;
        } 
        .titik{
            text-align: center;
        }
        .main{
            background-color:rgb(179, 225, 236 ,0.5);
            width:140%;
            margin:auto;
            border-radius: 15px 15px 15px 15px;
        }
        .judul{
            background-color:rgb(179, 225, 236 ,0.5);
            margin:auto;
            width:140%;
            border-radius: 10px 10px 10px 10px;
            
        }
        h2{
            font-size :18px;
            color: black;
            font-family :cursive;
            margin-left:5%;
            

        }
        h3 {
          background-color:#5390F5;
          border-radius:5px;
          width: 230px;
          text-align:center;
          margin-left:5%;
          
        }
        h3 a{
          text-decoration:none;
          font-family:cursive;
          font-size:25px;
          color:white;
          

        }
        
       
     </style>
 </head>
 <body>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">
              <img src="logo.png" alt="" width="200" height="100">
          </a>
        </div>
    </nav>
    
    <div class="judul">
    <?php echo "<h1> Registration Form Fish World</h1>";
    echo "<h4> Pendataan Hasil Tangkapan Nelayan di Laut </h4>";
    ?>
    </div>

    <div class="main">
    <table  border="0" cellspacing="0" align="center"  >
         <tr > 
             
            <td >  Firstname </td>
            <td>  Lastname </td>
            <td>  Email </td>
            <td>  Password </td>
            <td>  Pelabuhan Asal </td>
            <td>  Tanggal Berangkat </td>
            <td>  Tanggal Kembali </td>
            <td>  Nama Kapal </td>
            <td>  Ukuran Kapal </td>
            <td >  Hasil Tangkapan </td>
            <td>  Volume Tangkapan Ikan </td>
            <td>  Total  Tangkapan Ikan </td>
            <td>  Alat Tangkap </td>
            <td>  Daerah Penanangkapan Ikan </td>
            <td>  Catatan </td>
            <td>  Submit </td>
            <td colspan=2 >  Tindakan </td>
    </tr>

         <?php $y = 1 ?>
         <?php foreach($statisik as $data) : ?>
            <tr>
                <td  > <?php echo $data['firstname']; ?> </td>
                <td  > <?php echo $data['lastname']; ?> </td> 
                <td  > <?php echo $data['email']; ?> </td>
                <td  > <?php echo $data['password']; ?> </td>
                <td  > <?php echo $data['pelabuhan_Asal']; ?> </td>
                <td  > <?php echo $data['tanggal_berangkat']; ?> </td>
                <td  > <?php echo $data['tanggal_kembali']; ?> </td>
                <td  > <?php echo $data['nama_kapal']; ?> </td>
                <td  > <?php echo $data['ukuran_kapal']; ?> </td>
                <td  > <?php echo $data['hasil_tangkapan' ]; ?> </td>
                <td  > <?php echo $data['volume_tangkapan_ikan']; ?> </td>
                <td  > <?php echo $data['total_tangkapan_ikan']; ?> </td>
                <td  > <?php echo $data['alat_tangkap']; ?> </td>
                <td  > <?php echo $data['daerah_penangkapan_ikan']; ?> </td>
                <td  > <?php echo $data['catatan']; ?> </td>
                <td  > <?php echo $data['submit']; ?> </td>
                <td> <a href="update.php?id=<?php echo $data["id"]; ?>" > Edit </td>
                <td> <a href="delete.php?id=<?php echo $data["id"]; ?>"> Hapus </td>
             </tr>
             <?php $y++;?>
             <?php endforeach;?>
    </table>
            <br><br><br><br><br><br>
            <br><br><br><br><br><br>
            <h2> TOTAL DATA = <?php echo ($y -1 ); ?> </h2>
            <br>
            <h3> <a href ="index.php" > ISI DATA </a></h3>
            <br>
    </div>
 </body>
 </html>