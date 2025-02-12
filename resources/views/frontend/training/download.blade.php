<html>
<head>
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <!--<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:wght@100;400;700&display=swap" rel="stylesheet">-->

    <style>
        <!--
        /* Font Definitions */
        @font-face
        {font-family:"Cambria Math";
            panose-1:2 4 5 3 5 4 6 3 2 4;}
        @font-face
        {font-family:Calibri;
            panose-1:2 15 5 2 2 2 4 3 2 4;}
        /* Style Definitions */
        p.MsoNormal, li.MsoNormal, div.MsoNormal
        {margin-top:0in;
            margin-right:0in;
            margin-bottom:8.0pt;
            margin-left:0in;
            line-height:107%;
            font-size:11.0pt;
            font-family:"Calibri",sans-serif;}
        .MsoChpDefault
        {font-family:"Calibri",sans-serif;}
        .MsoPapDefault
        {margin-bottom:8.0pt;
            line-height:107%;}
        @page WordSection1
        {size:841.9pt 595.3pt;
            margin:0in 0in 0in 0in;}
        div.WordSection1
        {page:WordSection1;}
        .heading1{
            font-family: "Great Vibes";
            font-size: 50px;
            color: #704727;
        }
        .heading2{
            font-family: "Poppins", system-ui;
            font-weight: 700;
            font-size: 14px;
            color: #704727;
        }
        -->
    </style>

</head>

<body lang=EN-US style='word-wrap:break-word'>

<div class=WordSection1>

    <div style="border: 0; width: 750px; text-align: center; position: absolute; float: left; top: 205px; left: 200px;">
        <h1 class="heading1">{{ $participant->name }}</h1>
    </div>
    <div style="border: 0; width: 200px; text-align: left; position: absolute; float: left; bottom: 112px; left: 560px;">
        <h6 class="heading2">{{ $participant->certificate_no }}</h6>
    </div>
    <p class=MsoNormal>
        <img width=1118 height=791 id="Picture 1" src="data:image/png;base64,{{ $logoImage }}">
    </p>

</div>

</body>

</html>
