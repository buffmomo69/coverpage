<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coverpage</title>

  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Times+New+Roman&display=swap" rel="stylesheet">

  <link href="./static/css/paper.css" rel="stylesheet">

  <link src="./static/js/pdf.js">

  <style>
    body {
      font-family: 'Times New Roman', serif;
      margin: 0;
      padding: 0;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: 'Times New Roman', serif;
    }

    #vspace {
      height: 50px;
    }

    @media print {

      .no-print,
      .no-print * {
        display: none !important;
      }
    }
  </style>

  <style>
    @page {
      size: A4
    }
  </style>
</head>



<body class="A4">

  <section class="sheet padding-20mm" id="sheet">

    <div class="container mx-auto text-center mt-4">
      <img src="./static/images/reliance.png" alt="Reliance College" class="w-40 mx-auto">
      <div class="mt-8">
        <h1 class="text-4xl font-bold">RELIANCE COLLEGE</h1>
        <h2 class="text-lg font-bold">Chabahil, Kathmandu</h2>
        <p>[Affiliated to TU]</p>
      </div>
      <div class="flex justify-center items-center mt-8">
        <!-- Replace the CSS-generated lines with the "middlelines.png" image -->
        <img src="./static/images/lines.svg" alt="Middle Lines" class="mx-auto" width="" height="">
      </div>

      <div id="vspace"></div>

      <div class="mt-8">
        <h3 class="text-2xl">Lab Reports of</h3>
        <h4 class="text-xl font-bold">
          <?= $_GET['subject'] ?>
        </h4>
      </div>

      <div id="vspace"></div>

      <div class="grid grid-cols-2 gap-x-8 mt-16">
        <div class="text-left">
          <p class="font-bold">Submitted By:</p>
          <p>Name:
            <?= $_GET['name'] ?>
          </p>
          <p>Semester:
            <?= $_GET['semester'] ?>
          </p>
          <p>Program:
            <?= $_GET['program'] ?>
          </p>
          <p>Registration No:
            <?= $_GET['registernumber'] ?>
          </p>
        </div>
        <div class="text-right">
          <p class="font-bold">Submitted To:</p>
          <p>
            <?= $_GET['teachersname'] ?>
          </p>
          <p>Lecturer/Faculty Member</p>
          <p>
            <?= $_GET['department'] ?> Department
          </p>
        </div>
      </div>
    </div>
  </section>


  <script>
    document.getElementById('copyLinkButton').addEventListener('click', function () {
      const currentUrl = window.location.href;

      const tempInput = document.createElement('input');
      tempInput.value = currentUrl;
      document.body.appendChild(tempInput);
      tempInput.select();
      document.execCommand('copy');
      document.body.removeChild(tempInput);

      alert('Link copied to clipboard!');
    });
  </script>

</body>

</html>