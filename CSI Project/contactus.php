<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <?php
    session_start();
    include 'header.php';
    ?>
    <style>
       .alert {
  padding: 20px;
  margin-top: 0px;
  color: white;
}
.alert.success {background-color: #04AA6D;}
.alert.warning {background-color: #f44336;}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
    </style>
</head>
<body>
      <div class="container my-4">
        <form>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="Email"id="Email" placeholder="name@example.com">
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="text" class="form-control" name="Subject"id="Subject" placeholder="Enter Subject">
          </div>
          <div class="form-group">
            <label for="msg">Example textarea</label>
            <textarea class="form-control" name="msg" id="msg" rows="3"></textarea>
          </div>
          <button type="submit" name="send"class="btn btn-primary">Submit</button>
      </form>
   </div>
    <?php 
        $Msg = "";
        if(isset($_GET['error']))
        {
            $Msg = " Please Fill in the Blanks ";
          echo '<div class="alert Warning">
          <span class="closebtn">&times;</span> 
          <strong>Error!</strong> '.$Msg.'
         </div>';
        }
       if(isset($_GET['success']))
        {
         $Msg = " Your Message Has Been Sent ";
        echo '<div class="alert success">
        <span class="closebtn">&times;</span> 
         <strong>Success!</strong> '.$Msg.'
         </div>';
    }
    ?>
    <script>
      var close = document.getElementsByClassName("closebtn");
      var i;

      for (i = 0; i < close.length; i++) {
        close[i].onclick = function(){
          var div = this.parentElement;
          div.style.opacity = "0";
          setTimeout(function(){ div.style.display = "none"; }, 600);
        }
      }
      </script>
    <?php
      include 'footer.php';
    ?>
</body>
</html>