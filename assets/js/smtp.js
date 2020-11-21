function sendEmail() {
      var email=document.getElementById("usr_email");
      var subject=document.getElementById("usr_subject");
      var name=document.getElementById("usr_name");
      let msg=document.getElementById("usr_message");
      msg = msg+'\n\v From -'+name;
      Email.send({
            SecureToken : "656df326-7935-4ec2-80fb-01ce1d65fd4b",
            To : 'sanjeev.chauhan@iic.ac.in',
            From : email,
            Subject : subject,
            Body : msg
        }).then(
          message => alert(message)
        );


            /* SmtpJS.com - v3.0.0 */
            var Email = {
                send: function (a) {
                    return new Promise(function (n, e) {
                        a.nocache = Math.floor(1e6 * Math.random() + 1), a.Action = "Send";
                        var t = JSON.stringify(a);
                        Email.ajaxPost("https://smtpjs.com/v3/smtpjs.aspx?", t, function (e) {
                            n(e)
                        })
                    })
                },
                ajaxPost: function (e, n, t) {
                    var a = Email.createCORSRequest("POST", e);
                    a.setRequestHeader("Content-type", "application/x-www-form-urlencoded"), a.onload = function () {
                        var e = a.responseText;
                        null != t && t(e)
                    }, a.send(n)
                },
                ajax: function (e, n) {
                    var t = Email.createCORSRequest("GET", e);
                    t.onload = function () {
                        var e = t.responseText;
                        null != n && n(e)
                    }, t.send()
                },
                createCORSRequest: function (e, n) {
                    var t = new XMLHttpRequest;
                    return "withCredentials" in t ? t.open(e, n, !0) : "undefined" != typeof XDomainRequest ? (t = new XDomainRequest).open(e, n) : t = null, t
                }
            };
