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