<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Smart-Roll</title>
  <meta charset="utf-8">
</head>
<body>
  <style>
    *{
      background-color: #5BBA46
    }
    img{
      width: 200px;
      height: 100px;
      margin: 77px;
    }
    p{
      font-family: roboto;
      font-size: 40px;
      text-align: center;
      color: whitesmoke;
    }
    button{
      width: 100px;
      height: 50px;
      margin: 10px;
      margin-left: 44px;
    }
    .bot{
      margin-top: 111px;
      font-size: 15px;
      font-family: 'Times New Roman', Times, serif; 
    }
    .bottom{
      margin: 10000px;
    }
    </style>
    <div class="container-fluid">
      <img src="FIX.png" alt="">
    <div class="button">
        <p>Press the button below!</p>
      <button onclick="On()" class="btn btn-primary">ON</button>
      
      <button onclick="Off()" class="btn btn-danger">OFF</button>
    </div>
    <p class="bot">
      Powered By : A Team
    </p> 
    <div class="bottom"></div>
  </div>
    <script>
          function On(){
            $.ajax({
              url:'https://api.arkademy.com:8443/v0/arkana/device/IO/zeren/gpio/control',
              type : 'POST',
              headers : {
                'accept' : 'application/json',
                'content-type' : 'application/json',
                'authorization' : 'Bearer MTYzNjAzMDQ4Mi41NzI1Nzk5Og=='
              },
              data : '{"controls":{"4":1,"5":1}}' , //data yang dikirimkan harus dalam STRING
              success:function(response){
                       //konversi dari javascript object ke string agar bisa di print
                        var string_response=JSON.stringify(response);
                        //variabel response berisi data response dari API
                        alert(string_response);
              },
              error:function(err){
               //variabel err berisi data error dari API (404,401,400,500)
               alert("error!",err);
              }
            });
          }
          function Off(){
            $.ajax({
              url:'https://api.arkademy.com:8443/v0/arkana/device/IO/zeren/gpio/control',
              type : 'POST',
              headers : {
                'accept' : 'application/json',
                'content-type' : 'application/json',
                'authorization' : 'Bearer MTYzNjAzMDQ4Mi41NzI1Nzk5Og=='
              },
              data : '{"controls":{"4":0,"5":0}}' , //data yang dikirimkan harus dalam STRING
              success:function(response){
                       //konversi dari javascript object ke string agar bisa di print
                        var string_response=JSON.stringify(response);
                        //variabel response berisi data response dari API
                        alert(string_response);
              },
              error:function(err){
               //variabel err berisi data error dari API (404,401,400,500)
               alert("error!",err);
              }
            });
          }
    </script>
</body>
</html>
