window.onload = function() {
    const emailSent = window.location.search;
    if (emailSent === '?emailsent')
      showEmailSent();
    else 
      document.getElementById("submit-notification").innerHTML = "";
  };
  
  function showEmailSent(){
    document.getElementById("submit-notification").innerHTML = "Email sent";
    setTimeout(hideEmailSent, 5000);
  }
  
  function hideEmailSent() {
    $("#submit-notification").fadeOut().empty();
    history.pushState(null, "", "index.html");
  }
  
  const tx = document.getElementsByTagName("textarea");
  for (let i = 0; i < tx.length; i++) {
    tx[i].setAttribute("style", "height:" + (tx[i].scrollHeight) + "px;overflow-y:hidden;");
    tx[i].addEventListener("input", OnInput, false);
  }
  
  
  function OnInput() {
    this.style.height = "auto";
    this.style.height = (this.scrollHeight) + "px";
  }
  
  $(document).ready(function(){
    $("a").on('click', function(event) {
      if (this.hash !== "") {
        var $this = $(this),
        $body = $('html, body'),
        target = $($this.attr('href'));
        event.preventDefault();
        $body.animate({ scrollTop: target.offset().top - 50 });
      } // End if
    });
  });
  
  
  const form = document.getElementById('form');
  form.addEventListener('focus', (event) => {
    event.target.style.background = '#E3F2FF';
    document.getElementById("set_form_align").click();
  }, true);
  
  form.addEventListener('blur', (event) => {
    event.target.style.background = '';
  }, true);