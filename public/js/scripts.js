/**
 * Created by William on 2016/10/31.
 */

/* ----------------------------------------------------------------------------------------------------------------

 * ON SCROLL EVENTS *

 ----------------------------------------------------------------------------------------------------------------*/

// CHANGE NAV TO BLACK ON SCROLL. ----------------------------
(function scrollNavToGreen() {

    $(window).on('scroll', function () {

        if ( $(document).scrollTop() > 220 ) {

            $('#nav-home').addClass('nav-non-home', 400, 'easeInOutCubic');

        } else {

            $('#nav-home').removeClass('nav-non-home', 400, 'easeInOutCubic');

        }

    });

})();


/* ----------------------------------------------------------------------------------------------------------------

 * FORM VALIDATION *

 ----------------------------------------------------------------------------------------------------------------*/
document.getElementById('name-field').addEventListener('blur', instantNameValidation);
document.getElementById('email-field').addEventListener('blur', instantMailValidation);
document.getElementById('subject-field').addEventListener('blur', instantSubjectValidation);
document.getElementById('msg-field').addEventListener('blur', instantMsgValidation);

function instantNameValidation() {

    // INPUT FIELDS
    var name = document.getElementById('name-field').value;
    // WARNING MESSAGE
    var nameWarning = document.getElementById('name-warning');
    // WARNING MESSAGES
    var nameWarningMsg = "Name is required.";

    if (this.value === '') {

        nameWarning.innerHTML = nameWarningMsg;
        this.focus();


    } else {

        nameWarning.innerHTML = '';

    }

}

function instantMailValidation() {

    var email = document.getElementById('email-field').value;
    var emailWarning = document.getElementById('email-warning');
    var emailWarningMsg = "Email is required.";

    if (this.value === '') {

        emailWarning.innerHTML = emailWarningMsg;
        this.focus();


    } else {

        emailWarning.innerHTML = '';

    }

}

function instantSubjectValidation() {

    var subject = document.getElementById('subject-field').value;
    var subjectWarning = document.getElementById('subject-warning');
    var subjectarningMsg = "Subject is required.";

    if (this.value === '') {

        subjectWarning.innerHTML = subjectWarningMsg;
        this.focus();


    } else {

        subjectWarning.innerHTML = '';

    }

}

function instantMsgValidation() {

    var msgWarning = document.getElementById('msg-warning');
    var msgWarningMsg = "Message is required.";

    if (this.value === '') {

        msgWarning.innerHTML = msgWarningMsg;
        this.focus();


    } else {

        msgWarning.innerHTML = '';

    }


}

function FormValidation() {

    // INPUT FIELDS
    var name = document.getElementById('name-field').value;
    var email = document.getElementById('email-field').value;
    var subject = document.getElementById('subject-field').value;
    var msg = document.getElementById('msg-field').value;

    // WARNING MESSAGE ELEMENTS
    var nameWarning = document.getElementById('name-warning');
    var emailWarning = document.getElementById('email-warning');
    var msgWarning = document.getElementById('msg-warning');
    var subjectWarning = document.getElementById('subject-warning');

    // WARNING MESSAGES
    var nameWarningMsg = "Name is required.";
    var emailWarningMsg = "Email is required.";
    var msgWarningMsg = "Message is required.";
    var subjectWarningMsg = "Subject is required.";

    if(name === '' || email === '' || msg === '' || subject === '') {

        if (name === '') {

            nameWarning.innerHTML = nameWarningMsg;
            document.getElementById('name-field').focus();


        } else {

            nameWarning.innerHTML = '';

        }


        if (email === '') {

            emailWarning.innerHTML = emailWarningMsg;
            document.getElementById('email-field').focus()

        } else {

            emailWarning.innerHTML = '';

        }


        if (subject === '') {

            subjectWarning.innerHTML = subjectWarningMsg;
            document.getElementById('subject-field').focus()

        } else {

            subjectWarning.innerHTML = '';

        }


        if (msg === '') {

            msgWarning.innerHTML = msgWarningMsg;
            document.getElementById('msg-field').focus();

        } else {

            msgWarning.innerHTML = '';

        }


        return false;


    } else {

        return true;

    }

}