<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Offer</title>
    <style>
        .image-privew {
            width: 300px;
            min-height: 100px;
            border: 2px solid #dddddd;
            margin-top: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            color: #ccc;
        }

        .imge-privew--image {
            display: none;
            width: 100%;
        }
        .table tr{
            border: 1px solid #ddd;
            text-align: center;
            background: #ccc;
            width: 300px;
            height: 30px;
        }
        .table{
            width: 400px;
        }
        .btn btn-success{
            border-style: solid;
            border-radius: 1px;
        }
    </style>
</head>

<body>
    <script src="https://kit.fontawesome.com/66f45e81f9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/make-offer.css">
    <!-------------------------Start Header section---------------------------->
    
    <!-------------start make offer section ----->
   
   <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">user name</th>
      <th scope="col">user password</th>
      <th scope="col">user phone</th>
       <th scope="col">user email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$users->user_id}}</th>
      <td>{{$users->name}}</td>
      <td>{{$users->password}}</td>
      <td>{{$users->phone}}</td>
      <td>{{$users->email}}</td>
    </tr>
    
  </tbody>
</table>
    <!--------------------------------- Start setting box ---------------------------------------->
   
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        const inpFile = document.getElementById( "inpFile" );
        const privewContainer = document.getElementById( "imagePrivew" );
        const privewImage = privewContainer.querySelector( ".imge-privew--image" );
        const privewDefaultText = privewContainer.querySelector( ".imagepreview--default-text" );
        inpFile.addEventListener( "change", function () {
            const file = this.files[ 0 ];
            if ( file ) {
                const reader = new FileReader();
                privewDefaultText.style.display = "none";
                privewImage.style.display = "block";
                reader.addEventListener( "load", function () {
                    privewImage.setAttribute( "src", this.result );
                } )

                reader.readAsDataURL( file );
            }
            else {
                privewDefaultText.style.display = "block";
                privewImage.style.display = "none";
            }
        } )
    </script>
</body>

</html>