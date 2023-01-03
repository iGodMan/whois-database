
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Whois Database</title>
</head>
<header>
    <div class="header bg-dark text-white text-center pt-4 pb-4">
        <h4>Whois Database</h4>
        
    </div>
</header>
<body>

    <div class="container pt-5 pb-5">
       
        <div class="header-lookup form-group col-8 m-auto">
            <input type="text" name="" id="domain" class="form-control" placeholder="Domain (eg: ghostak.com)">
        </div>
        <div class="header-lookup text-center form-group mt-4">
           <input type="button" value="Lookup" id="lookupbtn" class="btn btn-primary">
        </div>
        <div class="mt-5 body-details">
            <div class="row">
                <div class="col-sm-12">
                    <div class="ipdetails">
                        <table class=" table table-resonsive table-bordered table-striped">
                           <tbody>
                            <tr>
                                <td><b>Domain</b></td>
                                <td id="domain_name"></td>
                            </tr>
                            <tr>
                                <td><b>Registrar</b></td>
                                <td id="registrar"></td>
                            </tr>
                            <tr>
                                <td><b>Creation Date</b></td>
                                <td id="creation"></td>
                            </tr>
                            <tr>
                                <td><b>Expiration Date</b></td>
                                <td id="expiry"></td>
                            </tr>
                            <tr>
                                <td><b>Updated Date</b></td>
                                <td id="updated"></td>
                            </tr>
                            <tr>
                                <td><b>Email</b></td>
                                <td id="email"></td>
                            </tr>
                            <tr>
                                <td><b>DNSSEC</b></td>
                                <td id="dnssec"></td>
                            </tr>
                            <tr>
                                <td><b>Nameservers</b></td>
                                <td id="name_servers"></td>
                            </tr>
                            <tr>
                                <td><b>Org</b></td>
                                <td id="org"></td>
                            </tr>
                            <tr>
                                <td><b>Status</b></td>
                                <td id="status"></td>
                            </tr>
                            <tr>
                                <td><b>Whois Server</b></td>
                                <td id="whois_server"></td>
                            </tr>
                            <tr>
                                <td><b>Name</b></td>
                                <td id="name"></td>
                            </tr>
                            <tr>
                                <td><b>Address</b></td>
                                <td id="address"></td>
                            </tr>
                            <tr>
                                <td><b>City</b></td>
                                <td id="city"></td>
                            </tr>
                            <tr>
                                <td><b>State</b></td>
                                <td id="state"></td>
                            </tr>
                            <tr>
                                <td><b>Country</b></td>
                                <td id="country"></td>
                            </tr>
                            <tr>
                                <td><b>zipcode</b></td>
                                <td id="zipcode"></td>
                            </tr>
                           </tbody>

                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer text-center">
      
        <div class="own-details text-center">
            <?php
                $myip = $_SERVER["REMOTE_ADDR"];
                echo 'Your IP Address - '.$myip;
            ?>
        </div>
        <p> &copy; arunpandiyan.in</p>
    </div>
   
<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- Datatables -->
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<!-- Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="script.min.js"></script>
</body>
</html>