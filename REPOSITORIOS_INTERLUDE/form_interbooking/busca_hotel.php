<?php
   // $hotel = get("conexion.xml")
   $client = new SoapClient("http://towers.netstorming.net/kalima/call.php");
   
















?>



<html>
    <head>
    <meta chartset="UTF-8">
    </head>
    <body>
        <h1>HOTELES DISPONIBLES</h1>

    <hotel controls id=id>
        <div type="disponibilidad">
        <div product="hotel" src="<?php echo $hotel->query[0]->id ?>">
        <div checkin="date">
        <div checkout="date">
        <div hotel_id="id">
    </hotel>
    </body>

</html>


