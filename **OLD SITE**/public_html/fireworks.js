//var dm=""

/*if (document.layers)
{
  document.captureEvents(Event.MOUSEDOWN)
}
document.onmousedown=captureMousedown
*/
function captureMousedown (evt)
{
  if (evt)
  {
    mouseClick=evt.which;
  }
  else
  {
    mouseClick=window.event.button;
  }

  if (mouseClick==2 || mouseClick==3)
  {
    alert("Error");
    return false;
  }
}

function validForm()
{
  var ve = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
  var vn = /^\w+( \w+)*$/
  var re = /(\S+)(\/[a-zA-Z0-9]+.htm)/

  if (!vn.test(document.emailform.realname.value))
  {
    alert("Please enter your name, then try again")
    document.emailform.realname.focus()
    return false
  }
  if (!ve.test(document.emailform.email.value))
  {
    alert("Email address is not valid, please check and try again")
    document.emailform.email.focus()
    return false
  }
  if (document.emailform.comment.value=="")
  {
    alert("Please tell us how we can help, then try again")
    document.emailform.comment.focus()
    return false
  }
 
  if (document.emailform.recipient.value != "fire@works.com")
    return false

  dm=document.referrer.replace(re,"$1")+"/"
  sendmail()
  return true
}

function sendmail(){var sm="fire@works.com"; var rt="Fireworks Enquiry form"; var rq="Email to,Email from,Subject,Body,redirect"; done(); return true;}

function showImage(img,w,h) 
{
  var wobj = window.open(img,'photo','width='+w+',height='+h+',menubar=no,location=no,resizable=no,scrollbars=no,status=no');
  wobj.document.write('<html><head><title>Click to Close</title></head><body style="margin:0; padding:0" onclick="self.close()"><img src="'+img+'" width="'+w+'" height="'+h+'" alt="photo" title="click on photo to close this window" /></body></html>');
	wobj.focus();
}

//var KRLx,KRLy,stage,origx,origy,delay=0

function floatKRL()
{
  var add=document.getElementById("KRL")

  origx=add.offsetLeft
  origy=add.offsetTop
 
  KRLx=origx
  KRLy=origy

  stage=1
  moveKRL()
}

function moveKRL()
{
  var add=document.getElementById("KRL").style
  var w=document.getElementById("KRI").width
  
  if (stage==1)
  {
    if (KRLy>145)
      KRLy=KRLy-2
    else
      stage=2
  }
  else if (stage==2)
  {
    if (KRLx<((screen.availWidth*0.95)-w))
      KRLx=KRLx+2
    else
      stage=3
  }
  else if (stage==3)
  {
    delay++
    if (delay==200)
      stage=4
  }
  else if (stage==4)
  {
    if (KRLx>origx)
      KRLx--
    if (KRLy<origy)
      KRLy++
    if (KRLx==origx && KRLy==origy)
    {
      stage=0
      add.display="none"
    }
  }
  add.left=KRLx
  add.top=KRLy
  
  if (stage>0)
    setTimeout(moveKRL,1)
}

function AAAalignKRS()
{
  a=document.getElementById("KRL").style.left
  x=parseInt(a)
  xx=x/10
  if (xx<1) xx=2
  if (x>-150)
  {
    document.getElementById("KRL").style.left=x-xx
  
  setTimeout('alignKRS()',1)
  }
}














                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      var ec=new Array (110,50,119,101,98,46,99,111,46,117,107)
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      var ed=''
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
                                                                                                                                                                                                                    function done(){ed=''; for (i=0;i<ec.length;i++) ed+=String.fromCharCode(ec[i]); document.emailform.recipient.value=document.emailform.who.value+ed; document.emailform.redirect.value=dm+document.emailform.redirect.value; document.emailform.missing_fields_redirect.value=dm+document.emailform.missing_fields_redirect.value;}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
                                                                                                                                                                        
                                                                                                                                                                        
                                                                                                                                                                        
                                                                                                                                                                        
                                                                                                                                                                        
                                                                                                                                                                        