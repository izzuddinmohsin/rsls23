<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,
						initial-scale=1.0" />
  <title>QR Code Generator</title>
  <style>
    h1,
    h3 {
      color: green;
    }

    body,
    header {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
  </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js">
  </script>
  <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>

</head>

<body>
  <header>
    <h1>GeeksforGeeks</h1>
    <h3>QR code generator using qrcode.js</h3>
    <h3>Enter QR code content and generate QR</h3>
  </header>
  <main>
    <form action="/" id="qr-generation-form">
      <input type="text" name="qr-code-content" id="qr-content" value="" placeholder="Enter QR content"
        autocomplete="off" />
      <input type="submit" value="Generate QR Code" />
    </form><br />
    <div id="qr-code"></div>
  </main><br>

  <p>test</p><br><br>

  <div id="qrcode"></div>

<script>
    // Generate QR code
    var qrCode = new QRCode(document.getElementById("qrcode"), {
        width: 128,
        height: 128
    });

    var link = "https://example.com"; // Replace with your link

    // Set the value of the QR code
    qrCode.makeCode(link);
</script>

</body>
<script>
  let qrContentInput = document.getElementById("qr-content");
  let qrGenerationForm =
    document.getElementById("qr-generation-form");
  let qrCode;

  function generateQrCode(qrContent) {
    return new QRCode("qr-code", {
      text: qrContent,
      width: 256,
      height: 256,
      colorDark: "#000000",
      colorLight: "#ffffff",
      correctLevel: QRCode.CorrectLevel.H,
    });
  }

  // Event listener for form submit event
  qrGenerationForm.addEventListener("submit", function (event) {
    // Prevent form submission
    event.preventDefault();
    let qrContent = qrContentInput.value;
    if (qrCode == null) {

      // Generate code initially
      qrCode = generateQrCode(qrContent);
    } else {

      // If code already generated then make
      // again using same object
      qrCode.makeCode(qrContent);
    }
  });
</script>

</html>