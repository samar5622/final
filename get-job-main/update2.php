<?php
session_start();
include 'includes/header.html';
//include 'login/login_functions/database.php';
                    
                        if(!isset($_SESSION['email'])){
                           // echo "<script>" . "window.location.href = login/signup.php" . "</script>";
                            echo "<script>"."alert('Please Back To Signup First');" . "</script>";
                            die();
                        }
                    ?>
 <?php
 $user_email = $_SESSION['email'];
 include 'login/login_functions/database.php';

if((isset($_POST['edit'])&&($_POST['c_name']&&$_POST['city']&&$_POST['job_section']&&$_POST['c_contact']&&$_POST['c_details']!=null)))
{ $user_email = $_SESSION['email'];
    $c_name      =   $_POST['c_name'];
    $city        =   $_POST['city'];
    $job_section =   $_POST['job_section'];
    $c_contact   =   $_POST['c_contact'];
    $c_details   =   $_POST['c_details'];

      $sql = "UPDATE dashboard SET c_name= '$c_name', city= '  $city ' ,job_section=' $job_section',email='$c_contact',c_details=' $c_details' WHERE  email='$user_email'" ;
    //c_name,city,job_section,email,c_details)
    db_connect($sql );
   // echo "<script>"."alert('Your Job Upload Success');" . "</script>";
    header( "refresh:2;url=index2.php" );
}
?>
   <html>
    <head>
     <meta charset="utf-8">
     <style>
        body
        {
              background-image: url("login/images/mm.jpeg");
              background-position: 15% 15%;
              background-repeat: no-repeat;
              background-size: cover;
              
        }
        .roro
        {
           height: 50%;
          width: 50%;
          padding: 50px;
          margin: 50px;
        }
       .col-6 
       {
       
        width: 100%;
        }
       .col-md-6
       {
        width: 100%
       }
         .email
       {
         visibility: hidden
       }
        
     </style>
    </head>
    <body>
        <div class="roro">
    <form action="update2.php" method="post" class="row g-3">
        
        <div class="col-md-6"> 
          <input type="text" placeholder="Company Name" class="form-control" name="c_name" >
        </div>
    
        <div class="col-6">
            <select id="inputState" class="form-select" name = "city">
                <option value=" "           >Choose Your City ?</option>
                <option value="cairo"    >Cairo</option>
                <option value="alex"     >Alex</option>
                <option value="aswan"    >Aswan</option>
                <option value="asyut"    >Asyut</option>
                <option value="mansoura" >Mansoura</option>
                <option value="luxor"    >Luxor</option>
                <option value="sohag"    >Sohag</option>
                <option value="giza"     >Giza</option>
                <option value="faiyum"   >Faiyum</option>
                <option value="port said">Port Said</option>
                <option value="damietta" >Damietta</option>
                <option value="sharqia"  >Sharqia</option>
                <option value="monufya"  >Monufya</option>
                <option value="suez"     >Suez</option>
                <option value="charbia"  >Charbia</option>
                <option value="dakahlia" >Dakahlia</option>
            </select>

        </div>

        <div class="col-md-12">
            <!-- <label for="inputState" class="form-label">. Job</label>-->
            <select id="inputState" class="form-select" name = "job_section">
                <option value=" "           >Choose Job You Want ?</option>
                <option value="IT/Software"  >IT/Software Development</option>
                <option value="marketing"   >Marketing</option>
                <option value="Android"       >Android Developer</option>
                <option value="design"      >Design</option>
                <option value="Full Stack"   >Full Stack Developer</option>
                <option value="Translator"     >Translator</option>
                <option value="Graphic"     >Graphic Designer</option>
                <option value="engineering"  >Civil engineering</option>
                <option value="medical"  >medical</option>
            </select>
        </div>

      

        <div class="input-group">
            <span class="input-group-text">About Your CO.</span>
            <textarea class="form-control" aria-label="With textarea" name="c_details"></textarea>
        </div>

        <div class="btn">
            <button type="submit" class="btn btn-primary" name="edit" value="upload"> Upload Job </button>
        </div>
          <div class="email">
            <input type="email" class="form-control" placeholder="Email contact" aria-label="Recipient's username" aria-describedby="basic-addon2"  value="<?php echo $user_email ?>"  name="c_contact">
            <span class="input-group-text" id="basic-addon2">@example.com</span>
        </div>
    </form>
    </div>
    </body>
  </html>
<?php
include 'includes/footer.html';
?>
