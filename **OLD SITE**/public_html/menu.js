var dm="http://www.ascotfireworks.org.uk/"

function menu(item)
{
  document.write('<table width="100%">')
  if (item==1)
    document.write('<tr><td class="current">Home</td></tr>')
  else
    document.write('<tr><td><a class="menu" href="/">Home</a></td></tr>')

  if (item==2)
    document.write('<tr><td class="current">Details</td></tr>')
  else
    document.write('<tr><td><a class="menu" href="details">Details</a></td></tr>')
  
  if (item==3)
    document.write('<tr><td class="current">Directions</td></tr>')
  else
    document.write('<tr><td><a class="menu" href="directions">Directions</a></td></tr>')
  
  if (item==4)
    document.write('<tr><td class="current">News</td></tr>')
  else
    document.write('<tr><td><a class="menu" href="news">News</a></td></tr>')
  
  if (item==5)
    document.write('<tr><td class="current">Pictures</td></tr>')
  else
    document.write('<tr><td><a class="menu" href="pictures">Pictures</a></td></tr>')
  
  if (item==6)
    document.write('<tr><td class="current">Refreshments</td></tr>')
  else
    document.write('<tr><td><a class="menu" href="refreshments">Refreshments</a></td></tr>')
  
  if (item==7)
    document.write('<tr><td class="current">Attractions</td></tr>')
  else
    document.write('<tr><td><a class="menu" href="attractions">Attractions</a></td></tr>')
  
  if (item==8)
    document.write('<tr><td class="current">Safety</td></tr>')
  else
    document.write('<tr><td><a class="menu" href="safety">Safety</a></td></tr>')
  
  if (item==9)
    document.write('<tr><td class="current">Tips &amp; Answers</td></tr>')
  else
    document.write('<tr><td><a class="menu" href="tips">Tips &amp; Answers</a></td></tr>')
  
  if (item==10)
    document.write('<tr><td class="current">Special Needs</td></tr>')
  else
    document.write('<tr><td><a class="menu" href="special">Special Needs</a></td></tr>')
  
  document.write('<tr><td>&nbsp;</td></tr>')
  
  if (item==11)
    document.write('<tr><td class="current">Sponsors</td></tr>')
  else
    document.write('<tr><td><a class="menu" href="sponsors">Sponsors</a></td></tr>')
  
  if (item==12)
    document.write('<tr><td class="current">Community</td></tr>')
  else
    document.write('<tr><td><a class="menu" href="community">Community</a></td></tr>')
  
  if (item==13)
    document.write('<tr><td class="current">Contact Us</td></tr>')
  else
    document.write('<tr><td><a class="menu" href="contact">Contact Us</a></td></tr>')
  
  document.write('<tr><td>&nbsp;</td></tr>')          
 /* document.write('<tr><td><a href="http://validator.w3.org/check?uri=referer"><img src="http://www.w3.org/Icons/valid-html401" alt="Valid HTML 4.01 Transitional"></a></td></tr>')  */
 /* document.write('<tr><td><a href="http://jigsaw.w3.org/css-validator/"><img src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!"></a></td></tr>')  */
  document.write('</table>')
 
}