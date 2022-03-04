<!doctype html>
<html lang="en">
  <head>
    <style type="text/css">
        body {
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; 
            line-height: 1.5;
            font-size: 13px;
            color: #333333;
        }
        table, p {
            font-size: 13px;
        }
        table tr td:first-child {
            padding-right: 20px;
        }
        table tr {
            vertical-align: top
        }
      
        .note {
            font-size: 12px !important;
            color: #b3b3b3 !important;
            margin-top: 20px;
        }
        .footer-contact{
            font-size: 13px !important;
            margin-left: -2px;
        }
        </style>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>



  
  
    
        
        <div>
            <p>Hello Ansh new user {{ $emails }} have just filled feedback form </p>
    
            <p>lets see whether the enter details are correct or not . Faith team will lead this form </p>
    
           
        </div>
      
        <div>
            <br>
            
            
    
            <table class="footer-contact">
                <tr>
                    <td>Contact Number</td>
                    <td>{{ $contacts }}</td>
                </tr>
                <tr>
                    <td>EMAIL ID</td>
                    <td>{{ $emails }}</td>
                </tr>
                <tr>
                    <td>Company Name</td>
                    <td>{{ $companys }}</td>
                </tr>
                <tr>
                    <td>Name </td>
                    <td>{{ $names }}</td>
                </tr>
                <tr>
                    <td>Message </td>
                    <td>{{ $messages }}</td>
                </tr>
               
                
            </table>
            </div>
    
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>