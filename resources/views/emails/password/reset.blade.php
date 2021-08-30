<html>
    <head>
        <style>
            table {
                margin-top: 10px;
            }

            .indent-text {
                text-indent: 20px;
            }

            button a {
                color : white !important;
                text-decoration : none;
                cursor: pointer;
            }

            a {
                color : forestgreen;
                text-decoration : none;
                cursor: pointer;
            }

            .button {
                background-color: #4CAF50;
                border: none;
                color: white !important;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
            }

            .reset-password-button {
                background-color: #f44336;
            }

            .reset-password-button:hover {
                background-color: tomato;
                color: white;
                cursor: pointer;
            }
        </style>
    </head>

    <body>
        <table>
            <tr>
                <td>
                    Dear Sir/Madam,
                </td>
            </tr>
        </table>

        <table>
            <tr>
                <td class="indent-text">
                    You have requested to reset your password for <b><a href="{{ $clientAppUrl }}">DAE Application System</a></b>. Please click the link below to reset your password.
                </td>
            </tr>
        </table>

        <table align="center">
            <tr>
                <td>
                    <a href="{{ $changePasswordUrl }}">
                        <button class="button reset-password-button">
                            Reset Your Password
                        </button>
                    </a>
                </td>
            </tr>
        </table>

        <table>
            <tr>
                <td>
                    If you did not request a password reset, please ignore this email or reply to let us know. This password reset is only valid for the next 30 minutes.
                </td>
            </tr>
        </table>

        <table>
            <tr>
                <td>
                    Thanks,
                </td>
            </tr>
            <tr>
                <td>
                    DAE Team
                </td>
            </tr>
        </table>
    </body>
</html>
