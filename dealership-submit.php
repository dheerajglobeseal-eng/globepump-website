<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    /* ========================================
       GET FORM DATA
    ======================================== */

    $company_name           = trim($_POST['company_name'] ?? '');
    $office_address         = trim($_POST['office_address'] ?? '');
    $city                   = trim($_POST['city'] ?? '');
    $state                  = trim($_POST['state'] ?? '');
    $annual_turnover        = trim($_POST['annual_turnover'] ?? '');
    $mobile_number          = trim($_POST['mobile_number'] ?? '');
    $email                  = trim($_POST['email'] ?? '');
    $applied_city_district  = trim($_POST['applied_city_district'] ?? '');
    $industrial_experience  = trim($_POST['industrial_experience'] ?? '');
    $products_dealing       = trim($_POST['products_dealing'] ?? '');

    /* ========================================
       VALIDATION
    ======================================== */

    if (
        empty($company_name) ||
        empty($office_address) ||
        empty($city) ||
        empty($state) ||
        empty($annual_turnover) ||
        empty($mobile_number) ||
        empty($email) ||
        empty($applied_city_district) ||
        $industrial_experience === '' ||
        empty($products_dealing)
        
    ) {

        echo "
        <h3 style='
            color:red;
            text-align:center;
            margin-top:50px;
            font-family:Arial,sans-serif;
        '>
            Please fill all required fields.
        </h3>";

        exit;
    }


    /* ========================================
       EMAIL VALIDATION
    ======================================== */

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        echo "
        <h3 style='
            color:red;
            text-align:center;
            margin-top:50px;
            font-family:Arial,sans-serif;
        '>
            Please enter a valid email address.
        </h3>";

        exit;
    }


    /* ========================================
       PAYMENT DEPOSIT VALIDATION
    ======================================== */


    /* ========================================
       RECEIVER EMAILS
    ======================================== */

    $to  = "inquiry@globeseal.com";
    $bcc = "info@globeseal.com";


    /* ========================================
       EMAIL SUBJECT
    ======================================== */

    $subject = "New Dealership Enquiry - www.globepump.com";


    /* ========================================
       SAFE DATA FOR EMAIL
    ======================================== */

    $company_name_safe          = htmlspecialchars(
        $company_name,
        ENT_QUOTES,
        'UTF-8'
    );

    $office_address_safe        = nl2br(
        htmlspecialchars(
            $office_address,
            ENT_QUOTES,
            'UTF-8'
        )
    );

    $city_safe                  = htmlspecialchars(
        $city,
        ENT_QUOTES,
        'UTF-8'
    );

    $state_safe                 = htmlspecialchars(
        $state,
        ENT_QUOTES,
        'UTF-8'
    );

    $annual_turnover_safe       = htmlspecialchars(
        $annual_turnover,
        ENT_QUOTES,
        'UTF-8'
    );

    $mobile_number_safe         = htmlspecialchars(
        $mobile_number,
        ENT_QUOTES,
        'UTF-8'
    );

    $email_safe                 = htmlspecialchars(
        $email,
        ENT_QUOTES,
        'UTF-8'
    );

    $applied_city_district_safe = htmlspecialchars(
        $applied_city_district,
        ENT_QUOTES,
        'UTF-8'
    );

    $industrial_experience_safe = htmlspecialchars(
        $industrial_experience,
        ENT_QUOTES,
        'UTF-8'
    );

    $products_dealing_safe      = nl2br(
        htmlspecialchars(
            $products_dealing,
            ENT_QUOTES,
            'UTF-8'
        )
    );



    /* ========================================
       EMAIL MESSAGE
    ======================================== */

    $email_message = "
    <!DOCTYPE html>

    <html>

    <head>

        <meta charset='UTF-8'>

        <title>
            New Dealership Enquiry
        </title>

    </head>


    <body
        style='
            margin:0;
            padding:20px;
            font-family:Arial,sans-serif;
            background:#f5f5f5;
            color:#222;
        '>


        <div
            style='
                max-width:750px;
                margin:0 auto;
                background:#ffffff;
                padding:25px;
                border-radius:10px;
            '>


            <h2
                style='
                    margin-top:0;
                    color:#222;
                    border-bottom:2px solid #0b63ce;
                    padding-bottom:10px;
                '>

                New Dealership Enquiry Received

            </h2>


            <table
                border='1'
                cellspacing='0'
                cellpadding='10'
                width='100%'
                style='
                    border-collapse:collapse;
                    border-color:#dddddd;
                '>


                <tr>

                    <td
                        width='40%'
                        style='background:#f7f7f7;'>

                        <strong>
                            Company / Firm Name
                        </strong>

                    </td>

                    <td>
                        {$company_name_safe}
                    </td>

                </tr>


                <tr>

                    <td
                        style='background:#f7f7f7;'>

                        <strong>
                            Office Address
                        </strong>

                    </td>

                    <td>
                        {$office_address_safe}
                    </td>

                </tr>


                <tr>

                    <td
                        style='background:#f7f7f7;'>

                        <strong>
                            City
                        </strong>

                    </td>

                    <td>
                        {$city_safe}
                    </td>

                </tr>


                <tr>

                    <td
                        style='background:#f7f7f7;'>

                        <strong>
                            State
                        </strong>

                    </td>

                    <td>
                        {$state_safe}
                    </td>

                </tr>


                <tr>

                    <td
                        style='background:#f7f7f7;'>

                        <strong>
                            Annual Turnover
                        </strong>

                    </td>

                    <td>
                        {$annual_turnover_safe}
                    </td>

                </tr>


                <tr>

                    <td
                        style='background:#f7f7f7;'>

                        <strong>
                            Mobile Number
                        </strong>

                    </td>

                    <td>
                        {$mobile_number_safe}
                    </td>

                </tr>


                <tr>

                    <td
                        style='background:#f7f7f7;'>

                        <strong>
                            Email ID
                        </strong>

                    </td>

                    <td>
                        {$email_safe}
                    </td>

                </tr>


                <tr>

                    <td
                        style='background:#f7f7f7;'>

                        <strong>
                            City / District Applied For
                        </strong>

                    </td>

                    <td>
                        {$applied_city_district_safe}
                    </td>

                </tr>


                <tr>

                    <td
                        style='background:#f7f7f7;'>

                        <strong>
                            Years of Industrial Experience
                        </strong>

                    </td>

                    <td>
                        {$industrial_experience_safe} Years
                    </td>

                </tr>


                <tr>

                    <td
                        style='background:#f7f7f7;'>

                        <strong>
                            Products Currently Dealing In
                        </strong>

                    </td>

                    <td>
                        {$products_dealing_safe}
                    </td>

                </tr>


                


            </table>


            <br>


            <p>

                <strong>
                    Submitted from:
                </strong>

                <a
                    href='https://www.globepump.com'
                    target='_blank'>

                    www.globepump.com

                </a>

            </p>


        </div>

    </body>

    </html>
    ";


    /* ========================================
       EMAIL HEADERS
    ======================================== */

    $headers  = "MIME-Version: 1.0\r\n";

    $headers .= "Content-type: text/html; charset=UTF-8\r\n";

    $headers .=
        "From: Globe Pump Website <inquiry@globeseal.com>\r\n";

    $headers .=
        "Reply-To: " . $email . "\r\n";

    $headers .=
        "Bcc: " . $bcc . "\r\n";


    /* ========================================
       SEND MAIL
    ======================================== */

    if (mail(
        $to,
        $subject,
        $email_message,
        $headers
    )) {

        header("Location: thank-you.php");

        exit();

    } else {

        echo "
        <h3 style='
            color:red;
            text-align:center;
            margin-top:50px;
            font-family:Arial,sans-serif;
        '>

            Sorry! Something went wrong.
            Please try again later.

        </h3>";

    }


} else {

    echo "
    <h3 style='
        color:red;
        text-align:center;
        margin-top:50px;
        font-family:Arial,sans-serif;
    '>

        Invalid request method.

    </h3>";

}

?>
