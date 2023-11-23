<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Link Tree</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <style>
      @media(max-width:768px){
      .container {
          width: 100% !important;
          margin-top: 0px !important;
          height: 100vh !important;
        }
    }
    .container {
      width: 375px;
      height: 667px;
      background-image: url("frontend/assets/frontend/images/BG.png");
      margin-top: 100px;
      background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; 
    }

    .btn-box {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    button {
      width: 266px;
      height: 51px;
      border-radius: 30px !important;
      filter: drop-shadow(0px 3px 3px rgba(0, 0, 0, 0.27));
      background: #ffffff;
      margin: 11px;
      display: flex !important;
      flex-direction: row !important;
      align-items: center;
    }

    button p {
      font-family: "Poppins";
      font-size: 17px;
      font-weight: normal;
      line-height: 21px;
      font-style: normal;
      text-align: center;
      color: #27aae1;
      margin: 0px;
    }

    .text {
      font-family: 'Poppins';
      font-size: 15px;
      font-weight: normal;
      line-height: 18px;
      font-style: normal;
      text-align: center;
      color: #ffffff;
      margin-bottom: 20px;
      margin-top: 20px !important;
    }

    .logo {
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 132px;
      padding-top: 90px;
      padding-bottom: 17px;
    }
    a{
      text-decoration: none !important;
    }
  </style>


</head>

<body>
<main>

  <div class="container">

    <a href="https://yourdigitalresellers.com/" target="_blank">
        <img src="{{URL::asset('frontend/assets/frontend/images/Logo.png')}}" class="logo">
    </a>
    <p class="text">Scaling Digital Agencies, <br> Sustainably!</p>

    <div class="btn-box">

       <a href="https://yourdigitalresellers.com/" target="_blank">
        <button type="button" class="btn btn-light">
          <img src="{{URL::asset('frontend/assets/frontend/images/Home.png')}}" style="margin-left:52px; margin-right: 15px;">
          <p>Home Page</p>
        </button>
      </a>

      <a href="https://yourdigitalresellers.com/" target="_blank">
        <button type="button" class="btn btn-light">
          <img src="{{URL::asset('frontend/assets/frontend/images/Case Studies.png')}}" style="margin-left:52px; margin-right: 12px;">
          <p>Case Studies</p>
        </button>
      </a>

      <a href="https://yourdigitalresellers.com/services" target="_blank">
        <button type="button" class="btn btn-light">
          <img src="{{URL::asset('frontend/assets/frontend/images/Services.png')}}" style="margin-left:52px; margin-right: 25px;">
          <p>Services</p>
        </button>
      </a>

      <a href="https://wa.me/923020123888" target="_blank">
        <button type="button" class="btn btn-light">
          <img src="{{URL::asset('frontend/assets/frontend/images/whatsapp icon.png')}}" style="margin-left:52px; margin-right: 20px;">
          <p>WhatsApp</p>
        </button>
      </a>

    </div>

    <p class="text">Unmask the power of <br> White Label Digital Marketing</p>
  </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
