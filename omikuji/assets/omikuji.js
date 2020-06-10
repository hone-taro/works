var omikujiResult = [
  "大吉",
  "吉",
  "中吉",
  "小吉",
  "凶" 
];

$(function() {
  $('#omikujiBtn').click(function() {
    var btn = $(this);
    btn.prop('disabled', true);
    $('#omikujiImg').addClass('buruburu');
    setTimeout(function() {
      $('#omikujiImg').removeClass('buruburu');
    }, 500);
    setTimeout(function() {
      $('#omikujiImg').addClass('rotate');
    }, 1000);
    setTimeout(function() {
      $('#omikujiImg').hide();
      $('#omikujiImg1').show().addClass('rotate');
    }, 2000);
    setTimeout(function() {
      var result = omikujiResult[Math.floor( Math.random() * omikujiResult.length)];
      $('#omikujiResult').html('<div class="omikujiResultInner">' + result + '</div>');
    }, 3500);
    setTimeout(function() {
      $('#omikujiResult').html(
        '<img id="omikujiImg" src="assets/img/omikuji1.png">' +
        '<img id="omikujiImg1" src="assets/img/omikuji.png">'
        );
      btn.prop('disabled', false);
    }, 6500);
  });
});