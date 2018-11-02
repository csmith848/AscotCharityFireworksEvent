function termsAccept() {
  if (checkbox = document.getElementById("terms_accept").checked) {
    // WHEN LINK IS ACTIVE
    document.getElementById("portal_button").disabled = false;
    document.getElementById("portal_button").style.color = "#ff6c00";
    document.getElementById("portal_button").style.border = "2px solid #ff6c00";
    document.getElementById("portal_button").style["boxShadow"] = "0px 0px 20px rgba(255, 108, 0, 0.75)";
  }
  else {
    // WHEN LINK IS NOT ACTIVE
    document.getElementById("portal_button").disabled = true;
    document.getElementById("portal_button").style.color = "grey";
    document.getElementById("portal_button").style.border = "2px solid grey";
    document.getElementById("portal_button").style["boxShadow"] = "0px 0px 20px grey";
  }
}
function portalClick() {
  if (document.getElementById("terms_accept").checked) {
    window.open('https://tickets.ascot.co.uk/connect/Webpages/EntaWebGateway/gateway.aspx?E=N&QL=P5332|G~/WEBPAGES/ascot/eventprices.aspx' , '_blank')
  } else {
    alert("Please accept the terms above!");
  }
}
