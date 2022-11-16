<html>

<title>Add Money</title>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" data-auto-replace-svg="nest"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<?php 
    require 'dbconfig/config.php';
    session_start();
    if(!isset($_SESSION['username'])){
    echo '<script type="text/javascript"> alert("Error!You need to Login First!") </script>';
    echo '<script>window.location.href = "./login.php";</script>';
    
    }
    
    if (isset($_POST['cancel'])){
        echo '<script>window.location.href = "./profile.php";</script>';
    }
    

?>

<body style="font-family: 'Lucida Sans';letter-spacing:2px;margin:auto;">

    <div id="navbar">
        <ul>

            <button style="top: 0px;
                            
                            font-size: large;
                            background-color: transparent;
                            padding: 20px;
                            border: transparent solid 1px;margin-bottom: 20px;"><i class="fas fa-phone-square"
                    style="font-size:34px;"></i>
                1800-500-2020</button>

            <a href="index.php"><button id="footbtn"><i class="fas fa-sign-out-alt"
                        style="font-size:36px;"></i>LOGOUT</button></a>
            <a href="posttask.php"><button id="footbtn"><i class="fa fa-cubes" aria-hidden="true"
                        style="font-size:36px;"></i>
                    POST TASK</button></a>
            <a href="history.php"><button id="footbtn"><i class="fa fa-server" style="font-size:36px;"></i>
                    HISTORY</button></a>
            <a href="huntask.php"><button id="footbtn"><i class="fas fa-binoculars" style="font-size:36px;"></i>
                    HUNT
                    TASK</button></a>
            <a href="notifications.php"><button id="footbtn"><i class="fas fa-bell "
                        style="font-size:36px;"></i>Notifications</button></a>
        </ul>

    </div>

    <div id="main_body">
        <div id="profilebox">
            <form name="myForm" action="addmoney.php" method="post">
                <input type="text" name="amount" autocomplete="off">
                <input type="submit" value="Submit" id='rzp-button1'>
            </form>
            <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
            <script type="text/javascript" src="js/addmoney.js"></script>
            <a href="profile.php"><button>Cancel</button></a>
        </div>
    </div>



</body>

</html>

<style>
#main_body {
    position: absolute;
    overflow-y: auto;
    width: auto;
    padding-top: 30px;
    padding-bottom: 30px;
    z-index: 1;
    margin-top: 150px;
    background-color: white;
    width: 100%;
}

#rzp-button1 {
    margin-top: 10px;
    background-color: #00b894;
    padding: 5px;
    color: white;
    width: 30%;
    font-weight: normal;
    text-align: center;
    font-size: 14px;
    letter-spacing: 2px;
    border: #00b894 solid;
    border-radius: 100px;
    outline-width: 0;
}

#cancel {
    margin-top: 10px;
    background-color: red;
    padding: 5px;
    color: white;
    width: 15%;
    font-weight: normal;
    text-align: center;
    font-size: 14px;
    letter-spacing: 2px;
    border: red solid;
    border-radius: 100px;
    outline-width: 0;
}

#edit {
    width: 30px;
    height: 30px;
    background-color: transparent;
    border: none;
}

h3 {
    display: inline-block;

}

h4 {
    display: inline-block;
    font-weight: normal;

}

#profilebox {
    margin-left: 30%;
    width: 600px;
    height: auto;
    background-color: #f5f6fa;
    padding: 20px;
    border-radius: 30px;
}

#logoimg {
    position: fixed;
    top: 0px;
    height: 130px;
    width: 200px;
    float: left;
    z-index: 2;
}

input[type="text"],
input[type="email"],
input[type="tel"],
input[type="password"] {

    padding: 12px 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    width: 380px;
    margin: 0 auto;
}


#navbar {
    position: fixed;
    height: 150px;
    width: 100%;
    top: 0px;
    background-color: white;
    border-bottom: solid 1px black;
    z-index: 2;
}

#footbtn {
    top: 0px;
    margin-bottom: 20px;
    float: right;
    font-size: large;
    background-color: transparent;
    padding: 20px;
    margin-top: 1px;
    border: transparent solid 1px;
    z-index: 2;
}

#navbarbtn {
    top: 0px;
    font-size: large;
    background-color: transparent;
    padding: 20px;
    margin-bottom: 20px;
    border: transparent solid 1px;
    z-index: 2;
}

#navbarbtn:hover,
#footbtn:hover,
#edit:hover,
#cancel:hover {
    border: 1px black solid;
    background-color: transparent;
    z-index: 2;
}

#rzp-button1:hover {
    background-color: #aaa69d;
    border: #aaa69d solid;
    box-shadow: 0px 0px 40px grey;
    color: black;
}

ul {

    list-style-type: none;
    margin: 0;
    padding: 0;
    font-size: larger;
    padding: 50px;
}

li {
    padding: 20px;
    display: inline;

}
</style>