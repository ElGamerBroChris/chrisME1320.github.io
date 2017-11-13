<?php

$servername = "mnrentals.cpgocgdnrtm9.us-east-2.rds.amazonaws.com";
$username = "adminNey";
$password = "bRWAkinW[42[FUi9Tp";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
mysqli_set_charset($conn, "utf8");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$selected_database = mysqli_select_db($conn, 'mnrentalsdb');

$sql = "SELECT DISTINCT g.cFName, g.cLName, r.dateArrival, r.dateDeparture, r.propertyID, r.reservationType FROM Reservation AS r NATURAL JOIN Guest AS g";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result)) {
    echo "<tr role=\"row\" class=\"odd\">
            <td class\"sorting_1\">" , $row['cFName'] , " ", $row['cLName'], "</td>
            <td>" , $row['dateArrival'] , "</td>
            <td>" , $row['dateDeparture'], "</td>
            <td>" , $row['propertyID'] , "</td>
            <td>" , $row['reservationType'], "</td>
            <td> <button type=\"button\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#ModalPaymentsList\" style=\"width: 100%\">
                View Payments
                </button>
            </td>
        </tr>";
}

/* 
        <tr role="row" class="odd">
                    <td class="sorting_1">Patty Winters</td>
                    <td>01-Ene-2017</td>
                    <td>05-Ene-2017</td>
                    <td>Puerta del Coto R5</td>
                    <td>Airbnb</td>
                    <td>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ModalPaymentsList" style="width: 100%">
                            View Payments
                        </button>
                    </td>
                </tr>
                <tr role="row" class="even">
                    <td class="sorting_1">Maria Zayas</td>
                    <td>05-Feb-2017</td>
                    <td>06-Feb-2017</td>
                    <td>Puerta del Coto R5</td>
                    <td>Airbnb</td>
                    <td>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ModalPaymentsList" style="width: 100%">
                            View Payments
                        </button>
                    </td>
                </tr>
                <tr role="row" class="odd">
                    <td class="sorting_1">Daniela Lopez Jaimes</td>
                    <td>03-Feb-2017</td>
                    <td>10-Feb-2017</td>
                    <td>Puerta del Coto R5</td>
                    <td>Airbnb</td>
                    <td>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ModalPaymentsList" style="width: 100%">
                            View Payments
                        </button>
                    </td>
                </tr>
                <tr role="row" class="even">
                    <td class="sorting_1">David Moreno</td>
                    <td>03-Abr-2017</td>
                    <td>06-Abr-2017</td>
                    <td>Puerta del Coto R5</td>
                    <td>Airbnb</td>
                    <td>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ModalPaymentsList" style="width: 100%">
                            View Payment
                        </button>
                    </td>
                </tr>
                <tr role="row" class="odd">
                    <td class="sorting_1">Luis Miguel Hernandez</td>
                    <td>02-Jun-2017</td>
                    <td>03-Jun-2017</td>
                    <td>Puerta del Coto R5</td>
                    <td>Airbnb</td>
                    <td>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ModalPaymentsList" style="width: 100%">
                            View Payments
                        </button>
                    </td>
                </tr>
                <tr role="row" class="even">
                    <td class="sorting_1">Ricardo de la Rosa</td>
                    <td>07-Jun-2017</td>
                    <td>10-Jun-2017</td>
                    <td>Puerta del Coto R5</td>
                    <td>Fuera</td>
                    <td>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#ModalPaymentsList-NoPayments" style="width: 100%">
                            View Payments
                        </button>
                    </td>
                </tr>
                <tr role="row" class="odd">
                    <td class="sorting_1">Jessica Moore</td>
                    <td>06-Ago-2017</td>
                    <td>09-Ago-2017</td>
                    <td>Puerta del Coto R5</td>
                    <td>Airbnb</td>
                    <td>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ModalPaymentsList" style="width: 100%">
                            View Payments
                        </button>
                    </td>
                </tr>
                <tr role="row" class="even">
                    <td class="sorting_1">Ji Lin</td>
                    <td>02-Sep-2017</td>
                    <td>20-Sep-2017</td>
                    <td>Puerta del Coto R5</td>
                    <td>Airbnb</td>
                    <td>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ModalPaymentsList" style="width: 100%">
                            View Payments
                        </button>
                    </td>
                </tr>
 */

mysqli_close($conn);
