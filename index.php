<?php 
 
?> 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <title> FORM </title>
    <style>
        *{
            margin:0;
            padding:0;
        }
        body{
            background-image: url(bground.jpg);
            margin-top:40px;
            background-position:center;
            background-size:cover;
            font-family:sans-serif;
        }
        .navbar{
            background-color: transparent !important;
            padding: 2px 0px;

        }
        .regform{
            width:800px;
            background-color:rgb(0,0,0,0.6);
            margin:auto;
            color:#FFFFFF;
            padding:20px 0px 10px 0px;
            text-align:center;
            border-radius:15px 15px 0px 0px ;
            top:70%;

        }  
        h1{
            font-family : cursive;
            color: #2ab2ca;
            font-size:40px;
        }
        h4{
            font-family: cursive;
            color: #e083a2;
            font-size:20px;
            text-align:center;
            }
        
        .main{
            background-color:rgb(0,0,0,0.5);
            width:800px;
            margin:auto;}

        form{
            padding:10px;

        } 

        #name{
            width:100%;
            height:80px;
        }  

        .name{
            margin-left:30px;
            margin-top:5px;
            width: 125px;
            color: white;
            font-size: 18px;
            font-weight: 600;
            
        }
        .firstname{
            position: relative;
            left:200px;
            top:-25px;
            line-height: 40px;
            border-radius: 6px;
            padding: 0 22px;
            font-size: 16px;

        }
        .lastname{
            position: relative;
            left:417px;
            top:-68px;
            line-height: 40px;
            border-radius: 6px;
            padding: 0 22px;
            font-size: 16px;
            color:#555;       
                  }  
        .firstlabel{
            position:relative;
            color:#E5E5E5;    
            text-transform: capitalize;
            font-size: 14px;
            left:203px;
            top:-40px;
        }   
        .lastlabel{
            position:relative;
            color:#E5E5E5;
            text-transform:capitalize;
            font-size:14px;
            left:492px;
            top:-70px;
        } 

        .Email{
            position:relative;
            left:200px;
            top:-37px;
            line-height: 40px;
            width:480px;
            border-radius: 6px;
            padding: 0 22px;
            font-size: 16px;
            color: #555;  
          }
          .namakapal{
            position:relative;
            left:200px;
            top:-37px;
            line-height: 40px;
            width:480px;
            border-radius: 6px;
            padding: 0 22px;
            font-size: 16px;
            color: #555;  
          }
          .pelabuhan{
            position:relative;
            left:200px;
            top:-37px;
            line-height: 40px;
            width:480px;
            border-radius: 6px;
            padding: 0 22px;
            font-size: 16px;
            color: #555;  
          }

        .date-time{
            position:relative;
            left:200px;
            top:-45px;
            line-height: 40px;
            width:480px;
            border-radius: 6px;
            padding: 0 22px;
            font-size: 16px;
            color: #555;  
          }

        .Password{
            position:relative;
            left:200px;
            top:-37px;
            line-height: 40px;
            width:480px;
            border-radius: 6px;
            padding: 0 22px;
            font-size: 16px;
            color: #555;  
        }     
        .pelabuhan{
            position:relative;
            left:200px;
            top:-45px;
            line-height: 40px;
            width:480px;
            border-radius: 6px;
            padding: 0 22px;
            font-size: 16px;
            color: #555;  
        }     
        .Alamat{
            position:relative;
            left:200px;
            top:-65px;
            line-height: 40px;
            width:480px;
            border-radius: 6px;
            padding: 0 30px;
            font-size: 16px;
            color: #555;  
          }
        .catatan{
            position:relative;
            left:200px;
            top:-65px;
            line-height: 40px;
            width:480px;
            border-radius: 6px;
            padding: 0 30px;
            font-size: 16px;
            color: #555;  
          }
      

        .option{
            position:relative;
            left:200px;
            top:-37px;
            line-height: 40px;
            width:532px;
            height:40px;
            border-radius: 6px;
            padding: 0 22px;
            font-size: 16px;
            color: #555; 
            outline:none;
            overflow:hidden;
        }    
        .option option{
            font-size:15px;
          }

        .option1{
            position:relative;
            left:200px;
            top:-60px;
            line-height: 40px;
            width:532px;
            height:40px;
            border-radius: 6px;
            padding: 0 22px;
            font-size: 16px;
            color: #555; 
            outline:none;
            overflow:hidden;
        }    
        
        .option option{
            font-size:15px;
          }

        .option2{
            position:relative;
            left:200px;
            top:-50px;
            width:532px;
            height:40px;
            font-size: 16px;
            color: white; 
            
        }    
        .option3{
            position:relative;
            left:200px;
            top:-40px;
            line-height: 40px;
            width:532px;
            height:40px;
            border-radius: 6px;
            padding: 0 22px;
            font-size: 16px;
            color: #555; 
            outline:none;
            overflow:hidden;
        }    
        button{
            background-color:#3BAF9F;
            display:block;
            margin:20px 0px 0px 20px;
            text-align:center;
            border-radius:10px;
            border:2px solid #366473;
            padding:14px 110px;
            outline:none;
            color:white;
            cursor:pointer;
            transition:0.25px;
        } 
        button:hover{
            background-color:#5390F5;
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
      <form name = "" action="proses.php" method="post" >
        <nav class="navbar navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand"  href="#">
              <img src="logo.png" alt="" width="300" height="120"  >
          </a>
        </div>
        </nav>

      <div class="regform">
            <h1>Registration Form Fish World</h1>
            <h4> Pendataan Hasil Tangkapan Nelayan di Laut </h4>
      </div>

      <div class="main">
        <div id="name">
            <h2 class="name"> Name </h2>
              <input class="firstname" type="text" name="firstname"><br>
                <label class="firstlabel">first name</label>
              <input class="lastname" type="text" name="lastname"><br>
                <label class="lastlabel">last name</label>
          </div>

            <h2 class="name">Email </h2>
              <input class="Email" type="text" name="email">

            <h2 class="name"> Password</h2>
              <input class="Password" type="Password" name="password">

            <h2 class="name">Pelabuhan Asal </h2>
              <input class="pelabuhan" type="text" name="pelabuhan_asal">

            <h2 class="name">Tanggal Berangkat </h2>
            <input class="date-time" type="datetime-local"  name="tanggal_berangkat" >

            <h2 class="name">Tanggal Kembali </h2>
            <input class="date-time" type="datetime-local"  name="tanggal_kembali" >

            <h2 class="name">Nama Kapal </h2>
              <input class="namakapal" type="text" name="nama_kapal">

            <h2 class="name">Ukuran Kapal</h2>
              <select class="option" name="ukuran_kapal">
                    <option disabled="disabled" selected="selected">--Ukuran Kapal (GT)--</option>
                    <option value="20-30 GT ">20-30 GT </option>
                    <option value="30-50 GT ">30-50 GT</option>
                    <option value="50-100 GT ">50-100 GT</option>
              </select>

            <h2 class="name">Hasil Tangkapan </h2>
            <div class="option2" name="hasil_tangkapan[]"> 
                  <input type="checkbox"  name="hasil_tangkapan[]" value="IkanTongkol"> Ikan Tongkol  
                  <input type="checkbox"  name="hasil_tangkapan[]"  value="IkanTuna"> Ikan Tuna  
                  <input type="checkbox"  name="hasil_tangkapan[]"  value="IkanBandeng"> Ikan Bandeng 
                  <input type="checkbox"   name="hasil_tangkapan[]" value="IkanCakalang"> Ikan Cakalang <br>
                  <input type="checkbox"   name="hasil_tangkapan[]" value="IkanTeri"> Ikan Teri  
                  <input type="checkbox"   name="hasil_tangkapan[]" value="IkanKakap"> Ikan Kakap  
                  <input type="checkbox"   name="hasil_tangkapan[]" value="IkanSarden"> Ikan Sarden  
                  <input type="checkbox"   name="hasil_tangkapan[]" value="IkanTenggiri"> Ikan Tenggiri
                  <input type="checkbox"   name="hasil_tangkapan[]" value="IkanPeperek"> Ikan Peperek
                  <input type="checkbox"   name="hasil_tangkapan[]" value="IkanSelar"> Ikan Selar
                  <input type="checkbox"   name="hasil_tangkapan[]" value="Cumi-Cumi"> Cumi - Cumi
                  <input type="checkbox"   name="hasil_tangkapan[]" value="Udang"> Udang
                  <input type="checkbox"   name="hasil_tangkapan[]" value="Kepiting"> Kepiting
            </div>

            <h2 class="name">Volume Tangkapan Ikan</h2>
              <select class="option1" name="volume_tangkapan_ikan">
                    <option disabled="disabled" selected="selected">-- Berat Ikan (KG) --</option>
                    <option value="1-10 kg ">1-10 kg </option>
                    <option value="10-20 kg ">10-20 kg </option>
                    <option value="20-30 kg ">20-30 kg </option>
                    <option value="30-50 kg ">30-50 kg</option>
                    <option value="50-100 kg ">50-100 kg</option>
              </select>

            <h2 class="name">Total Tangkapan Ikan</h2>
              <select class="option1" name="total_tangkapan_ikan">
                    <option disabled="disabled" selected="selected">--Total Ikan (Ekor) --</option>
                    <option value="1-10 Ekor ">1-10 Ekor </option>
                    <option value="10-20 Ekor ">10-20 Ekor </option>
                    <option value="20-30 Ekor ">20-30 Ekor </option>
                    <option value="30-50 Ekor ">30-50 Ekor</option>
                    <option value="50-100 Ekor ">50-100 Ekor</option>
              </select>

            <h2 class="name">Alat Tangkap </h2>
              <select class="option3" name="alat_tangkap">
                    <option disabled="disabled" selected="selected">--Alat Tangkap --</option>
                    <option value="Pukat cincin (purse seine)">Pukat cincin (purse seine) </option>
                    <option value="Jaring insang (gill net)">Jaring insang (gill net) </option>
                    <option value="Jaring angkat (lift net) ">Jaring angkat (lift net)</option>
                    <option value="Pancing (hook and lines)">Pancing (hook and lines)</option>
                    <option value="Perangkap (traps) ">Perangkap (traps)</option>
              </select>
            
            <h2 class="name">Daerah Penangkapan Ikan  </h2>
              <input class="Alamat" type="text" name="daerah_penangkapan_ikan">
            
            <h2 class="name"> Catatan  </h2>
              <textarea class="catatan" name="catatan" cols="5" rows="5" ></textarea>

            <button type="submit" name="submit" value= <?php echo date("h:i:sa"); ?> >Submit</button>

            <br>
          <h3> <a href ="read.php" > LIHAT DATA </a></h3>
          <br><br>
          
        </form>
         
</form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>