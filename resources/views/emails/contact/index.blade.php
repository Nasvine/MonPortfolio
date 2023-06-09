<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon PortFolio</title>
</head>
<body>
    <!-- Hero Start -->
    <div style="margin-top: 50px;">
        <table cellpadding="0" cellspacing="0" style="font-family: Nunito, sans-serif; font-size: 15px; font-weight: 400; max-width: 600px; border: none; margin: 0 auto; border-radius: 6px; overflow: hidden; background-color: #fff; box-shadow: 0 0 3px rgba(60, 72, 88, 0.15);">
            <thead>
                <tr style="background-color: #2f55d4; padding: 3px 0; border: none; line-height: 68px; text-align: center; color: #fff; font-size: 24px; letter-spacing: 1px;">
                    <th scope="col"><img src="" height="24" alt="">PortFolio</th>
                </tr>
                
            </thead>

            <tbody>
                <tr style="background-color: #7a7b7c; padding: 3px 0; border: none; line-height: 68px; text-align: center; color: #fff; font-size: 24px; letter-spacing: 1px;">
                    <th scope="col"><img src="images/logo-light.png" height="24" alt="">{{ $mailContact['title'] }}</th>
                </tr>
                <tr>
                    <td style="padding: 48px 24px 0; color: #161c2d; font-size: 14px; font-weight: 60;">
                        Hello, Vous avez un email de la part de <b> {{ $mailContact['nom'] }} {{ $mailContact['prenom'] }}</b>.
                    </td>
                </tr>
                <tr>
                    <td style="padding: 15px 24px 15px; color: #8492a6;">
                        <b>Informations</b>
                        <p>Email: {{ $mailContact['email'] }}</p>
                        <p>Objet: {{ $mailContact['objet'] }}</p>
                        <p>Message: {{ $mailContact['message'] }}</p>
                    </td>
                </tr>

                <tr>
                    <td style="padding: 16px 8px; color: #8492a6; background-color: #f8f9fc; text-align: center;">
                        © <script>document.write(new Date().getFullYear())</script> <b>Vine Portfolio</b>.
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Hero End -->
</body>
</html>