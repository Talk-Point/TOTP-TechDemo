  $(document).ready(function() {
    var string = $("#qrstring").attr('href');
    $("#qrstring").text('');
    $('#qrcontainer').qrcode({
      "width": 100,
      "height": 100,
      "color": "#3a3",
      "text": string,
    });
  });

