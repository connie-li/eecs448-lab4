const form = document.getElementById("form");
form.onsubmit = checkSubmit;	/* event listener */

/** Checks that form is valid before submitting data to the back-end.  Calls validate to check form validity: if form is valid, do nothing; else stop the form submission.
 *
 */
function checkSubmit(event) {
    let valid = validate();
    if(!valid) {
        event.preventDefault();
    }
}

const alertDirectory = {
    prod1 : "alert1",
    prod2 : "alert2",
    prod3 : "alert3",
    shipping : "alert-ship",
    user : "alert-user",
    pw : "alert-pw"
};

/** Checks all inputs for validity; shows responses to the user if not valid.
 * @return {boolean} true if all inputs are valid, else false.
 */
function validate() {
    let checklist = {
        prod1 : false,
        prod2 : false,
        prod3 : false,
        shipping : false,
        user : false,
        pw : false
    };
    
    checklist.prod1 = checkQuantity("quant-p1");
    checklist.prod2 = checkQuantity("quant-p2");
    checklist.prod3 = checkQuantity("quant-p3");
    checklist.shipping = checkShipping();
    checklist.user = checkUserName();
    checklist.pw = checkPW();
    
    let valid = true;
    
    for(let x in checklist) {
        if(checklist.hasOwnProperty(x)) {
            if(checklist[x] == false) {
                showAlert(alertDirectory[x]);
                valid = false;
            }
			else {
				hideAlert(alertDirectory[x]);
			}
        }
    }
    return(valid);
}

function showAlert(alertID) {
    document.getElementById(alertID).style.display = "inline";
}

function hideAlert(alertID) {
	document.getElementById(alertID).style.display = "none";
}

/** Checks that the given quantity is valid, ie. greater than or equal to 0 and not blank.
 * @param {string} inputName - the name attribute of the input being checked.
 * @return {boolean} true if the quantity is valid, else false.
 */
function checkQuantity(inputName) {
    let quantity = document.getElementById(inputName).value;
    if(quantity < 0 || quantity == "") {
        return false;
    }
    else {
        return true;
    }
}

/** Checks whether the shipping option is valid, ie. an option has been selected.
 * @return {boolean} true if valid, else false.
 */
function checkShipping() {
    return(document.getElementById("form").elements["ship"].value != "");
}

/** Checks whether the username is valid, using the email input's built-in validation.
 * My implementation and use of the matches() function was inspired by https://www.bennadel.com/blog/3476-checking-to-see-if-an-element-has-a-css-pseudo-class-in-javascript.htm (accessed 10-06-2019), though I did not copy their code exactly.
 * @return {boolean} true if the username is valid, else false.
 */
function checkUserName() {
    let user = document.querySelector("#username");
    return(user.matches(":valid"));
}

/** Checks whether the password is valid, ie. not blank.
 * @return {boolean} true if the password is valid, else false.
 */
function checkPW() {
    return(document.getElementById("password").value != "");
}