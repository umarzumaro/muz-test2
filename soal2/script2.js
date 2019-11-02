// console.log('bismillahirohmanirohim');

function is_name_valid(nama) {

    // changed to lowercase
    let toLower = nama.toLowerCase();

    if (nama.length >= 5 && nama == toLower) {
        return true;
    }
    return false;

}


/** soal2 ***********/
function is_password_valid(password) {

    // changed password to uppercase
    // var uppercaseRe = /[A-Z]/g;

    let toLower = password.toUpperCase();

    // password must be a number
    var numberRe = /[0-9]/g;
    // let numb = '';
    // const angka = [1, 2, 3, 4, 5, 6, 7, 8, 9]
    // const something = password.includes(6);
    // let numb = numberRe.test(password);

    // character uniq
    var specialRe = /[@&]/g;


    if (numberRe.test(password)
        && specialRe.test(password)
        && password == toLower) {
        return true;
    }


    return false;
}




console.log(is_name_valid('febria'));
console.log(is_password_valid('12@PASS'));
console.log(is_password_valid('12&PASS'));
console.log(is_password_valid('123@Agan'));









/**
 *
    if (numberRe.test(password)
        && specialRe.test(password)
        && uppercaseRe.test(password)) {
        return true;
    }
 */









// function is_username_valid(nama) {


//     // mengubah huruf A sampai Z menjadi kapital
//     let uppercaseRe = /[A-Z]/g;


//     if (nama.length >= 3 && uppercaseRe.test(nama)) {
//         return true;
//     }
//     return false;

// }
// console.log(is_username_valid('TIARA') ? 'benar' : 'salah'); // benar



// function is_age_valid(age) {

//     var strInt = String(age);
//     console.log(strInt.length)

//     if (strInt > 2) {
//         return false;
//     }
//     return true;

// }

// console.log(is_age_valid(0))


// function is_password_valid(password) {
//     // huruf keci a sampai z
//     var lowercaseRe = /[a-z]/g;

//     // huruf besar A sampai Z
//     var uppercaseRe = /[A-Z]/g;

//     // angka dari 0 sampai 9
//     var numberRe = /[0-9]/g;

//     // karater unik _@#$ atau %
//     var specialRe = /[_@#$%]/g;

//     if (password.length == 8
//         && lowercaseRe.test(password)
//         && uppercaseRe.test(password)
//         && numberRe.test(password)
//         && specialRe.test(password)) {
//         return true;
//     }

//     return false;
// }

// console.log(is_password_valid('qazW_123') ? 'benar' : 'salah'); // benar
