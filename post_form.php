<html>
<head>
  <meta charset="utf-8">
  <title>Stackfindover: Sign in</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div class="center">
  <h1>Our Newsletter</h1>
  <form id="form_submit">
    <div class="inputbox">
      <input type="text" id="email" name="email" >
      <span>Email</span>
    </div>
    <div class="inputbox">
      <input type="text" id="Country" name="country" >
      <span>Country</span>
    </div>
    <div class="inputbox">
        <input type="number" name="age" id="age">
        <span>Age</span>
    </div>
    <!-- <div class="inputbox">
        <input type="radio" name="gender" value="male">
        <input type="radio" name="gender" value="female">
    </div>
    <div class="inputbox">
        <select name="category" id="">
            <option value="">Student</option>
            <option value="">Freelancer</option>
            <option value="">Teacher</option>

        </select>
    </div> -->
    <div class="inputbox">
      <input id="btn" type="button" value="submit">
    </div>

  </form>
  <div id="msg"> </div>
</div>
<script
  src="https://code.jquery.com/jquery-3.6.1.js"
  integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
  crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
        $('#btn').on('click', function(){
            var a = $('#email').val();
            var b = $('#Country').val();
            var v = $('#age').val();
            if(a=='' || b==''){
                $('#msg').html("All fields are required");
            }else{           
                $.post(
                    "save.php",
                    $('#form_submit').serialize(),
                    function(data){
                        $('#msg').html("YOUR RECORD IS SAVED");
                    }
                );
            }
        });
    });
  </script>
</body>

</html>