/** Check that the given quantity is valid, ie. greater than or equal to 0 and not blank.
 * @param {string} inputName - the name attribute of the input being checked.
 * @return {boolean} true if the quantity is valid, else false.
 */
function checkQuantity(inputName) {
    let quantity = document.getElementById("products").elements[inputName].value;
    if(quantity < 0 || quantity == "") {
        return false;
    }
    else {
        return true;
    }
}

/** Check whether the username is valid, using the email input's built-in validation.
 * My implementation and use of the matches() function was inspired by https://www.bennadel.com/blog/3476-checking-to-see-if-an-element-has-a-css-pseudo-class-in-javascript.htm (accessed 10-06-2019), though I did not copy their code exactly.
 * @return true if the username is valid, else false.
 */
function checkUserName() {
    let user = document.querySelector("#username");
    return(user.matches(":valid"));
}