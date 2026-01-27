
/* vim: set foldmethod=marker fmr=/*\—,///: */

/*:::::::::::::::::::::::::::::::::::::::: initialization */

let emailAddress = 'seurviuce@gueneratorduata.co'
let deleteChar   = 'u'
let tldOld       = '.co'
let tldNew       = '.net'
let genericBody = `Thanks for your interest.

Please give as much information as possible.`


/*:::::::::::::::::::::::::::::::::::::::: email */

/*———————————————————————————————————————— alertMail() */

function alertmail(){
  alert(emailAddress.replaceAll(deleteChar,'').replace('.co',tldNew))
}
///
/*———————————————————————————————————————— sendMail(emailSubject, emailBody) */

function sendmail(){
  let obj = document.querySelector('h1.entry-title')
  emailSubject = obj.innerHTML

  let str = 'mailto:' + emailAddress.replaceAll(deleteChar,'').replace(tldOld,tldNew)
  str    += '?subject=' + emailSubject + '&body=' + encodeURIComponent(genericBody)

  location.href = str
}
///

/*:::::::::::::::::::::::::::::::::::::::: fin */

